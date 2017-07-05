@component('mail::message')
# New Article: {{ $article->title }}

{!! Illuminate\Support\Str::words($article->body, 55) !!}

@component('mail::button', ['url' => 'http://gabedy.com'])
read more
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
