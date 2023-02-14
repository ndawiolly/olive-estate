<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

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
                'properties' => $properties
            ]
        );
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }


    // login Admin
    public function AdminLogin()
    {
        return view('admin_section/admin_login');
    }

    // Create a new Property
    public function createProp(Request $request)
    {
        $request->validate([
            // 'pid' => 'required|unique:Property|max:255',
            'price' => 'required',
            'location' => 'required',
            'signature' => 'required',
            'status' => 'required',
            'uploadimage' => ['required', 'mimes:jpg,png,jpeg','max:5048'],
            'description' => 'required|max:200' ,
        ]);



        $newImgName =  time() . '.' . $request->uploadimage->extension();
        // dd($newImgName);
        $path = $request->uploadimage->move(public_path('uploads'), $newImgName);

        Property::create([
            'p_id' => $request->input('pid'),
            'price' => $request->input('price'),
            'location' => $request->input('location'),
            'signature' => $request->input('signature'),
            'p_status' => $request->input('status'),
            'cover_img' => $newImgName,
            'description' => $request->input('description'),
        ]);

        // return redirect('/');
        return back();
    }

    public function destroy($id)
    {
        Property::destroy($id);

        return back();
    }

}
