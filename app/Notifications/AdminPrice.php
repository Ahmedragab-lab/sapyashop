<?php

namespace App\Notifications;

use App\Models\UserReqest;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class AdminPrice extends Notification
{
    use Queueable;
    private $userrequest;

    public function __construct(UserReqest $userrequest)
    {
        $this->userrequest = $userrequest;
    }


    public function via($notifiable)
    {
        return ['database'];
    }


    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }


    public function toDatabase($notifiable)
    {
        return [
            'id'=>$this->userrequest->id,
            'user_id'=>$this->userrequest->user_id,
            'order_no'=>$this->userrequest->order_no,
            'price'=>$this->userrequest->price,
            'user'=>$this->userrequest->name,
            'title'=>'price by morasoft',
        ];
    }
    // public function toArray($notifiable)
    // {
    //     return [
    //         //
    //     ];
    // }
}
