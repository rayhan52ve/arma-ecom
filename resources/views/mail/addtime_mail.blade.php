@component('mail::message')
# Introduction

Customer Requested to increase Time.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/admin/pending-order-list'])
See Request
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
