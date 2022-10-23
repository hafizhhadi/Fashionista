@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 order-lg-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your cart</span>
                            @php $total = 0 @endphp
                            @php $quantity = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                                @php $quantity += 1 @endphp
                            @endforeach
                            <span class="badge badge-primary badge-pill">{{ $quantity }}</span>
                        </h4>
                        <ul class="list-group mb-3">
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">{{ $details['name'] }}</h6>
                                        {{-- <small class="text-muted">Details</small> --}}
                                        <span class="text-muted">RM {{ $details['price'] }}</span>
                                    </div>
                                    <a href="{{ route('remove.from.cart') }}" type="button" class="btn btn-rounded btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </li>
                                @endforeach
                            @endif
                            
                            {{-- <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"><strong>Total RM {{ $total }}</strong></h6>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                    {{-- billing address section --}}
                    <div class="col-lg-8 order-lg-1">
                        <h4 class="mb-3">Billing address</h4>
                        <form method="POST" action="{{ route('payment:store') }}">
                            @csrf
                            {{-- <div class="row">
                                <div class="mb-3">
                                    <label for="firstName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="username"  class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" placeholder="Username" required="">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email"  class="form-label">Email <span
                                        class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address"  class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>  

                            <hr class="mb-4">
                            <div class="form-check custom-checkbox mb-2">
                                <input type="checkbox" class="form-check-input" id="same-address">
                                <label class="form-check-label" for="same-address">Shipping address
                                    is
                                    the same as
                                    my billing address</label>
                            </div>
                            <div class="form-check custom-checkbox mb-2">
                                <input type="checkbox" class="form-check-input" id="save-info">
                                <label class="form-check-label" for="save-info">Save this
                                    information
                                    for next
                                    time</label>
                            </div>
                            <hr class="mb-4">

                            <h4 class="mb-3">Payment</h4>

                            <div class="d-block my-3">
                                <div class="form-check custom-radio mb-2">
                                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                                    <label class="form-check-label" for="credit">Credit card</label>
                                </div>
                                <div class="form-check custom-radio mb-2">
                                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                                    <label class="form-check-label" for="debit">Debit card</label>
                                </div>
                                <div class="form-check custom-radio mb-2">
                                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                                    <label class="form-check-label" for="paypal">Paypal</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name"  class="form-label">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number"  class="form-label">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration"  class="form-label">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Expiration date required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration"  class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Security code required
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4"> --}}
                            <h2 class="mb-4" name="total_price" id="total_price" value="{{ $total }}"><strong>Total RM {{ $total }}</strong></h2>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">

   $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection