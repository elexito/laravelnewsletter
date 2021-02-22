@component('mail::message')
# TuesDays of the month



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

To unsubscribe, click the link below: <a href="http://localhost:8000/unsubscribe">Unsubscribe</a>