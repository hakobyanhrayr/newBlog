<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    /**
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id)
    {

        $post = Post::query()->findOrFail($id);

        return view('user.post',compact('post'));
    }
}
