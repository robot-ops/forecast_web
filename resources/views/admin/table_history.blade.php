@extends('layouts.dashboard')
@section('content')
    <section class="section">
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
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Co-Firing History Input
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Biomass</th>
                                <th>Batubara</th>
                                <th>NK Biomass</th>
                                <th>NK Batubara</th>
                                <th>MWh brown</th>
                                <th>MWh green</th>
                                <th>MWh total</th>
                                <th>SH bm</th>
                                <th>CO2 Eq Avoid</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cofiring as $index => $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->biomass }}</td>
                                    <td>{{ $item->batubara }}</td>
                                    <td>{{ $item->nk_biomass }}</td>
                                    <td>{{ $item->nk_batubara }}</td>
                                    <td>{{ $item->mwh_brown }}</td>
                                    <td>{{ $item->mwh_green }}</td>
                                    <td>{{ $item->mwh_total }}</td>
                                    <td>{{ $item->sh_bm }}</td>
                                    <td>{{ $item->co2_eq_avoid }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->date_input)->locale('id')->translatedFormat('d F Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
