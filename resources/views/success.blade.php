<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container text-center mt-5">
        <div class="success-container">
            <div class="success-card">
                <img src="{{ asset('images/logo-1.jpeg') }}" alt="Company Logo" class="success-logo">
                <h2 class="success-message">Your payment has been successfully received.</h2>
                <p>You will be connected shortly.</p>
                <a href="/" class="btn btn-primary mt-3">Go to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
