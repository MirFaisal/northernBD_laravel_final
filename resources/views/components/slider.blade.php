@props(['firstBanner'])
<!-- Slider -->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number".You can change it using the numbers 0-9. -->
        @foreach ($firstBanner as $item)
        <div
            class="text-left item bg-img"
            data-overlay-dark="1"
            data-background="{{asset('project/banner/'.$item->banner_image)}}"
        >
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mt-30">
                            <div class="o-hidden">
                                <!--<h1>{{$item->title}}</h1>-->
                                <p>
                                    <!--{{$item->sub_title}}-->
                                </p>
                                <!-- <a
                                    href="{{route('SINGLE::PROJECT',$item->id)}}"
                                    class="btn float-btn flat-btn"
                                    >Discover</a
                                > -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach {{--
        <div
            class="text-left item bg-img"
            data-overlay-dark="1"
            data-background="img/slider/2.png"
        >
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mt-30">
                            <div class="o-hidden">
                                <h1>One Stone House</h1>
                                <p>
                                    Architecture viverra tellus nec massa dictum
                                    the blackspace euismoe.<br />Curabitur
                                    viverra the posuere hose aukue velition.
                                </p>
                                <a
                                    href="project-page.html"
                                    class="btn float-btn flat-btn"
                                    >Discover</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        --}} {{--
        <div
            class="text-left item bg-img"
            data-overlay-dark="4"
            data-background="img/slider/3.jpg"
        >
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mt-30">
                            <div class="o-hidden">
                                <h1>Collin Bea House</h1>
                                <p>
                                    Architecture viverra tellus nec massa dictum
                                    the blackspace euismoe.<br />Curabitur
                                    viverra the posuere hose aukue velition.
                                </p>
                                <a
                                    href="project-page.html"
                                    class="btn float-btn flat-btn"
                                    >Discover</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        --}}
    </div>
</header>