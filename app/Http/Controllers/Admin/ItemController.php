<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Auth::user();
        $items = $user->items;
        return view('admin.items.index', compact('items','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user= Auth::user();
        return view('admin.items.create', compact('user'));
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
            'name' => 'required|string|max:100',
            'image' => 'nullable|mimes:png,jpeg,jpg',
            'description' => 'required|string|max:65535',
            'price' => 'required|numeric|between:0,200',
            'is_visible' => 'sometimes|accepted'
        ]);

        $data = $request->all();
        $newItem = new Item();
        $newItem->fill($data);
        $newItem->is_visible = isset($data['is_visible']);
        $newItem->user_id = Auth::id();
        
        if(isset($data['image'])){
            $newItem->image = Storage::put('uploads', $data['image']);
        }
        
        $newItem->save();
        return redirect()->route('admin.items.show', $newItem->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        if($item->user_id !== Auth::id()) {
            abort(403);
        }   
        return view('admin.items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($item->user_id !== Auth::id()) {
            abort(403);
        } 
        return view('admin.items.edit');
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
        if($item->user_id !== Auth::id()) {
            abort(403);
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        if($item->user_id !== Auth::id()) {
            abort(403);
        } 
        $item->delete();
        return redirect()->route('admin.items.index');
    }
}
