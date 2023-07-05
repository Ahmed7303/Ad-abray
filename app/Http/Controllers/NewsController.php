<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsCategory;
use App\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {

        $categories = NewsCategory::localize()->get();

        $news = News::localize()->paginate(6);
        
        $data = [
            'categories'   => $categories,
            'news'   => $news,
        ];

        return view('blog_classic')->with($data);

    }

    public function news_by_category($id)
    {

        $categories = NewsCategory::localize()->get();

        $news = News::localizeByCategory($id)->paginate(6);
        
        
        $data = [
            'categories'   => $categories,
            'news'   => $news,
        ];

        // return $data;

        return view('news')->with($data);

    }


}
