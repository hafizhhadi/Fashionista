@extends('layouts.template')

@section('content')
<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
            <br>
            @if(session()->has('alert-message'))
            <div class="alert {{ session()->get('alert-type') }}">
                {{ session()->get('alert-message') }}
            </div>
            @endif
            <a href="{{ route('product:create') }}" type="button" class="btn btn-primary">+</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price (RM)</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $keys => $product )
                        <tr>
                            <td>{{ $keys+1 }}</td>
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
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <a href="{{ route('product:edit', $product) }}" class="btn btn-warning btn-circle">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </a>
                                <a onclick="return confirm('Are you sure to delete this component?')" href="{{ route('product:destroy', $product ) }}" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection