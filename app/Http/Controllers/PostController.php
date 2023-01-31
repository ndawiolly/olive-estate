<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function AdminIndex()
    {
        $word = str_shuffle("abcdefghi12345678");

        $properties = Property::all()->sortByDesc('id');
        $word_1 = substr($word, 0, 5);
        return view(
            'admin_section/admin_index',
            [
                'random' => $word_1,
                'properties'=> $properties
            ]
        );
    }
    // login Admin
    public function AdminLogin(){
        return view('admin_section/admin_login');
    }

     // Create a new Property
     public function createProp(Request $request){
        // dd($request->input());
        Property::create([
            'p_id' => $request->input('pid'),
            'price' => $request->input('price'),
            'location' => $request->input('location'),
            'signature' => $request->input('signature'),
            'p_status' => $request->input('status'),
            'description' => $request->input('description'),
        ]);

        // return redirect('/');
        return back();
    }
}
