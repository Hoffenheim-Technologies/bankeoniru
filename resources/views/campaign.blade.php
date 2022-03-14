@extends ('layouts.elements')

@section('content')

<section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">History</h6>
                <h1 class="breadcrumbs-custom-title">Campaign</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Campaign</li>
            </ul>
        </div>
    </div>
</section>

<section class="section section-lg">
    <div class="container">
        <div class="row row-50">
        <div class="col-lg-8">
            <article class="post-creative">
            <h3 class="post-creative-title">Olubanke Oniru Campaign</h3>
            <!-- <ul class="post-creative-meta">
                <li><span class="icon mdi mdi-calendar-clock"></span>
                <time datetime="2018">May 9, 2018 at 6:09 pm</time>
                </li>
                <li><span class="icon mdi mdi-tag-multiple"></span><a href="#">News</a></li>
            </ul> -->
            <!-- <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><img src="images/campaign.jpeg" alt="" width="770" height="458"> -->
            <p>Hello my fellow Lagosians and Nigerians. I thank you for this warm welcome. I'm very happy to be here on this podium with many others candidates.</p>
            <p>Something is happening in Lagos right now. There is a wind of change blowing a slew of fresh air from the Atlantic ocean on the Peninsula (where I was born) to the Lagoon on the Mainland (where I grew up). This is to show that I'm a really the daughter of the soil and who would know our problems better than the landlords. This wind of change will breathe a new lease of life into Lagos, Nigeria and our politics.</p>
            <!-- Quote Light-->
            <blockquote class="quote-light">
                <svg class="quote-light-mark" x="0px" y="0px" width="35px" height="25px" viewBox="0 0 35 25">
                <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
                </svg>
                <div class="quote-light-text">
                <p>As an activist we can't be on the fence and complain all the time. We need to be part of the change. How do you fathom in the history of Nigeria that a man is currently running for the president of Nigeria and his wife is a senator. How do we comprehend such aberration out of 200 million people. We need a different "kinda" change that would reposition the economy and put naira in everyone's pockets. A different "kinda" voice to the voiceless. A different "kinda" representation to the faceless. That would put food on people's tables across Lagos Central and the country.

                The demand from the ENDSARS protests are not yet met but motorists haven't paid toll fees at the two toll plazas in almost two years. 

                According to Apollo, for those that sacrifice their lives for others like us to reach for the stars. I'm running for these people.</p>
                </div>
            </blockquote>
            <!-- <img src="images/single-blog-post-2-770x458.jpg" alt="" width="770" height="458"> -->
            <p style="padding-top: 10px">
                In this upcoming election, Nigerians have said their minds loudly. A lot of Nigerians are hungry, in fact, very hungry. Too many seniors are living in poverty. The youths, school children, women and men alike see a bleak future. But the good news is that Banke and her team are here to change the story and the narrative. Nigerians deserve better and that better they shall get, so help me God.
            </p>
            <p>
                We have heard the cry of the market women in Idumota, the bus conductor in Yaba, the office men/women in Lekki or the young lady that had to swim in the pool of flooded water in Sangotedo before they can get to work. We are here to do our best to replace the sorrows or the agonies with better future. 
                We know what we need to get the job done and we will get to work not in 6 months or 1 year later but from the day that we are elected.
            </p>
            <p>
                Senators' job is to oversees specific projects related to pending legislation. Respond to a high volume of correspondence, both written, in-person and over the telephone. Communicate regularly with community stakeholders, lobbyists and other interested parties. Prepare first drafts of bills and amendments and submit such to legal counsel.
                We have over 6-life changing bills, that if signed into laws would change the fortune of this country to rival the best economies in the world.
            </p>
            </article>
        </div>
        <div class="col-lg-4">
            <!-- Profile Thin-->
            <article class="profile-thin">
            <div class="profile-thin-aside"><img class="profile-thin-image" src="images/profile.jpeg" alt="" width="168" height="168"><a class="profile-thin-contact-button" href="mailto:olubanke@bankeoniru2023.com.ng"><span class="icon mdi mdi-email-outline"></span><span class="icon mdi mdi-email-outline"></span></a>
            </div>
            <div class="profile-thin-main">
                <p class="profile-thin-title">Olubanke Oniru</p>
                <p class="profile-thin-subtitle">Lagos Senatorial District  </p>
                <p>Princess Olubanke Oniru is currently amidst campaign development towards a 2023 National Elective Position in the National Assembly of the Federal Republic of Nigeria. The next federal elections will hold in Quarter 1 of year 2023. Representation of women and of young people in elected government positions in Nigeria is alarmingly very few. This must change in 2023 and beyond.</p>
                <div class="group group-xs group-middle">
                    <a class="icon icon-sm icon-creative mdi mdi-facebook" href="https://www.facebook.com/voniru" target="blank"></a>
                    <a class="icon icon-sm icon-creative mdi mdi-twitter" href="https://twitter.com/hrh_bankeoniru" target="blank"></a>
                    <a class="icon icon-sm icon-creative mdi mdi-instagram" href="https://www.instagram.com/banke_oniru_2023/" target="blank"></a>
                    <!-- <a class="icon icon-sm icon-creative mdi mdi-google" href="#"></a>
                    <a class="icon icon-sm icon-creative mdi mdi-linkedin" href="#"></a> -->
                </div>
            </div>
            </article>
        </div>
        </div>
    </div>
</section>

@endsection