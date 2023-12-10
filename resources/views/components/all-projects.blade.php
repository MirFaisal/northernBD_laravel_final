<!-- Project -->
@props(['projects','categories'])

<div class="savoye-project section-padding">
    <div class="container">
        <div class="row text-center">
            <ul class="savoye-project-filter">
                <li class="active" data-filter="*">All</li>
                @foreach ($categories as $category)
                <li data-filter=".{{$category->setSlugAttribute($category->id)}}">{{$category->name}}</li>
                @endforeach
            </ul>
        </div>
        <div class="row savoye-project-items">
            @foreach ($projects as $project)
            <div
                class="col-md-6 single-item {{$project->setSlugAttribute($project->category_id)}}"
            >
                <div class="savoye-project-wrap">
                    <a href="{{route('SINGLE::PROJECT', $project->id)}}"
                        ><img
                            src="{{asset('project/feature_images/'.$project->feature_image)}}"
                            alt="{{$project->feature_image }}"
                    /></a>
                    <div class="savoye-project-content">
                        <p>
                            {{$project->category_name($project->category_id)}}
                        </p>
                        <h3>
                            <a
                                href="{{route('SINGLE::PROJECT',$project->id)}}"
                                >{{$project->project_name}}</a
                            >
                        </h3>
                    </div>
                </div>
            </div>
            @endforeach {{--
            <div class="col-md-6 single-item urban">
                <div class="savoye-project-wrap">
                    <a href="project-page.html"
                        ><img src="img/projects/2.png" alt=""
                    /></a>
                    <div class="savoye-project-content">
                        <p>Architecture</p>
                        <h3>
                            <a href="project-page.html"
                                >Woodenist House<br />Lumberjack</a
                            >
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 single-item interior">
                <div class="savoye-project-wrap">
                    <a href="project-page.html"
                        ><img src="img/projects/3.jpg" alt=""
                    /></a>
                    <div class="savoye-project-content">
                        <p>Exterior Design</p>
                        <h3>
                            <a href="project-page.html">Geometric Building</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 single-item urban">
                <div class="savoye-project-wrap">
                    <a href="project-page.html"
                        ><img src="img/projects/4.jpg" alt=""
                    /></a>
                    <div class="savoye-project-content">
                        <p>Architecture</p>
                        <h3>
                            <a href="project-page.html"
                                >Arch Cloud Honna<br />Didenton Villa</a
                            >
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 single-item interior">
                <div class="savoye-project-wrap">
                    <a href="project-page.html"
                        ><img src="img/projects/5.jpg" alt=""
                    /></a>
                    <div class="savoye-project-content">
                        <p>Architecture</p>
                        <h3>
                            <a href="project-page.html"
                                >Brown Monara House<br />Ottova Canada</a
                            >
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 single-item urban">
                <div class="savoye-project-wrap">
                    <a href="project-page.html"
                        ><img src="img/projects/6.jpg" alt=""
                    /></a>
                    <div class="savoye-project-content">
                        <p>Architecture</p>
                        <h3>
                            <a href="project-page.html">Twin Forestland Home</a>
                        </h3>
                    </div>
                </div>
            </div>
            --}}
        </div>
    </div>
</div>
