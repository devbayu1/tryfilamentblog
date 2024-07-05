<div>
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Projects</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
                    <li class="current">Projects</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <section id="gallery" class="gallery section">
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-center">
                @if ($projects->isNotEmpty())
                    @foreach ($projects as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="gallery-item h-100">
                                <img src="{{asset('storage/'.$item->image)}}" class="img-fluid" alt="">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="{{asset('storage/'.$item->image)}}" title="{{$item->title}}"
                                        class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                    <a href="{{$item->link}}" class="details-link" target="_blank"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
</div>
