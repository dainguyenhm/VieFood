<!-- Slide-show -->
<div class="container">
    <div class="row slide-show">
        <div id="carouselExampleInterval" class="carousel slide col-md-12" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slides as $key => $slide)
                    @if ($key == 0)  
                        <div class="carousel-item active">
                    @else
                        <div class="carousel-item">
                    @endif
                            <img src="images/uploads/banners/{{ $slide->image }}" class="d-block" alt="...">
                        </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- banner-bottom -->
<div class="container">
    <div class="row banner-bottom">
        <div class="col-md-12">
            <img src="images/uploads/banners/{{ $banner_bottom->image }}" alt="">
        </div>
    </div>
</div>