<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeoController extends Controller
{
    private $data = [
        'title' => 'SEO'
    ];
    protected function getSeo(){
        return DB::table('seo')->get();
    }
    public function get($id = null){
        $data = array_merge($this->data,[
            'seo' => $this->getSeo(),
        ]);
        return view('back.pages.seo.get.index', $data);
    }
    public function postIndex(){
        $data = array_merge($this->data,[

        ]);
        return view('back.pages.seo.post.index',$data);
    }
    public function post(Request $request){
        DB::table('seo')
            ->insert([
                'url' => $request['url'],
                'title' => $request['title'],
                'description' => $request['description'],
                'keywords' => $request['keywords'],
                'img' => '',
            ]);
        return redirect()->route('back-seo-get');
    }
    public function updateIndex($id,Request $request){
        $seo = DB::table('seo')
            ->where('id', $id)
            ->get();
        $name = '';
        foreach ($seo as $s){
            $name = $s->title;
        }
        $data = array_merge($this->data,[
            'title' => 'SEO',
            'name' => $name,
            'seo' => $seo,
            'id' => $id
        ]);
        return view('back.pages.seo.update.index',$data);
    }
    public function update($id,Request $request){
        DB::table('seo')
            ->where('id', $id)
            ->update([
                'url' => $request['url'],
                'title' => $request['title'],
                'description' => $request['description'],
                'keywords' => $request['keywords'],
                'img' => '',
            ]);
        return redirect()->route('back-seo-get');
    }

    public function delete($id){
        DB::table('seo')
            ->where('id', $id)
            ->delete();
        return redirect()->route('back-seo-get');
    }
}
