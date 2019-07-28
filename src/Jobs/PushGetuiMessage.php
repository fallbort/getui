<?php

namespace Fallbort\Getui\Jobs;

use Fallbort\Getui\Sdk\IGtPush;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PushGetuiMessage implements ShouldQueue
{
    use  InteractsWithQueue, Queueable, SerializesModels;


    /**
     * @var IGtPush
     */
    protected $igt;

    /**
     * Getui function.
     *
     * @var string
     */
    protected $function;

    /**
     * Getui push message.
     *
     * @var array
     */
    protected $message;

    /**
     * Getui push extra_param.
     *
     * @var mixed|null
     */
    protected $extra_param;

    /**
     * Create a new job instance.
     *
     * @param \Fallbort\Getui\Sdk\IGtPush $igt
     * @param $function
     * @param $message
     * @param $extra_param
     */
    public function __construct(IGtPush $igt, $function, $message, $extra_param = NULL)
    {
        $this->igt = $igt;
        $this->function = $function;
        $this->message = $message;
        $this->extra_param = $extra_param;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $igt = $this->igt;
        $function = $this->function;
        $message = $this->message;
        $extra_param = $this->extra_param;

        $igt->$function($message, $extra_param);
    }
}
