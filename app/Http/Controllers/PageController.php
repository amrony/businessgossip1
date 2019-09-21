<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'name' => 'required',
           'title' => 'required',
           'keyword' => 'required',
           'description' => 'required',
           'slug' => 'required',
           'body' => 'required',
           'status' => 'required',
        ]);
        $page = new Page();
        $page->name = $request->name;
        $page->title = $request->title;
        $page->keyword = $request->keyword;
        $page->description = $request->description;
        $page->slug = $request->slug;
        $page->body = $request->body;
        $page->status = $request->status;

        $page->save();

        return redirect('/page/create')->with('message', 'Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
       $page = Page::find($request->page_id);

        $page->name = $request->name;
        $page->title = $request->title;
        $page->keyword = $request->keyword;
        $page->description = $request->description;
        $page->slug = $request->slug;
        $page->body = $request->body;
        $page->status = $request->status;

        $page->save();

        return redirect('/page')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();

        return redirect('/page')->with('message', 'Delete Successfully');
    }
}
