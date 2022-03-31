@component('mail::message')

# We have recived one message from customer

## Name : {{ $name }}

## Email : {{ $email }}

## Message : {{ $userMessage }}

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
