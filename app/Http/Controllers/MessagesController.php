<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Messages;
use App\Http\Resources\MessagesResource;
use Illuminate\Support\Facades\Redirect;
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
        //$user = Auth::user();
        //$newMessage = Messages::create($request->message);

        //echo "<script>console.log('Debug Objects: " . $user . "' );</script>";

        //echo "<script>console.log('Debug Objects: " . $request->newMessage . "' );</script>";
        //$newMessage = Messages::create($request->newMessage);

        //return response()->json("Response");

        // $resource = new MessagesResource($newMessage);
        // return $resource;

        $user = Auth::user();

        $message = $user->messages()->create([
            'message' => $request->newMessage
          ]);

          // Rerender Chat component to display newly added message
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
