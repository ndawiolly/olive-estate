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

    public function editProp($id){
        $products = ['Available Seasonal Rentals','Seasonal VIP program', 'list your Seasonal Home','Inquiry form'];
        // $property = Property::where('id','=',$id)->get(); // The get method returns an array
        // $property = Property::where('id','=',$id)->first(); // The first method returns the first row found
        $property = Property::find($id);
        return view("admin_section.edit",[
            'property'=> $property,
            'products'=> $products
        ]);
    }
    public function updateProp(Request $request){
      $property = Property::find($request->input('id'))->update([
        'price' => $request->input('price'),
        'location' => $request->input('location'),
        'signature' => $request->input('signature'),
        'description' => $request->input('description'),
      ]);

      return back();
    }




}
