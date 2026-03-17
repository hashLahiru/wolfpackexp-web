@extends('web.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/img/travel/showcase-8.webp)') }};">
            <div class="container position-relative">
                <h1>Waterfall Hunting Adventure</h1>
                <p>Explore hidden waterfalls, jungle trails and untouched natural beauty deep within Sri Lanka’s wild
                    landscapes.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('tours') }}">Tours</a></li>
                        <li class="current">Waterfall Hunting</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Travel Tour Details Section -->
        <section id="travel-tour-details" class="travel-tour-details section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <!-- Tour Overview -->
                <div class="tour-overview" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="col-lg-8">
                                <h2>Waterfall Hunting</h2>
                                <p>Some treasures don’t come marked on maps. Our Waterfall Hunting adventures take you off
                                    the grid and into the lush, untamed corners of Sri Lanka, where roaring cascades, hidden
                                    pools and mist-kissed cliffs await discovery.</p>

                                <p>Guided by local trail masters and nature lovers, these journeys blend hiking, exploration
                                    and the thrill of the unknown. Each waterfall has its own story—some sacred, some
                                    hidden, all unforgettable. Whether you're diving into jungle pools or capturing
                                    golden-hour cascades, this is nature at its most raw and refreshing.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="tour-highlights">
                                <h3>Experience Includes</h3>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Access to hidden & iconic waterfalls</li>
                                    <li><i class="bi bi-check-circle"></i> Guided jungle and forest hikes</li>
                                    <li><i class="bi bi-check-circle"></i> Swimming & photography opportunities</li>
                                    <li><i class="bi bi-check-circle"></i> Scenic routes through tea estates</li>
                                    <li><i class="bi bi-check-circle"></i> Seasonal routes for safety</li>
                                    <li><i class="bi bi-check-circle"></i> Local expert guides</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery -->
                <div class="tour-gallery" data-aos="fade-up" data-aos-delay="700">
                    <h2>Photo Gallery</h2>
                    <div class="gallery-grid">
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/travel/destination-1.webp') }}" class="glightbox">
                                <img src="{{ asset('assets/img/travel/destination-1.webp') }}" alt="Venice Canals"
                                    class="img-fluid" loading="lazy">
                            </a>
                        </div>
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/travel/destination-2.webp') }}" class="glightbox">
                                <img src="{{ asset('assets/img/travel/destination-2.webp') }}" alt="Florence Cathedral"
                                    class="img-fluid" loading="lazy">
                            </a>
                        </div>
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/travel/destination-3.webp') }}" class="glightbox">
                                <img src="{{ asset('assets/img/travel/destination-3.webp') }}" alt="Roman Colosseum"
                                    class="img-fluid" loading="lazy">
                            </a>
                        </div>
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/travel/destination-4.webp') }}" class="glightbox">
                                <img src="{{ asset('assets/img/travel/destination-4.webp') }}" alt="Santorini Sunset"
                                    class="img-fluid" loading="lazy">
                            </a>
                        </div>
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/travel/destination-5.webp') }}" class="glightbox">
                                <img src="{{ asset('assets/img/travel/destination-5.webp') }}" alt="Hagia Sophia"
                                    class="img-fluid" loading="lazy">
                            </a>
                        </div>
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/travel/destination-6.webp') }}" class="glightbox">
                                <img src="{{ asset('assets/img/travel/destination-6.webp') }}" alt="Mediterranean Cuisine"
                                    class="img-fluid" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Final CTA -->
                <div class="final-cta" data-aos="fade-up" data-aos-delay="1000">
                    <div class="cta-content">
                        <h2>Ready to Chase Hidden Waterfalls?</h2>
                        <p>Join us on an unforgettable journey through Sri Lanka’s most breathtaking and secret cascades.
                        </p>
                        <div class="cta-actions">
                            <a href="booking.html" class="btn-primary">Book Your Adventure</a>
                            <a href="tel:+94700000000" class="btn-secondary">Call Us</a>
                        </div>
                        <div class="urgency-banner">
                            <i class="bi bi-clock"></i>
                            <span>Best during seasonal flow periods – Limited spots available</span>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Travel Tour Details Section -->

    </main>
@endsection
