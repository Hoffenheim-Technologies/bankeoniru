@extends ('layouts.elements')

@section('content')

<section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">History</h6>
                <h1 class="breadcrumbs-custom-title">Leadership History</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Political History</li>
            </ul>
        </div>
    </div>
</section>

<section class="section section-lg bg-gray-100">
  <div class="container">
    <h3 class="text-center">Olubanke Oniru Leadership History</h3>
    <div class="row row-50 justify-content-center justify-content-lg-start" style="align-items: center;">
      <div class="col-md-10 col-lg-7 wow-outer">
        <!-- Post Block-->
        <article class="post-block bg-gray-700">
            <img class="post-block-imae" src="images/leadership-cv1.jpg" alt="" width="900" height="800">
          <!-- <div class="post-block-caption">
            <ul class="post-block-meta">
              <li class="wow-outer">
                    <!-- <span class="wow slideInLeft">
                        An organization to fight against police brutality and ensure that citizens of Nigeria get the justice they truly deserves
                    </span> -->
                </li>
              <!-- <li class="wow-outer"><a class="button-winona wow slideInLeft" href="#" style="visibility: hidden; animation-name: none;">News</a></li>
              <li class="wow-outer">
                <time class="wow slideInLeft" datetime="2018" style="visibility: hidden; animation-name: none;">April 2, 2018</time>
              </li> -->
            </ul>
            <!-- <h4 class="post-block-title">Founder and president Competent Nigerians.</h4> --
          </div> -->
          <div class="post-block-dummy"></div>
        </article>
      </div>
      <div class="col-md-10 col-lg-5">
        <div class="post-light-group wow-outer">
          <!-- Post Light-->
          <article class="post-light wow slideInLeft">
            <time class="post-light-time" datetime="2018"><span class="post-light-time-big">1</span><span class="post-light-time-small"></span></time>
            <div class="post-light-main">
              <h4 class="post-light-title">Advocate for increased diversity in the environmental movement. </h4>
              <ul class="post-light-meta">
                <li>Olubanke Oniru</li>
                <li>History</li>
              </ul>
            </div>
          </article>
          <!-- Post Light-->
          <article class="post-light wow slideInLeft">
            <time class="post-light-time" datetime="2018"><span class="post-light-time-big">2</span><span class="post-light-time-small"></span></time>
            <div class="post-light-main">
              <h4 class="post-light-title">Advocate for reduction of greenhouse gases and sustainable use of Earth's natural resources.</h4>
              <ul class="post-light-meta">
                <li>Olubanke Oniru</li>
                <li>History</li>
              </ul>
            </div>
          </article>
          <!-- Post Light-->
          <article class="post-light wow slideInLeft">
            <time class="post-light-time" datetime="2018"><span class="post-light-time-big">3</span><span class="post-light-time-small"></span></time>
            <div class="post-light-main">
              <h4 class="post-light-title">Advocate for climate change prevention.</h4>
              <ul class="post-light-meta">
                <li>Olubanke Oniru</li>
                <li>History</li>
              </ul>
            </div>
          </article>
          <article class="post-light wow slideInLeft">
            <time class="post-light-time" datetime="2018"><span class="post-light-time-big">4</span><span class="post-light-time-small"></span></time>
            <div class="post-light-main">
              <h4 class="post-light-title">Founder and president Competent Nigerians.</h4>
              <ul class="post-light-meta">
                <li>Olubanke Oniru</li>
                <li>History</li>
              </ul>
            </div>
          </article>
        </div>
        <div class="wow-outer button-outer"><a class="button button-primary button-winona wow slideInDown" href="grid-blog.html" style="visibility: hidden; animation-name: none;">view all events</a></div>
      </div>
    </div>
  </div>
</section>

@endsection