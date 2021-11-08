@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit product') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('product:store') }}" enctype="multipart/form-data">
                        @csrf
                        <select class="form-select" name="category" aria-label="Default select example">
                            <option selected>Category</option>
                            @foreach ($categories as $category )
                                <option value="{{ $category->id }}">{{ $category->name }}</option>    
                            @endforeach
                          </select>
                        <div class ="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="">
                        </div>
                        <div class ="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="">
                        </div>
                        <div class ="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="">
                        </div>
                        <div class ="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <div>
                                <input type="file" name="image" class="" id="image" placeholder="">
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
