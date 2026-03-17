@extends('web.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/img/travel/showcase-8.webp)') }};">
            <div class="container position-relative">
                <h1>Water Adventures</h1>
                <p>Where the wild flows through rivers, lakes and coastal waters.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('tours') }}">Tours</a></li>
                        <li class="current">Water Adventures</li>
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
                            <h2>Water Adventures – Where the Wild Flows</h2>

                            <p>
                                Sri Lanka’s rivers, lakes and coastal waters offer more than scenery—they are gateways to
                                adrenaline, serenity and unforgettable exploration. Our Water Adventures are crafted for
                                every kind of explorer, from thrill-seekers to those in search of calm.
                            </p>

                            <p>
                                Led by certified guides and backed by strong safety standards, each experience immerses
                                you in the island’s aquatic beauty while keeping you secure and supported.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="tour-highlights">
                                <h3>Adventure Highlights</h3>

                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Certified guides and safety-first experiences
                                    </li>
                                    <li><i class="bi bi-check-circle"></i> White water rafting and kayaking options</li>
                                    <li><i class="bi bi-check-circle"></i> Scenic rivers, lagoons and coastal waters</li>
                                    <li><i class="bi bi-check-circle"></i> Wildlife and nature encounters</li>
                                    <li><i class="bi bi-check-circle"></i> Sunset paddle sessions</li>
                                    <li><i class="bi bi-check-circle"></i> Suitable for beginners to adventure seekers</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Itinerary -->
                <div class="tour-itinerary" data-aos="fade-up" data-aos-delay="300">
                    <h2>Water Experiences</h2>

                    <div class="itinerary-timeline">

                        <div class="itinerary-item">
                            <div class="day-number">1</div>
                            <div class="day-content">
                                <h4>White Water Rafting – Kithulgala</h4>
                                <p>
                                    Ride Grade II–III rapids along the Kelani River, surrounded by lush rainforest.
                                    Perfect for groups and adrenaline lovers seeking an exciting river adventure.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">2</div>
                            <div class="day-content">
                                <h4>Kayaking – Bentota</h4>
                                <p>
                                    Paddle through the Madhu River’s mangrove tunnels and cinnamon islands,
                                    offering a peaceful and scenic experience.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">3</div>
                            <div class="day-content">
                                <h4>Kayaking – Kalpitiya Lagoon</h4>
                                <p>
                                    Enjoy calm coastal waters with opportunities for birdwatching and
                                    serene exploration.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">4</div>
                            <div class="day-content">
                                <h4>Kayaking – Bolgoda Lake</h4>
                                <p>
                                    A peaceful freshwater paddling experience near Colombo, ideal for
                                    relaxation and beginners.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">5</div>
                            <div class="day-content">
                                <h4>Kayaking – Koggala Lagoon</h4>
                                <p>
                                    Discover cultural islands and calm waters while exploring one of
                                    Sri Lanka’s most scenic lagoons.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">6</div>
                            <div class="day-content">
                                <h4>Kayaking – Mahaweli River (Kandy)</h4>
                                <p>
                                    Paddle through highland landscapes with gentle currents and
                                    beautiful natural surroundings.
                                </p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">7</div>
                            <div class="day-content">
                                <h4>Sunset Paddle Sessions</h4>
                                <p>
                                    End your day on the water with golden skies, gentle waves and
                                    a calm, reflective atmosphere.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tour-overview mt-4">
                    <h3>Ideal For</h3>
                    <p>
                        Adventure seekers, wellness travelers, families and anyone who wants
                        to experience nature through water in both exciting and peaceful ways.
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
                        <h2>Ready to Dive Into Adventure?</h2>

                        <p>
                            Explore Sri Lanka’s waterways through thrilling and peaceful experiences
                            designed for every type of traveler.
                        </p>

                        <div class="cta-actions">
                            <a href="#booking" class="btn-primary">Book Your Water Adventure</a>
                            <a href="tel:+94700000000" class="btn-secondary">Call / WhatsApp: +94 70 000 0000</a>
                        </div>

                        <div class="urgency-banner">
                            <i class="bi bi-clock"></i>
                            <span>Best conditions vary by season – plan ahead for the best experience</span>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Travel Tour Details Section -->

    </main>
@endsection
