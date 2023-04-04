<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hotel;
use Storage;
use File;

class HotelController extends Controller
{
    public function index(Request $request){

        if($request->keyword){
            $hotels = Hotel::where('roomname','LIKE','%'.$request->keyword.'%')->paginate(5);
        }else
            $hotels = Hotel::paginate(5);
        
        return view('hotel.index', compact('hotels'));
        
    }

    public function create(){

        return view('hotel.create');
    }

    public function store(Request $request){

        $hotel = Hotel::create($request->all());

        if($request->hasFile('pict')){
            $filename = $hotel->id.'-'.$request->pict->getClientOriginalExtension();
            Storage::disk('public')->put('pict/'.$filename, File::get($request->pict));

            $hotel->pict = $filename;
            $hotel->save();
        }

        return redirect()->route('hotels.index')->with([
            'alert-type' => 'alert-primary',
            'alert' => 'New room has been created']);

    }
    public function show(Hotel $hotel){
        return view('hotel.show', compact('hotel'));
    }

    public function edit(Hotel $hotel){
        return view('hotel.edit', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel){
        $hotel->update($request->all());

        return redirect()->route('hotels.index')->with([
            'alert-type' => 'alert-success',
            'alert' => 'Room details has been updated!'
        ]);
    }

    public function delete(Request $request, Hotel $hotel){

        if($request->picture){
            Storage::disk('public')->delete($hotel->pict);
        }

        $hotel->delete();

        return redirect()->route('hotels.index')->with([
            'alert-type' => 'alert-warning',
            'alert' => 'Room has been deleted'
        ]);

    }

    public function getDataApi(){
        $data = DB::table('hotels')->get();
        return response()->json($data);
    }

    //tok untuk request satu benda jak
    public function specificreq(Request $request){
        $room = $request->input('roomquantity');
        $data = DB::table('hotels')->where('roomquantity', '=', $room)->get();
        return response()->json($data);
    }

    //tok untuk request more than satu benda dri table
    public function reqmorethanone(Request $request){

        $room = $request->input('roomquantity');
        $price = $request->input('price');

        $data = DB::table('hotels')->select('roomname','roomdescription', 'roomquantity', 'price')
        ->where('roomquantity', '>', $room)
        ->where('price', '>', $price)
        ->get();

        return response()->json($data);
    }
  
}
