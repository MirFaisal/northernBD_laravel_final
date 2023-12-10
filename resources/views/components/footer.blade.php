<!-- Footer -->
<footer class="main-footer dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-30">
                <div class="item abot">
                    <div class="logo mb-15">
                        <img
                            src="{{ asset('img/logo/logo-dark.png') }}"
                            alt=""
                        />
                    </div>
                    <p>
                        "Northern Engineering Bd" is an independent firm of
                        designers, architects, planners, engineers,
                        environmentalists and technical experts providing a wide
                        range of professional services.
                    </p>
                    <div class="social-icon">
                        <a
                            href="https://www.facebook.com/profile.php?id=100066569475376"
                            ><i class="ti-facebook"></i
                        ></a>
                        <a href="index.html"><i class="ti-twitter"></i></a>
                        <a href="index.html"><i class="ti-instagram"></i></a>
                        <a href="index.html"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-1 mb-30">
                <div class="item usful-links">
                    <div class="fothead">
                        <h6>Our Concern</h6>
                    </div>
                    <ul>
                        <li>
                            <a href="{{ route('SERVICES::PAGE') }}"
                                >Norther Furniture</a
                            >
                        </li>
                        <li>
                            <a href="{{ route('SERVICES::PAGE') }}"
                                >Norther Consultant</a
                            >
                        </li>
                    </ul>
                    <div class="item usful-links">
                        <div class="fothead">
                            <h6>Portfolio</h6>
                        </div>
                        <ul>
                           <li>
                                <a
                                    href="{{ url('download') }}"
                                    >Download Portfolio</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="item fotcont">
                    <div class="fothead">
                        <h6>Let's talk</h6>
                    </div>
                    <p>Have a project in mind?</p>
                    <p>Let's Build Something Great Together</p>
                    <p>+880 1713-981193</p>
                    <p>northernengineeringbd@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="text-left">
                        <p>
                            © {{ date("Y") }}, Northern Engineering bd. All
                            right reserved.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-right-left">
                        <p>
                            <a href="#">Terms of use</a> <span>|</span>
                            <a href="#"> Privacy Environmental Policy </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>