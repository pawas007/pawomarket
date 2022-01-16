<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Jobs\TelegramNotifications\ContactFormSend;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contact-us');
    }

    public function requestList()
    {
        $contactList = ContactUs::orderBy('id', 'desc')->paginate(10);
        return view('admin.contact-us', compact('contactList'));
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
    public function store(ContactFormRequest $request)
    {
            $contactForm = new ContactUs();
            $contactForm ->fill($request->all());
            $contactForm ->save();
            ContactFormSend::dispatch($request->all())->beforeCommit()->onQueue('telegram');
            return redirect()->back()->withSuccess('Settings saved');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ContactUs $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ContactUs $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ContactUs $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ContactUs $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
