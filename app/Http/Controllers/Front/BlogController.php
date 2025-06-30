<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogLikes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    private int $perPage = 10;
    public function index(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
         return DB::table('blog')
                ->orderByDesc('created_at')
                ->paginate($this->perPage);
    }
    public function article($id): \Illuminate\Database\Eloquent\Collection
    {

        return Blog::all()
            ->where('id',$id);
    }
    public function likes($id): string
    {
        if(Auth::user()){
            $user_id = Auth::id();
            $blogLikes = BlogLikes::all()
                ->where('user_id',Auth::id())
                ->where('blog_id', $id);
            if(empty($blogLikes)){
                DB::table('blog')
                    ->insert([
                        'user_id' => $user_id,
                        'blog_id' => $id
                    ]);
                $likes = Blog::all()
                    ->where('id',$id)
                    ->select('likes');
                $likes++;
                Blog::where('id',$id)
                    ->update(['likes' => $likes]);
                return 'Ваш голос успешно учтен!';
            } else {
                DB::table('blog')
                    ->where('user_id',Auth::id())
                    ->where('blog_id', $id)
                    ->delete();
                $likes = Blog::all()
                    ->where('id',$id)
                    ->select('likes');
                $likes--;
                Blog::where('id',$id)
                    ->update(['likes' => $likes]);
                return 'Вы сняли лайк с этой новости!';
            }
        } else {
            return 'Для лайка нужно авторизоваться!';
        }
    }
}
