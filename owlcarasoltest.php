<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Carousel in Container</title>
    <!-- Include Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Include Custom CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .owl-carousel .item {
            text-align: center;
        }

        .owl-nav {
            position: absolute;
            top: 50%;
            width: calc(100% - 40px);
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .owl-nav .owl-prev,
        .owl-nav .owl-next {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
        }

        .owl-dots {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .owl-dots .owl-dot span {
            width: 10px;
            height: 10px;
            background-color: #ccc;
            border-radius: 50%;
            display: inline-block;
            margin: 5px;
            transition: all 0.3s ease;
        }

        .owl-dots .owl-dot.active span {
            background-color: #000;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="https://via.placeholder.com/150" alt="Item 1">
        </div>
        <div class="item">
            <img src="https://via.placeholder.com/150" alt="Item 2">
        </div>
        <div class="item">
            <img src="https://via.placeholder.com/150" alt="Item 3">
        </div>
        <div class="item">
            <img src="https://via.placeholder.com/150" alt="Item 4">
        </div>
        <div class="item">
            <img src="https://via.placeholder.com/150" alt="Item 5">
        </div>
    </div>
</div>

<!-- Include jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Include Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Custom JavaScript -->
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            navText: ['<', '>'], // Custom navigation arrows
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>

</body>
</html>
