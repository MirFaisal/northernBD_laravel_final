@props(['posts'])
<!-- Blog -->
<div class="blog section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">Latest News</div>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post )
            <div class="col-md-4">
                <div class="item">
                    <div class="post-img">
                        <a href="{{route('SINGLE::POST', $post->id)}}"
                            ><div class="img">
                                <img
                                    src="{{asset('project/images/'.$post->image)}}"
                                    alt=""
                                /></div
                        ></a>
                    </div>
                    <div class="cont">
                        <h4>
                            <a
                                href="{{route('SINGLE::POST', $post->id)}}"
                                >{{$post->name}}</a
                            >
                        </h4>
                        <div class="info">
                            <a href="blog.html"><span>Event</span></a>
                            <a
                                href="blog.html"
                                >{{$post->created_at->format('F Y')}}</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>