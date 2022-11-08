<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Stack;
use Illuminate\Http\Request;

class StacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stacks = Stack::all();
        return view('admin.stack.index', compact('stacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stack.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'title' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->file('image')->move("images", $imageName);
        }

        Stack::create([
            'title' => $request->title,
            'image' => '/images/' . $imageName
        ]);
        return redirect()->route('admin.stack.index')->with('message', 'Stack was created');
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
        $model = Stack::find($id);
        return view('admin.stack.edit', compact('model'));
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
        $request->validate([
            'title' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->file('image')->move("images", $imageName);
            Stack::find($id)->update([
                'title' => $request->title,
                'image' => '/images/' . $imageName
            ]);
            return redirect()->route('admin.stack.index')->with('message', 'Stack was created');
        }

        Stack::find($id)->update([
            'title' => $request->title,
        ]);


        return redirect()->route('admin.stack.index')->with('message', 'Stack was created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stack::destroy($id);
        return redirect()->route('admin.stack.index')->with('message', 'Stack was deleted');
    }
}
