@component('mail::message')
Hi {{$username}}

Your Withdrawal of {{$amount}} is being processed. Please hold on.



Thanks,<br>
{{ config('app.name') }}
@endcomponent
