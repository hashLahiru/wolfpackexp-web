@extends('web.layouts.app')

@section('content')
    {{-- Travel Hero Section --}}
    <section id="travel-hero" class="travel-hero section dark-background">

        <div class="hero-background">
            <img src="{{ asset('assets/images/home/adventure-travel-home-header.jpeg') }}" alt="Adventure Travel Home Header"
                class="img-fluid w-100">
            <div class="hero-overlay"></div>
        </div>

        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-text" data-aos="fade-up" data-aos-delay="100">
                        <h1 class="hero-title">Your Gateway to Sri Lanka’s Untamed Beauty</h1>
                        <p class="hero-subtitle">Wolf Pack Expeditions is more than a travel company.
                            We are a tribe of explorers, storytellers and nature guardians dedicated to revealing the wild
                            heart of Sri Lanka.

                            From misty mountain trails to hidden waterfalls and rare wildlife habitats, every expedition we
                            create is designed to awaken your senses and connect you with the island’s raw beauty.</p>
                        <div class="hero-buttons">
                            <a href="{{ route('booking') }}" class="btn btn-primary me-3">Start Exploring</a>
                            <a href="{{ route('tours') }}" class="btn btn-outline">Browse Tours</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="booking-form-wrapper" data-aos="fade-left" data-aos-delay="200">
                        <div class="booking-form">
                            <h3 class="form-title">Plan Your Adventure</h3>
                            <form action="" class="">
                                <div class="form-group mb-3">
                                    <label for="destination">Destination</label>
                                    <select name="destination" id="destination" class="form-select" required="">
                                        <option value="">Choose your destination</option>
                                        <option value="">Mountain trekking</option>
                                        <option value="">Hiking adventures</option>
                                        <option value="">PEKOE trail</option>
                                        <option value="">Wildlife tours</option>
                                        <option value="">Road Trips</option>
                                        <option value="">Safaris</option>
                                        <option value="">Water Adventures</option>
                                        <option value="">Waterfall hunting</option>
                                        <option value="">Forest bathing</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="checkin">Departure Date</label>
                                            <input type="date" name="checkin" id="checkin" class="form-control"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="checkout">Return Date</label>
                                            <input type="date" name="checkout" id="checkout" class="form-control"
                                                required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="adults">Adults</label>
                                            <select name="adults" id="adults" class="form-select" required="">
                                                <option value="1">1 Adult</option>
                                                <option value="2">2 Adults</option>
                                                <option value="3">3 Adults</option>
                                                <option value="4">4+ Adults</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="children">Children</label>
                                            <select name="children" id="children" class="form-select">
                                                <option value="0">No Children</option>
                                                <option value="1">1 Child</option>
                                                <option value="2">2 Children</option>
                                                <option value="3">3+ Children</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="note">Note</label>
                                    <textarea name="note" id="note" class="form-control" rows="2" placeholder="Add a note (optional)"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Start your next Adventure</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- /Travel Hero Section --}}

    {{-- Why Us Section --}}
    <section id="why-us" class="why-us section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            {{-- About Us Content --}}
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="content">
                        <h3>Explore Sri Lanka Beyond the Ordinary</h3>
                        <p>Discover Sri Lanka’s wild side through journeys crafted by passionate explorers. From misty
                            mountain trails and hidden waterfalls to ancient forests and wildlife sanctuaries, our
                            expeditions take you deep into the island’s untamed landscapes.</p>

                        <p>Travel with experienced guides who know every trail and hidden viewpoint. Whether you seek
                            adventure, nature or cultural discovery, every journey blends exploration, safety and authentic
                            local experiences.</p>
                        <div class="stats-row">
                            <div class="stat-item">
                                <span data-purecounter-start="0" data-purecounter-end="1200"
                                    data-purecounter-duration="2" class="purecounter">0</span>
                                <div class="stat-label">Happy Travelers</div>
                            </div>
                            <div class="stat-item">
                                <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2"
                                    class="purecounter">0</span>
                                <div class="stat-label">Countries Covered</div>
                            </div>
                            <div class="stat-item">
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2"
                                    class="purecounter">0</span>
                                <div class="stat-label">Years Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="about-image">
                        <img src="{{ asset('assets/images/home/sri-lankan-mountain.jpeg') }}" alt="Travel Experience"
                            class="img-fluid rounded-4">
                        <div class="experience-badge">
                            <div class="experience-number">5+</div>
                            <div class="experience-text">Years of Excellence</div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End About Us Content --}}

            {{-- Why Choose Us --}}
            <div class="why-choose-section">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <h3>Why Travel With Wolf Pack Expeditions</h3>
                        <p>Our expeditions are built on passion for nature, deep local knowledge and a commitment to safe,
                            meaningful adventures across Sri Lanka’s most breathtaking landscapes.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h4>Expert Local Guides</h4>
                            <p>Our team includes experienced trekkers, wildlife specialists and adventure guides who know
                                Sri Lanka’s landscapes, ecosystems and hidden trails.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h4>Safety First</h4>
                            <p>Every expedition follows professional safety standards with trained guides, proper equipment
                                and carefully planned routes.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-cash"></i>
                            </div>
                            <h4>Tailored Adventures</h4>
                            <p>From thrilling expeditions to peaceful nature journeys, we design experiences that match your
                                interests, pace and travel style.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h4>Reliable Support</h4>
                            <p>Our team supports you throughout your journey, ensuring smooth logistics and a comfortable
                                adventure experience.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <h4>Diverse Destinations</h4>
                            <p>Explore mountains, forests, rivers, coastal lagoons and national parks across the diverse
                                landscapes of Sri Lanka.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h4>Authentic Experiences</h4>
                            <p>We focus on meaningful travel that connects you with nature, wildlife and local communities
                                in a responsible way.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    {{-- /Why Us Section  --}}

    {{-- Featured Tours Section  --}}
    <section id="featured-tours" class="featured-tours section">

        {{-- Section Title --}}
        <div class="container section-title" data-aos="fade-up">
            <h2>Featured Tours</h2>
            <div><span>Check Our</span> <span class="description-title">Featured Tours</span></div>
        </div>
        {{-- End Section Title --}}

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="{{ asset('assets/images/home/mountain-trekking.jpeg') }}" alt="Serene Beach Retreat"
                                class="img-fluid" loading="lazy">
                        </div>
                        <div class="tour-content">
                            <h4>Mountain Trekking Adventure</h4>
                            <p>Explore Sri Lanka’s breathtaking highlands through misty mountain trails, sacred summits and
                                dramatic ridgelines. Guided by experienced trekkers, these expeditions take you beyond the
                                ordinary into cloud forests, hidden viewpoints and unforgettable sunrise landscapes.</p>
                            <div class="tour-action">
                                <a href="{{ route('booking') }}" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Tour Item --}}

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="{{ asset('assets/images/home/wildlife-safari.jpeg') }}" alt="Arctic Expedition"
                                class="img-fluid" loading="lazy">
                        </div>
                        <div class="tour-content">
                            <h4>Wildlife Safari Experience</h4>
                            <p>Discover Sri Lanka’s incredible wildlife through guided safari expeditions across the
                                island’s most famous national parks. Encounter elephants, leopards, crocodiles and vibrant
                                birdlife in their natural habitats.</p>
                            <div class="tour-action">
                                <a href="{{ route('booking') }}" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Tour Item --}}

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="{{ asset('assets/images/home/water-adventure.jpeg') }}" alt="Mountain Trekking"
                                class="img-fluid" loading="lazy">
                        </div>
                        <div class="tour-content">
                            <h4>Water Adventure Experience</h4>
                            <p>Experience the thrill and serenity of Sri Lanka’s rivers and lagoons. From adrenaline-filled
                                white water rafting to peaceful kayaking through mangroves, these adventures reveal the
                                island from a whole new perspective.</p>
                            <div class="tour-action">
                                <a href="{{ route('booking') }}" class="btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Tour Item --}}
            </div>

            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
                <a href="{{ route('tours') }}" class="btn-view-all">View All Tours</a>
            </div>

        </div>

    </section>
    {{-- /Featured Tours Section --}}

    {{-- Call To Action Section  --}}
    <section id="call-to-action" class="call-to-action section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="newsletter-section" data-aos="fade-up" data-aos-delay="300">
                <div class="newsletter-card">
                    <div class="newsletter-content">
                        <div class="newsletter-icon">
                            <i class="bi bi-envelope-heart"></i>
                        </div>
                        <div class="newsletter-text">
                            <h3>Stay in the Loop</h3>
                            <p>Get exclusive travel deals and destination guides delivered to your inbox</p>
                        </div>
                    </div>

                    <form class="php-email-form newsletter-form" action="forms/newsletter.php" method="post">
                        <div class="form-wrapper">
                            <input type="email" name="email" class="email-input" placeholder="Your email address"
                                required="">
                            <button type="submit" class="subscribe-btn">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>

                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Welcome aboard! Check your email for exclusive offers.</div>

                        <div class="trust-indicators">
                            <i class="bi bi-lock"></i>
                            <span>We protect your privacy. Unsubscribe anytime.</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    {{-- Call To Action Section --}}
@endsection
