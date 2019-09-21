<?php

namespace App\Http\Controllers;

use App\CopyRight;
use Illuminate\Http\Request;

class CopyRightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $copyrights = CopyRight::all();
        return view('admin.copyright.index', compact('copyrights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.copyright.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'year' => 'required',
        ]);
        CopyRight::create($attributes);

        return redirect('/copyright/create')->with('message','Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CopyRight  $copyRight
     * @return \Illuminate\Http\Response
     */
    public function show(CopyRight $copyRight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CopyRight  $copyRight
     * @return \Illuminate\Http\Response
     */
    public function edit(CopyRight $copyRight, $id)
    {
        $copyRight = CopyRight::find($id);
        return view('admin.copyright.edit', compact('copyRight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CopyRight  $copyRight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CopyRight $copyRight)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'year' => 'required',
        ]);
        $copyRight = CopyRight::find($request->id);
        $copyRight->update($attributes);

        return redirect('/copyright')->with('message','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CopyRight  $copyRight
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $copyRight = CopyRight::find($id);
        $copyRight->delete();

        return redirect('/copyright')->with('message','Delete Successfully');
    }
}
