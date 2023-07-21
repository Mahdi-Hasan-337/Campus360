<section class="carousel-section" style="margin: 1rem 0rem">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src="images/carousel/car1.jpg" class="c-img" alt="Carousel Image 1">
                <div class="carousel-caption">
                    <h3>Full free</h3>
                    <p>Certificate will provide after completing the course</p>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="images/carousel/car2.jpg" class="c-img" alt="Carousel Image 2">
                <div class="carousel-caption">
                    <h3>Be expert in Networking</h3>
                    <p>Instructor : Dewan Chowdhury</p>
                    <p>Host : IEEE LU chapter</p>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="images/carousel/car3.jpg" class="c-img" alt="Carousel Image 3">
                <div class="carousel-caption">
                    <h3>Let's learn Flutter</h3>
                    <p>Update with the present world<br>Upto 1K discount for IEEE members</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="color:black"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</section>

<style>
    .carousel-section {
        max-height: 35rem;
        overflow: hidden;
    }
    .c-item{
        height: 35rem;
        width:100%;
    }
    .c-img{
        height: 100%; 
        width: 100%;
        object-fit:contain;
        filter: brightness(0.7); 
    }
</style>