@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit product') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('product:update', $product) }}" enctype="multipart/form-data">
                        @csrf
                        <div class ="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="{{ $product->name }}">
                        </div>
                        <div class ="mb-3">
                            <label for="price" class="form-label">Price RM</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder=" {{ $product->price }} ">
                        </div>
                        <div class ="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder=" {{ $product->description }} ">
                        </div>
                        <div class ="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <div>
                                <input type="file" name="image" class="" id="image" placeholder="{{ $product->image }}">
                            </div>
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