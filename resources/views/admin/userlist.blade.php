@extends('layouts.dashboard')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    User List
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Occupation</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Picture</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $index => $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->occupation }}</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        <img src="{{ asset($item->profile_picture) }}" alt="Profile Picture" >
                                    </td>
                                    <td>
                                        @if (strtolower($item->status) === 'active')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
