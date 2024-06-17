<section class="testimonials-layout2 pt-130 pb-40">
    <div class="container">
      <div class="testimonials-wrapper">
        <div class="row">
          <div class="col-sm-12 col-md-12 ">
            <div class="heading-layout2 text-center mb-50">
              <h3 class="heading__title">Testimonials</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-5 -->
          
              
          
          <div class="col-sm-12 col-md-12 ">
            
            <div class="slider-with-navs">
              @foreach ($testimonials as $testimonial)
              <!-- Testimonial #1 -->
              <div class="testimonial-item">
                <h3 class="testimonial__title">{{$testimonial->Testimonials}}</h3>
              </div><!-- /. testimonial-item -->
              @endforeach
              
              
              
            </div><!-- /.slick-carousel -->
            
            <div class="slider-nav mb-60">
              @foreach ($testimonials as $testimonial)
                  
              
              <div class="testimonial__meta">
                <div class="testimonial__thmb">
                  <img src="{{asset('asset/images/testimonials/thumbs/1.png')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div>
                  <h4 class="testimonial__meta-title">{{$testimonial->title}}</h4>
                  <p class="testimonial__meta-desc">{{$testimonial->designation}}</p>
                </div>
              </div><!-- /.testimonial-meta -->
              @endforeach
              
              
              
            </div><!-- /.slider-nav -->
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
      </div><!-- /.testimonials-wrapper -->
    </div><!-- /.container -->
  </section><!-- /.testimonials layout 2 -->

  <div class="slick-carousel clients-dark"
            data-slick='{"slidesToShow": 5, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
            <div class="client">
              <img src="{{asset('asset/images/clients/1.png')}}" alt="client">
              <img src="{{asset('asset/images/clients/1.png')}}" alt="client">
            </div><!-- /.client -->
            <div class="client">
              <img src="{{asset('asset/images/clients/2.png')}}" alt="client">
              <img src="{{asset('asset/images/clients/2.png')}}" alt="client">
            </div><!-- /.client -->
            <div class="client">
              <img src="{{asset('asset/images/clients/3.png')}}" alt="client">
              <img src="{{asset('asset/images/clients/3.png')}}" alt="client">
            </div><!-- /.client -->
            <div class="client">
              <img src="{{asset('asset/images/clients/4.png')}}" alt="client">
              <img src="{{asset('asset/images/clients/4.png')}}" alt="client">
            </div><!-- /.client -->
            <div class="client">
              <img src="{{asset('asset/images/clients/5.png')}}" alt="client">
              <img src="{{asset('asset/images/clients/5.png')}}" alt="client">
            </div><!-- /.client -->
            <div class="client">
              <img src="{{asset('asset/images/clients/6.png')}}" alt="client">
              <img src="{{asset('asset/images/clients/6.png')}}" alt="client">
            </div><!-- /.client -->
            <div class="client">
              <img src="{{asset('asset/images/clients/7.png')}}" alt="client">
              <img src="{{asset('asset/images/clients/7.png')}}" alt="client">
            </div><!-- /.client -->
          </div>

  <!-- ========================
     gallery
    =========================== -->
 
  <!-- /.gallery 2 -->

  <!-- ==========================
      contact layout 3
  =========================== -->
  {{-- <section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
    <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="banner"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-7">
          <div class="contact-panel mb-50">
            <form class="contact-panel__form" method="post" action="https://7oroof.com/demos/medcity/assets/php/contact.php" id="contactForm">
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="contact-panel__title">Enquiry Form</h4>
                  <p class="contact-panel__desc mb-30">Please provide the neceessary details and we will get in touch with you shortly!
                  
                </div>
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <i class="icon-news form-group-icon"></i>
                    <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                      required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <i class="icon-email form-group-icon"></i>
                    <input type="email" class="form-control" placeholder="Email" id="contact-email"
                      name="contact-email" required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <i class="icon-user form-group-icon"></i>
                    <select class="form-control">
                      <option value="0">Subject</option>
                      <option value="1">Ahmed Abdallah</option>
                      <option value="2">Mahmoud Begha</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="form-group">
                    <i class="icon-phone form-group-icon"></i>
                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                      name="contact-phone" required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-4 col-md-4 col-lg-12">
                  <div class="form-group">
                    <i class="icon-calendar form-group-icon"></i>
                    <textarea class="form-control" id="contact-Message" cols="10" rows="3" placeholder="Message" required></textarea>
                  </div>
                </div>
               <!-- /.col-lg-4 -->
               <!-- /.col-lg-4 -->
                <div class="col-12">
                  <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                    <span>Book Appointment</span> <i class="icon-arrow-right"></i>
                  </button>
                  <div class="contact-result"></div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div>
        </div><!-- /.col-lg-7 -->
        <div class="col-sm-12 col-md-12 col-lg-5">
          <div class="heading heading-light mb-30">
            <h3 class="heading__title mb-30">Helping Patients From Around the Globe!!</h3>
            <p class="heading__desc">Our staff strives to make each interaction with patients clear, concise, and
              inviting. Support the important work of Medicsh Hospital by making a much-needed donation today.
            </p>
          </div>
          <!-- <div class="d-flex align-items-center">
            <a href="contact-us.html" class="btn btn__white btn__rounded mr-30">
              <i class="fas fa-heart"></i> <span>Make A Gift</span>
            </a>
            <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
              <div class="video__player">
                <i class="fa fa-play"></i>
              </div>
              <span class="video__btn-title color-white">Play Video</span>
            </a>
          </div> -->
          <!-- <div class="text__block">
            <p class="text__block-desc color-white font-weight-bold">We provide a comprehensive range of plans for
              families and individuals at every stage of life, with annual limits ranging from £1.5m to unlimited.</p>
            <div class="sinature color-white">
              <span class="font-weight-bold">Martin Qube</span><span>, Medcity Manager</span>
            </div>
          </div>/.text__block -->
          <div class="slick-carousel clients-light mt-20"
            data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
            <div class="client">
              <img src="{{asset('images/clients/1.png')}}" alt="client">
              <img src="{{asset('images/clients/1.png')}}" alt="client">
            </div><!-- /.client -->
            <div class="client">
              <img src="{{asset('images/clients/2.png')}}" alt="client">
              <img src="{{asset('images/clients/2.png')}}" alt="client">
            </div><!-- /.client -->
            <div class="client">
              <img src="{{asset('images/clients/3.png')}}" alt="client">
              <img src="{{asset('images/clients/3.png')}}" alt="client">
            </div><!-- /.client -->
            <div class="client">
              <img src="{{asset('images/clients/4.png')}}" alt="client">
              <img src="{{asset('images/clients/4.png')}}" alt="client">
            </div><!-- /.client -->
            <div class="client">
              <img src="{{asset('images/clients/5.png')}}" alt="client">
              <img src="{{asset('images/clients/5.png')}}" alt="client">
            </div><!-- /.client -->
            <div class="client">
              <img src="{{asset('images/clients/6.png')}}" alt="client">
              <img src="{{asset('images/clients/6.png')}}" alt="client">
            </div><!-- /.client -->
            <div class="client">
              <img src="{{asset('images/clients/7.png')}}" alt="client">
              <img src="{{asset('images/clients/7.png')}}" alt="client">
            </div><!-- /.client -->
          </div><!-- /.carousel -->
        </div><!-- /.col-lg-5 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.contact layout 3 --> --}}

  <!-- ======================
    Blog Grid
  ========================= -->
  <!-- /.blog Grid -->
