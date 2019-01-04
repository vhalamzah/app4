@extends('layouts.frontendpages')
@section('content')

  <div class="contact">
    <div class="container">
      <div class="text-center">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h2>Contact Us</h2>         
        </div>
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <p>Get in touch with us to get the best services you could ever imagine </p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="col-md-7">
      <div class="map">       
        <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
      </div>
    </div>
    
    <div class="contact-info">
      <div class="col-md-5">
        <h2>We Are Rainbow&Tech </h2>
        <h3>We Inspires Our Customers & Clients</h3>
        <p>Talk to to us about anything you wish, you can visit us at our offices, call us or send an Email</p>
        <ul>
          <li><i class="fa fa-home fa-2x"></i>Faranani Sreet #164, Thohoyandou Block G</li>
          <li><i class="fa fa-phone fa-2x"></i> +27 81 310 1484</li>
          <li><i class="fa fa-envelope fa-2x"></i> kukzeela@gmail.com </li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="contact-form">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    
                    <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
                </form>
            </div>
        </div>
  </div>

 @endsection