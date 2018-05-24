@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'https://google.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
    Some good words.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
