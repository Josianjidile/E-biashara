@extends('layouts.front')

@section('title')
   checkout
@endsection


@section('content')
<div class="py-3 mb-4 shadow-sw bg-warning border-top">
<div class="container">
    <h6 class="mb-0">  
        <a href="{{url('/')}}">
        Home
        </a>/ 
        <a href="{{url('checkout')}}">
        Cart
        </a>
        </h6>
          </div>
      </div>

<div class="container mt-3">
   <form action="{{url('place-order')}}" method="POST">
             {{csrf_field()}}
              <div class="row">
                <div class="col-md-7">
                   <div class="card">
                      <div class="card-body">
                        <h6 >Basic Details</h6>
                        <hr>
                        <div class="row checkout-form">
                        <div class="col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="type" class="form-control fname" value="{{Auth::user()->name}}" name="fname" placeholder="Enter first Name">
                        <span id="fname_error " class="text-danger"></span>
                      </div>
                        <div class="col-md-6">
                        <label for="lastName">Last Name</label>
                        <input type="type" class="form-control lname" value="{{Auth::user()->lname}}" name="lname" placeholder="Enter Last Name">
                        <span id="lname_error " class="text-danger"></span>
                      </div>
                      <div class="col-md-6 mt-3">
                        <label for="email">Email</label>
                        <input type="type" class="form-control email" value="{{Auth::user()->email}}" name="email" placeholder="Enter Email">
                        <span id="email_error " class="text-danger"></span>
                      </div>
                     
                        <div class="col-md-6 mt-3">
                        <label for="phoneNumber">Phone number</label>
                        <input type="type" class="form-control phone" value="{{Auth::user()->phone}}" name="phone" placeholder="Enter phone number">
                        <span id="phone_error " class="text-danger"></span>
                      </div>
                     
                        <div class="col-md-6 mt-3">
                        <label for="address1">Address 1</label>
                        <input type="type" class="form-control address1" value="{{Auth::user()->address1}}" name="address1" placeholder="Enter address 1 ">
                        <span id="address1_error " class="text-danger"></span>
                      </div>
                     
                        <div class="col-md-6 mt-3">
                        <label for="address2">Address 2</label>
                        <input type="type" class="form-control address2" value="{{Auth::user()->address2}}" name="address2" placeholder="Enter address 2 ">
                        <span id="address2_error " class="text-danger"></span>
                      </div>
                     
                        <div class="col-md-6 mt-3">
                        <label for="city">City</label>
                        <input type="type" class="form-control city"  value="{{Auth::user()->city}}" name="city" placeholder="Enter city ">
                        <span id="city_error " class="text-danger"></span>
                      </div>
                                           
                      <div class="col-md-6 mt-3">
                        <label for="state">State</label>
                        <input type="type" class="form-control state"  value="{{Auth::user()->state}}" name="state" placeholder="Enter state">
                        <span id="state_error " class="text-danger"></span>
                      </div>

                      <div class="col-md-6 mt-3">
                        <label for="country">Country</label>
                        <input type="type" class="form-control country"  value="{{Auth::user()->country}}" name="country" placeholder="Enter country ">
                        <span id="country_error " class="text-danger"></span>
                      </div>

                     
                        <div class="col-md-6 mt-3">
                        <label for="pincode">Pin Code</label>
                        <input type="type" class="form-control pincode "  value="{{Auth::user()->pincode}}" name="pincode" placeholder="Enter pin code ">
                        <span id="pincode_error " class="text-danger"></span>
                      </div>
                      </hr>
                    </div>
                 </div>
               </div>
            </div>
           <div class="col-md-5">
           <div class="card">
                      <div class="card-body">
                        <h6>Order Details</h6>
                        <hr>
                        @if ($cartitems->count()  > 0)
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Qty</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php $total =0; $endphp
                          @foreach ($cartitems as $item)
                            <tr>
                              @php $total += ($item->products->selling_price * $item->prod_qty) $endphp
                     <td>{{$item->products->name}}</td>
                     <td>{{$item->prod_qty}}</td>
                     <td>{{$item->products_selling_price}}</td>
                            </tr>
                            @endforeach
                           </tbody>
                        </table>
                        <h6 class="px-2">Grand Total <span class="float-end">Tsh{{$total}} </span></h6>
                         </hr>
                         <button type="submit" class="btn btn-success w-100">Place Order | COD</button>
                         <button type="button" class="btn btn-primary w-100 mt-3 razorpay_btn">pay with Razorpay</button>
                         <div id="paypal-button-container"></div>
                         @else
                         <h4 class="text-center">No produt in cart </h4>
                         @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection
        


@section('scripts')

<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD&intent=capture&enable-funding=venmo" data-sdk-integration-source="integrationbuilder"></script>
        <script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@endsection
