@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit details') }}</div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ route('product:update', $product) }}" enctype="multipart/form-data">
                                @csrf
                                <div class ="mb-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Upload</span>
                                        <div class="form-file">
                                            <input type="file" name="image" class="form-file-input form-control" id="image" placeholder="{{ $product->image }}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="{{ $product->name }}" >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Price</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="price" class="form-control" id="price" placeholder="{{ $product->price }}" >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="description" class="form-control" id="description" placeholder="{{ $product->description }} " >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class ="mb-3">
                                        <button type="submit" class="btn btn-rounded btn-outline-primary btn-xs"><img src="{!! asset('template/icons/feather/edit.svg') !!}" width="15"/>  Save</button>
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