@component('mail::message')
# Introduction

{!! $message->body !!}

@component('mail::button', ['url' => 'http://www.gabedy.com'])
Go to Gabedi
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
