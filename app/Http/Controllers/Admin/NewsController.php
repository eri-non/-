<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    
    public function add()
    {
        return view('admin.news.create');
    }

    public function create()
    {
        return redirect('admin/news/create');
    }

    public function edit()
    {
        return view('admin.news.edit');
    }

    public function update()
    {
        return redirect('admin/news/edit');
    }
    
}
