@extends ('layouts.elements')

@section('content')
<section>
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div>
</section>
<?php $news_items = $blog ?> 
<section class="section section-lg">
    <div class="container">
        <img src="{{$blog->caption_image}}" alt="">
        <div class="pt-2"><span>Date: {{$blog->date}}</span></div>
        <div class="row row-50 justify-content-center justify-content-lg-between">
        <div class="col-md-10 col-lg-6">
            <h4 class="offset-top-3">{{$blog->title}}</h4>
            <p>{{$blog->intro}}</p>
            <p>{{$blog->bp1}}</p>
            <img src="{{$blog->bimg1}}" style="max-height: 300px" alt="">
            <p>{{$blog->bp2}}</p>
            <img src="{{$blog->bimg2}}" style="max-height: 300px" alt="">
            <p>{{$blog->bp3}}</p>
            <img src="{{$blog->bimg3}}" style="max-height: 300px" alt="">
            <p>{{$blog->conclusion}}</p>
        </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    const news = <?php echo(json_encode($news_items)); ?>;
    console.log(news)
</script>
@endsection