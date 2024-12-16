<?php

namespace App\Http\Controllers;
use App\Models\Hotel;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    protected $hotel;
    public function __construct(){
        $this->hotel = new Hotel();
    }

    public function index(){
        $response['hotels'] = $this->hotel->all();
        return view('hotels.index' )->with($response);
    }







     public function store(Request $request){

        //dd($request->all());
        $validation = $request->validate([
            'name' => 'required',
            'description' => 'required' , 'max:255',
            'status' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,gif,svg|max:2048',
        ]);


        if($request->hasFile('image')){
            $fileName=$request->file('image')->store('images' , 'public'); //Photo save to public/images
            $validation['image'] = $fileName;
        }

        //create the product
        Hotel::create($validation);
        return redirect()->back()->with('success' , 'Hotel Created Successfully');

     }



}
