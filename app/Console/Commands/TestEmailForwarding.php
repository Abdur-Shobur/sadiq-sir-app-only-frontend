<?php
namespace App\Console\Commands;

use App\Mail\ContactMessageMail;
use App\Models\ContactMessage;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestEmailForwarding extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:email-forwarding';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test email forwarding functionality';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Testing email forwarding...');

        try {
            // Create a test contact message
            $testMessage = new ContactMessage([
                'name'    => 'Test User',
                'email'   => 'test@example.com',
                'subject' => 'Test Contact Message',
                'message' => 'This is a test message to verify email forwarding is working correctly.',
                'status'  => 'unread',
            ]);

            // Send test email
            $forwardEmail = env('FORWARD_EMAIL_TO', 'abdur.shobur.me@gmail.com');
            Mail::to($forwardEmail)->send(new ContactMessageMail($testMessage));

            $this->info('✅ Test email sent successfully to: ' . $forwardEmail);
            $this->info('Check your email inbox for the test message.');

        } catch (\Exception $e) {
            $this->error('❌ Failed to send test email: ' . $e->getMessage());
            return 1;
        }

        return 0;
    }
}
