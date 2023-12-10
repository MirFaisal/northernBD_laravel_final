@props(['post'])
<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="mb-30">{!! $post->first_article !!}</p>
                <img src="{{ asset('project/images/'.$post->image) }}" class="mb-30" alt="" />
                <p>{!! $post->second_article !!}</p>
            </div>
        </div>
        <div class="savoye-comment-section">
            <div class="row">
                <!-- Comment -->
                <div class="col-md-7">
                    <div class="savoye-post-comment-wrap">
                        <div class="savoye-user-comment">
                            <img src="{{asset('img/team/1.jpg')}}" alt="" />
                        </div>
                        <div class="savoye-user-content">
                            <h6>Robert Misse<span> 29 October 2022</span></h6>
                            <p>
                                Photography ultricies nibh non dolor maximus
                                scee the inte molliser faubs neque nec
                                tincidunte aliquam erat volutpat. Praeser tem
                                malade.
                            </p>
                            <a class="savoye-repay" href="#"
                                >Reply<i class="ti-back-left"></i
                            ></a>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="col-md-4 offset-md-1">
                    <h6>Leave a Reply</h6>
                    <form method="post" class="row">
                        <div class="col-md-12">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                placeholder="Full Name *"
                                required=""
                            />
                        </div>
                        <div class="col-md-12">
                            <input
                                type="email"
                                name="email"
                                id="email"
                                placeholder="Email Address *"
                                required=""
                            />
                        </div>
                        <div class="col-md-12">
                            <input
                                type="text"
                                name="teliphone"
                                placeholder="Your Phone Numbaer *"
                                required=""
                            />
                        </div>
                        <div class="col-md-12">
                            <textarea
                                name="message"
                                id="message"
                                cols="40"
                                rows="4"
                                placeholder="Your Comment *"
                                required=""
                            ></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="btn float-btn flat-btn mt-15">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
