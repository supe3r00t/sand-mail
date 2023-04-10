@component('mail::message')
# Ahmed

Welcome To My Ahmed

@component('mail::button', ['url' => 'www.Anjaz.com.sa'])
vist Mysite
@endcomponent

Thanks,<br>
{{--{{ config('app.name') }}--}}
{{$user}}
@endcomponent
