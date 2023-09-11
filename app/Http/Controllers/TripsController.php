<?php

namespace App\Http\Controllers;

use App\Models\trips;
use App\Models\category;
use App\Models\users;
use Illuminate\Http\Request;

class TripsController extends Controller
{
   

    public function index (){

        $data = trips::with('category:id,category_name')->get();
        $data2= category::all();
        return view('admin.Trips', compact('data','data2'));
    }


    public function enjoyment()
    {
        $trips = trips::where('category_id', 1 )->get();
        foreach ( $trips as $trip){

        }
        return view('tours', ['trips' => $trips]);

        
       
    }

    public function medical()
    {
        $trips = trips::where('category_id', 3)->get();

        return view('tours', ['trips' => $trips]);

    }

    public function archaeological()
    {
        $trips = trips::where('category_id', 2)->get();

        return view('tours', ['trips' => $trips]);

    }

    public function religious()
    {
        $trips = trips::where('category_id', 5)->get();

        return view('tours', ['trips' => $trips]);

    }


    public function petradetails()
    {
        $trips = trips::where('trip_name', 'Petra')->get();

        return view('details')->with('trips', $trips);

    }

    public function ummdetails()
    {
        $trips = trips::where('trip_name', 'Umm Qais, Irbid')->get();

        return view('details')->with('trips', $trips);

    }

    public function deaddetails()
    {
        $trips = trips::where('trip_name', 'Dead sea')->get();

        return view('details')->with('trips', $trips);

    }

    public function aqabadetails()
    {
        $trips = trips::where('trip_name', 'Aqaba')->get();

        return view('details')->with('trips', $trips);

    }

    public function ammandetails()
    {
        $trips = trips::where('trip_name', 'Amman')->get();

        return view('details')->with('trips', $trips);

    }

    
    public function wadidetails()
    {
        $trips = trips::where('trip_name', 'Wadi Rum')->get();

        return view('details')->with('trips', $trips);

    }
   

    public function usertrup(Request $req)
{

    $id = $req->trip_id;
    $trip = trips::find($id); 

    if (!$trip) {
       
        return "somthing wrong .!";
    }
    
    return redirect('user')->with('trips', $trip);
}


// public function usertrup(Request $req)
// {
//     $id = $req->trip_id;
//     $trip = trips::find($id); 

//     if (!$trip) {
//         return "Something went wrong!";
//     }

//     // Assuming you have a way to fetch user data, replace this with your logic
//     $user = users::find($userId); // Replace User with your actual User model

//     // Assuming you have a way to fetch trips for the user, replace this with your logic
//     $trips = $user->trips; // Replace 'trips' with the relationship method you defined

//     return view('user_profile', ['user' => $user, 'trips' => $trips]);
// }


}
