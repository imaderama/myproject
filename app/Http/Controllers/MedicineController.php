<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdata = DB::table('medicines')->get();

        //Eloquent
        // $allmedicines = Medicine::all();
        return view('medicine.index', compact('listdata'));
    }

    public function showMedicinesAndCategories()
    {
        $data = DB::table('medicines')
                        ->join('categories','categories.id','=','medicines.category_id')
                        ->get(['medicines.generic_name', 'medicines.form', 'medicines.restriction_formula', 'categories.name']);

        //Eloquent
        // $allmedicines = Medicine::all();
        return view('report.meds_name_form_catname', compact('data'));
    }

    public function showInfo()
    {
        $result=Medicine::orderBy('price','DESC')->first();
        return response()->json(array(
          'status'=>'oke',
          'msg'=>"<div class='alert alert-info'>
          Did you know? <br>The most expensive product is ". $result->generic_name . "</div>"
        ),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show($medicine)
    {
        //select * from medicines where id = $medicine
        //sintaksi untuk mengetahui isi dari variable yang menjadi 
        $res = Medicine::find($medicine);
        // dd($res->generic_name);
        $message="";
        if ($res){
            $message = $res;
        }
        else {
            $message = NULL;
        }

        // return view('medicine.view',compact('message'));
        return view('medicine.view',['message'=> $message]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
