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

    public function freeagents(Request $request) {
        $curriculums = Curriculum::latest('id');

        if ($request->has("query")) {
            $curriculums->where('fname', 'like', '%' . $request->input("query") . '%')
                ->orWhere('lname', 'like', '%' . $request->input("query") . '%')
                ->orWhere('city', 'like', '%' . $request->input("query") . '%')
                ->orWhere('state', 'like', '%' . $request->input("query") . '%')
                ->orWhere('country', 'like', '%' . $request->input("query") . '%')
                ->orWhere('job', 'like', '%' . $request->input("query") . '%');
        }

        return view('freeagents', ['curriculums' => $curriculums->paginate(10)]);
    }

    public function curriculum() {

        return view('curriculums.curriculum');
    }

    public function createJob(){
        return view('posts.create');
    }

    public function cursos(Request $request) {

        $posts = Post::latest('id');

        if ($request->has("query")) {
            $posts->where('title', 'like', '%' . $request->input("query") . '%')
                ->orWhere('company', 'like', '%' . $request->input("query") . '%')
                ->orWhere('location', 'like', '%' . $request->input("query") . '%')
                ->orWhere('contract', 'like', '%' . $request->input("query") . '%')
                ->orWhere('salaryExpectation', 'like', '%' . $request->input("query") . '%');
        }

        return view('cursos', ['posts' => $posts->paginate(10)]);
    }
}