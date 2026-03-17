@extends('web.layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('assets/img/travel/showcase-8.webp') }});">
            <div class="container position-relative">
                <h1>Plan Your Expedition</h1>
                <p>Tell us about your adventure plans and our team will craft the perfect Sri Lankan expedition for you.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Booking</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Booking Section -->
        <section id="travel-booking" class="travel-booking section">

            <div class="container">

                <div class="row">
                    <div class="col-lg-12">

                        <div class="booking-form-container">

                            <form action="" method="post" class="booking-form">

                                <!-- STEP 1 -->
                                <h4>Select Your Expedition</h4>

                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <label>Choose Expedition</label>
                                        <select name="tour_package" class="form-select" required>

                                            <option value="">Select a tour...</option>

                                            <option value="mountain-trekking">
                                                Mountain Trekking
                                            </option>

                                            <option value="hiking-adventures">
                                                Hiking Adventures
                                            </option>

                                            <option value="pekoe-trail">
                                                PEKOE Trail Trekking
                                            </option>

                                            <option value="wildlife-tours">
                                                Wildlife Tours
                                            </option>

                                            <option value="road-trips">
                                                Road Trips (Motorcycle / Bicycle)
                                            </option>

                                            <option value="safari-tours">
                                                Safari Tours
                                            </option>

                                            <option value="water-adventures">
                                                Water Adventures (Rafting / Kayaking / Paddle)
                                            </option>

                                            <option value="waterfall-hunting">
                                                Waterfall Hunting
                                            </option>

                                            <option value="forest-bathing">
                                                Forest Bathing
                                            </option>

                                            <option value="custom-expedition">
                                                Custom Expedition
                                            </option>

                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Estimated Duration</label>
                                        <select name="tour_duration" class="form-select">

                                            <option>1 Day</option>
                                            <option>2 Days</option>
                                            <option>3 Days</option>
                                            <option>4+ Days</option>

                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Preferred Start Date</label>
                                        <input type="date" name="departure_date" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Group Size</label>
                                        <select name="group_size" class="form-select">

                                            <option>1 Person</option>
                                            <option>2 People</option>
                                            <option>3-4 People</option>
                                            <option>5-8 People</option>
                                            <option>8+ People</option>

                                        </select>
                                    </div>

                                </div>


                                <!-- Traveler Info -->
                                <div class="traveler-info mt-5">

                                    <h4>Your Information</h4>

                                    <div class="row gy-3">

                                        <div class="col-md-6">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" class="form-control" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" class="form-control" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Phone / WhatsApp</label>
                                            <input type="tel" name="phone" class="form-control" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Nationality</label>
                                            <input type="text" name="nationality" class="form-control">
                                        </div>

                                    </div>

                                </div>


                                <!-- Special Requests -->
                                <div class="special-requirements mt-5">

                                    <h4>Tell Us About Your Adventure</h4>

                                    <div class="row gy-3">

                                        <div class="col-12">
                                            <label>Special Requests</label>

                                            <textarea name="special_requests" class="form-control" rows="4"
                                                placeholder="Tell us what type of adventure you want: hiking, wildlife, waterfalls, camping, photography etc..."></textarea>

                                        </div>

                                    </div>

                                </div>


                                <!-- FORM BUTTONS -->
                                <div class="form-navigation mt-5 text-center">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            Get a Quote
                                        </button>
                                    </div>

                                </div>


                            </form>

                        </div>

                    </div>
                </div>

            </div>

        </section>

    </main>
@endsection
