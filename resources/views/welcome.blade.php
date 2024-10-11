<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedesk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            /* Dark background */
        }

        /* Navbar container */
        .navbar {
            position: fixed;
            bottom: 20px;
            /* Slight margin from the bottom */
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            /* Almost full width */
            max-width: 600px;
            /* Max width to keep it from getting too wide */
            background-color: #0d0a23;
            display: flex;
            justify-content: space-between;
            padding: 15px;
            border-radius: 50px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6);
            /* Drop-shadow for depth */
            z-index: 100;
        }

        /* Navbar list */
        .navbar-icons {
            list-style-type: none;
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 100%;
        }

        /* General icon styling */
        .icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        /* Default icon colors */
        .icon img {
            width: 24px;
            height: 24px;
            opacity: 0.6;
            filter: grayscale(1);
            transition: all 0.3s ease;
        }

        /* Icon hover effects */
        .icon:hover img {
            filter: grayscale(0);
            opacity: 1;
            transform: scale(1.1);
            /* Slight zoom */
        }

        .icon:hover {
            background-color: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2);
        }

        /* Special camera button (centered and elevated) */
        .camera-button {
            position: relative;
            bottom: 30px;
        }

        /* Camera button style */
        .camera-icon {
            width: 65px;
            height: 65px;
            background: linear-gradient(145deg, #4f8bff, #74b0ff);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            transition: all 0.3s ease;
        }

        /* Camera button hover */
        .camera-icon:hover {
            background: linear-gradient(145deg, #3b72e3, #568eff);
            transform: scale(1.1);
            /* Slight zoom */
        }

        /* Camera icon click effect */
        .camera-button:active .camera-icon {
            transform: scale(0.9);
            /* Shrink on click */
        }

        /* Responsiveness: Adjust for smaller screens */
        @media (max-width: 480px) {
            .navbar {
                width: 95%;
            }

            .icon img {
                width: 20px;
                height: 20px;
            }

            .camera-icon {
                width: 55px;
                height: 55px;
            }
        }
    </style>
    @laravelPWA
</head>

<body>
    <nav class="navbar">
        <ul class="navbar-icons">
            <li><a href="#" class="icon home"><i class="bi bi-house"></i></a></li>
            <li><a href="#" class="icon search"><i class="bi bi-search"></i></a></li>
            <li class="camera-button">
                <a href="#" class="icon camera">
                    <div class="camera-icon"><i class="bi bi-camera-video-fill"></i></div>
                </a>
            </li>
            <li><a href="#" class="icon profile"><i class="bi bi-person"></i></a></li>
            <li><a href="#" class="icon settings"><i class="bi bi-gear"></i></a></li>
        </ul>
    </nav>

    <script>
        document.querySelector('.camera-button').addEventListener('click', function() {
            alert('Camera button clicked!');
        });

        // Additional click animations for icons
        const icons = document.querySelectorAll('.icon');

        icons.forEach(icon => {
            icon.addEventListener('mousedown', () => {
                icon.style.transform = 'scale(0.9)';
            });

            icon.addEventListener('mouseup', () => {
                icon.style.transform = 'scale(1)';
            });
        });
    </script>
</body>

</html>
