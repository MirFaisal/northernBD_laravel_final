<!-- Contact -->
<div class="contact section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mb-30">
                <h5>Let's start a project</h5>
                <p>
                    Give us a call or drop by anytime, we endeavour to answer
                    all enquiries within 24 hours on business days. We will be
                    happy to answer your questions.
                </p>

                <p><b>Phone :</b> +880 1713-981193</p>
                <p><b>eMail :</b> northernengineeringbd@gmail.com</p>
                <p>
                    <b>Address :</b>303/67,Siddik Tower,West Agargoan Dhaka,
                    Bangladesh, 1207
                </p>
            </div>
            <div class="col-md-6 offset-md-1 mb-30">
                <h5>Get in touch</h5>
                <form
                    method="post"
                    action="https://formspree.io/f/mjvqdola"
                    method="post"
                >
                    @csrf
                    <!-- Form message -->
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="alert alert-success contact__msg"
                                style="display: none"
                                role="alert"
                            >
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <!-- Form elements -->

                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input
                                name="name"
                                type="text"
                                placeholder="Your Name *"
                                required
                            />
                        </div>
                        <div class="col-md-6 form-group">
                            <input
                                name="_replyto"
                                type="email"
                                placeholder="Your Email *"
                                required
                            />
                        </div>
                        <div class="col-md-6 form-group">
                            <input
                                name="telephone"
                                type="text"
                                placeholder="Your Number *"
                                required
                            />
                        </div>

                        <div class="col-md-12 form-group">
                            <textarea
                                name="message"
                                id="message"
                                cols="30"
                                rows="4"
                                placeholder="Message *"
                                required
                            ></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit">send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
