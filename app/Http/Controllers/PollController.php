<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePollRequest;

class PollController extends Controller
{
    public function store(CreatePollRequest $request)
    {
        $poll = auth()->user()->polls()->create($request->safe()->except('options'));

        $poll->pollOptions()->createMany($request->options);

        return back();
    }
}
