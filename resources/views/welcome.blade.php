<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Packages</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/logo-1.jpeg') }}" alt="Company Logo" class="logo">
        <h2 class="title">Choose Your Internet Package</h2>
        
        <div class="main-card">
            <div class="packages">
                <div class="package-card purple">
                    <h3>Unlimited Daily</h3>
                    <p>Kshs 10</p>
                    <button class="package-btn" data-speed="Unlimited Daily" data-price="10">Select</button>
                </div>
                <div class="package-card blue">
                    <h3>Unlimited Weekly</h3>
                    <p>Kshs 200</p>
                    <button class="package-btn" data-speed="Unlimited Weekly" data-price="200">Select</button>
                </div>
                <div class="package-card purple">
                    <h3>Unlimited Monthly</h3>
                    <p>Kshs 300</p>
                    <button class="package-btn" data-speed="Unlimited Monthly" data-price="300">Select</button>
                </div>
                <div class="package-card blue">
                    <h3>Unlimited Yearly</h3>
                    <p>Kshs 1,500</p>
                    <button class="package-btn" data-speed="Unlimited Yearly" data-price="1500">Select</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Processing Popup -->
    <div id="processing-popup" class="popup hidden">
        <div class="popup-content">
            <div class="loader"></div>
            <h3>Processing...</h3>
            <p>Please wait while we process your selection.</p>
        </div>
    </div>

    <script>
        document.querySelectorAll('.package-btn').forEach(button => {
            button.addEventListener('click', () => {
                document.getElementById('processing-popup').classList.remove('hidden');
                setTimeout(() => {
                    document.getElementById('processing-popup').classList.add('hidden');
                    if (confirm(`You have selected the ${button.dataset.speed} package for Kshs ${button.dataset.price}. Click OK to proceed to payment.`)) {
                        window.location.href = "{{ route('payment') }}";
                    }
                }, 2000);
            });
        });
    </script>
</body>
</html>