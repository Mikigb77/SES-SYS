<?php
//require_once(__DIR__ . "/../index.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Website Under Construction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-image: url('construction_background.jpg');
            /* Replace 'construction_background.jpg' with your image path */
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        .container {
            padding: 50px;
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 36px;
            color: #007BFF;
        }

        p {
            font-size: 18px;
        }

        #countdown {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }

        .rotating-text {
            display: inline-block;
            animation: rotateText 6s linear infinite;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .rotating-text:hover {
            transform: scale(1.1);
        }

        @keyframes rotateText {

            0%,
            100% {
                content: "Under Construction";
            }

            25% {
                content: "Coming Soon";
            }

            50% {
                content: "Launching Shortly";
            }

            75% {
                content: "Stay Tuned";
            }
        }

        #progress-bar {
            width: 100%;
            background-color: #ddd;
            border-radius: 5px;
            overflow: hidden;
            margin-top: 20px;
        }

        #progress-bar .progress {
            height: 30px;
            background-color: #007BFF;
            animation: progressAnimation 10s linear infinite;
            position: relative;
            overflow: hidden;
        }

        @keyframes progressAnimation {
            0% {
                left: -100%;
            }

            50% {
                left: 100%;
            }

            100% {
                left: 100%;
            }
        }

        .email-form {
            margin-top: 30px;
        }

        .email-input {
            padding: 10px;
            width: 200px;
            border: 1px solid #007BFF;
            border-radius: 5px;
        }

        .submit-btn {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1><span class="rotating-text"></span></h1>
        <p>We are working hard to bring you an awesome website. Stay tuned!</p>
        <div id="countdown"></div>

        <?php
        // Set the launch date to December 15, 2023, 12:00:00
        $launch_date = "2023-12-15 12:00:00";
        $current_date = time();
        $countdown = strtotime($launch_date) - $current_date;

        if ($countdown > 0) {
            $days = floor($countdown / (60 * 60 * 24));
            $hours = floor(($countdown % (60 * 60 * 24)) / (60 * 60));
            $minutes = floor(($countdown % (60 * 60)) / 60);
            $seconds = $countdown % 60;
            echo "<script>
                    var countdownElement = document.getElementById('countdown');
                    function updateCountdown() {
                        countdownElement.innerHTML = 'Launching in: ' + $days + ' days, ' + $hours + ' hours, ' + $minutes + ' minutes, ' + $seconds + ' seconds';
                        if ($countdown <= 0) {
                            clearInterval(countdownInterval);
                            countdownElement.innerHTML = 'Website is now live!';
                        }
                        $countdown--;
                    }
                    var countdownInterval = setInterval(updateCountdown, 1000);
                </script>";
        }
        ?>

        <div id="progress-bar">
            <div class="progress"></div>
        </div>

        <div class="email-form">
            <p>Want to be notified when the website is live?</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="email" name="email" class="email-input" placeholder="Enter your email" required>
                <button type="submit" class="submit-btn">Notify Me</button>
            </form>
        </div>
    </div>

    <script>
        // Progress Bar Animation
        var progressBar = document.querySelector('.progress');

        function updateProgressBar() {
            progressBar.style.animation = 'progressAnimation 10s linear infinite';
        }
        updateProgressBar(); // Start the progress bar animation

        // Hide the minigame initially
        var rotatingText = document.querySelector('.rotating-text');
        rotatingText.textContent = 'Click Me!';

        // Minigame
        var score = 0;
        rotatingText.addEventListener('click', function() {
            score++;
            rotatingText.textContent = 'You clicked ' + score + ' times!';
        });
    </script>
</body>

</html>