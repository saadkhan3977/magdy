@extends('layouts.app_front')

@section('content')
<div class="cont_mu">
    <div class="container formsection">
        <div class="py-5 text-center">
          
          <h3 class="top_heading_mu fs-1 text-white">CONTACT US</h3>
        </div>
        <!-- pagetitleend -->

        <!-- maincontent -->
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4 contact_info">
                    <h3 class="text-wh fs-3 pt-5 help_head"><u>How Can We Help? </u></h3>
                    <p class="text-w pt-4 pb-3 fs-5 help_para">Please fill out all required fields in the form and describe as much as you can so we can better assist you, if you didn’t find what you are looking for please select “Other Inquiries” and fill the description section. We usually respond within 24hr , you can give us a call on: Phone Number: 1234567890, or you can send us an email on: info@gmail.com </p>
                    
                </div>
                <!-- <div class="col-md-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26360909.888257876!2d-113.74875964478716!3d36.242299409623534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1672771503103!5m2!1sen!2s" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                </div> -->
                <div class="col-md-8 form_box">
                    <div class="contact_form-mu">
                    <form action="post">
                        <input type="text" class="mb-3" name="Name" id="name" placeholder="Email Address">
                        <input type="text" class="mb-3" name="Name" id="name" placeholder="Order #">
                        <select id="country" name="country">
                          <option value="australia">Registration Inquiry</option>
                          <option value="canada">Payment Inquiry</option>
                          <option value="usa">Pending Package Status</option>
                          <option value="usa">Shipping Inquiry</option>
                          <option value="usa">Deliveries and Claims</option>
                          <option value="usa">Additional Services</option>
                          <option value="usa">Account Inquiry</option>
                          <option value="usa">Other Inquiries</option>
                        </select>
                        <input type="phone" class="mb-3" name="Name" id="name" placeholder="Message Details">
                        <h5 class="text-dark text-center">Please answere the following question</h5>
                        <h5 class="text-center text-dark fs-2">4 + 2 = ?</h5>
                        <input type="text" class="mb-3" name="Name" id="name" placeholder="Enter your answere">

                          <!-- <textarea class="form-control" name="message_text" id="" rows="8" placeholder="Message"></textarea> -->
                          <input type="button" class="mt-3 formsubmitt_btn" value="Submitt">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <!-- footer -->

 <div>
 <div>
    @endsection