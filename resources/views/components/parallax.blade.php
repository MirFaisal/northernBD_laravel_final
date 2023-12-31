@props(['secondBanner'])
<!-- Parallax Section -->
<div class="parallax-header parallax-slider-fade">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        @foreach ($secondBanner as $item )

        <div
            class="text-left item bg-img"
            data-overlay-dark="1"
            data-background="{{asset('project/banner/'.$item->banner_image)}}"
        >
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="o-hidden">
                                <!--<h6>Discover</h6>-->
                                <!--<h2>{{$item->title}}</h2>-->
                                <p></p>
                                <!--<p>-->
                                <!--    <i class="ti-location-pin"></i-->
                                <!--    >{{$item->sub_title}}-->
                                <!--</p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach {{--
        <div
            class="text-left item bg-img"
            data-overlay-dark="3"
            data-background="img/slider/2.png"
        >
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="o-hidden">
                                <h6>Discover</h6>
                                <h2>One Stone House</h2>
                                <p>
                                    <a href="project-page.html"
                                        ><i class="ti-location-pin"></i>
                                        Princeton, NJ, United States</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="text-left item bg-img"
            data-overlay-dark="4"
            data-background="img/slider/1.png"
        >
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="o-hidden">
                                <h6>Discover</h6>
                                <h2>Collin Bea House</h2>
                                <p>
                                    <a href="project-page.html"
                                        ><i class="ti-location-pin"></i>
                                        Ashburn, VA, United States</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        --}}
    </div>
</div>