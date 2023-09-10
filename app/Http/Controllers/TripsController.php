<?php

namespace App\Http\Controllers;

use App\Models\trips;
use App\Models\category;

use Illuminate\Http\Request;

class TripsController extends Controller
{
   
    public function enjoyment()
    {
        $trips = trips::where('category_id', 3)->get();

        return view('tours', ['trips' => $trips]);

        //
        $data = trips::with('category:id,category_name')->get();
        $data2= category::all();
        return view('admin.Trips', compact('data','data2'));
    }

    public function medical()
    {
        $trips = trips::where('category_id', 4)->get();

        return view('tours', ['trips' => $trips]);

    }

    public function archaeological()
    {
        $trips = trips::where('category_id', 1)->get();

        return view('tours', ['trips' => $trips]);

    }

    public function religious()
    {
        $trips = trips::where('category_id', 2)->get();

        return view('tours', ['trips' => $trips]);

    }


    public function petradetails()
    {
        $trips = trips::where('trip_name', 'petra')->get();

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
   

}
