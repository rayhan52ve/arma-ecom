@component('mail::message')
# Subject:{{$maildata['subject']}}

Name: {{$maildata['name']}}<br>
Email: {{$maildata['email']}} <br>

Message: {{$maildata['message']}} <br>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
