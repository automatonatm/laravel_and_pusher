<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:api', ['except' => ['login']]);
        $this->middleware('jwt');
    }

    public function likeIt(Reply $reply)
    {
        Like::create([
            'user_id' => 'c10c5dfa-9c35-45b8-a9e3-3cda49c5f709',
            'reply_id' => $reply->id
        ]);

        return response('success',  200);

    }

    public function UnlikeIt(Reply $reply)
    {

        Like::where('user_id', 'c10c5dfa-9c35-45b8-a9e3-3cda49c5f709')->where('reply_id', $reply->id)->first()->delete();
        return response('success',  200);
    }
}
