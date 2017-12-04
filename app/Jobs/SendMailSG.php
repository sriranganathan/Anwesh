<?php
namespace App\Jobs;
use Log;
use Exception;
use SendGrid;
use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailSG extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $to;
    protected $from;
    protected $subject;
    protected $content;
    protected $attachment1;
    protected $attachment2;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mail)
    {
        $this->from       = $mail->from;
        $this->to         = $mail->to;
        $this->content    = $mail->content;
        $this->subject    = $mail->subject;
        $this->attachment1 = $mail->attachment;


        $attachment = new SendGrid\Attachment();
        $attachment->setContent(base64_encode(file_get_contents(public_path()."/pragyan_black.png")));
        $attachment->setType("image/png");
        $attachment->setFilename("pragyan.png");
        $attachment->setDisposition("inline");
        $attachment->setContentId("Logo");
        $this->attachment2 = $attachment;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        $to   = new SendGrid\Email(null, $this->to);
        $from = new SendGrid\Email('Pragyan', $this->from);
        $subject = $this->subject;
        $content = new SendGrid\Content("text/html", $this->content);
        
        $mail = new SendGrid\Mail($from, $subject, $to, $content);   
        $sg   = new SendGrid(env('SENDGRID_API_KEY'));
        if($this->attachment1!=null) {
            $mail->addAttachment($this->attachment1);
        }
        
        $mail->addAttachment($this->attachment2);

        $response = $sg->client->mail()->send()->post($mail);
        
        if ($response->statusCode()!=202&&$response->statusCode()!=200) {
            Log::error('Unable to send attachment mail'.json_encode($response->headers()));
            throw new Exception("Unable to send attachment email", 1);
        }
        Log::info('Successfully sent attachment mail to '.$this->to);
    }
}
