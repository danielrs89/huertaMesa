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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huerta Mesa</title>
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
</head>

<body>

    <!-- <?php if ($internetConnection) : ?> -->
        <div class="status" id="statusContainer">
            <div class="image-container">
                <img src="assets/img/icons/logo-trans_huerta-mesa.png" alt="Rotating Image" class="rotating-image" id="rotatingImage">
            </div>
            
        </div>
    <!-- <?php else : ?> -->
        <!-- <p>Conexión a Internet: <strong>No disponible</strong></p> -->
    <!-- <?php endif; ?> -->

    

    <?php include 'index.html'; ?>
    
    <script>
        // document.addEventListener("DOMContentLoaded", function() {

            // Start the animation
            const rotatingImage = document.getElementById('rotatingImage');
            const statusContainer = document.getElementById('statusContainer');
            if (rotatingImage && statusContainer) {
                rotatingImage.style.animationPlayState = 'running';

                setTimeout(() => {
                    rotatingImage.style.animationPlayState = 'paused';

                    if (statusContainer) {
                        statusContainer.parentNode.removeChild(statusContainer);
                    }
                }, 4000);
            }

        // });
    </script>
</body>

</html>