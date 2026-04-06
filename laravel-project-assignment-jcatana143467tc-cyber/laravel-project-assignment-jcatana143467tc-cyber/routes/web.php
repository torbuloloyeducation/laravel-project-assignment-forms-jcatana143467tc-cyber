<?php

use Illuminate\Support\Facades\Route;


Route::get('/emails', function () {
    return view('emails');
});

Route::post('/emails', function () {

    $emails = session('emails', []);

    if (count($emails) >= 5) {
        return back()->with('warning', 'You have reached the 5 email limit!');
    }


    request()->validate([
        'email' => 'required|email',
    ]);

    $newEmail = request('email');


    if (in_array($newEmail, $emails)) {
        return back()->withErrors(['email' => 'This email is already in the list!'])->withInput();
    }


    $emails[] = $newEmail;
    session(['emails' => $emails]);


    return back()->with('success', 'Email added successfully!');
});


Route::post('/emails/delete', function () {
    $emails = session('emails', []);
    $index = request('index');

   
    unset($emails[$index]);

    
    session(['emails' => array_values($emails)]);

    return back()->with('success', 'Email deleted!');
});


Route::post('/emails/clear', function () {
    session()->forget('emails');
    return back()->with('success', 'All emails cleared!');
});