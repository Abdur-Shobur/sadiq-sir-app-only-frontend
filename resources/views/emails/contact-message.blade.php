<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .message-details {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            color: #495057;
            margin-bottom: 5px;
        }
        .field-value {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 3px;
            border-left: 4px solid #007bff;
        }
        .message-content {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 3px;
            border-left: 4px solid #28a745;
            white-space: pre-wrap;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
            font-size: 12px;
            color: #6c757d;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>New Contact Message Received</h2>
        <p>You have received a new contact message from your portfolio website.</p>
    </div>

    <div class="message-details">
        <div class="field">
            <div class="field-label">Name:</div>
            <div class="field-value">{{ $contactMessage->name }}</div>
        </div>

        <div class="field">
            <div class="field-label">Email:</div>
            <div class="field-value">{{ $contactMessage->email }}</div>
        </div>

        @if($contactMessage->phone_number)
        <div class="field">
            <div class="field-label">Phone Number:</div>
            <div class="field-value">{{ $contactMessage->phone_number }}</div>
        </div>
        @endif

        @if($contactMessage->subject)
        <div class="field">
            <div class="field-label">Subject:</div>
            <div class="field-value">{{ $contactMessage->subject }}</div>
        </div>
        @endif

        <div class="field">
            <div class="field-label">Message:</div>
            <div class="message-content">{{ $contactMessage->message }}</div>
        </div>

        <div class="field">
            <div class="field-label">Received At:</div>
            <div class="field-value">{{ $contactMessage->created_at ? $contactMessage->created_at->format('F j, Y \a\t g:i A') : now()->format('F j, Y \a\t g:i A') }}</div>
        </div>
    </div>

    <div class="footer">
        <p>This message was automatically forwarded from your portfolio contact form.</p>
        <p>To reply to this message, use the email address: {{ $contactMessage->email }}</p>
    </div>
</body>
</html>
