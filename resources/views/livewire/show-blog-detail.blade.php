<div>
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>{{ $article->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
                    <li class="current">{{ $article->title }}</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 ">
                    <div class="section-title" data-aos="fade-up">
                        <h2>{{ \Carbon\Carbon::parse($article->created_at)->format('d, M, Y') }}</h2>
                        <p>{{ $article->title }}</p>
                    </div>
                    @if (isset($article->image))
                        <div class="text-center my-4">
                            <img src="{{asset('storage/'.$article->image)}}" />
                        </div>
                    @endif
                    <div>
                        {!! $article->desc !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
