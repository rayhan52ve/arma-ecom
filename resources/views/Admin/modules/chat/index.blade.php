@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive m-t-20">
                    <h3 class="text-center ">
                        Latest Messages
                    </h3>
                    <table id="config-table" class="table display table-striped border">
                        <thead>
                            <tr>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        সি.নং
                                    @else
                                        SL
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        নাম
                                    @else
                                        Customer Name
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Chat
                                    @else
                                        Chat
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        একশন
                                    @else
                                        Action
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chats as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->user->name ?? null }}</td>

                                    <td style="max-width: 600px">
                                        @foreach ($item->chatdetails as $key => $chatDetail)
                                            <div class="row justify-content-start">
                                                <div class="col-md-6">
                                                    Customer--{{ $chatDetail->created_at->toDayDateTimeString() ?? null }}<br>
                                                    {{ $chatDetail->message ?? null }}<br><br>
                                                    {{-- <div class="my-5"></div> --}}
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-md-6">
                                                    @if ($chatDetail->reply)
                                                        {{-- <div class="my-5"></div> --}}
                                                        You --
                                                        {{ $chatDetail->updated_at->toDayDateTimeString() ?? null }}<br>
                                                        {{ $chatDetail->reply ?? null }}<br><br>
                                                    @endif
                                                </div>
                                            </div>
                                            {{-- <td>{{ $chatDetail->created_at->toDayDateTimeString() ?? null }}</td> --}}
                                        @endforeach
                                    </td>

                                    {{-- <td style="max-width: 300px">
                                        @foreach ($item->chatdetails as $key => $chatDetail)
                                            @if ($chatDetail->reply)
                                                <div class="my-5"></div>
                                                {{ $key + 1 }}.
                                                {{ $chatDetail->reply ?? null }}--{{ $chatDetail->updated_at->toDayDateTimeString() ?? null }}<br><br>
                                            @endif
                                        @endforeach
                                    </td> --}}

                                    {{-- <td>{!! $item->created_at != $item->updated_at
                                        ? $item->updated_at->format('d-m-y h:i A')
                                        : '<span class="text-danger">Not Replied Yet</span>' !!}</td> --}}

                                    <td>
                                        {{-- <a href="{{ route('chat.edit', $item->id) }}" class="btn btn-success">
                                            Reply
                                        </a> --}}
                                        <form method="post" action="{{ route('chat.update', $item->id) }}"
                                            style="margin-top:30px">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <label for="reply">Reply</label>
                                                <textarea name="reply" id="" cols="30" class="form-control" rows="5"
                                                    placeholder="Write a message">{{ @$chatDetail->reply }}</textarea>
                                                {{-- <input type="text" name="reply" class="form-control"
                                                    value="{{ old('reply', $chatDetail->reply ?? '') }}"
                                                    placeholder="Write a message"> --}}
                                            </div>
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
