<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use App\Activity as TheActivity;
use App\Course;

class Activity extends Mailable
{
    use Queueable, SerializesModels;
    public $student;
    public $course;
    public $activity;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $student, Course $course, TheActivity $activity)
    {
        $this->student = $student;
        $this->course = $course;
        $this->activity = $activity;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.activity');
    }
}
