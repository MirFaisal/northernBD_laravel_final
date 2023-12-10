@props(['firstSlot','secondSlot','lastedSlot'])
<!-- Image Gallery -->
<div class="section-padding">
    <div class="container">
        <div class="row savoye-photos">
            <div class="col-12 col-md-4 masonry-items">
                @foreach ($firstSlot as $image)
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a
                                class="gallery-masonry-item-img-link d-block savoye-photo-item"
                                data-fancybox="images"
                                href="{{asset('project/pi/'.$image->image_path)}}"
                                data-caption="{{$image->project_id}}"
                            >
                                <img
                                    class="img-fluid"
                                    src="{{asset('project/pi/'.$image->image_path)}}"
                                    alt=""
                                />
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">
                                        {{$image->project_id}}
                                    </h4>
                                    <div class="gallery-masonry-item-category">
                                        {{$image->location}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12 col-md-4 masonry-items">
                @foreach ($secondSlot as $image)
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a
                                class="gallery-masonry-item-img-link d-block savoye-photo-item"
                                data-fancybox="images"
                                href="{{asset('project/pi/'.$image->image_path)}}"
                                data-caption="{{$image->project_id}}"
                            >
                                <img
                                    class="img-fluid"
                                    src="{{asset('project/pi/'.$image->image_path)}}"
                                    alt=""
                                />
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">
                                        {{$image->project_id}}
                                    </h4>
                                    <div class="gallery-masonry-item-category">
                                        {{$image->location}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12 col-md-4 masonry-items">
                @foreach ($lastedSlot as $image)
                <div class="portfolio-item-wrapp">
                    <div class="portfolio-item">
                        <div class="gallery-masonry-wrapper">
                            <a
                                class="gallery-masonry-item-img-link d-block savoye-photo-item"
                                data-fancybox="images"
                                href="{{asset('project/pi/'.$image->image_path)}}"
                                data-caption="{{$image->project_id}}"
                            >
                                <img
                                    class="img-fluid"
                                    src="{{asset('project/pi/'.$image->image_path)}}"
                                    alt=""
                                />
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title">
                                        {{$image->project_id}}
                                    </h4>
                                    <div class="gallery-masonry-item-category">
                                        {{$image->location}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>