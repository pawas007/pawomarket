<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserDetailsUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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


    public function show()
    {
        $user = Auth::user();

        return view('account.pages.account-details',compact('user'));

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
    public function update(UserDetailsUpdateRequest $request, $id)
    {
        $user= User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        //download img
        if ($request->has('image')) {
            Storage::delete($user->avatar);
            $image = $request->file('image');
            $imgName = time().$image->getClientOriginalName();
            $path = $image->storeAs('users/', $imgName);
            $user->avatar = $path;

        }
        $user->save();
        return redirect()->back()->withSuccess('Account details updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updatePassword (Request $request){
        $user= Auth::user();

        if (Hash::check($request->current_password, $user->password)) {
            $this->validate($request, [
                'password'              => 'required|min:6|confirmed',

            ]);
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->withSuccess('Password updated');
        }else{
            return redirect()->back()->withErrors(['current_password' =>'Invalid current password']);
        }
    }


    public function destroy($id)
    {
        //
    }
}
