<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use App\student;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertform()
    {
        //
        return view('student');
    }

    
    public function insert(Request $request)
    {
        //
        // $name=$request->input('name');
    //     $password=$request->input('password');
    //     $age=$request->input('age');
        
    //     DB::insert('insert into student(name,password,age) values(?)',[$name,$password,$age]);
    //     echo"Record Inserted.<br>";
    //     echo'<a href="/insert">Click to go back';
    Log::info("I am getting called");

    $this->validate($request, ['name' => 'required']);
    $this->validate($request, ['password' => 'required']);
    $this->validate($request, ['age' => 'required']);

    $tweet = student::create([
        'name' => $request->input('name'),
        'password' => $request->input('password'),
        'age' => $request->input('age'),
    ]);
    
    Log::info('I am tweet' . $tweet);

    return $tweet;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
