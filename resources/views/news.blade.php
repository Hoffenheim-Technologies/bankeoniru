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
    <?php $news_items = $news?>
    @foreach ($news as $news)
    <div class="news-item" id="{{$loop->iteration}}">
        @if(!empty($news->image))
        <img src="{{$news->image}}" style="max-height: 300px; width: auto; display: block; margin: auto">
        @endif
        <h3>{{$news->title}}</h3>
        <span>Date: {{$news->date}}</span>
        <p>{{substr($news->content, 0, 50)}}...</p>
    </div>   
    @endforeach
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
        <div class="m-content" style="padding: 20px">
            
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    const news = <?php echo(json_encode($news_items)); ?>;
    console.log(news)
    $('.news-item').on('click', (e) => {
        let id = $(event.currentTarget).attr('id')
        let newsItem = news.find(item => item.id == id)
        $('.m-img').attr('src', newsItem.image)
        $('.m-title').text(newsItem.title)
        $('.m-date').text(newsItem.date)
        $('.m-content').text(newsItem.content)
        $('.myModal').show()
    })
</script>

@endsection