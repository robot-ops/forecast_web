@extends('layouts.dashboard')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <div class="avatar avatar-2xl">
                                <img src="{{ asset('template/dist') }}/assets/compiled/jpg/2.jpg" alt="Avatar">
                            </div>

                            <h3 class="mt-3">John Doe</h3>
                            <p class="text-small">Junior Software Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form action="#" method="get">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Your Name" value="John Doe">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Your Email" value="john.doe@example.net">
                            </div>
                            <div class="form-group">
                                <label for="occupation" class="form-label">Occupation</label>
                                <input type="text" name="occupation" id="occupation" class="form-control"
                                    placeholder="Your occupation">
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="Your Phone" value="083xxxxxxxxx">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image" class="form-label">Profile Picture</label>
                                <input type="file" name="image" class="image-exif-filepond">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
