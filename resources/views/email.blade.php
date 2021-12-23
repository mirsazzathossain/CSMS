@component('mail::message')
# Hurray, a new contact message! 🎉

__Name:__ {{ $data['name'] }}<br>
__Email:__ {{ $data['email'] }}<br>
__Phone:__ {{ $data['phone'] }}<br>

__Message__<br>
{{ $data['comment'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent