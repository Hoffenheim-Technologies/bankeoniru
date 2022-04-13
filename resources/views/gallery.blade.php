@extends ('layouts.elements')

@section('content')
<section>
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Gallery</li>
            </ul>
        </div>
    </div>
</section>
<section class="section section-lg">
    <div class="grid grid-cols-3 items-center max-h-12" style="display: grid; align-items: center; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 0.75rem">
    @forelse($images as $image)
    <div style="display: block; margin: auto; max-height: inherit">
        <a href="{{$image->location}}"><img src="{{$image->location}}" style="max-height: 400px"></a>
    </div>   
    @empty
    <p>There are no images at this time</p>
    @endforelse
    </div>
</section>

@endsection