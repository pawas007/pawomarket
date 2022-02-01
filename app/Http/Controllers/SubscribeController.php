<?php

namespace App\Http\Controllers;

use App\Jobs\Emails\SubscribeSuccess;
use App\Models\Subscribe;
use Illuminate\Http\Request;


class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscribe::orderBy('id', 'desc')->paginate(10);
        return view('admin.subscribers', compact('subscribers'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $activeUser = Subscribe::where('email', $request->email)->first();
        if ($activeUser) {
            if ($activeUser->active){
                return redirect()->back()->with('subscribeSuccess', 'Email already subscribed');
            }else{
                $activeUser->update(["active" => 1]);
                SubscribeSuccess::dispatch($activeUser->email,$activeUser->id)->beforeCommit()->onQueue('email');
                return redirect()->back()->with('subscribeSuccess', 'Subscribe success');
            }
        } else {
            $subscriber = new Subscribe();
            $subscriber->email = $request->email;
            $subscriber->save();
            SubscribeSuccess::dispatch($subscriber->email,$subscriber->id)->beforeCommit()->onQueue('email');
            return redirect()->back()->with('subscribeSuccess', 'Subscribe success');
        }

    }





    public function unSubscribe($id)
    {


        $user = Subscribe::find($id);


        if($user){
            $user->update(["active" => 0]);
            return redirect()->back()->with('subscribeSuccess', 'Unsubscribed');

        }else{
            return redirect()->route('home');
        }


    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Subscribe $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Subscribe $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscribe $subscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Subscribe $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Subscribe $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribe $subscribe)
    {
        //
    }
}
