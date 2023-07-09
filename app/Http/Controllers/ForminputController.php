<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForminputController extends Controller
{
    /**
    *Display a listing of the resource.
    */

    public function index()
    {
        return view('forminput');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ar_skill = ["HTML","CSS","MySQL","PHP","JavaScript"];
        $ar_lokasi = ["bekasi","depok","bogor","tanggerang", "lainnya"];

        return view('frominput', compact('data','ar_lokasi'));
    }


    /**
     * store a newly 
     */
    public function hasil(Request $request)
    {
        //
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',
        ]);
            return view('hasil', ['data' => $request]);
    }
}


    