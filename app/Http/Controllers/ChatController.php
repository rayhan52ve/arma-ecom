<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chats = Chat::with('user', 'chatDetails')->latest()->get();
        // dd($chats);
        return view('Admin.modules.chat.index', compact('chats'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chat = Chat::where('user_id', Auth::user()->id)->first();

        if (!$chat) {
            $chat = Chat::create([
                'user_id' => Auth::user()->id,
            ]);
        }

        ChatDetail::create([
            'chat_id' => $chat->id,
            'message' => $request->message,
        ]);
        toastr()->success('Message Sent. Wait for Admin to reply');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(Chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        // $chats = Chat::latest()->get();
        return view('Admin.modules.chat.reply', compact('chat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        $latestChatDetail = $chat->chatDetails->last();

        if ($latestChatDetail) {
            $latestChatDetail->update([
                'reply' => $request->input('reply'),
            ]);

            toastr()->success('Reply Sent.');
            return redirect()->route('chat.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
