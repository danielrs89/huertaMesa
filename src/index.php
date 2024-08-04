<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>


    <?php
    function checkInternetConnection()
    {
        $connected = @fsockopen("www.google.com", 80);
        if ($connected) {
            $is_conn = true;
            fclose($connected);
        } else {
            $is_conn = false;
        }
        return $is_conn;
    }

    $internetConnection = checkInternetConnection();


    //ANIMACION & CONEXION
    try {
        if ($internetConnection) {
            echo "<div class='status'>";
            echo "<div class='image-container'>";
            echo "<img src='assets\img\gallery\authors.png' alt='Rotating Image' class='rotating-image' id='rotatingImage'>";
            echo "</div>";
            echo "</div>";
        }
         require("index.html");
    } catch (\Throwable $th) {
        throw $th;
    }







    ?>

   

    <style>
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .rotating-image {
            width: 200px;
            height: 200px;
            animation: rotate 4s linear infinite;
            animation-play-state: paused;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .status {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <script>
        // Start the animation
        const rotatingImage = document.getElementById('rotatingImage');
        rotatingImage.style.animationPlayState = 'running';

        // Stop the animation after 4 seconds
        setTimeout(() => {
            rotatingImage.style.animationPlayState = 'paused';
        }, 4000);
    </script>

</body>

</html>