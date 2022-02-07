@extends ('layouts.elements')

@section('content')
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Donate</h6>
                <h1 class="breadcrumbs-custom-title">Donate</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Donate</li>
            </ul>
        </div>
    </div>
</section>
<section class="section section-lg mx-auto" style="background: url(&quot;images/bg-4.jpeg&quot;) center; background-size: contain; background-position: right top; max-width: 75vw; background-repeat: no-repeat">
    <div class="container">
        <div class="row row-50 justify-content-center justify-content-lg-between">
        <div class="col-md-10 col-lg-6">
            <h4 class="offset-top-3">Make Your Donations</h4>
            <p>The Olubanke  Oniru campaign team is raising $500 per supporter. If you received a link to this page, we would greatly appreciate your financial support in helping us strategize, campaign, protect lives against the brutality of elections in Nigeria and maximize the possibilities of winning. We also hope you’ll work with us before, during and after the elections for a progressive Nigeria. Please donate via PayPal to support and help us win a seat at the National Assembly in Nigeria. If you would like to donate a smaller or larger amount at your discretion, please send it via PayPal or send it directly to 0521272051 Victoria Oniru Guaranty Trust Bank.
            <br />
            Thank you for helping us as we endeavor to build the Nigeria-Africa many millions of citizens have dreamt of for decades. Africa’s time is now.</p>
            <div class="group group-middle"><a class="button button-primary button-winona" href="https://www.paypal.com/donate/?hosted_button_id=57KCXM7GDL7L2">Use PayPal</a></div>
        </div>
        </div>
    </div>
</section>
@endsection