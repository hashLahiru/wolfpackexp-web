@extends('web.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/img/travel/showcase-8.webp)') }};">
            <div class="container position-relative">
                <h1>Safari Tours</h1>
                <p>Experience Sri Lanka’s iconic wildlife in its natural habitat.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('tours') }}">Tours</a></li>
                        <li class="current">Safari Tours</li>
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
                            <h2>Safari Tours</h2>

                            <p>
                                Sri Lanka’s national parks are living theaters of nature where elephants march like
                                monarchs,
                                leopards stalk in silence and the jungle hums with ancient rhythm. Our Safari Tours are
                                designed
                                for those who crave real encounters with the island’s iconic wildlife.
                            </p>

                            <p>
                                Guided by experts who know the land and its secrets, each safari blends adventure, education
                                and respect for nature. Whether exploring Yala, Kumana, Wilpattu or the elephant corridors
                                of
                                Minneriya, every journey is ethical, safe and unforgettable.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="tour-highlights">
                                <h3>Safari Highlights</h3>

                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Guided jeep safaris with trained naturalists</li>
                                    <li><i class="bi bi-check-circle"></i> Leopard and elephant tracking</li>
                                    <li><i class="bi bi-check-circle"></i> Birdlife and rare species observation</li>
                                    <li><i class="bi bi-check-circle"></i> Sunrise and sunset safari options</li>
                                    <li><i class="bi bi-check-circle"></i> Ethical and eco-conscious experiences</li>
                                    <li><i class="bi bi-check-circle"></i> Optional photography and picnic add-ons</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Itinerary -->
                <div class="tour-itinerary" data-aos="fade-up" data-aos-delay="300">
                    <h2>Safari Destinations</h2>

                    <div class="itinerary-timeline">

                        <div class="itinerary-item">
                            <div class="day-number">1</div>
                            <div class="day-content">
                                <h4>Yala National Park</h4>
                                <p>
                                    Sri Lanka’s most famous wildlife reserve with one of the highest leopard densities
                                    in the world. Home to elephants, sloth bears, crocodiles and over 200 bird species.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">2</div>
                            <div class="day-content">
                                <h4>Kumana National Park</h4>
                                <p>
                                    A premier bird sanctuary known for wetlands and migratory flocks. Also home to
                                    elephants, leopards and crocodiles.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">3</div>
                            <div class="day-content">
                                <h4>Wilpattu National Park</h4>
                                <p>
                                    The largest national park in Sri Lanka, known for its natural lakes and quieter,
                                    more intimate safari experience.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">4</div>
                            <div class="day-content">
                                <h4>Udawalawe National Park</h4>
                                <p>
                                    Famous for large elephant herds and open grasslands, offering excellent
                                    year-round wildlife viewing.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">5</div>
                            <div class="day-content">
                                <h4>Minneriya National Park</h4>
                                <p>
                                    Home to “The Great Gathering”, where hundreds of elephants gather during
                                    the dry season.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">6</div>
                            <div class="day-content">
                                <h4>Kaudulla National Park</h4>
                                <p>
                                    A key elephant migration corridor with excellent wildlife sightings
                                    near its historic reservoir.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tour-overview mt-4">
                    <h3>What to Expect</h3>

                    <ul>
                        <li>Guided jeep safaris with expert naturalists</li>
                        <li>Opportunities to spot elephants, leopards, sloth bears and crocodiles</li>
                        <li>Rich birdlife, butterflies and hidden species</li>
                        <li>Sunrise and sunset safari experiences</li>
                        <li>Optional photography support and picnic setups</li>
                    </ul>
                </div>

                <div class="tour-overview mt-4">
                    <h3>Ideal For</h3>
                    <p>
                        Wildlife lovers, families, photographers and anyone who wants to
                        experience nature in its rawest and most authentic form.
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
                        <h2>Ready for a Safari Adventure?</h2>

                        <p>
                            Step into Sri Lanka’s wild landscapes and witness unforgettable moments
                            with nature’s most incredible creatures.
                        </p>

                        <div class="cta-actions">
                            <a href="#booking" class="btn-primary">Book Your Safari</a>
                            <a href="tel:+94700000000" class="btn-secondary">Call / WhatsApp: +94 70 000 0000</a>
                        </div>

                        <div class="urgency-banner">
                            <i class="bi bi-clock"></i>
                            <span>Best sightings depend on season – reserve early for peak wildlife experiences</span>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Travel Tour Details Section -->

    </main>
@endsection
