<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wim;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function all()
    {
        return Wim::all();
    }

    public function self()
    {
        $posts = auth()->user()->posts;

        try {
            $user = auth()->userOrFail();
        } catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return $user->posts;
    }

    public function store(Request $request)
    {
        $details = $request->only(['time', 'lp', 'weight_reading', 'weight_over', 'height', 'width',
        'length', 'violations', 'image']);

        try {
            $user = auth()->userOrFail();
        } catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        $post = $user->posts()->create($details);

        return $post;
    }
}
