<?php

namespace App\Http\Controllers\Front\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Blog
{
    private int $perpage = 3;
    private int $perpageBlog = 1;
    public function mainGet(Request $request): \Illuminate\Pagination\LengthAwarePaginator
    {
        $count = $request['count'];
        $per_page = $this->perpage + $count;
        return DB::table('blog')->paginate($per_page);
    }
    public function get(): \Illuminate\Pagination\LengthAwarePaginator
    {
        return DB::table('blog')->paginate($this->perpageBlog);
    }
    public function getPage($id): \Illuminate\Pagination\LengthAwarePaginator
    {
        return DB::table('blog')->paginate($this->perpageBlog,['*'],'page' ,$id);
    }
    public function getArticle($id): array
    {
        $data = [
            'blogArticle' => DB::table('blog')->where('id','=',$id)->get(),
            'max' => DB::table('blog')->max('id'),
            'min' => DB::table('blog')->min('id'),
            'nextPage' => DB::table('blog')->where('id','>',$id)->orderBy('id')->take(1)->select('id')->get(),
            'prevPage' => DB::table('blog')->where('id','<',$id)->orderByDesc('id')->take(1)->select('id')->get(),
        ];
        return $data;
    }
}
