@props(['projects'])
<div class="savoye-project section-padding">
    <div class="container">
        <div class="row">
            <div
                class="col-md-12 text-center animate-box"
                data-animate-effect="fadeInUp"
            >
                <div class="section-title">Our Projects</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @foreach ($projects as $key=>$project)
                <div
                    class="projects3 {{
                        $key % 2 != 0 ? 'left' : ''
                    }} animate-box"
                >
                    <figure>
                        <a href="{{route('SINGLE::PROJECT',$project->id)}}"
                            ><img
                                src="{{asset('project/feature_images/'.$project->feature_image)}}"
                                alt=""
                                class="img-fluid"
                                loading="lazy"
                        /></a>
                    </figure>
                    <div class="caption">
                        <h6>
                            {{$project->category_name($project->category_id)}}
                        </h6>
                        <h4>{{$project->project_name}}</h4>
                        <p>
                            {{$project->sub_title}}
                        </p>
                        <a
                            href="{{route('SINGLE::PROJECT',$project->id)}}"
                            class="btn float-btn flat-btn"
                            >Discover</a
                        >
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
