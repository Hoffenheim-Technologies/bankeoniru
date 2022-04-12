@extends ('layouts.elements')

@section('content')
<section>
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">News</li>
            </ul>
        </div>
    </div>
</section>
<style>
    .myGrid {
        display: grid; align-items: center; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 0.75rem; margin: 10px;
    }
    @media (max-width: 540px) {
        .myGrid {
            display: block;
        }
    }
    .news-item {
        display: block; margin: auto; max-height: inherit; cursor: pointer; margin: 20px
    }
    
</style>
<section class="section section-lg">
    <div class="myGrid" style="" >
    <?php $news_items = $blog ?>    
    @forelse ($blog as $news)
    <div class="news-item" id="{{$loop->iteration}}">
        @if(!empty($news->caption_image))
        <img src="{{$news->caption_image}}" style="max-height: 300px; width: auto; display: block; margin: auto">
        @endif
        <h3>{{$news->title}}</h3>
        <span>Date: {{$news->date}}</span>
        <p>{{substr($news->intro, 0, 50)}}...</p>
    </div> 
    @empty  
    <p>There is no news at the time</p>
    @endforelse
    </div>
</section>
<style>
    .myModal{
        position: fixed; top: 0; left: 0; display: none; z-index: 9999
    }  
    .myModal>.myContent {  
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        max-height: 75vh;
        overflow-y: scroll;
        width: auto;
        max-width: 80vw;
    }
    @media (max-width: 800px){
        .myModal>.myContent {
            max-height: 90vh;
            width: fit-content;
        }
    }
</style>
<div class="myModal" style="">
    <div style="background: #000; opacity: 0.4; width: 100vw; height: 100vh;"></div>
    <div style="position: absolute; top: 20px; right: 20px; background: #fff; padding: 5px 10px; cursor: pointer" onclick="$('.myModal').hide()">X</div>
    <div class="myContent">
        <div>
            <img class="m-img" src="" style="max-height: inherit">
        </div>
        <div style="margin: 20px 10px">
            <h3 class="m-title"></h3>
            <span>Date: <span class="m-date"></span></span>
        </div>
        <p class="m-intro" style="margin: 20px"></p>
        <p class="m-bp1" style="margin: 10px"></p>
        <img src="" alt="" class="m-bimg1">
        <p class="m-bp2" style="margin: 10px"></p>
        <img src="" alt="" class="m-bimg2">
        <p class="m-bp3" style="margin: 10px"></p>
        <p class="m-conclusion" style="margin: 20px"></p>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    const news = <?php echo(json_encode($news_items)); ?>;
    console.log(news)
    $('.news-item').on('click', (e) => {
        let id = $(event.currentTarget).attr('id')
        let newsItem = news.find(item => item.id == id)
        $('.m-img').attr('src', newsItem.caption_image)
        $('.m-title').text(newsItem.title)
        $('.m-date').text(newsItem.date)
        $('.m-intro').text(newsItem.intro)
        $('.m-bp1').text(newsItem.bp1)
        $('.m-bimg1').attr('src', newsItem.bimg1)
        $('.m-bp2').text(newsItem.bp2)
        $('.m-bimg2').attr('src', newsItem.bimg2)
        $('.m-bp3').text(newsItem.bp3)
        $('.m-conclusion').text(newsItem.conclusion)
        $('.myModal').show()
    })
</script>

@endsection