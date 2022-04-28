<?php

namespace App\Events;

use App\Models\UserReqest;
use Carbon\Carbon;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PriceNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    // public $userrequest;
    public $userid;
    public $price;
    public $date;
    public $time;
    public function __construct($noti)
    // public function __construct(UserReqest $userrequest)
    {
        // $this->userid = $data['user_id'];
        // $this->price = $data['price'];
        // $this->date = date("Y-m-d", strtotime(Carbon::now()));
        // $this->time = date("h:i A", strtotime(Carbon::now()));
        $this->userid = $noti->user_id;
        $this->price = $noti->price ;
        $this->date = date("Y-m-d", strtotime(Carbon::now()));
        $this->time = date("h:i A", strtotime(Carbon::now()));
    }

    // private $userrequest;

    // public function __construct(UserReqest $userrequest)
    // {
    //     $this->userrequest = $userrequest;
    // }
    // 'id'=>$this->userrequest->id,
    // 'user_id'=>$this->userrequest->user_id,
    // 'order_no'=>$this->userrequest->order_no,
    // 'price'=>$this->userrequest->price,
    // 'user'=>$this->userrequest->name,
    // 'title'=>'price by morasoft',





    public function broadcastOn()
    {
        // return new Channel('new_price');
        return ['new_price'];
    }
    // public function broadcastAs()
    // {
    //     return 'PriceNotification';

    // }
}