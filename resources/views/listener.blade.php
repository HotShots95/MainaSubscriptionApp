<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing Payment</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="payment_container">
        <img src="{{ asset('images/logo-1.jpeg') }}" alt="Company Logo" class="payment_logo">
        <h2 class="payment_title">Processing Payment...</h2>

        <div class="payment_countdown_card">
            <div class="payment_progress_bar">
                <div class="payment_progress_fill" id="payment_progress_fill"></div>
            </div>
            <h3 id="payment_countdown">50</h3>
            <p>Please wait while we confirm your transaction.</p>
        </div>
    </div>

    <script>
        let countdown = 50;
        const countdownElement = document.getElementById("payment_countdown");
        const progressBar = document.getElementById("payment_progress_fill");

        const countdownInterval = setInterval(() => {
            countdown--;
            countdownElement.textContent = countdown;

            // Update progress bar width
            let progress = ((50 - countdown) / 50) * 100;
            progressBar.style.width = progress + "%";

            if (countdown <= 0) {
                clearInterval(countdownInterval);
                window.location.href = "/success"; // Redirect to success page
            }
        }, 1000);
    </script>
</body>
</html>
