<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $types = Type::where('gid', '=', 0)->get();

      // for($i = 0; $i < count($types); $i++){
      //   for($x = 0; $x < count($types[$i]); $x++){
      //     if(isset($types[$i]->childTypes[$x])){
      //         $data[$i] = $types[$i]->childTypes[$x];
      //     }
      //   }
      // }
      for ($i=0; $i < count($types); $i++) {
        // # code...
        for ($x=0; $x < count(Type::all()); $x++) {
          # code...
          $datas[$i] = $types[$i]->childTypes;
        }
      }


      $jsonData = json_encode($datas);
      // 获取id 为1 的子分类，因为create.blade.php 第一次加载时不能正确显示子分类数据
      $sunTypes = Type::where('gid', '=', $types[0]->id)->get();

      // dd($types[0]->childTypes->name);
      return view(config('web.theme').'type/create', ['types' =>  $types, 'jsonData'  =>  $jsonData, 'sunTypes'  =>  $sunTypes]);
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
      dd($request);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
