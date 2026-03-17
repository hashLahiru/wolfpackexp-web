@extends('web.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/img/travel/showcase-8.webp)') }};">
            <div class="container position-relative">
                <h1>Mountain Trekking</h1>
                <p>Where Earth Touches Sky – Explore Sri Lanka’s misty mountains, sacred peaks and breathtaking trails.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Tour Details</li>
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
                            <h2>Tour Overview</h2>

                            <p>
                                Sri Lanka’s highlands are a tapestry of misty peaks, ancient trails and breathtaking vistas.
                                Our mountain trekking expeditions take you beyond the beaten path into cloud forests, sacred
                                summits and rugged ridgelines where nature whispers and legends linger.
                            </p>

                            <p>
                                Led by seasoned trekkers and local guides, each route is carefully chosen for its beauty,
                                challenge and cultural depth. Whether you're scaling the iconic Adam’s Peak, navigating
                                the Knuckles Mountain Range, or exploring hidden trails in Ella, every trek is designed
                                to match your pace, experience level and sense of adventure.
                            </p>

                            <p>
                                These treks are more than just hikes — they are immersive journeys through Sri Lanka’s
                                most spectacular landscapes and mountain communities.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="tour-highlights">
                                <h3>Experience Includes</h3>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Panoramic sunrise or sunset views</li>
                                    <li><i class="bi bi-check-circle"></i> Encounters with native flora and fauna</li>
                                    <li><i class="bi bi-check-circle"></i> Cultural insights from mountain villages</li>
                                    <li><i class="bi bi-check-circle"></i> Guided trekking routes across Sri Lanka’s
                                        highlands</li>
                                    <li><i class="bi bi-check-circle"></i> Trails ranging from beginner-friendly to expert
                                        level</li>
                                    <li><i class="bi bi-check-circle"></i> Small group trekking experiences</li>
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
                        <h2>Ready to Conquer the Highlands?</h2>

                        <p>
                            Join our expert-guided trekking adventures across Sri Lanka’s most breathtaking mountain
                            landscapes.
                            Limited group sizes ensure a safe, immersive and unforgettable experience.
                        </p>

                        <div class="cta-actions">
                            <a href="#booking" class="btn-primary">Book Your Trek</a>
                            <a href="tel:+94700000000" class="btn-secondary">Call / WhatsApp: +94 70 000 0000</a>
                        </div>

                        <div class="urgency-banner">
                            <i class="bi bi-clock"></i>
                            <span>Peak trekking season spots filling fast!</span>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Travel Tour Details Section -->

    </main>
@endsection
