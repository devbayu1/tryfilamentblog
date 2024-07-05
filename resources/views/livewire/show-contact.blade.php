<div>
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
                    <li class="current">Contact</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <section id="contact" class="contact section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-5">
                    @if (getSetByName('address') !== null)
                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Location</h3>
                                    <p>{{ getSetByName('address')->value }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- End Info Item -->
                    @if (getSetByName('phone') !== null)
                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call</h3>
                                    <p>{{ getSetByName('phone')->value }}</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->
                    @endif
                    @if (getSetByName('email') !== null)
                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email</h3>
                                    <p>{{ getSetByName('email')->value }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>

        </div>

    </section>

</div>
