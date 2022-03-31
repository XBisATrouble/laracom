@component('mail::message')

# We have recived one message

## Name : {{ $name }}

## Email : {{ $email }}

## Message : {{ $userMessage }}

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
