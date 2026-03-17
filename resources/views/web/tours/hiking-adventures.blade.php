@extends('web.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/img/travel/showcase-8.webp)') }};">
            <div class="container position-relative">
                <h1>Hiking Adventures</h1>
                <p>Step into Sri Lanka’s living landscapes and discover nature, culture, and quiet beauty one trail at a
                    time.</p>
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
                            <h2>Hiking Adventures – Step into Sri Lanka’s Living Landscapes</h2>

                            <p>
                                Not every adventure needs altitude — sometimes the magic lies in the rhythm of your
                                footsteps
                                and the stories whispered by the forest. Our hiking experiences are crafted for travelers
                                who
                                seek connection over conquest, offering scenic trails through jungles, tea plantations,
                                ancient
                                ruins, and village paths.
                            </p>

                            <p>
                                Led by knowledgeable local guides who know every bend and birdcall, these hikes blend
                                nature,
                                culture, and calm exploration. You’ll walk through lush valleys, hidden forest trails, and
                                traditional rural landscapes rarely seen by typical tourists.
                            </p>

                            <p>
                                Whether it's a peaceful half-day wander or a full-day immersion into Sri Lanka’s natural
                                beauty,
                                each journey invites you to slow down and discover the island’s soul one step at a time.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="tour-highlights">
                                <h3>Experience Highlights</h3>

                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Scenic hiking trails through jungles and tea
                                        plantations</li>
                                    <li><i class="bi bi-check-circle"></i> Guided walks through traditional village
                                        landscapes</li>
                                    <li><i class="bi bi-check-circle"></i> Encounters with local wildlife and birdlife</li>
                                    <li><i class="bi bi-check-circle"></i> Visits to ancient ruins and hidden cultural sites
                                    </li>
                                    <li><i class="bi bi-check-circle"></i> Flexible half-day and full-day hiking options
                                    </li>
                                    <li><i class="bi bi-check-circle"></i> Small groups for a more personal experience</li>
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
                        <h2>Ready to Explore Sri Lanka on Foot?</h2>

                        <p>
                            Discover the beauty of Sri Lanka’s forests, villages, and hidden trails with our guided hiking
                            adventures.
                            Perfect for nature lovers, photographers, and travelers who want to experience the island at a
                            slower,
                            more meaningful pace.
                        </p>

                        <div class="cta-actions">
                            <a href="#booking" class="btn-primary">Start Your Hiking Adventure</a>
                            <a href="tel:+94700000000" class="btn-secondary">Call / WhatsApp: +94 70 000 0000</a>
                        </div>

                        <div class="urgency-banner">
                            <i class="bi bi-clock"></i>
                            <span>Limited small-group hiking experiences available each week</span>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Travel Tour Details Section -->

    </main>
@endsection
