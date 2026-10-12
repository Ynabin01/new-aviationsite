@extends("layouts.master")

@section('content')

    <div id="ahn-contact-page">

<div class="container-xxl custom-header-page position-relative text-center text-white" style="background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('/website/img/bcumb.jpg') center/cover no-repeat; height: 280px;">
    <div class="container custom-header-content h-100 d-flex flex-column justify-content-center align-items-center">
        <!-- Breadcrumb -->
        <div class="custom-breadcrumb d-flex flex-wrap align-items-center justify-content-center mb-2 text-uppercase fw-medium small text-white-50">
            <span>Home</span>
            <span class="mx-2">/</span>
            <span>Contact</span>
        </div>
        <!-- Main Title -->
        <h1 class="custom-header-title display-6 fw-bold text-white">
            Contact Us
        </h1>
    </div>
</div>

        {{-- Contact Introduction --}}
        <section class="ahn-contact-main">

            <div class="ahn-contact-container">

                <div class="ahn-contact-intro" data-aos="fade-up">
                    <span class="ahn-contact-section-label">
                        <span></span> LET'S CONNECT
                    </span>

                    <h2>Let's Get <span>In Touch</span></h2>

                    <p>
                        Have a question about aviation education, pilot training,
                        or our services? Our team is ready to assist you.
                        Reach out to us using the details below.
                    </p>
                </div>


                {{-- Contact Information Cards --}}
                <div class="ahn-contact-info-grid">

                    {{-- Address --}}
                    <div class="ahn-contact-info-card" data-aos="fade-up" data-aos-delay="100">

                        <div class="ahn-contact-card-top">
                            <div class="ahn-contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span class="ahn-contact-card-number">01</span>
                        </div>

                        <div class="ahn-contact-card-content">
                            <span class="ahn-contact-card-label">FIND OUR OFFICE</span>
                            <h3>Our Address</h3>

                            <p>
                                {{ $global_setting->website_full_address }}
                            </p>
                        </div>

                        <div class="ahn-contact-card-footer">
                            <span>Visit Aviation Hub Nepal</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>


                    {{-- Phone --}}
                    <div class="ahn-contact-info-card" data-aos="fade-up" data-aos-delay="200">

                        <div class="ahn-contact-card-top">
                            <div class="ahn-contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <span class="ahn-contact-card-number">02</span>
                        </div>

                        <div class="ahn-contact-card-content">
                            <span class="ahn-contact-card-label">WE'RE HERE TO HELP</span>
                            <h3>Phone Number</h3>

                            <p>
                                {{ $global_setting->phone }}
                            </p>
                        </div>

                        <div class="ahn-contact-card-footer">
                            <span>Speak with our team</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>


                    {{-- Email --}}
                    <div class="ahn-contact-info-card" data-aos="fade-up" data-aos-delay="300">

                        <div class="ahn-contact-card-top">
                            <div class="ahn-contact-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <span class="ahn-contact-card-number">03</span>
                        </div>

                        <div class="ahn-contact-card-content">
                            <span class="ahn-contact-card-label">SEND US A MESSAGE</span>
                            <h3>Email Address</h3>

                            <p>
                                {{ $global_setting->site_email }}
                            </p>
                        </div>

                        <div class="ahn-contact-card-footer">
                            <span>Get in touch by email</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>

                </div>


                {{-- Contact Form and Information --}}
                <div class="ahn-contact-workspace">

                    {{-- Left Information Panel --}}
                    <div class="ahn-contact-side-panel" data-aos="fade-right">

                        <span class="ahn-contact-side-label">AVIATION HUB NEPAL</span>

                        <h2>
                            Your Aviation Journey
                            <span>Starts With a Conversation.</span>
                        </h2>

                        <p>
                            Whether you need information about our training
                            opportunities or have a general inquiry, send us
                            a message. We look forward to hearing from you.
                        </p>

                        <div class="ahn-contact-side-divider"></div>

                        <div class="ahn-contact-benefit">
                            <div class="ahn-contact-benefit-icon">
                                <i class="fas fa-comments"></i>
                            </div>

                            <div>
                                <h4>Personal Assistance</h4>
                                <p>Get help with your questions and inquiries.</p>
                            </div>
                        </div>

                        <div class="ahn-contact-benefit">
                            <div class="ahn-contact-benefit-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>

                            <div>
                                <h4>Aviation Education</h4>
                                <p>Ask about aviation learning and training opportunities.</p>
                            </div>
                        </div>

                        <div class="ahn-contact-side-note">
                            <i class="fas fa-paper-plane"></i>
                            <span>Let's discuss your next step.</span>
                        </div>

                    </div>


                    {{-- Right Contact Form --}}
                    <div class="ahn-contact-form-panel" data-aos="fade-left">

                        <div class="ahn-contact-form-heading">
                            <span class="ahn-contact-form-label">SEND AN INQUIRY</span>

                            <h2>How Can We Help?</h2>

                            <p>
                                Fill out the form below and send us your message.
                            </p>
                        </div>


                        <form role="form" action="{{ route('contactstore') }}" method="post" enctype="multipart/form-data">

                            @csrf

                            <div class="ahn-contact-form-grid">

                                <div class="ahn-contact-field">
                                    <label for="ahn-contact-name">
                                        Your Name <span>*</span>
                                    </label>

                                    <div class="ahn-contact-input-wrap">
                                        <i class="far fa-user"></i>

                                        <input type="text" class="ahn-contact-input" name="first_name" id="ahn-contact-name"
                                            placeholder="Enter your full name" autocomplete="name" required>
                                    </div>
                                </div>


                                <div class="ahn-contact-field">
                                    <label for="ahn-contact-email">
                                        Email Address <span>*</span>
                                    </label>

                                    <div class="ahn-contact-input-wrap">
                                        <i class="far fa-envelope"></i>

                                        <input type="email" class="ahn-contact-input" name="email" id="ahn-contact-email"
                                            placeholder="Enter your email" autocomplete="email" required>
                                    </div>
                                </div>


                                <div class="ahn-contact-field ahn-contact-field-full">
                                    <label for="ahn-contact-subject">
                                        Subject
                                    </label>

                                    <div class="ahn-contact-input-wrap">
                                        <i class="far fa-edit"></i>

                                        <input type="text" class="ahn-contact-input" name="subject" id="ahn-contact-subject"
                                            placeholder="What would you like to discuss?">
                                    </div>
                                </div>


                                <div class="ahn-contact-field ahn-contact-field-full">
                                    <label for="ahn-contact-message">
                                        Your Message
                                    </label>

                                    <div class="ahn-contact-input-wrap ahn-contact-textarea-wrap">
                                        <i class="far fa-comment-dots"></i>

                                        <textarea class="ahn-contact-input" name="message" id="ahn-contact-message"
                                            placeholder="Write your message here..." rows="5"></textarea>
                                    </div>
                                </div>


                                <div class="ahn-contact-field-full">
                                    <button type="submit" class="ahn-contact-submit">
                                        <span>Send Your Message</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </button>

                                    <p class="ahn-contact-form-note">
                                        <i class="fas fa-lock"></i>
                                        Your information will be submitted securely.
                                    </p>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>


                {{-- Location / Google Map --}}
                <div class="ahn-contact-location" data-aos="fade-up">

                    <div class="ahn-contact-location-heading">
                        <div>
                            <span class="ahn-contact-section-label">
                                <span></span> FIND US
                            </span>

                            <h2>Visit Our <span>Location</span></h2>

                            <p>
                                Find us in Kathmandu, Nepal, and connect with our team.
                            </p>
                        </div>

                        <div class="ahn-contact-location-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                    </div>

                    <div class="ahn-contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44668.46432989629!2d85.28493276485202!3d27.70903024219139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e1!3m2!1sen!2snp!4v1755687932394!5m2!1sen!2snp"
                            title="Aviation Hub Nepal location map" width="100%" height="380" style="border:0;"
                            allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                </div>

            </div>
        </section>

    </div>

@endsection

 