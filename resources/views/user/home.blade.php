@extends('layouts.template')
@section('content')

<div class="row">
    @foreach ($products as $product )
    <div class="col-xl-3 col-lg-6 col-sm-6"> 
        <div class="card">
            <div class="card-body">
                <div class="new-arrival-product">
                    @if($product->image)
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('storage/'.$product->image) }}" alt="">
                    </div>
                    @else
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{!! asset('template/images/product/1.jpg') !!}" alt="">
                    </div>
                    @endif
                    <div class="new-arrival-content text-center mt-3">
                        <h4><a href="ecom-product-detail.html">{{ $product->name }}</a></h4>
                        <ul class="star-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-empty"></i></li>
                            <li><i class="fa fa-star-half-empty"></i></li>
                        </ul>
                        <span class="price">RM{{ $product->price }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

                    