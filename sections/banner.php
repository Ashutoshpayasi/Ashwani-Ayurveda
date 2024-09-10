<script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js "></script>
<link href=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css " rel="stylesheet">

<style>

</style>


<section>
  <div class="banner-home">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 banner-container">
          <div class="banner">
            <div class="splide" role="group" aria-label="Splide Basic HTML Example">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <div class="banner-image">
                      <img src="../assets/img/hero/banner-2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="banner-content">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="banner-text">

                              <h6>Where your health matters </h6>
                              <h1>Overcome <span> Infertility</span> with Ayurveda: A Holistic Path to Parenthood</h1>
                              <p>
                                Experience personalized care, natural treatments, and proven results. Let us help you start your journey towards a healthy pregnancy.
                              </p>
                              <a href="#" class="btn btn-primary">Book Appointment</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <div class="banner-image">
                      <img src="../assets/img/hero/banner-1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="banner-content">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="banner-text">

                              <h1>Detox, Rejuvenate, and Heal with <span>Panchakarma</span>
                                <p>
                                  Discover the ancient Ayurvedic detox that cleanses your body, mind, and soul. Rebalance your health naturally.
                                </p>

                                <a href="#" class="btn btn-primary">Book Appointment</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide">
                    <div class="banner-image">
                      <img src="../assets/img/hero/banner-3.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="banner-content">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="banner-text">
                              <h1>
                                Nurture Your Baby’s Journey with <span>Garbhsanskar</span>
                              </h1>
                              <p>
                                A Blissful Start to Parenthood : Empower your pregnancy with ancient wisdom and holistic practices. Shape your baby’s future with love and positivity.
                              </p>

                              <a href="#" class="btn btn-primary">Book Appointment</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>

                <style>
                  .banner-home {
                    position: relative;
                    overflow: hidden;
                  }

                  .banner-container {
                    position: relative;
                    overflow: hidden;
                  }

                  .banner {
                    position: relative;
                    overflow: hidden;
                  }

                  .banner-image {
                    position: relative;
                    overflow: hidden;
                  }

                  .banner-image img {
                    width: 100%;
                    height: auto;
                  }

                  .banner-content {
                    position: absolute;
                    top: 50%;
                    left: 0;
                    width: 100%;
                    transform: translateY(-50%);
                    z-index: 1;
                  }

                  .banner-text {
                    position: relative;
                    z-index: 1;
                    padding: 20px;
                    background: rgba(0, 0, 0, 0.5);
                    color: #fff;
                  }

                  .banner-text h1 {
                    font-size: 40px;
                    font-weight: 700;
                    margin-bottom: 20px;
                  }

                  .banner-text h1 span {
                    color: #fbb03b;
                  }

                  .banner-text p {
                    font-size: 16px;
                    margin-bottom: 20px;
                  }

                  .banner-text a {
                    display: inline-block;
                    padding: 10px 20px;
                    background: #fbb03b;
                    color: #fff;
                    text-transform: uppercase;
                    font-weight: 700;
                    border-radius: 5px;
                  }

                  .banner-text a:hover {
                    text-decoration: none;
                  }

                  .splide__slide {
                    position: relative;
                    overflow: hidden;
                  }

                  .splide__slide img {
                    width: 100%;
                    height: auto;
                  }

                  .splide__track {
                    display: flex;
                    transition: transform 0.5s;
                  }

                  .splide__list {
                    display: flex;
                  }

                  .splide__slide {
                    flex: 0 0 100%;
                  }

                  .splide__pagination {
                    position: absolute;
                    bottom: 20px;
                    left: 50%;
                    transform: translateX(-50%);
                    z-index: 1;
                  }

                  .splide__pagination__page {
                    width: 10px;
                    height: 10px;
                    background: #fff;
                    border-radius: 50%;
                    margin: 0 5px;
                    cursor: pointer;
                  }


                  /* Inline #17 | http://localhost:5500/ */

                  .banner-text {
                    /* padding: 20px; */
                    /* background: rgba(0, 0, 0, 0.5); */
                    padding: 70px 30px;
                    background: rgba(244, 244, 244, 0.5);
                    border-radius: 10px;
                    filter: blur;
                  }

                  .banner-text {
                    /* background: rgba(244, 244, 244, 0.5); */
                    /* color: #fff; */
                    /* filter: blur; */
                    background: rgba(193, 193, 193, 0.64);
                    color: #000;
                  }
                </style>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    var splide = new Splide('.splide', {
      type: 'loop',
      perPage: 1,
      autoplay: true,
      pauseOnHover: false,
      interval: 3000, 
      resetProgress: false,
    });
    splide.mount();
  });
</script>