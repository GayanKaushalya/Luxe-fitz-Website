@extends('layouts.app')

@section('title', 'Contact Us - LUXEFITS')

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <!-- ... (Paste the "page-heading" div from your contact.html here) ... -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Contact Area Starts ***** -->
    <div class="contact-us">
        <!-- ... (Paste the "contact-us" div from your contact.html here) ... -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8324844921507!2d79.95457601477149!3d6.904092220129067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2568ec5555555%3A0x7fd1fa1dbb07b68c!2sMalabe%2C%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1719658577200!5m2!1sen!2slk" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                      <!-- You can simply copy and paste "Embed a map" code from Google Maps for any location. -->

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Say Hello. Don't Be Shy!</h2>
                        <span>Details to details is what makes LUXE FITS different from the other themes.</span>
                    </div>
                    <form id="contact" action="" method="post">
                        <div class="row">
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Your message" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>

    </div>
    <!-- ***** Contact Area Ends ***** -->

@endsection
