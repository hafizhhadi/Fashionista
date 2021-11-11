@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Product') }}</div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ route('product:store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class ="mb-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Upload</span>
                                        <div class="form-file">
                                            <input type="file" name="image" class="form-file-input form-control " id="image" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="input-group mb-3">
                                    <label class="input-group-text mb-0">Category</label>
                                    <select class="default-select  form-control wide" name="category" aria-label="Default select example">
                                        @foreach ($categories as $category )
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="" >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Price</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="price" class="form-control" id="price" placeholder="" >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="description" class="form-control" id="description" placeholder="" >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class ="mb-3">
                                        <button type="submit" class="btn btn-rounded btn-outline-primary btn-xs"><img src="{!! asset('template/icons/feather/arrow-down-circle.svg') !!}" width="15"/>  Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>



@endsection
