@extends('layouts.template')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit details') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user:update' ,$user) }}" enctype="multipart/form-data">
                        @csrf
                        <div class ="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <div>
                                <input type="file" name="image" class="" id="image" placeholder="">
                            </div>
                        </div>
                        <div class ="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="">
                        </div>
                        <div class ="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" id="password" placeholder="">
                        </div>
                        <div class ="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="">
                        </div>
                        <div class ="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="textArea" name="address" class="form-control" id="address" placeholder="">
                        </div>
                        <div class ="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="">
                        </div>
                        <div class ="mb-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection