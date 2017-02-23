@component('mail::message')
# Introduction

Thanks for registering.

@component('mail::button', ['url' => 'https://github.com/wolf6969'])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
Here you can find more interesting features
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
