@extends('layouts.template')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>
                <div class="card-body">
                    <form method="POST" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class ="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <div>
                                <input type="file" name="image" class="" id="image" placeholder="" disabled>
                            </div>
                        </div>
                        <div class ="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="" disabled>
                        </div>
                        <div class ="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" id="password" placeholder="" disabled>
                        </div>
                        <div class ="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="" disabled>
                        </div>      
                        <div class ="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="textArea" name="email" class="form-control" id="address" placeholder="" disabled>
                        </div>
                        <div class ="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="" disabled>
                        </div>
                        <div class ="mb-3">
                            <a href="{{ route('user:edit') }}" type="button" class="btn btn-info">Edit profile</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection