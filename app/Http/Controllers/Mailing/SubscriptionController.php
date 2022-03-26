<?php

namespace App\Http\Controllers\Mailing;

use App\Models\Token;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function unsubscribe(Token $token)
    {

        dd($token->user);
    }
}
