<?php

use App\Models\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mailing\SubscriptionController;



Route::get('/', function (request $request) {

    // $request->user()->phoneNumber()->creat([

    //     'phone_number'=>'0123456789',
    // ]);

    //dd($request->user()->get());

    // $phoneNumber = PhoneNumber::find(1);
    // $phoneNumber->update([
    //     'phone_number' => '123456',
    // ]);

    // $phoneNumber = new PhoneNumber;
    // $phoneNumber->phone_number ='0123456';
    // $phoneNumber->user()->associate($request->user());
    // $phoneNumber->save();

    // $phoneNumber =PhoneNumber::find(4);

    // $phoneNumber = PhoneNumber::where('phone_number', '0123456')->first();
    //to show all collection data
    // dd($phoneNumber);
    //to show the name og user
    // echo $phoneNumber->user()->first()->name;

    //$phoneNumber = PhoneNumber::get();
    // dd($phoneNumber);

    //    $phoneNumbers = PhoneNumber::get();
    //    return view('phone.index',compact('phoneNumbers'));

    echo $request->user()->token->token;
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mailling/unsubscribe/{token}', [SubscriptionController::class, 'unsubscribe']);
