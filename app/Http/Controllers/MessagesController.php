<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
use App\Http\Resources\MessagesResource;
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
                            ->orderBy('created_at', 'DESC')
                            ->get();
        
        //echo $messages;
        //echo gettype($messages);
        //echo 'Hello World';
        //echo("<script>console.log('PHP4  ');</script>");

        // Return messages Vue resource.
        // return Inertia::render('Chatboard', [
        //     'messages' => $messages,
        // ]);
        return Inertia::render('Chatboard');
        //return view('Chatboard');
        //return 'Hello World';
        //$resource = new MessagesResource($messages);
        //return $resource;
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
        $newMessage = Messages::create($request->message);

        $resource = new MessagesResource($newMessage);
        return $resource;
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
