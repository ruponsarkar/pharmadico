@extends('layout')

@section('title', 'Contact Us')



@section('content')


    <div class="container pt-4">
        <div class="row pt-4">
            <div class="col-lg-10 offset-lg-1 pt-3">
                <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><i class="fas fa-mobile-alt fa-2x"></i></div>
                        <div class="contact_info_content">
                            <div class="contact_info_title">Phone</div>
                            <div class="contact_info_text">+639175079987</div>
                        </div>
                    </div>

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><i class="fas fa-envelope fa-2x"></i></div>
                        <div class="contact_info_content">
                            <div class="contact_info_title">Email</div>
                            <div class="contact_info_text">contact@sirpublishers.com</div>
                        </div>
                    </div>

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><i class="fas fa-map-marked-alt fa-2x"></i></div>
                        <div class="contact_info_content">
                            <div class="contact_info_title">Address</div>
                            <div class="contact_info_text"> Jannie Micao

                                235 Iraga, Solana, Cagayan Valley, Philippines 3500</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<br>
<br>
<!-- Contact Form -->

<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact_form_container">
                    <div class="contact_form_title">Get in Touch</div>

                    <form action="#" id="contact_form">
                        <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                            <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Your name" required="required" data-error="Name is required.">
                            <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="Your email" required="required" data-error="Email is required.">
                            <input type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Your phone number">
                        </div>
                        <div class="contact_form_text">
                            <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                        </div>
                        <br>
                        <div class="contact_form_button">
                            <button type="submit" class="btn effect01">Send Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
</div>
<br>
<br>

@endsection