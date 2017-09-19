@component('mail::message')
# Introduction

The body of your message.

- one
- two
- three

@component('mail::button', ['url' => 'http://akashadhikari.com.np'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Lorem ipsum delar sit amet.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
