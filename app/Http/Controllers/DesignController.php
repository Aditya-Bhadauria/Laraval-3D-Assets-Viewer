<?php
namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Room;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
    {
        $room = Room::latest()->first();
        $designs = Design::where('style', $room->style)
            ->where('price', '<=', $room->budget)
            ->where('length', '<=', $room->length)
            ->where('width', '<=', $room->width)
            ->where('height', '<=', $room->height)
            ->get();

        return view('designs.index', compact('designs', 'room'));
    }

    public function DisplayAll()
    {
        $designs = Design::all(); // Fetch all designs from the database
        return view('AllDesigns.AllDesigns', compact('designs')); // Return the view with designs data
    }


}
