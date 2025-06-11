@extends('layouts.dashboard')
@section('content')
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <!-- Vendor -->
                <div class="col-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Vendor / Bumdes</h6>
                                    <h6 class="font-extrabold mb-0">10</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Stocks -->
                <div class="col-4 col-lg-4 col-md-21">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Potential Stocks (Ton)</h6>
                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Info -->
                <div class="col-4 col-lg-4 col-md-21">
                    <div class="card">
                        <div class="card-body px-4 py-4-5 ">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center ">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset('template/dist') }}/assets/compiled/jpg/1.jpg" alt="Face 1">
                                    </div>
                                </div>
                                <div class="name col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h5 class="font-bold">John Duck</h5>
                                    <h6 class="text-muted mb-0">Administrator</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chart -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Co-Firing Graphic</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-profile-visit"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chart -->
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Potential Stocks Location</h4>
                        </div>
                        <div class="card-body">
                            <div class="googlemaps">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2020322.1937195612!2d120.08863907707187!3d-8.505033715688818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db2885655aa8d7d%3A0xfd15685247b8ef6e!2sFlores!5e0!3m2!1sen!2sid!4v1747988307133!5m2!1sen!2sid"
                                    width="100%" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
