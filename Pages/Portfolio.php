<?php 
 $page = "Portfolio";

require 'header.php';

?>
    <div class="scrollTop"><i class="bi bi-arrow-bar-up"></i></div>
    <!-- portfolio section -->
    <section id="Portfolio">
      <div class="container">
        <h2 class="title">PORTFOLIO</h2>
        <div class="row">
          <div class="d-flex flex-wrap justify-content-around head-btn">
            <button type="button" class="btn" data-filter="all">all</button>
            <button type="button" class="btn" data-filter=".WD">
              Website design
            </button>
            <button type="button" class="btn" data-filter=".FED">
              Font-End Development
            </button>
            <button type="button" class="btn" data-filter=".WDP">
              Web development
            </button>
            <button type="button" class="btn" data-filter=".WWD">
              WordPress Website Design
            </button>
            <button type="button" class="btn" data-filter=".ETD">
              Email Template Design
            </button>
          </div>
        </div>
        <div class="row gy-4 mb-5 pb-5 Portfolio_item">
          <div class="col-md-4 mix FED WD WDP">
            <div class="item_img_1 img"></div>
          </div>
          <div class="col-md-4 mix FED WD WDP WWD">
            <div class="item_img_2 img"></div>
          </div>
          <div class="col-md-4 mix ETD">
            <div class="item_img_3 img"></div>
          </div>
          <div class="col-md-4 mix FED WD">
            <div class="item_img_4 img"></div>
          </div>
          <div class="col-md-4 mix FED WD WDP">
            <div class="item_img_5 img"></div>
          </div>
          <div class="col-md-4 mix FED WD WDP">
            <div class="item_img_6 img"></div>
          </div>
          <div class="col-md-4 mix ETD">
            <div class="item_img_7 img"></div>
          </div>
          <div class="col-md-4 mix ETD">
            <div class="item_img_8 img"></div>
          </div>
          <div class="col-md-4 mix ETD">
            <div class="item_img_9 img"></div>
          </div>
        </div>
        <div class="text-center mt-5">
          <a href="Portfolio.html"
            ><button type="button" class="btn-big rounded-3 text-uppercase">
              <span>show all</span>
            </button></a
          >
        </div>
      </div>
    </section>
    <!-- #portfolio section -->
<!-- TESTIMONIALS section -->

<section id="Testimonal">
  <div class="container">
      <h2 class="title">TESTIMONIALS</h2>
      <div id="slider" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="row align-items-center">
              <div class="col-sm-5">
                <div class="text-center img">
                  <img src="../images/buyer_img/kreaytivefox.png" class="img-fluid rounded-circle" alt="clients" />
                  <h2 class="text-white text-center text-capitalize my-4">kreaytivefox</h2>
                  <h4 class=" text-white text-center text-capitalize my-4">From : <span  class="from">India</span></h4>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="comment-text">
                  <p class="text-white text-center text-md-start">
                  Awesome. Cool and Professional 
                  </p>
                  <div class="d-flex stars my-4 justify-content-center justify-content-md-start ">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="row align-items-center">
              <div class="col-sm-5">
                <div class="text-center img">
                  <img src="../images/buyer_img/hustlebug.png" class="img-fluid rounded-circle" alt="clients" />
                  <h2 class="text-white text-center text-capitalize my-4">hustlebug</h2>
                  <h4 class=" text-white text-center text-capitalize my-4">From : <span  class="from">United States</span></h4>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="comment-text">
                  <p class="text-white text-center text-md-start">
                  Great working with md_nazmulislam5! He does excellent work and I will definitely reorder. Thanks!
                  </p>
                  <div class="d-flex stars my-4 justify-content-center justify-content-md-start ">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="row align-items-center">
              <div class="col-sm-5">
                <div class="text-center img">
                  <img src="../images/buyer_img/davidpooley.png" class="img-fluid rounded-circle" alt="clients" />
                  <h2 class="text-white text-center text-capitalize my-4">davidpooley</h2>
                  <h4 class=" text-white text-center text-capitalize my-4">From : <span  class="from">American Samoa</span></h4>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="comment-text">
                  <p class="text-white text-center text-md-start">
                  i am super happy with md_nazmulislam5 work! thank you very much!
                  </p>
                  <div class="d-flex stars my-4 justify-content-center justify-content-md-start ">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="row align-items-center">
              <div class="col-sm-5">
                <div class="text-center img">
                  <img src="../images/buyer_img/joshuabernheim.png" class="img-fluid rounded-circle" alt="clients" />
                  <h2 class="text-white text-center text-capitalize my-4">joshuabernheim</h2>
                  <h4 class=" text-white text-center text-capitalize my-4">From : <span  class="from">United States</span></h4>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="comment-text">
                  <p class="text-white text-center text-md-start">
                  Seller created a great design and was easy to work with.
                  </p>
                  <div class="d-flex stars my-4 justify-content-center justify-content-md-start ">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="row align-items-center">
              <div class="col-sm-5">
                <div class="text-center img">
                  <img src="../images/buyer_img/majorshahjee.png" class="img-fluid rounded-circle" alt="clients" />
                  <h2 class="text-white text-center text-capitalize my-4">majorshahjee</h2>
                  <h4 class=" text-white text-center text-capitalize my-4">From : <span  class="from">Pakistan</span></h4>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="comment-text">
                  <p class="text-white text-center text-md-start">
                  Nice job.. I recommend you
                  </p>
                  <div class="d-flex stars my-4 justify-content-center justify-content-md-start ">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="row align-items-center">
              <div class="col-sm-5">
                <div class="text-center img">
                  <img src="../images/buyer_img/sergio_iriarte.png" class="img-fluid rounded-circle" alt="clients" />
                  <h2 class="text-white text-center text-capitalize my-4">sergio_iriarte</h2>
                  <h4 class=" text-white text-center text-capitalize my-4">From : <span  class="from">Spain</span></h4>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="comment-text">
                  <p class="text-white text-center text-md-start">
                  Great seller. Will use again. Beautiful work.
                  </p>
                  <div class="d-flex stars my-4 justify-content-center justify-content-md-start ">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="row align-items-center">
              <div class="col-sm-5">
                <div class="text-center img">
                  <img src="../images/buyer_img/sivexcom.png" class="img-fluid rounded-circle" alt="clients" />
                  <h2 class="text-white text-center text-capitalize my-4">sivexcom</h2>
                  <h4 class=" text-white text-center text-capitalize my-4">From : <span  class="from">Nigeria</span></h4>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="comment-text">
                  <p class="text-white text-center text-md-start">
                  good experience!
                  </p>
                  <div class="d-flex stars my-4 justify-content-center justify-content-md-start ">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="row align-items-center">
              <div class="col-sm-5">
                <div class="text-center img">
                  <img src="../images/buyer_img/asafgal.png" class="img-fluid rounded-circle" alt="clients" />
                  <h2 class="text-white text-center text-capitalize my-4">asafgal</h2>
                  <h4 class=" text-white text-center text-capitalize my-4">From : <span  class="from">Slovakia</span></h4>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="comment-text">
                  <p class="text-white text-center text-md-start">
                  Good guy! Fast turnaround!
                  </p>
                  <div class="d-flex stars my-4 justify-content-center justify-content-md-start ">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
        <i class="bi bi-chevron-double-left"></i>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
        <i class="bi bi-chevron-double-right"></i>
        </button>
      </div>


</section>

<!-- #TESTIMONIALS section -->

    <?php require 'footer.php';?>
