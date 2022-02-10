@extends ('layouts.elements')

@section('content')
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Our Cause</h6>
                <h1 class="breadcrumbs-custom-title">Our Cause</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Cause</li>
            </ul>
        </div>
    </div>
</section>
<section class="section section-lg">
    <div class="container">
        <div class="row row-50 justify-content-center justify-content-lg-between align-items-center align-items-xl-start">
        <div class="col-md-10 col-lg-6 col-xl-5">
            <h3>Cause</h3>
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
            <!-- Nav tabs-->
            <ul class="nav nav-tabs">
                <!-- <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Description</a></li> -->
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-2" data-toggle="tab">Education</a></li>
                <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Conditions</a></li> -->
            </ul>
            <!-- Tab panes-->
            <div class="tab-content">
                <!-- <div class="tab-pane fade active show" id="tabs-1-1">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <p>Vivamus fermentum elit vel quam lacinia, eu imperdiet orci dapibus. Mauris purus massa, mattis ut turpis ut, dignissim consectetur nibh. Quisque a lacus eget nibh commodo semper sed et felis. Praesent cursus nisi a sem pretium, sed facilisis dui fringilla. </p>
                </div> -->
                <div class="tab-pane fade active show" id="tabs-1-2">
                <ul class="list-marked">
                    <li>Bill on making history a prerequisite like mathematics and English in primary and secondary schools.</li>
                    <li>Bill on budgeting 26% of the annual budget on education according to UNESCO recommendation.</li>
                    <li>Removal of catchment area. Cut off marks must be the same( universal pass mark).</li>
                </ul>
                </div>
                <!-- <div class="tab-pane fade" id="tabs-1-3">
                <ul class="list-marked">
                    <li>Fusce massa erat, molestie quis est nec, laoreet mollis turpis. </li>
                    <li>Nunc maximus lacus in ligula dictum cursus. Morbi sed tincidunt nibh. Orci varius natoque penatibus et magnis dis parturient montes</li>
                    <li>Fusce sagittis mi in nisl viverra finibus. In sollicitudin viverra eros, eu malesuada libero finibus et.</li>
                </ul>
                </div> -->
            </div>
            </div>
            <!-- <a class="button button-primary button-winona" href="#">Send Your CV</a> -->
        </div>
        <div class="col-md-10 col-lg-6"><img class="img-responsive" src="images/education.jpeg" alt="" width="570" height="400">
        </div>
        </div>
    </div>
</section>

@endsection