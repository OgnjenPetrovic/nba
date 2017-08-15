<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;

class CommentsController extends Controller
{
    public function store($id)
    {
        $this->validate(request(), [
            'content' => 'required|min:10'
        ]);

        $team = Team::find($id);


        Comment::create([
        	'content'=>request('content'),
        	'user_id'=>auth()->user()->id,
        	'team_id' => $id
        ]);

        return back();
    }
}
