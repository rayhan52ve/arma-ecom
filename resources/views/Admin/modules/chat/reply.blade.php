@extends('super_admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-8"> Send Message </div>
                    <div class="col-xs-4 text-right"> </div>
                </div>
                <style>
                    .message-area {
                        background-color: #ffffff;
                        border: 1px solid #e0e0e0;
                        border-radius: 8px;
                        margin-top: 10px;
                        padding: 15px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    }

                    .message-area .card {
                        margin-bottom: 10px;
                    }

                    .message-area .card-body {
                        padding: 10px;
                    }
                </style>
                <div class="message-area">
                    <div class="card bg-light">
                        <div class="card-body">
                            @php
                                $latestChatDetail = $chat->chatDetails->last();
                            @endphp

                            {{-- @if ($chat->message)
                                <div style="text-align: start; background-color: #e0e0e0; padding: 5px; margin-bottom: 5px;">
                                    {{ $chat->user->name }}<br>{{ $chat->message }}
                                </div>
                            @endif --}}



                            @if ($latestChatDetail && $latestChatDetail->message)
                                <div style="text-align: start; background-color: #e0e0e0; padding: 5px; margin-bottom: 5px;">
                                    {{ $chat->user->name }}<br>{{ $latestChatDetail->message }}
                                </div>
                                @if ($latestChatDetail->reply)
                                    <div
                                        style="text-align: end; background-color: #c0c0c0; padding: 5px; margin-bottom: 5px;">
                                        You<br>{{ $latestChatDetail->reply }}
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>

                <form method="post" action="{{ route('chat.update', $chat->id) }}" style="margin-top:30px">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="reply">Reply</label>
                        <input type="text" name="reply" class="form-control"
                            value="{{ old('reply', $latestChatDetail->reply ?? '') }}" placeholder="Write a message">
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>
                </form>


            </div>
        </div>
    </div>
@endsection
