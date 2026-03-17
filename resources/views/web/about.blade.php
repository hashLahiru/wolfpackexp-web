@extends('web.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/images/about/holiday-sri-lanka.jpeg') }});">
            <div class="container position-relative">
                <h1>About</h1>
                <p>
                <p>Meet the explorers, naturalists and storytellers who guide our journeys through the wild landscapes of
                    Sri Lanka.</p>
                </p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">About</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Travel About Section -->
        <section id="travel-about" class="travel-about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-8 mx-auto text-center mb-5">
                        <div class="intro-content" data-aos="fade-up" data-aos-delay="200">
                            <h2>Guided by the Wild,<br>United as a Pack</h2>
                            <p class="lead">
                                We are a pack shaped by the mountains, forests and rivers of Sri Lanka. Every journey we
                                guide is rooted in the instinct to explore, protect and belong.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-5">
                    <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="300">
                        <div class="hero-image">
                            <img src="{{ asset('assets/images/about/beach-sri-lanka.jpeg') }}" class="img-fluid"
                                alt="Travel Adventure">
                        </div>
                    </div>

                    <div class="col-lg-6 offset-lg-1" data-aos="slide-left" data-aos-delay="400">
                        <div class="story-content">
                            <div class="story-badge">
                                <i class="bi bi-compass"></i>
                                <span>About Us</span>
                            </div>

                            <h3>The Spirit of the Pack</h3>

                            <p>
                                We are a pack shaped by the mountains, forests and rivers of Sri Lanka.
                                We move with the rhythm of the land, guiding those who walk beside us into the heart of the
                                wild.
                                Every trail we follow, every story we share and every moment we create comes from the
                                instinct to explore, protect and belong.
                            </p>

                            <p>
                                As a pack, we read the forest like a map, sense the weather like a language and understand
                                the land as home.
                                Our journeys are crafted to help guests feel this connection too — not as observers, but as
                                part of the landscape.
                                We lead with curiosity, move with purpose and welcome every traveler into our circle with
                                warmth and respect.
                            </p>

                            <div class="mission-box">
                                <div class="mission-icon">
                                    <i class="bi bi-tree"></i>
                                </div>
                                <div class="mission-text">
                                    <h4>Feel the wild. Live the story.</h4>
                                    <p>"Always follow the pack"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="features-grid" data-aos="fade-up" data-aos-delay="200">
                            <div class="section-header text-center mb-5">
                                <h3>What Makes Us Different</h3>
                                <p>The values that guide every expedition we create</p>
                            </div>

                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="feature-card">
                                        <div class="feature-front">
                                            <div class="feature-icon">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <h4>Expert Naturalists</h4>
                                            <p>Guided by experienced wildlife specialists and outdoor explorers</p>
                                        </div>
                                        <div class="feature-back">
                                            <p>Our guides include naturalists, trekkers and conservationists who understand
                                                Sri Lanka’s ecosystems and wildlife in remarkable depth.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="feature-card">
                                        <div class="feature-front">
                                            <div class="feature-icon">
                                                <i class="bi bi-heart-pulse"></i>
                                            </div>
                                            <h4>Safety & Responsibility</h4>
                                            <p>Professional standards for safe wilderness travel</p>
                                        </div>
                                        <div class="feature-back">
                                            <p>Every expedition follows careful planning, trained guidance and safety
                                                procedures to ensure a secure and enjoyable adventure.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="feature-card">
                                        <div class="feature-front">
                                            <div class="feature-icon">
                                                <i class="bi bi-recycle"></i>
                                            </div>
                                            <h4>Nature First</h4>
                                            <p>Respecting wildlife and protecting natural ecosystems</p>
                                        </div>
                                        <div class="feature-back">
                                            <p>Our journeys are designed with deep respect for nature and local communities,
                                                supporting responsible and sustainable exploration.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="feature-card">
                                        <div class="feature-front">
                                            <div class="feature-icon">
                                                <i class="bi bi-sliders"></i>
                                            </div>
                                            <h4>Authentic Exploration</h4>
                                            <p>Discover Sri Lanka beyond the tourist paths</p>
                                        </div>
                                        <div class="feature-back">
                                            <p>We guide travelers into hidden forests, quiet trails and wild landscapes
                                                rarely experienced through conventional tourism.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="feature-card">
                                        <div class="feature-front">
                                            <div class="feature-icon">
                                                <i class="bi bi-shield-check"></i>
                                            </div>
                                            <h4>Passionate Guides</h4>
                                            <p>A team driven by curiosity and conservation</p>
                                        </div>
                                        <div class="feature-back">
                                            <p>Each member of our pack shares a deep passion for wildlife, outdoor
                                                exploration and sharing knowledge with guests.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="feature-card">
                                        <div class="feature-front">
                                            <div class="feature-icon">
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h4>Meaningful Journeys</h4>
                                            <p>Experiences that connect people with nature</p>
                                        </div>
                                        <div class="feature-back">
                                            <p>Our goal is not just adventure, but helping travelers build a deeper
                                                connection with the landscapes and wildlife of Sri Lanka.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-12">

                        <div class="journey-timeline" data-aos="fade-up" data-aos-delay="200">
                            <div class="timeline-header text-center mb-5">
                                <h3>Meet the Pack</h3>
                                <p>The naturalists and explorers who guide our journeys through Sri Lanka’s wild landscapes
                                </p>
                            </div>

                            <div class="row g-4">

                                <!-- Banuka -->
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="team-member text-center">
                                        <img src="{{ asset('assets/images/team/bhanuka-ranasinghe.jpg') }}"
                                            class="img-fluid rounded mb-3" alt="Banuka Ranasinghe">

                                        <h4>Banuka Ranasinghe</h4>
                                        <span class="text-muted">CEO | Naturalist Guide | Trekker</span>

                                        <p class="mt-3">
                                            Herpetologist, taxonomist and conservationist with deep field knowledge of Sri
                                            Lanka’s wildlife.
                                            Banuka brings calm leadership and expertise to every expedition, making complex
                                            natural history
                                            exciting and accessible for guests.
                                        </p>
                                    </div>
                                </div>

                                <!-- Osanda -->
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                                    <div class="team-member text-center">
                                        <img src="{{ asset('assets/images/team/osanda-dissanayaka.jpg') }}"
                                            class="img-fluid rounded mb-3" alt="Osanda Dissanayake">

                                        <h4>Osanda Dissanayake</h4>
                                        <span class="text-muted">Naturalist Guide | Trekker</span>

                                        <p class="mt-3">
                                            A passionate wildlife explorer and photographer who combines wilderness trekking
                                            with landscape storytelling. Osanda creates immersive outdoor experiences while
                                            inspiring guests to appreciate nature and conservation.
                                        </p>
                                    </div>
                                </div>

                                <!-- Sachintha -->
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="team-member text-center">
                                        <img src="{{ asset('assets/images/team/sachintha-wedagedara.jpg') }}"
                                            class="img-fluid rounded mb-3" alt="Sachintha Wedagedara">

                                        <h4>Sachintha Wedagedara</h4>
                                        <span class="text-muted">Naturalist Guide | Trekker</span>

                                        <p class="mt-3">
                                            With academic training in wildlife conservation, zoo archaeology and paleo
                                            biodiversity,
                                            Sachintha blends scientific knowledge with field experience to help guests
                                            understand
                                            ecosystems and wildlife diversity.
                                        </p>
                                    </div>
                                </div>

                                <!-- Vishud & Anju: Centered on large screens -->
                                <div class="w-100 d-none d-lg-block"></div>
                                <div class="col-lg-4 col-md-6 offset-lg-2" data-aos="fade-up" data-aos-delay="450">
                                    <div class="team-member text-center">
                                        <img src="{{ asset('assets/images/team/vishud-jayathilaka.jpg') }}"
                                            class="img-fluid rounded mb-3" alt="Vishud Jayathilaka">

                                        <h4>Vishud Jayathilaka</h4>
                                        <span class="text-muted">Naturalist Guide | Safari Tracker</span>

                                        <p class="mt-3">
                                            A dedicated naturalist passionate about environmental education and responsible
                                            eco-tourism.
                                            Vishud works to inspire visitors to respect and protect Sri Lanka’s natural
                                            heritage.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="team-member text-center">
                                        <img src="{{ asset('assets/images/team/anju-bimalsha.jpg') }}"
                                            class="img-fluid rounded mb-3" alt="Anju Bimalsha">

                                        <h4>Anju Bimalsha</h4>
                                        <span class="text-muted">Naturalist Guide | Trekker</span>

                                        <p class="mt-3">
                                            A wildlife enthusiast specializing in safari ecology and conservation research.
                                            Anju contributes to field studies and wildlife observations while guiding
                                            travelers through Sri Lanka’s diverse habitats.
                                        </p>
                                    </div>
                                </div>
                                <!-- End centered cards -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- /Travel About Section -->
    </main>
@endsection
