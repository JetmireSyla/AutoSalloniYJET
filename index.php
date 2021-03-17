 <?php $page = 'index'; require("includes/header.php"); 
include_once 'controller/carController.php';


?>

<style type="text/css">
    <?php include 'css/slideshow.css'; ?>
</style>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel();
    });
</script>

    <div class="col-3 col-s-3 home-banner">
        <!-- Slideshow container -->
        <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/background.jpg" class="slideimg">
                <div class="text">Mercedes Benz</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/porsche-singer-911-gray-porche-carrera.jpg" class="slideimg">
                <div class="text">Porsche-singer-911-gray-porche-carrera</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/2018-lamborghini-urus-luxury-suv-4k-wallpaper-preview.jpg" class="slideimg">
                <div class="text">Lamborghini Urus Luxury SUV</div>
            </div>

    <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

    <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
            }

            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = "block";
                setTimeout(showSlides, 4000); // Change image every 2 seconds
            }
        </script>

    </div>

    <div class="col-6 col-s-9 container">
        <div class="left-box">
            <h1>WELCOME</h1>
            <p>If you want to buy a new car, you are in the right place</p>
            <a href="cars.php" class="button-design"><b>View Cars</b></a>
        </div>
    </div>

    <div class="row">
        <div class="div-lastcars">
            <div class="container">
                <div class="heading-design">
                    <h1>LATEST CARS</h1>
                    <div class="column owl-carousel owl-theme">
                        <?php 
                        $carController = new carController();
                        $result = $carController->GetLastCars();
                        foreach ($result as $car){ ?>
                        <div class="item">
                            <a href="cardetails.php?car_id=<?php echo $car['car_id']; ?>" class="a-design">
                                <div class="box-home">
                                    <img src="<?php echo $car['image']; ?>" alt="<?php echo $car['model']; ?>">
                                    <h3><?php echo $car['manufacturer']; ?><br /><?php echo $car['model']; ?></h3>
                                </div>
                            </a>
                        </div>
                        <?php }?>

                    </div>
                </div>




            </div>

        </div>
    </div>

    <div class="col-3 col-s-12">
        <div class="carlogos">
            <div class="container">
                <div class="logo-box">
                    <img src="img/mercedes.png" alt="Mercedes-Benz" height="80" style="object-fit: cover;">
                </div>
                <div class="logo-box">
                    <img src="img/bmw.png" alt="BMW" height="80" style="object-fit: cover;">
                </div>
                <div class="logo-box">
                    <img src="img/audi.png" alt="Audi" height="80" style="object-fit: cover;">
                </div>
                <div class="logo-box">
                    <img src="img/lamborghini.png" alt="Lamborghini" height="80" style="object-fit: cover;">
                </div>
                <div class="logo-box">
                    <img src="img/volkswagen.png" alt="Volkswagen" height="80" style="object-fit: cover;">
                </div>
                <div class="logo-box">
                    <img src="img/porsche.png" alt="Porsche" height="80" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>


    <div class="col-3 col-s-12 containter">
        <div class="heading-design">
            <h1>OUR SERVICES</h1>
        </div>
        <div class="the-service">
            <div class="icon-box">
                <i style="color: #abafb3;" class="fas fa-road fa-6x"></i>
                <h2>Service</h2>
            </div>
            <div class="icon-box">
                <i style="color: #abafb3;" class="fas fa-truck-loading fa-6x"></i>
                <h2>Car Transport</h2>
            </div>
            <div class="icon-box">
                <i style="color:#abafb3" class="fas fa-tools fa-6x"></i>
                <h2>Replacement Part</h2>
            </div>
        </div>
    </div>


<?php require("includes/footer.php"); ?>