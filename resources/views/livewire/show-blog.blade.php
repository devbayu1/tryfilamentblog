<div>
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
                    <li class="current">Blogs</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 ">
                    @if ($articles->isNotEmpty())
                        @foreach ($articles as $item)
                            <div>
                                <a href="{{route('blogs-detail',['slug'=>$item->slug])}}">
                                    <div class="section-title" data-aos="fade-up">
                                        <h2>{{ \Carbon\Carbon::parse($item->created_at)->format('d, M, Y') }}</h2>
                                        <p>{{ $item->title }}</p>
                                        {!! $item->short_desc !!}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                    @if ($limit < $total)
                        <div class="contact section">
                            <button class="btn btn-success btn-sm" wire:click="loadMore" wire:loading.attr="disabled">Load More</button>
                            <div wire:loading wire:target="loadMore">
                                Get Other Article...
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
