<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use image;
use file;

// model er sathe connection koralam
use App\Models\Backend\Brand;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        return view('backend.pages.brand.manage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.brand.create');
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
            'name'=> 'required|max:255'
        ],
        [
            'name.required' => 'Please insert the brand name',
        ]);

        $brand = new Brand();
        $brand->name=  $request->brandName;
        $brand->slug= $request->Str::slug($request->brandName);
        $brand->description= $request->brandDescription;
        $brand->is_featured= $request->isFeatured;
        $brand->status= $request->status;

        if( $request->image){
            
            $image=file('image');
            $img = rand(). '.' .   $image->getClientOriginalName();
            $location = public_path('Backend/img/Brand'. $img);
            image::make( $image)->save($location);
            $brand-> image= $img;
            
        }

        $brand -> save();
       return redirect()->route('Backend.brand.manage');

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
