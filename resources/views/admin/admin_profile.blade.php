@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">
    @include('_message')

    <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
            <div class="card rounded">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="card-title mb-0">About</h6>
                        <div class="dropdown">

                        </div>
                    </div>
                    <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of
                        Social.</p>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                        <p class="text-muted">Admin Forhad</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                        <p class="text-muted">November 15, 2015</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
                        <p class="text-muted">New York, USA</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                        <p class="text-muted">me@nobleui.com</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
                        <p class="text-muted">www.nobleui.com</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-9 middle-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <h6 class="card-title">Profile Update</h6>

                            <form class="forms-sample" action="{{ url('admin_profile/update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $getRecord->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username" value="{{ $getRecord->username }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $getRecord->email }}">
                                    <span style="color: red;">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{ $getRecord->phone }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    (Leave blank if you are not changing the password)
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Profile Image</label>
                                    <input type="file" class="form-control" name="photo">
                                    @if(!empty($getRecord->photo))
                                    <img src="{{ asset('upload/'.$getRecord->photo) }}" alt="Image" style="width:10%;height:10%;">
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" placeholder="Address" name="address" value="{{ $getRecord->address }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">About</label>
                                    <textarea type="text" class="form-control" name="about"
                                        placeholder="About">{{ $getRecord->about }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" placeholder="Website" name="website" value="{{ $getRecord->website }}">
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- middle wrapper end -->

    </div>

</div>


@endsection