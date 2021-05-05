<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Messages;
use App\Http\Resources\MessagesResource;
use Illuminate\Support\Facades\Redirect;
use App\Events\MessageSent;
use Inertia\Inertia;

class MessagesController extends Controller
{
    /**
     * Fetch all messages resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Eager load Messages with User to alleviate N+1 problem.
        $messages = Messages::with('user')
                            ->orderBy('created_at')
                            ->get();

        // Return messages Vue resource.
        return Inertia::render('Chatboard', [
            'messages' => $messages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Persist message resource to database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return App\Http\Resources\MessagesResource
     */
    public function store(Request $request)
    {
        // Get Login user
        $user = Auth::user();

        // Persist message data to database
        $message = $user->messages()->create([
            'message' => $request->newMessage
        ]);

        // Update other users with newly added message
        broadcast(new MessageSent($user, $message))->toOthers();

        // Re-render Chat component to display newly added message
        return Redirect::route('messages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Messages $messages
     * @return \Illuminate\Http\Response
     */
    public function show(Messages $messages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Messages $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Messages $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Messages $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messages $messages)
    {
        //
    }
}
