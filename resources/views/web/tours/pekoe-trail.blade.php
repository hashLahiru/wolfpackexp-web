@extends('web.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/img/travel/showcase-8.webp)') }};">
            <div class="container position-relative">
                <h1>PEKOE Trail</h1>
                <p>A legendary 300km long-distance walking trail across Sri Lanka’s Central Highlands.</p>
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
                            <h2>Trail Overview</h2>

                            <p>
                                The Pekoe Trail is a 300+ km long-distance walking route across Sri Lanka’s Central
                                Highlands,
                                divided into 22 stages that weave through tea estates, forests, villages, valleys and
                                historic sites.
                            </p>

                            <p>
                                Designed to showcase the diversity of Sri Lanka’s hill country, the trail connects
                                breathtaking
                                mountain landscapes with the heritage of tea plantations and rural communities. Each stage
                                offers
                                a unique perspective of the island’s natural beauty and cultural history.
                            </p>

                            <p>
                                Whether you walk a single stage or explore several sections of the trail, the Pekoe Trail
                                offers
                                a rewarding slow-travel experience through one of the most scenic regions of Sri Lanka.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="tour-highlights">
                                <h3>Experience Highlights</h3>

                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Walk sections of the famous 300km Pekoe Trail
                                    </li>
                                    <li><i class="bi bi-check-circle"></i> Scenic tea estates and plantation villages</li>
                                    <li><i class="bi bi-check-circle"></i> Forest trails, valleys and highland ridges</li>
                                    <li><i class="bi bi-check-circle"></i> Flexible stages from easy to challenging</li>
                                    <li><i class="bi bi-check-circle"></i> Guided interpretation of flora, fauna and local
                                        folklore</li>
                                    <li><i class="bi bi-check-circle"></i> Optional picnic lunches and cultural stops</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Itinerary -->
                <div class="tour-itinerary" data-aos="fade-up" data-aos-delay="300">
                    <h2>Trail Stages</h2>
                    <div class="itinerary-timeline">

                        <div class="itinerary-item">
                            <div class="day-number">1</div>
                            <div class="day-content">
                                <h4>Hanthana → Galaha</h4>
                                <p>Gentle walk through Hanthana’s rolling hills with sweeping tea-country views.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">2</div>
                            <div class="day-content">
                                <h4>Galaha → Loolkandura</h4>
                                <p>Historic trail leading to Sri Lanka’s first tea estate founded by James Taylor.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">3</div>
                            <div class="day-content">
                                <h4>Loolkandura → Tawalantenne</h4>
                                <p>Forest patches, estate villages and misty highland scenery.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">4</div>
                            <div class="day-content">
                                <h4>Tawalantenne → Pundaluoya</h4>
                                <p>A mix of rural paths, waterfalls and plantation life.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">5</div>
                            <div class="day-content">
                                <h4>Pundaluoya → Watagoda</h4>
                                <p>Tea estates, railway viewpoints and cool highland breezes.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">6</div>
                            <div class="day-content">
                                <h4>Watagoda → Kotagala</h4>
                                <p>Easy estate paths with classic tea-country panoramas.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">7</div>
                            <div class="day-content">
                                <h4>Kotagala → Norwood</h4>
                                <p>Tea valleys, colonial bungalows and reservoir views.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">8</div>
                            <div class="day-content">
                                <h4>Norwood → Bogawantalawa</h4>
                                <p>Explore the famous “Golden Valley of Tea”.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">9</div>
                            <div class="day-content">
                                <h4>Bogawantalawa → Dayagama</h4>
                                <p>A tougher climb through remote tea landscapes.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">10</div>
                            <div class="day-content">
                                <h4>Dayagama → Horton Plains</h4>
                                <p>High-altitude trek entering cloud forests and grasslands.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">11</div>
                            <div class="day-content">
                                <h4>Horton Plains → Udaweriya</h4>
                                <p>Open plains transitioning into rugged estate trails.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">12</div>
                            <div class="day-content">
                                <h4>Udaweriya → Haputale</h4>
                                <p>Dramatic ridgelines and sweeping valley views.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">13</div>
                            <div class="day-content">
                                <h4>Haputale → St. Catherine’s</h4>
                                <p>Pine forests, tea fields and views of the Ella Gap.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">14</div>
                            <div class="day-content">
                                <h4>St. Catherine’s → Makulella</h4>
                                <p>Quiet rural paths and stunning sunrise viewpoints.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">15</div>
                            <div class="day-content">
                                <h4>Makulella → Ella</h4>
                                <p>Forest trails leading into the famous Ella highlands.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">16</div>
                            <div class="day-content">
                                <h4>Ella → Demodara</h4>
                                <p>Walk past the iconic Nine Arch Bridge and railway routes.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">17</div>
                            <div class="day-content">
                                <h4>Demodara → Hali Ela</h4>
                                <p>Estate villages, paddy fields and gentle slopes.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">18</div>
                            <div class="day-content">
                                <h4>Hali Ela → Ettampitiya</h4>
                                <p>A tougher stage through forests and open countryside.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">19</div>
                            <div class="day-content">
                                <h4>Ettampitiya → Loonuwatte</h4>
                                <p>Remote highland terrain with cool misty air.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">20</div>
                            <div class="day-content">
                                <h4>Loonuwatte → Udapussellawa</h4>
                                <p>Tea valleys and quiet estate communities.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">21</div>
                            <div class="day-content">
                                <h4>Udapussellawa → Kandapola</h4>
                                <p>Forest corridors and rolling plantation hills.</p>
                            </div>
                        </div>

                        <div class="itinerary-item">
                            <div class="day-number">22</div>
                            <div class="day-content">
                                <h4>Kandapola → Pedro Estate (Nuwara Eliya)</h4>
                                <p>The final stage ending near Pedro Tea Estate.</p>
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
                                <img src="{{ asset('assets/img/travel/destination-6.webp') }}"
                                    alt="Mediterranean Cuisine" class="img-fluid" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Final CTA -->
                <div class="final-cta" data-aos="fade-up" data-aos-delay="1000">
                    <div class="cta-content">
                        <h2>Ready to Walk the Pekoe Trail?</h2>

                        <p>
                            Experience one of Asia’s most beautiful long-distance walking routes through
                            Sri Lanka’s tea country, forests and mountain valleys.
                        </p>

                        <div class="cta-actions">
                            <a href="#booking" class="btn-primary">Plan Your Pekoe Trail Journey</a>
                            <a href="tel:+94700000000" class="btn-secondary">Call / WhatsApp: +94 70 000 0000</a>
                        </div>

                        <div class="urgency-banner">
                            <i class="bi bi-clock"></i>
                            <span>Guided trail sections available year-round</span>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Travel Tour Details Section -->

    </main>
@endsection
