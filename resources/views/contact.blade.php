@extends ('layouts.elements')

@section('content')
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Contacts</h6>
                <h1 class="breadcrumbs-custom-title">Contact Us</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Contacts</li>
            </ul>
        </div>
    </div>
</section>
    <section class="section section-sm">
        <div class="container">
          <div class="layout-bordered">
            <div class="layout-bordered-item wow-outer">
                <div class="layout-bordered-item-inner wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                    <div class="icon icon-lg mdi mdi-phone text-primary"></div>
                    <ul class="list-0">
                        <li><a class="link-default" href="tel:+2347057537777">0705-753-7777</a></li>
                    </ul>
                </div>
            </div>
            <div class="layout-bordered-item wow-outer">
                <div class="layout-bordered-item-inner wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                    <div class="icon icon-lg mdi mdi-email text-primary"></div><a class="link-default" href="mailto:olubanke@bankeoniru2023.com.ng">olubanke@bankeoniru2023.com.ng</a>
                </div>
            </div>
            <div class="layout-bordered-item wow-outer">
                <div class="layout-bordered-item-inner wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                    <div class="icon icon-lg mdi mdi-map-marker text-primary"></div><a class="link-default" href="#">Lagos Central Senatorial District</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-gray-100">
    <div class="range justify-content-xl-between">
        <div class="align-self-center container">
            <div class="row">
                <div class="col-lg-9 cell-inner">
                    <div class="section-lg">
                        <h3 class="wow-outer"><span class="wow slideInDown" style="visibility: visible; animation-name: slideInDown;">Contact Us</span></h3>
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" novalidate="novalidate">
                            <div class="row row-10">
                            <div class="col-md-6 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                                <label class="form-label-outside" for="contact-first-name">First Name</label>
                                <input class="form-input form-control-has-validation form-control-last-child" id="contact-first-name" type="text" name="firstname" data-constraints="@Required"><span class="form-validation"></span>
                                </div>
                            </div>
                            <div class="col-md-6 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                                <label class="form-label-outside" for="contact-last-name">Last Name</label>
                                <input class="form-input form-control-has-validation form-control-last-child" id="contact-last-name" type="text" name="lastname" data-constraints="@Required"><span class="form-validation"></span>
                                </div>
                            </div>
                            <div class="col-md-6 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                                <label class="form-label-outside" for="contact-email">E-mail</label>
                                <input class="form-input form-control-has-validation form-control-last-child" id="contact-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                                </div>
                            </div>
                            <div class="col-md-6 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                                <label class="form-label-outside" for="contact-phone">Phone</label>
                                <input class="form-input form-control-has-validation form-control-last-child" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber"><span class="form-validation"></span>
                                </div>
                            </div>
                            <div class="col-12 wow-outer">
                                <div class="form-wrap wow fadeSlideInUp" style="visibility: visible; animation-name: fadeSlideInUp;">
                                <label class="form-label-outside" for="contact-message">Your Message</label>
                                <textarea class="form-input form-control-has-validation form-control-last-child" id="contact-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                                </div>
                            </div>
                            </div>
                            <div class="group group-middle">
                                <div class="wow-outer"> 
                                    <button class="button button-primary button-winona wow slideInRight" type="submit" style="visibility: visible; animation-name: slideInRight;">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection