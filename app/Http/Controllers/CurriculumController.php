<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curriculums.curriculum');
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
            'job' => ['required', 'min:2', 'max:45'],
            'fname' => ['required', 'string', 'max:20'],
            'lname' => ['required', 'string', 'max:20'],
            'emailforcontact' => ['required', 'email', 'max:100'],
            'zip' => '',
            'twitter' => '',
            'instagram' => '',
            'country' => ['required', 'string', 'max:20'],
            'state' => ['required', 'string', 'max:20'],
            'city' => ['required', 'string', 'max:20'],
            'linkedin' => ['required', 'max:50'],
            'description' => ['required', 'max:500'],
          ]);

          $curriculum = new Curriculum();
          $curriculum->job = $request->input('job');
          $curriculum->fname = $request->input('fname');
          $curriculum->lname = $request->input('lname');
          $curriculum->emailforcontact = $request->input('emailforcontact');
          $curriculum->zip = $request->input('zip');
          $curriculum->twitter = $request->input('twitter');
          $curriculum->instagram = $request->input('instagram');
          $curriculum->country = $request->input('country');
          $curriculum->state = $request->input('state');
          $curriculum->city = $request->input('city');
          $curriculum->linkedin = $request->input('linkedin');
          $curriculum->description = $request->input('description');
          $curriculum->save();
        
            return redirect()
            ->route('curriculum')
            ->with('success', 'Congratulations! Your curriculum has been posted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('curriculums.show', [
            'curriculum' => Curriculum::findOrFail($id),
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
