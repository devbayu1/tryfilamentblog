<div>
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>{{$page->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
                    <li class="current">{{$page->title}}</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img src="{{asset('storage/'.$page->image)}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 content">
                    {!! $page->desc !!}
                </div>
            </div>

        </div>

    </section>

</div>
