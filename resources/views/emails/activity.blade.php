@component('mail::message')
    # Hello, {{$student->name}}

    An activity ( {{$activity->type}} ) has been added to your course, {{$course->code}}.

    Use the button below to check it on Uclass.

    @component('mail::button', ['url' => config('app.url') . '/uclass/student/?source=mail_notification'])
        Enter Uclass
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
