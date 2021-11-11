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
                                <img src="{{ asset('/storage/default.png')}}"class="d-block w-50"  alt=""> 
                                @else
                                <img src="{{ asset('storage/'.$user->detail->image) }}"class="d-block w-50"  alt=""> 
                                @endif
                              </div>       
                            </div>
                          </div>
                          <br>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control-plaintext" id="name"  placeholder="{{ $user->name }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control-plaintext" id="email"  placeholder="{{ $user->email }}" readonly>
                            </div>
                        </div>   
                        @if ($user->detail == null)
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="textArea" name="address" class="form-control-plaintext" id="address"  placeholder="{{ $user->address }}" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone_number" class="form-control-plaintext" id="phone_number"  placeholder="{{ $user->phone_number }}" readonly>
                                </div>
                            </div>
                        @else
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="textArea" name="address" class="form-control-plaintext" id="address"  placeholder="{{ $user->detail->address }}" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone_number" class="form-control-plaintext" id="phone_number"  placeholder="{{ $user->detail->phone_number }}" readonly>
                                </div>
                            </div>
                        @endif 
                        <div class ="mb-3">
                            <a href="{{ route('user:edit', $user) }}" type="button" class="btn btn-rounded btn-outline-secondary btn-xs"><img src="{!! asset('template/icons/feather/edit.svg') !!}" width="15"/>  Edit Profile</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection