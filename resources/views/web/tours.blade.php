@extends('web.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/images/tours/tours-header.jpeg') }});">
            <div class="container position-relative">
                <h1>Tours</h1>
                <p>Explore Sri Lanka’s wild landscapes through expertly guided expeditions — from mountain treks and safaris
                    to waterfall adventures and wilderness experiences.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Tours</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Travel Tours Section -->
        <section id="travel-tours" class="travel-tours section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-8 mx-auto text-center mb-5">
                        <h2>Explore Our Expeditions</h2>
                        <p>Each adventure is designed to immerse you in Sri Lanka’s mountains, forests, rivers and wildlife.
                            Discover journeys guided by passionate naturalists and experienced explorers.</p>
                    </div>
                </div>

                <!-- Tour Grid -->
                <div class="row" data-aos="fade-up" data-aos-delay="600">
                    <div class="col-12">
                        <div class="row">

                            <!-- Mountain Trekking -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="tour-card">
                                    <div class="tour-image">
                                        <img src="{{ asset('assets/images/tours/mountain-trekking.jpeg') }}"
                                            class="img-fluid" alt="Mountain Trekking">
                                    </div>
                                    <div class="tour-content">
                                        <h4>Mountain Trekking</h4>
                                        <p>Explore misty peaks, cloud forests and breathtaking highland trails across Sri
                                            Lanka’s most iconic mountain landscapes.</p>
                                        <a href="{{ route('tour.mountain-trekking') }}" class="btn btn-outline-primary">View
                                            Tour</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Hiking Adventures -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="tour-card">
                                    <div class="tour-image">
                                        <img src="{{ asset('assets/images/tours/hiking-adventures.jpeg') }}"
                                            class="img-fluid" alt="Hiking Adventures">
                                    </div>
                                    <div class="tour-content">
                                        <h4>Hiking Adventures</h4>
                                        <p>Walk through jungles, tea plantations and village paths while discovering the
                                            landscapes and stories of rural Sri Lanka.</p>
                                        <a href="{{ route('tour.hiking-adventures') }}" class="btn btn-outline-primary">View
                                            Tour</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Pekoe Trail -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="tour-card">
                                    <div class="tour-image">
                                        <img src="{{ asset('assets/images/tours/pekoe-trail.jpeg') }}" class="img-fluid"
                                            alt="Pekoe Trail">
                                    </div>
                                    <div class="tour-content">
                                        <h4>Pekoe Trail Experience</h4>
                                        <p>Journey through Sri Lanka’s legendary long-distance tea trail across forests,
                                            valleys and historic hill country estates.</p>
                                        <a href="{{ route('tour.pekoe-trail') }}" class="btn btn-outline-primary">View
                                            Tour</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Wildlife Tours -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="tour-card">
                                    <div class="tour-image">
                                        <img src="{{ asset('assets/images/tours/wildlife.jpeg') }}" class="img-fluid"
                                            alt="Wildlife Tours">
                                    </div>
                                    <div class="tour-content">
                                        <h4>Wildlife Exploration</h4>
                                        <p>Encounter Sri Lanka’s incredible biodiversity including birds, reptiles, mammals
                                            and marine life with expert naturalist guides.</p>
                                        <a href="{{ route('tour.wildlife-exploration') }}"
                                            class="btn btn-outline-primary">View Tour</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Safari Tours -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="tour-card">
                                    <div class="tour-image">
                                        <img src="{{ asset('assets/images/tours/safari.jpeg') }}" class="img-fluid"
                                            alt="Safari Tours">
                                    </div>
                                    <div class="tour-content">
                                        <h4>Wildlife Safaris</h4>
                                        <p>Experience thrilling jeep safaris across Sri Lanka’s national parks to witness
                                            elephants, leopards and diverse wildlife.</p>
                                        <a href="{{ route('tour.wildlife-safari') }}" class="btn btn-outline-primary">View
                                            Tour</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Water Adventures -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="tour-card">
                                    <div class="tour-image">
                                        <img src="{{ asset('assets/images/tours/water-adventure.jpg') }}" class="img-fluid"
                                            alt="Water Adventures">
                                    </div>
                                    <div class="tour-content">
                                        <h4>Water Adventures</h4>
                                        <p>From white-water rafting in Kitulgala to kayaking through mangroves and lagoons,
                                            discover Sri Lanka from the water.</p>
                                        <a href="{{ route('tour.water-adventures') }}" class="btn btn-outline-primary">View
                                            Tour</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Road Trips -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="tour-card">
                                    <div class="tour-image">
                                        <img src="{{ asset('assets/images/tours/road-trip.jpeg') }}" class="img-fluid"
                                            alt="Road Trips">
                                    </div>
                                    <div class="tour-content">
                                        <h4>Road Trip Adventures</h4>
                                        <p>Ride across scenic mountain roads, coastal routes and hidden countryside trails
                                            by motorcycle or bicycle.</p>
                                        <a href="{{ route('tour.road-trip-adventures') }}"
                                            class="btn btn-outline-primary">View Tour</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Waterfall Hunting -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="tour-card">
                                    <div class="tour-image">
                                        <img src="{{ asset('assets/images/tours/waterfall-hunting.jpeg') }}"
                                            class="img-fluid" alt="Waterfall Hunting">
                                    </div>
                                    <div class="tour-content">
                                        <h4>Waterfall Hunting</h4>
                                        <p>Discover hidden jungle waterfalls and natural pools through adventurous hikes
                                            into Sri Lanka’s wild landscapes.</p>
                                        <a href="{{ route('tour.waterfall-hunting') }}"
                                            class="btn btn-outline-primary">View Tour</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Forest Bathing -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="tour-card">
                                    <div class="tour-image">
                                        <img src="{{ asset('assets/images/tours/forest-bathing.jpeg') }}" class="img-fluid"
                                            alt="Forest Bathing">
                                    </div>
                                    <div class="tour-content">
                                        <h4>Forest Bathing</h4>
                                        <p>A calming nature immersion experience designed to reconnect you with the sounds,
                                            scents and rhythms of the forest.</p>
                                        <a href="{{ route('tour.forest-bathing') }}" class="btn btn-outline-primary">View
                                            Tour</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="row" data-aos="fade-up" data-aos-delay="700">
                    <div class="col-12">
                        <div class="cta-section text-center">
                            <h3>Not Sure What to Choose?</h3>
                            <p>Our travel experts are here to help you find the perfect tour based on your preferences and
                                budget.</p>
                            <div class="cta-buttons">
                                <a href="#" class="btn btn-primary me-3">Contact Our Experts</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Travel Tours Section -->

    </main>
@endsection
