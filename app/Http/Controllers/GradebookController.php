<?php

namespace App\Http\Controllers;

use App\Gradebook;
use App\User;
use Illuminate\Http\Request;

class GradebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gradebooks = Gradebook::with('students')->get();
        foreach ($gradebooks as $gradebook) {
            $gradebook->user;
        }

        return $gradebooks;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|unique:movies',
        //     'director' => 'required',
        //     'duration' => 'required|integer|between:1,500',
        //     'relaseDate' => 'required|unique:movies',
        //     'imageUrl' => 'url',
        // ]);

        $gradebook['name'] = $request->input('name');
        $gradebook['user_id'] = $request->input('user_id');

        Gradebook::create($gradebook);

        return $gradebook;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gradebook  $gradebook
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gradebook = Gradebook::where('id', $id)->with('students')->get()[0];
        $gradebook->user;
        $gradebook->comments;

        return $gradebook;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gradebook  $gradebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Gradebook $gradebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gradebook  $gradebook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gradebook $gradebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gradebook  $gradebook
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gradebook = Gradebook::find($id)->delete();

        return true;
    }
}
