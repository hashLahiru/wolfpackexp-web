@extends('web.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/img/travel/showcase-8.webp)') }};">
            <div class="container position-relative">
                <h1>Wildlife Tours</h1>
                <p>Encounters with the wild soul of Sri Lanka across land, sky and sea.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('tours') }}">Tours</a></li>
                        <li class="current">Wildlife Tours</li>
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
                            <h2>Wildlife Tours – Encounters with the Wild Soul of Sri Lanka</h2>

                            <p>
                                Sri Lanka is a biodiversity hotspot—an island where the wild still whispers, roars, and
                                soars.
                                Our Wildlife Tours are crafted for those who seek authentic, respectful encounters with
                                nature’s
                                most fascinating creatures across land, sky and sea.
                            </p>

                            <p>
                                Led by passionate naturalists and field experts, each tour immerses you in the habitats of
                                Sri Lanka’s
                                most iconic and elusive species. From dense jungles to open savannahs and vibrant coastal
                                waters,
                                every journey is designed to connect you deeply with nature.
                            </p>

                            <p>
                                Whether you're scanning treetops for rare birds, tracking reptiles through forest
                                undergrowth,
                                watching elephants roam freely, or exploring marine ecosystems, each moment is a true
                                wildlife experience.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="tour-highlights">
                                <h3>Wildlife Experiences</h3>

                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Guided tours with expert naturalists</li>
                                    <li><i class="bi bi-check-circle"></i> National parks and protected reserves</li>
                                    <li><i class="bi bi-check-circle"></i> Bird watching in forests, wetlands and highlands
                                    </li>
                                    <li><i class="bi bi-check-circle"></i> Reptile and amphibian (herping) experiences</li>
                                    <li><i class="bi bi-check-circle"></i> Elephant and leopard tracking safaris</li>
                                    <li><i class="bi bi-check-circle"></i> Marine wildlife including whales and dolphins
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Itinerary -->
                <div class="tour-itinerary" data-aos="fade-up" data-aos-delay="300">
                    <h2>Wildlife Experiences</h2>

                    <div class="itinerary-timeline">

                        <div class="itinerary-item">
                            <div class="day-number">1</div>
                            <div class="day-content">
                                <h4>Bird Watching Tours</h4>
                                <p>
                                    Spot endemic and migratory species in rainforests, wetlands and highlands.
                                    Our guides help you see and hear Sri Lanka’s rich avian life.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">2</div>
                            <div class="day-content">
                                <h4>Herping Tours</h4>
                                <p>
                                    Explore the secretive world of snakes, lizards and amphibians with expert guidance
                                    and ethical wildlife observation.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">3</div>
                            <div class="day-content">
                                <h4>Mammal Watching Tours</h4>
                                <p>
                                    Track elephants, leopards, monkeys and deer in national parks and reserves where
                                    the wild still rules.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">4</div>
                            <div class="day-content">
                                <h4>Marine Fauna Exploring</h4>
                                <p>
                                    Discover dolphins, whales, sea turtles and vibrant reef ecosystems in Sri Lanka’s
                                    coastal waters.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tour-overview mt-4">
                    <h3>Ideal For</h3>
                    <p>
                        Wildlife enthusiasts, photographers, families, researchers and anyone who wants
                        to connect with nature beyond the surface.
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
                        <h2>Ready for a Wildlife Adventure?</h2>

                        <p>
                            Experience Sri Lanka’s incredible biodiversity through guided wildlife tours designed
                            for respectful and unforgettable encounters with nature.
                        </p>

                        <div class="cta-actions">
                            <a href="#booking" class="btn-primary">Plan Your Wildlife Tour</a>
                            <a href="tel:+94700000000" class="btn-secondary">Call / WhatsApp: +94 70 000 0000</a>
                        </div>

                        <div class="urgency-banner">
                            <i class="bi bi-clock"></i>
                            <span>Best wildlife sightings vary by season – book early for peak experiences</span>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Travel Tour Details Section -->

    </main>
@endsection
