<?php

namespace App\Jobs\TelegramNotifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Telegram\Bot\Laravel\Facades\Telegram;

class ContactFormSend implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

public $data;
    public function __construct($data)
    {
        $this->data= $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $message = "A new contact us request\n"
            ."Name: ".$this->data['name']."\n"
            ."Email: ".$this->data['email']."\n"
            ."Phone: ".$this->data['phone']."\n"
            ."Subject: ".$this->data['subject']."\n"
            ."Message: ".$this->data['message']."\n"
        ;
        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_BOT_CHAT_ID'),
            'parse_mode' => 'HTML',
            'text' => $message
        ]);
    }
}
