<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                return view('home.index');
            } else if ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }

    public function home()
    {
        return view('home.index');
    }

    public function create_room()
    {
        return view('admin.create_room');
    }

    public function add_room(Request $request)
    {
        $room = new Room;

        $room->room_title = $request->input('title');
        $room->description = $request->input('description');
        $room->price = $request->input('price');
        $room->room_type = $request->input('type');
        $room->wifi = $request->input('wifi');

        if ($request->hasFile('image')) {
            $room->image = $request->file('image')->store('rooms', 'public');
        }

        $room->save();

        return redirect()->back();
    }

    public function view_room()
    {
        $rooms = Room::all();
        return view('admin.view_room', compact('rooms'));
    }

    public function room_delete($id)
    {
        $room = Room::find($id);
        $room->delete();

        return redirect()->back();
    }

    public function room_update($id)
    {
        $data = Room::find($id);

        return view('admin.update_room', compact('data'));
    }
}
