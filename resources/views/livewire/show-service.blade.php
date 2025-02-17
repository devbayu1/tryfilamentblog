<div>
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Services</h1>
                        <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                            voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores.
                            Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                        <a href="contact.html" class="cta-btn">Available for Hire<br></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
                    <li class="current">Services</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <div class="container">
            <div class="row gy-4">
                @if ($services->isNotEmpty())
                    @foreach ($services as $item)
                        <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="icon">{!! $item->icon_class !!}</div>
                                <h4><a href="" class="stretched-link">{{$item->title}}</a></h4>
                                <p>{!! $item->short_desc !!}</p>
                            </div>
                        </div><!-- End Service Item -->
                    @endforeach
                @endif
            </div>

        </div>

    </section><!-- /Services Section -->
</div>
