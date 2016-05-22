<?php

namespace App\Http\Controllers;

use App\Link;
use App\Type;
use Illuminate\Http\Request;

use App\Http\Requests;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $types = Type::all();
      $links = Link::all();
      $categories = Type::where('gid', '=', 0)->get(); //
      for ($i=0; $i < count($categories); $i++) {
        $sunTypes[$i] = Type::where('gid', '=', $categories[$i]->id)->get();
      }
      // dd($links);


      // dd($sunType);
      // dd($categories);
      // dd($types);

      return view(config('web.theme').'index/index', ['types' =>  $types, 'links' =>  $links, 'categories' => $categories, 'sunTypes'  =>  $sunTypes]);
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
