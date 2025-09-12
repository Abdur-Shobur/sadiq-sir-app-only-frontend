<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Email Updated</title>
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
        .update-details {
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
        .change-highlight {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 3px;
            padding: 15px;
            margin: 15px 0;
        }
        .old-value {
            color: #dc3545;
            text-decoration: line-through;
        }
        .new-value {
            color: #28a745;
            font-weight: bold;
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
        <h2>Profile Email Updated</h2>
        <p>The profile email address has been updated on your portfolio website.</p>
    </div>

    <div class="update-details">
        <div class="change-highlight">
            <h3>Email Change Details:</h3>
            <p><strong>Previous Email:</strong> <span class="old-value">{{ $oldEmail ?: 'Not set' }}</span></p>
            <p><strong>New Email:</strong> <span class="new-value">{{ $newEmail }}</span></p>
        </div>

        <div class="field">
            <div class="field-label">Updated At:</div>
            <div class="field-value">{{ now()->format('F j, Y \a\t g:i A') }}</div>
        </div>

        <div class="field">
            <div class="field-label">Profile Information:</div>
            <div class="field-value">
                <p><strong>Phone:</strong> {{ $profile->phone ?: 'Not set' }}</p>
                <p><strong>Address:</strong> {{ $profile->address ?: 'Not set' }}</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>This notification was automatically sent when the profile email was updated.</p>
        <p>If you did not make this change, please check your portfolio admin panel.</p>
    </div>
</body>
</html>
