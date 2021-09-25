@component('mail::message')
# Hii, {{$user->name}}

Someone Checked Your Profile, for more info check out your profile.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/event'])
Visit Profile
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
