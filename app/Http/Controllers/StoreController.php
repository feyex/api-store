<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Log;
use App\store;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return store::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       

        $this->validate($request, ['bookname' => 'required']);
        $this->validate($request, ['title' => 'required']);
        $this->validate($request, ['description' => 'required']);
        $this->validate($request, ['image' => 'required']);

        $link = store::create([
            'bookname' => $request->input('bookname'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $request->input('image')

            ]);
        
        Log::info('I am tweet' . $link);

        return $link;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        Log::info('I am called');
        $link=store::findorfail($id);

      if(!$link){
            $response= response()->json([
                'error'=>[
                    'message'=>'This link not available'
                ]  
            ],404);
            return $response;
        }
        $response = response()->json($link,200);
        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        

        //  if(($request->bookname) || (!$request->title) || (!$request->description)){
            
				//  	$response = store::json([
				//  				'error' =>
				//  				 [
				//  					 'message' => 'Please enter all required fields'
        //       		]
        //       ], 422);
        //       return $response;
        //       }

				//  	$link = store::find($id);
				//  	$link->bookname = $request->bookname;
				//  	$link->title = $request->title;
				//  	$link->description = $request->description;
				//  	$link->image = $request->image;
				//  	$link->slug = store::slug($request->title, '-');
				//  	$link->save();

        //     $response = store::json([
        //              'message' => 'The link has been updated.','data' => $link,
        //      ], 200);

        //      return $response;

         $this->validate($request, ['bookname' => 'required']);
         $this->validate($request, ['title' => 'required']);
         $this->validate($request, ['description' => 'required']);
         $this->validate($request, ['image' => 'required']);
        

         $input = $request->all();

         $link = store::where($id);

         $link->update($input);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $link =store::findOrFail($id)->delete();

        if(!$link){
            $response= response()->json([
                'error'=>[
                    'message'=>'This link not available'
                ]  
            ],404);
            return $response;
        }
        $response = response()->json('Successfuly deleted',200);
        return $response;
    }
}
