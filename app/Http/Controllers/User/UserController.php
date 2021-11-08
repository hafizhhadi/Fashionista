<?php

namespace App\Http\Controllers\User;

use File;
use Storage;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
    public function show(User $user)
    {
        return view('user.profile.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.profile.edit', compact('user'));
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
        $user = auth()->user(); 
        $user->update([
            'name'=>$request->name,
            'password'=>Hash::make($request->password),
            'email'=>$request->email,
        ]);

        if($request->hasFile('image')){
            // rename file - 5-2021-09-03.jpg/xls
            $filename = $user->id.'-'.date("Y-m-d").'.'.$request->image->getClientOriginalExtension();

            // store attachment on storage
            Storage::disk('public')->put($filename, File::get($request->image));

            // update row
           
            $user->save();
        }
        
        $user->detail()->create([
            'user_id'=>auth()->user(),
            'address'=>$request->address,
            'phone_number'=>$request->phone_number,
            'image'=>$filename,
            
        ]);
        // $user->detail()->address = $request->address;
        // $user->detail()->phone_number = $request->phone_number;
        
        $user->save();

        
        
        return redirect()->route('user:show', $user )->with([

        'alert-type' => 'alert-warning',
        'alert-message' => 'User details edited',
        ]);
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
