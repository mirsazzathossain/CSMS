<x-app-layout>
    <section class="contact-2 page-section-ptb white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 justify-content-center">
                    <div class="section-title">
                        <span>We’d Love to Hear From You</span>
                        <h2>LET'S GET IN TOUCH!</h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-12 mb-lg-0 mb-1">
                    <div class="gray-form row">
                        <div class="col-md-12">
                            <form class="form-horizontal my-4" action="{{route('contact-post')}}" id="contactform" role="form" method="POST">
                                @csrf

                                @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    <i class="fas fa-check"></i> {{ session('success') }}
                                </div>
                                @endif
                                <div class="contact-form">
                                    <div class="form-group">
                                        <input id="contactform_name" type="text" placeholder="Name*"
                                            class="form-control" name="name" />
                                    </div>
                                    <div class="form-group">
                                        <input id="contactform_email" type="email" placeholder="Email*"
                                            class="form-control" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <input id="contactform_phone" type="text" placeholder="Phone*"
                                            class="form-control" name="phone" />
                                    </div>
                                    <div class="form-group">
                                        <textarea id="contactform_message" class="form-control input-message"
                                            placeholder="Comment*" rows="7" name="message"></textarea>
                                    </div>

                                    <button type="submit" value="Send" class="button red">
                                        Send your message
                                        <i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="content">
                            <h5>Address</h5>
                            <p>Road# 11, Block# E, Banani, Dhaka-1213</p>
                        </div>
                    </div>
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <h5>Phone</h5>
                            <p>(+880) 123 456 7890</p>
                        </div>
                    </div>
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="content">
                            <h5>Email</h5>
                            <p>admin@gmail.com</p>
                        </div>
                    </div>
                    <div class="opening-hours gray-bg">
                        <h6>opening hours</h6>
                        <ul class="list-style-none">
                            <li>
                                <strong>Friday </strong>
                                <span class="text-red"> closed</span>
                            </li>
                            <li>
                                <strong>Sat-Sun</strong>
                                <span> 9:00 AM to 9:00 PM</span>
                            </li>
                            <li>
                                <strong>Mon-Tue</strong>
                                <span> 9:00 AM to 9:00 PM</span>
                            </li>
                            <li>
                                <strong>Wed-Thu</strong>
                                <span> 9:00 AM to 9:00 PM</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>