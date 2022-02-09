@extends ('layouts.elements')

@section('content')
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Our Cause</h6>
                <h1 class="breadcrumbs-custom-title">Volunteer</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Volunteer</li>
            </ul>
        </div>
    </div>
</section>

<section class="section section-lg mx-auto about-section" >
    <div class="container">
        <div class="row row-50 justify-content-center justify-content-lg-between">
        <div class="col-md-10 col-lg-6">
            <h4 class="offset-top-3">Volunteer</h4>
            <p>To Volunteer, just send an email to info@bankeoniru2023.com.ng, or click the button below
            <br />
            
            <div class="group group-middle"><a class="button button-primary button-winona" href="mailto:info@bankeoniru2023.com.ng">Volunteer</a></div>
        </div>
        </div>
    </div>
</section>
@endsection