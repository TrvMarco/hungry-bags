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
    private $validation = [
        'name' => 'required|string|max:100',
        'image' => 'nullable|mimes:png,jpeg,jpg',
        'description' => 'required|string|max:65535',
        'price' => 'required|numeric|between:0,200',
        'is_visible' => 'sometimes|accepted',
    ];
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
        $newItem->image = Storage::put('uploads', $data['image']);
        $newItem->user_id = Auth::id();
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
        $user= Auth::user();
        if($item->user_id !== Auth::id()) {
            abort(403);
        } 
        return view('admin.items.show', compact('item', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {   
        $user= Auth::user();
        if($item->user_id !== Auth::id()) {
            abort(403);
        } 
        return view('admin.items.edit', compact('item','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        if($item->user_id !== Auth::id()) {
            abort(403);
        } 

        $data = $request->validate($this->validation);

        $item->fill($data);

        if(isset($data['image'])) {
            if($item->image){
                Storage::delete($item->image);
            }
            $item->image = Storage::put('uploads', $data['image']);
        }

        $item->is_visible = isset($data['is_visible']);
        $item->save();
        

        return redirect()->route('admin.items.index');
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
