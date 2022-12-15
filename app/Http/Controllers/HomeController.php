<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    public function home() {

        return view('home');
    }

    public function contactus() {

        return view('formMail.contactus');
    }

    public function recruiter() {

        return view('formRecruiter.recruiter');
    }

    public function freeagents() {
        
        $curriculums = Curriculum::latest('id')->paginate(10);

        return view('freeagents', ['curriculums' => $curriculums]);
    }

    public function curriculum() {

        return view('curriculums.curriculum');
    }

    public function createJob(){
        return view('posts.create');
    }

    public function cursos() {

        $posts = Post::latest('id')->paginate(10);

        return view('cursos', ['posts' => $posts]);
    }
}