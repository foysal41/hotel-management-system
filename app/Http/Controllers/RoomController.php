<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    protected $room;
    public function __construct(){
        $this->room = new Room();
    }

    public function index(){
        $rooms = $this->room->all();
        $hotels = Hotel::pluck('name' , 'id');
        //return view('rooms.index' )->with($response);
        return view('rooms.index' , compact('rooms' , 'hotels'));
    }



    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'status' => 'required|integer',
        'qty' => 'required|integer',
        'hotel_id' => 'required|exists:hotels,id', // Ensure hotel_id is valid
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
    }

    Room::create([
        'name' => $validated['name'],
        'description' => $validated['description'],
        'status' => $validated['status'],
        'qty' => $validated['qty'],
        'hotel_id' => $validated['hotel_id'],
        'image' => $imagePath,
    ]);

    return redirect()->route('rooms.index')->with('success', 'Room added successfully!');
}




}
