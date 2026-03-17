@extends('web.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/img/travel/showcase-8.webp)') }};">
            <div class="container position-relative">
                <h1>Forest Bathing</h1>
                <p>Slow down, breathe deep and reconnect with nature through a calming, mindful forest experience.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('tours') }}">Tours</a></li>
                        <li class="current">Forest Bathing</li>
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
                            <h2>Forest Bathing Experience</h2>
                            <p>Forest Bathing is a gentle, mindful walk through nature—an invitation to pause, listen and
                                let the forest work its quiet magic. Surrounded by towering trees, birdsong and filtered
                                sunlight, this experience helps ease stress and restore balance.</p>

                            <p>It’s not a hike or a workout, but a calming immersion in the natural world. Perfect for
                                grounding the mind and refreshing the spirit, each session encourages you to reconnect with
                                nature at your own pace.</p>

                            <p><strong>Locations:</strong> Sinharaja Rainforest, Kanneliya Forest Reserve, Knuckles Mountain
                                Range, Hanthana Mountain Range, Kaludiya Pokuna and Rathugala Forest Reserve.</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="tour-highlights">
                                <h3>Experience Includes</h3>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Guided sensory nature walks</li>
                                    <li><i class="bi bi-check-circle"></i> Sound, scent & breathing exercises</li>
                                    <li><i class="bi bi-check-circle"></i> Quiet reflection & grounding moments</li>
                                    <li><i class="bi bi-check-circle"></i> Calm, non-strenuous experience</li>
                                    <li><i class="bi bi-check-circle"></i> Multiple scenic forest locations</li>
                                    <li><i class="bi bi-check-circle"></i> Local wellness-focused guides</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Itinerary -->
                <div class="tour-itinerary" data-aos="fade-up" data-aos-delay="300">
                    <h2>What to Expect</h2>
                    <div class="itinerary-timeline">

                        <div class="itinerary-item">
                            <div class="day-number"><i class="bi bi-tree"></i></div>
                            <div class="day-content">
                                <h4>Mindful Nature Walk</h4>
                                <p>Move slowly through peaceful forest environments guided by experts who encourage
                                    awareness and presence.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number"><i class="bi bi-soundwave"></i></div>
                            <div class="day-content">
                                <h4>Sensory Connection</h4>
                                <p>Engage your senses through sound, scent and touch to deepen your connection with nature.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number"><i class="bi bi-heart"></i></div>
                            <div class="day-content">
                                <h4>Relaxation & Reflection</h4>
                                <p>Enjoy quiet moments for mental clarity, emotional reset and inner balance.</p>
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
                        <h2>Ready to Reconnect with Nature?</h2>
                        <p>Step into the forest and experience calm, clarity and balance through guided forest bathing.</p>
                        <div class="cta-actions">
                            <a href="booking.html" class="btn-primary">Book Your Experience</a>
                            <a href="tel:+94700000000" class="btn-secondary">Call Us</a>
                        </div>
                        <div class="urgency-banner">
                            <i class="bi bi-clock"></i>
                            <span>Limited daily sessions for a peaceful experience</span>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Travel Tour Details Section -->

    </main>
@endsection
