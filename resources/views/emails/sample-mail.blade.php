@component('mail::message')
Hello, {{ $contact->name }}

Hope you are doing well!

Your account is created with us. You can claim your company by clicking here.

@component('mail::button', ['url' => ''])
Click Here!
@endcomponent

Thanks & Regards,
Negls Team

@endcomponent