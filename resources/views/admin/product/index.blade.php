@extends('layouts.template')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Product List</h4>
            </div>
            @if(session()->has('alert-message'))
            <div class="col-xl-12">
                <div class="alert {{ session()->get('alert-type') }}">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="mdi mdi-btn-close"></i></span>
                    </button>
                    <div class="media">
                        <div class="alert-left-icon-big">
                            <span><i class="mdi mdi-alert"></i></span>
                        </div>
                        <div class="media-body">
                            <h5 class="mt-1 mb-2">{{ session()->get('alert-message') }}</h5>
                            <p class="mb-0">{{ session()->get('alert-message-2') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">   
                    <a href="{{ route('product:create') }}" type="button" class="btn btn-rounded btn-outline-info">
                        <span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i></span>Add Product
                    </a>
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th style="width:80px;"><strong>#</strong></th>
                                <th><strong>NAME</strong></th>
                                <th><strong>IMAGE</strong></th>
                                <th><strong>CATEGORY</strong></th>
                                <th><strong>PRICE (RM)</strong></th>
                                <th><strong>DESCRIPTION</strong></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $keys => $product )
                            <tr>
                                <td><strong>{{ $keys + 1 }}</strong></td>
                                <td>{{ $product->name }}</td>
                                @if($product->image) 
                                <td>
                                    <a target="_blank" href="{{ asset('storage/'.$product->image) }}" class="">
                                        <img src="{{ asset('storage/'.$product->image) }}" width="50px;" height="50px;" alt=""> 
                                    </a>
                                </td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{ $product->category->name ??null}}</td>
                                <td>{{ $product->price}}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('product:edit', $product) }}">Edit</a>
                                            <a onclick="return confirm('Are you sure to delete this component?')" class="dropdown-item" href="{{ route('product:destroy', $product) }}">Delete</a>
                                        </div>
                                    </div>
                                </td>       
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection