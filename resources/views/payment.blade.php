<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Processing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container text-center mt-4">
        <img src="{{ asset('images/logo-1.jpeg') }}" alt="Company Logo" class="logo mb-3">
        <h2 class="title">Complete Your Payment</h2>
        
        <div class="card p-4 shadow-lg mx-auto" style="max-width: 400px;">
            <form id="payment-form">
                <!-- Notification Number Field -->
                <div class="card mb-3 p-3 shadow-sm">
                    <label for="notification-number" class="form-label">
                        <i class="fas fa-bell me-2"></i> Notification Number:
                    </label>
                    <input type="text" id="notification-number" name="notification-number" class="form-control" required>
                </div>

                <!-- Payment Number Field -->
                <div class="card mb-3 p-3 shadow-sm">
                    <label for="payment-number" class="form-label">
                        <i class="fas fa-credit-card me-2"></i> Payment Number:
                    </label>
                    <input type="text" id="payment-number" name="payment-number" class="form-control" required>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-danger" onclick="window.history.back()">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit Payment</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Processing Popup -->
    <div id="processing-popup" class="popup hidden">
        <div class="popup-content">
            <div class="loader"></div>
            <h3>Processing Payment...</h3>
            <p>Please wait while we confirm your transaction.</p>
        </div>
    </div>

    <script>
        document.getElementById('payment-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form from submitting immediately

            let notificationNumber = document.getElementById('notification-number').value.trim();
            let paymentNumber = document.getElementById('payment-number').value.trim();

            // Validate input fields
            if (notificationNumber === "" || paymentNumber === "") {
                alert("Please fill in all fields before submitting.");
                return;
            }

            // Show processing popup
            document.getElementById('processing-popup').classList.remove('hidden');

            setTimeout(() => {
                document.getElementById('processing-popup').classList.add('hidden');
                alert("Your payment has been processed successfully!");
                window.location.href = "/listener"; // Redirect to listener page
            }, 3000);
        });
    </script>
</body>
</html>
