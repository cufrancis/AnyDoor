<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Type;
use App\Link;

class LinkController extends Controller
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
      $types = Type::all();
      $topTypes = Type::where('gid', '=', 0)->get();
      // dd($types[0]->childTypes->toJson());
      for ($i=0; $i < count($topTypes); $i++) {
        // # code...
        for ($x=0; $x < count($types); $x++) {
          # code...
          $datas[$i] = $topTypes[$i]->childTypes;
        }
      }

      // 获取id 为1 的子分类，因为create.blade.php 第一次加载时不能正确显示子分类数据
      $sunTypes = Type::where('gid', '=', $topTypes[0]->id)->get();
      // dd($sunType);
      $jsonData = json_encode((object)$datas);


      // dd(json_encode((object)$datas));
      // dd($types->childTypes);
        return view(config('web.theme').'create', ['types'  =>  $types, 'datas'  =>  $datas, 'topTypes' =>  $topTypes, 'jsonData' =>  $jsonData, 'sunTypes'  =>  $sunTypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->interest_id_1);
        $link = new Link;
        $link->name = $request->name_1;
        $link->url  = $request->link_1;
        $link->desc = $request->description_1;
        $link->type = $request->taxonomy_id_1;
        $link->save();
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
