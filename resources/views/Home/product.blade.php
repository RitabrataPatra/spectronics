<section class="work-process work-process-carousel pt-130 pb-0 bg-overlay bg-overlay-secondary">
    <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
    <div class="container">
      <div class="row heading-layout2 ">
        <div class="col-12 text-center">
          <h2 class="heading__title color-primary">Our Products</h2>
        </div><!-- /.col-12 -->
        <div class="col-sm-12 col-md-12 col-xl-5text-center mb-30">
          <h3 class="heading__title color-white">We Provide All Aspects Of Medical Practice For Your Whole Family!
          </h3>
        </div><!-- /.col-xl-5 -->
        
      </div><!-- /.row -->
      <div class="row">
        
            
        
        <div class="col-12">
          <div class="carousel-container">
            
            <div class="slick-carousel"
            
              data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite":false, "arrows": false, "dots": false, "responsive": [{"breakpoint": 1200, "settings": {"slidesToShow": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              @foreach ($products as $product)
              <!-- process item #1 -->
              <!-- /.process-item -->
              <!-- process-item #2 -->
              
              <div class="process-item">
                <img src="{{asset('uploads/'.$product->image)}}" alt="">
                
                <div class="process__icon">
                  <i class="icon-dna"></i>
                </div><!-- /.process__icon -->
                <h4 class="process__title">{{$product->title}}</h4>
               
                
              </div><!-- /.process-item -->
              <!-- process-item #3 -->
              
              <!-- process-item #4 -->
              
              <!-- process-item #5 -->
              @endforeach
            </div><!-- /.carousel -->
            
          </div>
          
        </div><!-- /.col-12 -->
        
      </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="cta bg-light-blue">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-2 col-lg-2">
            <img src="{{asset('asset/images/icons/alert2.png')}}" class="cta__img" alt="alert">
          </div><!-- /.col-lg-2 -->
          <div class="col-sm-12 col-md-7 col-lg-7">
            <h4 class="cta__title">True Healthcare For Your Family!</h4>
            <p class="cta__desc">Serve the community by improving the quality of life through better health. We have
              put protocols to protect our patients and staff while continuing to provide medically necessary care.
            </p>
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-12 col-lg-3">
            <a href="appointment.html" class="btn btn__primary btn__secondary-style2 btn__rounded">
              <span>Healthcare Programs</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.cta -->
  </section><!-- /.Work Process -->