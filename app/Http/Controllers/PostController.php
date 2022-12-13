<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Controllers\HomeController;
use Illuminate\Http\Response;
class PostController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:2', 'max:45'],
            'company' => 'required',
            'salaryExpectation' => 'required',
            'location' => 'required',
            'contract' => 'required',
            'description' => ['required', 'min:2', 'max:5000'],
          ]);

          $post = new Post();
          $post->title = $request->input('title');
          $post->company = $request->input('company');
          $post->salaryExpectation = $request->input('salaryExpectation');
          $post->location = $request->input('location');
          $post->contract = $request->input('contract');
          $post->description = $request->input('description');

          $post->save();

        
            return redirect()
            ->route('posts.create')
            ->with('success', 'Parabéns! Sua vaga foi postada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('posts.show', [
            'post' => Post::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
