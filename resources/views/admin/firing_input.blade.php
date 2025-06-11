@extends('layouts.dashboard')
@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Data CO-FIRING</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ route('table-history.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="biomass">Biomass</label>
                                            <input type="text" id="biomass"
                                                class="form-control @error('biomass') is-invalid @enderror"
                                                name="biomass" value="{{ old('biomass') }}" autofocus>
                                            @error('biomass')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="batubara">Batubara</label>
                                            <input type="text" id="batubara"
                                                class="form-control @error('batubara') is-invalid @enderror"
                                                name="batubara" value="{{ old('batubara') }}" autofocus>
                                            @error('batubara')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nk_biomass">NK Biomass</label>
                                            <input type="text" id="nk_biomass"
                                                class="form-control @error('nk_biomass') is-invalid @enderror"
                                                name="nk_biomass" value="{{ old('nk_biomass') }}" autofocus>
                                            @error('nk_biomass')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nk_batubara">NK Batubara</label>
                                            <input type="text" id="nk_batubara"
                                                class="form-control @error('nk_batubara') is-invalid @enderror"
                                                name="nk_batubara" value="{{ old('nk_batubara') }}" autofocus>
                                            @error('nk_batubara')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="mwh_brown">MWh brown</label>
                                            <input type="text" id="mwh_brown"
                                                class="form-control @error('mwh_brown') is-invalid @enderror"
                                                name="mwh_brown" value="{{ old('mwh_brown') }}" autofocus>
                                            @error('mwh_brown')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="mwh_green">MWh green</label>
                                            <input type="text" id="mwh_green"
                                                class="form-control @error('mwh_green') is-invalid @enderror"
                                                name="mwh_green" value="{{ old('mwh_green') }}" autofocus>
                                            @error('mwh_green')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="mwh_total">MWh total</label>
                                            <input type="text" id="mwh_total"
                                                class="form-control @error('mwh_total') is-invalid @enderror"
                                                name="mwh_total" value="{{ old('mwh_total') }}" autofocus>
                                            @error('mwh_total')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sh_bm">SH bm</label>
                                            <input type="text" id="sh_bm"
                                                class="form-control @error('sh_bm') is-invalid @enderror"
                                                name="sh_bm" value="{{ old('sh_bm') }}" autofocus>
                                            @error('sh_bm')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="co2_eq_avoid">CO2 Eq Avoid</label>
                                            <input type="text" id="co2_eq_avoid"
                                                class="form-control @error('co2_eq_avoid') is-invalid @enderror"
                                                name="co2_eq_avoid" value="{{ old('co2_eq_avoid') }}"
                                                autofocus>
                                            @error('co2_eq_avoid')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="date_input">Date</label>
                                            <input type="date" id="date_input"
                                                class="form-control @error('date_input') is-invalid @enderror"
                                                name="date_input" value="{{ old('date_input') }}" autofocus>
                                            @error('date_input')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button id="success" type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
