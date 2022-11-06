<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Student\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request)
    {
        $email = $request->email;
        if (empty($email)) {
            return response()->json([
                'status' => 'false',
                'message' => 'Email is required !!!'
            ]);
        } else {

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                return response()->json([
                    'status' => 'false',
                    'message' => 'Your email is invalid'
                ]);
            } else {

                $check = Subscription::where('email', $email)->first();

                if (!is_null($check)) {
                    return response()->json([
                        'status' => 'false',
                        'message' => 'You are already Subscribed'
                    ]);
                } else {

                    $details = [
                        'email' => $email,
                        'body' => 'This Student has been subscribed'
                    ];

                    // Mail::to('ahsanhabib313@gmail.com')->send(new \App\Mail\Subscription($details));

                    $store =  Subscription::create([
                        'email' => $email
                    ]);

                    if ($store) {
                        return response()->json([
                            'status' => 'true',
                            'message' => 'You are Subscribed'
                        ]);
                    } else {
                        return response()->json([
                            'status' => 'false',
                            'message' => 'Something wrong'
                        ]);
                    }
                }
            }
        }
    }
}
