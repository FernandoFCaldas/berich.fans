<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Models\Curriculum;
use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    public function home() {

        return view('home');
    }

    public function freeagents() {
        $curriculums = Curriculum::latest('id')->paginate(10);
        return view('freeagents', ['curriculums' => $curriculums]);
    }

    public function curriculum() {

        return view('curriculums.curriculum');
    }

    public function cursos() {
        $posts = Post::latest('id')->paginate(10);
        return view('cursos', ['posts' => $posts]);
    }
}