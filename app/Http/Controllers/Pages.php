<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class Pages extends Controller
{
    public function indexPage()
    {
        $products = ['Available Seasonal Rentals','Seasonal VIP program', 'list your Seasonal Home','Inquiry form'];

        return view('index',
        [
            'products' => $products
        ]
    );
    }

    public function aboutus()
    {
        $products = ['Available Seasonal Rentals','Seasonal VIP program', 'list your Seasonal Home','Inquiry form'];

        // $say = array([
        //     'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,1,2,3,4,5,6,7,8,9'
        // ]);
        // $say1 = array_rand($say, 5);
        // return view('/aboutus')->with('word',$say);
        return view('/aboutus',
        [
            'products' => $products
        ]);
    }

    public function contactus()
    {
        $products = ['Available Seasonal Rentals','Seasonal VIP program', 'list your Seasonal Home','Inquiry form'];
        $say = str_shuffle("abcdefghi12345678");
        $say1 = substr($say, 0, 5);
        return view(
            '/contactus',
            [
                'word' => $say1,
                'products' => $products
            ]
        );
    }

    public function estate_gallery ($name) {

        $products = ['Available Seasonal Rentals','Seasonal VIP program', 'list your Seasonal Home','Inquiry form'];
        $properties = Property::all()->sortByDesc('id');
        return view('/estate_gallery',
        [
            'products' => $products,
            'properties'=> $properties
        ]);
        //   return redirect(route('contact'));
    }


//    // Create a new Property
//    public function createProp(Request $request){
//     // dd($request->input());
//     Property::create([
//         'p_id' => $request->input('pid'),
//         'price' => $request->input('price'),
//         'location' => $request->input('location'),
//         'signature' => $request->input('signature'),
//         'p_status' => $request->input('status'),
//         'description' => $request->input('description'),
//     ]);

//     // return redirect('/');
//     return back();
// }
}
