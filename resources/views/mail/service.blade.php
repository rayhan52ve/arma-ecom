@component('mail::message')
{{-- # Introduction --}}

Dear Customer your Service is about to finish.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
