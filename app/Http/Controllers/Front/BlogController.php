<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogLikes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    private int $perPage = 6;
    public function index()
    {

        return [
            'blog' => DB::table('blog')
                ->orderByDesc('created_at')
                ->paginate($this->perPage),
            'blog_likes' => BlogLikes::all()
                ->where('user_id',Auth::id()),
        ];
    }
    public function article($id)
    {
        return [
            'blog' => Blog::all()
                    ->where('id',$id),
            'blog_likes' => BlogLikes::all()
                    ->where('user_id',Auth::id()),
            ];
    }
    public function likes($id)
    {
        if(Auth::user()){
            $user_id = Auth::id();
            $blogLikes = BlogLikes::all()
                ->where('user_id',Auth::id())
                ->where('blog_id', $id);
            if(empty($blogLikes)){
                DB::table('blog_likes')
                    ->insert([
                        'user_id' => $user_id,
                        'blog_id' => $id
                    ]);
                $likes = Blog::all()
                    ->where('id',$id)
                    ->select('likes');
                $likes = $likes[0]['likes'];
                $likes++;
                Blog::where('id',$id)
                    ->update(['likes' => $likes]);
                return [
                    'message' => 'Ваш голос успешно учтен!',
                    'cmd' => 1
                    ];
            } else {
                DB::table('blog_likes')
                    ->where('user_id',Auth::id())
                    ->where('blog_id', $id)
                    ->delete();
                $likes = Blog::all()
                    ->where('id',$id)
                    ->select('likes');
                $likes = $likes[0]['likes'];
                $likes--;
                Blog::where('id',$id)
                    ->update(['likes' => $likes]);
                return [
                    'message' => 'Вы сняли лайк с этой новости!',
                    'cmd' => 2
                ];
            }
        } else {
            return [
                'message' => 'Для лайка нужно авторизоваться!',
                'cmd' => 0
            ];
        }
    }
    public function comments($id){
        return DB::table('blog_comment')
            ->where('blog_id',number_format($id))
            ->join('users','blog_comment.user_id','=','users.id')
            ->select('users.name','users.email','blog_comment.text','blog_comment.created_at','users.img')
            ->paginate(6);
    }
    public function addComments($id, Request $request){
        return DB::table('blog_comment')
            ->insert([
                'blog_id' => $id,
                'user_id' => $request->input('user_id'),
                'text' => $request->input('text')
            ]);

    }
}
