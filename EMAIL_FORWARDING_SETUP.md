# Email Forwarding Setup

This document explains how email forwarding is configured for the portfolio website.

## Features Implemented

### 1. Contact Message Forwarding

-   **Trigger**: When someone submits a contact form
-   **Action**: Automatically forwards the message to your email
-   **Email Template**: Professional HTML template with all message details
-   **Location**: `app/Http/Controllers/ContactController.php`

### 2. Profile Email Update Notifications

-   **Trigger**: When the profile email is updated in the admin panel
-   **Action**: Sends notification about the email change
-   **Email Template**: Shows old and new email addresses
-   **Location**: `app/Models/Profile.php` (using model events)

## Configuration

### Environment Variables

The following variables are configured in your `.env` file:

```env
# Email Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=abdur.shobur.me@gmail.com
MAIL_PASSWORD=mxzfuiqodtvxhbaj
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="abdur.shobur.me@gmail.com"
MAIL_FROM_NAME="Prof. Sadiq Portfolio"

# Email Forwarding Configuration
FORWARD_EMAIL_TO="abdur.shobur.me@gmail.com"
```

### Email Templates

-   **Contact Messages**: `resources/views/emails/contact-message.blade.php`
-   **Profile Updates**: `resources/views/emails/profile-email-update.blade.php`

## Testing

To test the email forwarding functionality, run:

```bash
php artisan test:email-forwarding
```

This will send a test email to verify the configuration is working correctly.

## How It Works

### Contact Message Flow

1. User submits contact form
2. `ContactController@store` validates and saves the message
3. `ContactMessageMail` is sent to `FORWARD_EMAIL_TO`
4. You receive a formatted email with all message details

### Profile Email Update Flow

1. Profile email is updated in admin panel
2. `Profile` model detects the change using `updating` event
3. `ProfileEmailUpdateMail` is sent to `FORWARD_EMAIL_TO`
4. You receive notification about the email change

## Customization

### Changing Forward Email Address

Update the `FORWARD_EMAIL_TO` variable in your `.env` file:

```env
FORWARD_EMAIL_TO="your-new-email@example.com"
```

### Modifying Email Templates

Edit the Blade templates in `resources/views/emails/` to customize the email appearance and content.

### Adding More Email Notifications

1. Create a new Mailable class: `php artisan make:mail YourNotificationMail`
2. Create an email template in `resources/views/emails/`
3. Send the email using `Mail::to($email)->send(new YourNotificationMail($data))`

## Troubleshooting

### Email Not Sending

1. Check your Gmail app password is correct
2. Verify SMTP settings in `.env`
3. Check Laravel logs: `storage/logs/laravel.log`
4. Test with: `php artisan test:email-forwarding`

### Gmail Security

Make sure you're using an App Password for Gmail, not your regular password. Enable 2-factor authentication and generate an app password.

## Files Modified/Created

### New Files

-   `app/Mail/ContactMessageMail.php`
-   `app/Mail/ProfileEmailUpdateMail.php`
-   `resources/views/emails/contact-message.blade.php`
-   `resources/views/emails/profile-email-update.blade.php`
-   `app/Console/Commands/TestEmailForwarding.php`

### Modified Files

-   `app/Http/Controllers/ContactController.php`
-   `app/Models/Profile.php`
-   `.env`

## Security Notes

-   Email credentials are stored in `.env` file (not committed to version control)
-   App passwords are used for Gmail authentication
-   Email templates are sanitized to prevent XSS attacks
-   All email sending is wrapped in try-catch blocks for error handling
