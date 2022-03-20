<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Http\Resources\Subscriber as SubscriberResource;
use App\Http\Resources\SubscriberCollection;
use Illuminate\Support\Facades\Validator;


class SubscriberController extends Controller
{
    public function index() {
        return new SubscriberCollection(Subscriber::all());
    }

    public function show($id) {
        return new SubscriberResource(Subscriber::findOrFail($id));
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [ 
            'email' => 'required|unique:subscribers|email',
            'zip' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {    
            return view('wellcome');
        }
        $subscriber = new Subscriber;
        $subscriber->email = $request->email;
        $subscriber->phone = $request->phone;
        $subscriber->zip = $request->zip;
        $subscriber->save();

        return view('wellcome');
    }
}
