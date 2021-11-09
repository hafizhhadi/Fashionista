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
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">       
                                @if ($user->detail == null)
                                <img src="{{ asset('/storage/default.png')}}"class="d-block w-100"  alt=""> 
                                @else
                                <img src="{{ asset('storage/'.$user->detail->image) }}"class="d-block w-100"  alt=""> 
                                @endif
                              </div>       
                            </div>
                          </div>
                        <div class ="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="{{ $user->name }}" readonly>
                        </div>
                        <div class ="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="{{ $user->email }}" readonly>
                        </div>      
                        @if ($user->detail == null)
                            <div class ="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="textArea" name="email" class="form-control" id="address" placeholder="" readonly>
                            </div>
                            <div class ="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="" readonly>
                            </div>
                        @else
                            <div class ="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="textArea" name="email" class="form-control" id="address" placeholder="{{ $user->detail->address }}" readonly>
                            </div>
                            <div class ="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="{{ $user->detail->phone_number }}" readonly>
                            </div>
                        @endif
                        <div class ="mb-3">
                            <a href="{{ route('user:edit', $user) }}" type="button" class="btn btn-info">Edit profile</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection