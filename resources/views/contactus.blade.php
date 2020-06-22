@component('mail::message')
# {{ $subject }}

Hello, I'm {{ $name }}

{{ $message }}

@component('mail::button', ['url' => 'http://127.0.0.1:8000'])
Go to Site
@endcomponent

From: {{ $email }},<br>
To: {{ config('app.name') }} Team
@endcomponent
