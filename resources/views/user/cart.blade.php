@extends('layouts.template')
@section('content')
<div class="col-xl-6">
    <div class="card">
        <img class="card-img-top img-fluid img-thumbnail" src="{!! asset('template/images/card/1.png') !!}" alt="Card image cap">
        <div class="card-header">
            <h5 class="card-title">Beg sekolah</h5>
        </div>
        <div class="card-body">
            <p class="card-text">beg sekolah untuk budak.</p>
            <p class="card-text text-dark"><mark>RM 201</mark></p>
        </div>
    </div>
</div>
<a href="#" type="button" class="btn btn-info">Checkout</a>
@endsection

