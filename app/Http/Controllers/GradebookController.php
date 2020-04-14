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
        // return Gradebook::all();

        $gradebooks = Gradebook::all();

        foreach ($gradebooks as $gradebook) {
            if($gradebook['user_id']) {
                $gradebook['class_master'] = User::find($gradebook['user_id']);
            } else {
                $gradebook['class_master'] = null;
            };
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gradebook  $gradebook
     * @return \Illuminate\Http\Response
     */
    public function show(Gradebook $gradebook)
    {
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
    public function destroy(Gradebook $gradebook)
    {
        //
    }
}
