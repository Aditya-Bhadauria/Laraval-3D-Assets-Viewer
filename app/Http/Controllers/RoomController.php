<?php
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create()
    {
        
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        Room::create($request->all());
        return redirect()->route('designs.index')->with('success', 'Room details saved!');
    }
}
