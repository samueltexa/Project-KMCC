<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kibwona Miracle Centre Church</title>
    <link rel="stylesheet" href="../sourcefiles/CSS/images.css">
    <link rel="stylesheet" href="../sourcefiles/CSS/homepages.css">
</head>
<body>
    <canvas id="myCanvas" class="myCanvasVideo">
        Your browser does not support the video format.
    </canvas>
    <div class="homepage-links">
        <a href="homepage.php">Home</a>
        <a href="#">About Us</a>
        <!-- media dropdown -->
        <div class="media-dropdown">Media
            <div class="dropdown-links">
                <a href="#">Images</a>
                <a href="#">Videos</a>
            </div>
        </div>
        <!-- End of media dropdown -->
        <a href="#">Contact Us</a>
    </div>
    <div>Our Leadership</div>

    <script>
        let canvas = document.getElementById('myCanvas');
        let ctx = canvas.getContext('2d');
        let video = document.createElement('video');

        // Set the source of the video
        video.src = '../images/video.mp4';
        video.autoplay = true;
        video.muted = true; // Mute the video to avoid audio interference

        // Set up the video to play on the canvas
        video.addEventListener('loadedmetadata', () => {
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            drawVideoOnCanvas();
        });

        // Function to draw the video on the canvas
        function drawVideoOnCanvas() {
            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
            requestAnimationFrame(drawVideoOnCanvas);
        }
    </script>
</body>
</html>
