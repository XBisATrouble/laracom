@component('mail::message')

# Welcome to Libelula

## Hello, {{ $name }}. Welcome to join us.

## Before proceeding, please check your email for a verification link.

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
