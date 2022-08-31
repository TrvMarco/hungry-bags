<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    private $validation = [
        'name' => 'required|string|max:255',
        'vat' => 'required|numeric|digits:11|unique:users',
        'address' => 'required|string|max:300',
        'types' => 'required',
        'image' => 'nullable|image',

    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
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
    public function edit(User $user)
    {
        if($user->id !== Auth::id()) {
            abort(403);
        }

        $types = Type::all();
        $userType = $user->types->map(function($type) {
            return $type->id;
        })->toArray();
        return view('admin.users.edit', compact('user', 'types', 'userType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($user->id !== Auth::id()){
            abort(403);
        }

        $data = $request->validate($this->validation);

        $user->fill($data);

        if(isset($data['image'])) {
            if($user->image){
                Storage::delete($user->image);
            }
            $user->image = Storage::put('uploads', $data['image']);
        }
        $user->save();
         
        $types = isset($data['types']) ? $data['types'] : [];
        $user->types()->sync($types);

        return redirect()->route('admin.home');

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
