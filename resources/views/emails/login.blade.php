@component('mail::message')
Hi {{$name}}

You have successfully signed in to 

https://mulatoken.co.ke

from {{$server}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
