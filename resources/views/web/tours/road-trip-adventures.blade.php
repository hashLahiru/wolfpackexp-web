@extends('web.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/img/travel/showcase-8.webp)') }};">
            <div class="container position-relative">
                <h1>Road Trips</h1>
                <p>Two wheels. One island. Endless possibilities.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('tours') }}">Tours</a></li>
                        <li class="current">Road Trips</li>
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
                            <h2>Road Trips – Two Wheels. One Island.</h2>

                            <p>
                                Road Trips with Wolf Pack Expeditions are not just about the destination—they’re about
                                the ride, the rhythm and the stories you collect along the way.
                            </p>

                            <p>
                                Sri Lanka’s roads are ribbons of discovery, winding through misty mountains, coastal
                                curves, jungle corridors and timeless villages. Whether you ride for adrenaline or
                                serenity, every journey is designed for connection and exploration.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="tour-highlights">
                                <h3>Ride Highlights</h3>

                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Scenic mountain, coastal and jungle routes</li>
                                    <li><i class="bi bi-check-circle"></i> Motorcycle and bicycle tour options</li>
                                    <li><i class="bi bi-check-circle"></i> Experienced guides and support teams</li>
                                    <li><i class="bi bi-check-circle"></i> Curated stops and local experiences</li>
                                    <li><i class="bi bi-check-circle"></i> Flexible routes for all skill levels</li>
                                    <li><i class="bi bi-check-circle"></i> Small group and private tour options</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Itinerary -->
                <div class="tour-itinerary" data-aos="fade-up" data-aos-delay="300">
                    <h2>Road Trip Experiences</h2>

                    <div class="itinerary-timeline">

                        <div class="itinerary-item">
                            <div class="day-number">1</div>
                            <div class="day-content">
                                <h4>Motorcycle Tours – Ride the Wild Side</h4>
                                <p>
                                    Feel the freedom of the open road as you explore Sri Lanka’s diverse terrain,
                                    from highland switchbacks to coastal highways. Designed for riders who crave
                                    adventure with safety and support.
                                </p>

                                <ul>
                                    <li>Well-maintained bikes and riding gear</li>
                                    <li>Scenic routes with curated stops</li>
                                    <li>Support vehicles and road captains</li>
                                    <li>Ideal for solo riders, couples and small groups</li>
                                </ul>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">2</div>
                            <div class="day-content">
                                <h4>Bicycle Adventures – Pedal Through Paradise</h4>
                                <p>
                                    Slow down and explore Sri Lanka at your own pace. Ride through tea estates,
                                    ancient ruins, forest paths and village roads while connecting deeply with
                                    nature and culture.
                                </p>

                                <ul>
                                    <li>Comfortable bikes and safety gear</li>
                                    <li>Routes tailored to fitness levels</li>
                                    <li>Cultural stops and nature breaks</li>
                                    <li>Perfect for families and wellness travelers</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tour-overview mt-4">
                    <h3>Ideal For</h3>
                    <p>
                        Adventure seekers, riders, explorers and anyone who wants to experience
                        Sri Lanka through movement, freedom and connection.
                    </p>
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
                        <h2>Ready to Hit the Road?</h2>

                        <p>
                            Discover Sri Lanka on two wheels and create unforgettable stories with every mile.
                        </p>

                        <div class="cta-actions">
                            <a href="#booking" class="btn-primary">Start Your Road Trip</a>
                            <a href="tel:+94700000000" class="btn-secondary">Call / WhatsApp: +94 70 000 0000</a>
                        </div>

                        <div class="urgency-banner">
                            <i class="bi bi-clock"></i>
                            <span>Best routes vary by season – plan ahead for the ultimate ride</span>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Travel Tour Details Section -->

    </main>
@endsection
