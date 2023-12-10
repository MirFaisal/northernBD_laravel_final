@extends('Layouts.master') @section('content')
<div
    class="banner-header section-padding valign bg-img bg-fixed"
    data-overlay-dark="4"
    data-background="img/slider/1.png"
>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center caption mt-90">
                <h1>Page Not Found!</h1>
            </div>
        </div>
    </div>
</div>
<!-- hr -->
<hr class="line-vr-section" />
<!-- Not found 404 -->
<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <img src="img/404-image.png" class="mb-30" alt="" />
                <h2>Sorry we can't find that page!</h2>
                <p>
                    The page you are looking for was moved, removed, renamed or
                    never existed.
                </p>
                <a
                    href="{{ route('HOME::PAGE') }}"
                    class="btn mt-30 text-center"
                    ><span><i class="ti-arrow-left"></i> Back to home</span></a
                >
            </div>
        </div>
    </div>
</div>
@endsection
