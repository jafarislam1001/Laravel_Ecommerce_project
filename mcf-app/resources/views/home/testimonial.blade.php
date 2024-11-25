<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')

    <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Mim Colour Fashion
                  </h5>
                  <h6>
                    Customer Testimonials
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Our valued customers' feedback is the measure of our success.
We're honored to serve what may be the world's most discerning clientele. 
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Mim Colour Fashion
                  </h5>
                  <h6>
                    Customer Satisfaction
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "I love my new Panjabi, it is so soft and comfortable. Your practices speaks volumes for the philosophy of your values. Thank you so much for your warmth and passion in all that you share with your customers. I will be sure to come visit you again when I am in town, and spread the word about the store to those who may not know the value of sustainable products."
                Md Jafar.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Farzana Rimi
                  </h5>
                  <h6>
                    Customer Satisfaction
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "My purchase is fantastic! I love Saree, stylish, and functional. I love them. I get compliments when I wear either piece. Thank you for your beautiful store. It was wonderful meeting you and your store is such a treat. It is people like you and places like your store that inspire us all to live better, love stronger, trust whole-heartedly, and be earth friendly. Thank you. Sending you a little Colorado love."
                Farzana Rimi.
              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->
    


    
@include('home.footer')
  

</body>

</html>