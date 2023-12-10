<div class="section-padding">
      <div class="container">
        <div class="row">
          <!-- image -->
          <div class="col-md-8">
            <div class="row align-items-stretch savoye-photos">
              <div class="col-md-12 items mb-30">
                <a
                  href="{{asset('project/feature_images/'.$project->feature_image)}}"
                  class="d-block savoye-photo-item"
                  data-caption="Project page"
                  data-fancybox="gallery"
                >
                  <img src="{{asset('project/feature_images/'.$project->feature_image)}}" alt="" class="img-fluid" />
                </a>
              </div>
              <div class="col-md-6 items mb-30">
                <a
                  href="{{asset('project/images/'.$project->project_image_1)}}"
                  class="d-block savoye-photo-item"
                  data-caption="Project page"
                  data-fancybox="gallery"
                >
                  <img src="{{asset('project/images/'.$project->project_image_1)}}" alt="" class="img-fluid" />
                </a>
              </div>
              <div class="col-md-6 items mb-30">
                <a
                  href="{{asset('project/images/'.$project->project_image_2)}}"
                  class="d-block savoye-photo-item"
                  data-caption="Project page"
                  data-fancybox="gallery"
                >
                  <img src="{{asset('project/images/'.$project->project_image_2)}}" alt="" class="img-fluid" />
                </a>
              </div>
            </div>
          </div>
          <!-- text -->
          <div class="col-md-4">
            <p>
              {{-- {{$project->description}} --}}
              {!! $project->description !!}
            </p>
            <p><b>Client : </b> {{$project->client_name}}</p>
            <p><b>Number of Homes : </b>{{$project->number_of_homes}}</p>
            
            <p><b>Site Size : </b>{{$project->site_size}}</p>
            <p><b>Planning Approved : </b>{{$project->planning_approved}}</p>
          </div>
        </div>
      </div>
    </div>