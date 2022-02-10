@extends ('layouts.elements')

@section('content')
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">History</h6>
                <h1 class="breadcrumbs-custom-title">End SARS</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">End SARS</li>
            </ul>
        </div>
    </div>
</section>

<section class="section section-md">
    <div class="container">
        <!-- Profile Modern-->
        <article class="profile-modern">
        <div class="profile-modern-figure"><img class="profile-modern-image" src="images/sars-man.jpeg" alt="" width="336" height="336">
        </div>
        <div class="profile-modern-main">
            <div class="profile-modern-header">
            <div class="profile-modern-header-item">
                <h3>Olubanke Oniru</h3>
                <p>Endsars activist and coordinator. </p>
            </div>
            <div class="profile-modern-item">
                <div class="group group-xs group-middle">
                    <a class="icon icon-sm icon-creative mdi mdi-facebook" href="https://www.facebook.com/voniru" target="blank"></a>
                    <a class="icon icon-sm icon-creative mdi mdi-twitter" href="https://twitter.com/hrh_bankeoniru" target="blank"></a>
                    <a class="icon icon-sm icon-creative mdi mdi-instagram" href="https://www.instagram.com/banke_oniru_2023/" target="blank"></a>
                    <!-- <a class="icon icon-sm icon-creative mdi mdi-google" href="#"></a>
                    <a class="icon icon-sm icon-creative mdi mdi-linkedin" href="#"></a> -->
                </div>
            </div>
            </div>
            <div class="row row-30">
            <div class="col-lg-6">
                <p>Tens of thousands of young Nigerians took to the streets to protest against police brutality after a video went viral of a man allegedly being killed by the notorious Special Anti-Robbery Squad (Sars), sparking what became known as the #EndSars demonstration</p>
            </div>
            <div class="col-lg-6">
                    <!-- Linear progress bar-->
                    <article class="progress-linear animated-first">
                        <div class="progress-header">
                        <p>Dedication</p><span class="progress-value">100</span>
                        </div>
                        <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" style="width: 100%;"></div>
                        </div>
                    </article>
                    <!-- Linear progress bar-->
                    <article class="progress-linear animated-first">
                        <div class="progress-header">
                        <p>Passion</p><span class="progress-value">100</span>
                        </div>
                        <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" style="width: 100%;"></div>
                        </div>
                    </article>
                    <!-- Linear progress bar-->
                    <article class="progress-linear animated-first">
                        <div class="progress-header">
                        <p>Empathy</p><span class="progress-value">100</span>
                        </div>
                        <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" style="width: 100%;"></div>
                        </div>
                    </article>
            </div>
            </div>
        </div>
        </article>
    </div>
</section>
@endsection