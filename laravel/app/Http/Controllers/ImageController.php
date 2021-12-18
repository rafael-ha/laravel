<?php

namespace App\Http\Controllers;

use App\Images;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{

    public function __construct()
    {
        $this->middleware ('auth');
    }
    public function create(){
        return view('user.crearimagen');
    }
    /**
     * Create a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function save(Request $request)
    {
        $user = \Auth::user();
        $id = $user->id;
        $user_id = $request->input('user_id');
        $description = $request->input('description');
        $image_path = $request->file('image_path');

        $image_path_name = time().$image_path->getClientOriginalName();
        Storage::disk('images')->put($image_path_name, File::get($image_path));
        
        $image =Images::create([
            'user_id' => $user_id,
            'image_path' => $image_path_name,
            'description' => $description,
        ]);

        return redirect()->route('home')->with(['message'=>'Imagen guardada.']);
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
    public function update(Request $request)
    {
        //
    }

    public function getImage($filename){
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }
}
