<?php

namespace App\Http\Controllers;

use App\Category;
use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Query Builder
        $datas = DB::table('categories')->get();

        //Eloquent
        $datas = Category::all();
        return view('category.index', compact('datas'));
    }

    public function aggregation()
    {
        //Query Builder
        $data = DB::table('categories')
                ->join('medicines','categories.id','=','medicines.category_id')
                ->select('categories.id', 'categories.name')
                ->groupBy('categories.id', 'categories.name')
                ->get();
        $getTotalData = $data->count();

        

        //Eloquent

        $data2 = Category::whereNotIn('id',function($q){
            $q->select('category_id')->from('medicines');
        })->get();

        $data3 = Category::select('name', DB::raw('avg(medicines.price) as average'))
                ->leftjoin('medicines','categories.id','=','medicines.category_id')
                ->groupBy('categories.name')
                ->get();

        $data4 = Category::select('name', DB::raw('count(medicines.id) as total'))
                ->leftjoin('medicines','categories.id','=','medicines.category_id')
                ->groupBy('categories.name')
                ->havingRaw('count(medicines.id) = 1')
                ->get();

        $data5 = Medicine::select('generic_name', DB::raw('count(generic_name) as total'))
                ->groupBy('generic_name')
                ->havingRaw('count(generic_name) = 1')
                ->get();

        $data6 = Category::select('name', 'medicines.generic_name', 'medicines.price')
                ->leftjoin('medicines','categories.id','=','medicines.category_id')
                ->orderBy('medicines.price', 'desc')
                ->first();

        return view('report.aggregation', compact('getTotalData', 'data2', 'data3', 'data4', 'data5','data6'));
        
    }

    public function showProducts()
    {
        $cat=Category::find($_POST['category_id']);
        $nama=$cat->nama_kategori;
        $data=$cat->products;
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('category.index',compact('nama','data'))->render()
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
