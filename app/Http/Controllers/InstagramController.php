<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use App\Http\Services\InstagramProvider;
use Throwable;

class InstagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accountData = Instagram::findOrFail(1);


        return view('admin.instagram.instagram',compact('accountData'));
    }


    public function setInstaSettings(Request $request)
    {
        try {
            $instaData = Instagram::findOrFail(1);
            $instaData->fill($request->all());
            $instaData->save();
            return redirect()->back()->withSuccess('Settings saved');
        } catch (Throwable $e) {
            return redirect()->back()->withErrors('DB Error');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getInstaPosts()
    {
        try {
            $instagramSettings = Instagram::findOrFail(1);
            File::cleanDirectory(public_path('/assets/img/instagram/'));
            Cache::forget('instagram');
            $instagramClass = new InstagramProvider($instagramSettings->name,$instagramSettings->password,$instagramSettings->account);
            $instagramPosts = $instagramClass->getPosts();
            if ($instagramPosts) {
                Cache::put('instagram', $instagramPosts);
            }
            return redirect()->back()->withSuccess('Posts Added');
        } catch (Throwable $e) {
            return redirect()->back()->withErrors('User credentials or page name wrong');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Instagram $instagram
     * @return \Illuminate\Http\Response
     */
    public function show(Instagram $instagram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Instagram $instagram
     * @return \Illuminate\Http\Response
     */
    public function edit(Instagram $instagram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Instagram $instagram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instagram $instagram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Instagram $instagram
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instagram $instagram)
    {
        //
    }
}
