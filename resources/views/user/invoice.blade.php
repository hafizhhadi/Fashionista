@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card mt-3">
            <div class="card-header"> Invoice <strong>01/01/01/2018</strong> <span class="float-end">
                    <strong>Status:</strong> Pending</span> </div>
            <div class="card-body">
                <div class="row mb-5">
                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <h6>From:</h6>
                        <div> <strong>Fashionista</strong> </div>
                        <div>Kuala Lumpur, Malaysia</div>
                        <div>Email: fashionista@gmail.com</div>
                        <div>Phone: +48 444 666 3333</div>
                    </div>
                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <h6>To:</h6>
                        <div> <strong>{{ auth()->user()->name }}</strong> </div>
                        {{-- <div>{{ auth()->user()->detail->address }}</div>
                        <div>Email: {{ auth()->user()->detail->email }}</div>
                        <div>Phone: {{ auth()->user()->detail->phone_number }}</div> --}}
                    </div>
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>
                                <th>Description</th>
                                <th class="right">Unit Cost</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($products as $keys => $product )       
                            <tr>
                                <td class="center">{{ $keys+1 }}</td>
                                <td class="left strong">Origin License</td>
                                <td class="left">Extended License</td>
                                <td class="right">$999,00</td>
                                <td class="center">1</td>
                                <td class="right">$999,00</td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5"> </div>
                    <div class="col-lg-4 col-sm-5 ms-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left"><strong>Subtotal</strong></td>
                                    <td class="right">$8.497,00</td>
                                </tr>
                                <tr>
                                    <td class="left"><strong>Discount (20%)</strong></td>
                                    <td class="right">$1,699,40</td>
                                </tr>
                                <tr>
                                    <td class="left"><strong>VAT (10%)</strong></td>
                                    <td class="right">$679,76</td>
                                </tr>
                                <tr>
                                    <td class="left"><strong>Total</strong></td>
                                    <td class="right"><strong>$7.477,36</strong><br>
                                        <strong>0.15050000 BTC</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
   

@endsection