@extends('layouts.look')

@section('content')
<h1>Welcome to Tours and Travels</h1>
<form class="needs-validation" novalidate>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="hoteltName">Hotel Name</label>
        <input type="text" class="form-control" id="hotelName" placeholder="Hotel name" value="" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="locationName">Hotel location</label>
        <input type="text" class="form-control" id="locationName" placeholder="" value="" required>
      </div>
    </div>

    <div class="row">
        <div class="col-md-5 mb-3">
          <label for="rooms">Rooms</label>
          <select class="custom-select d-block w-100" id="rooms" required>
            <option value="">Choose the number of rooms</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="description">hotel description</label>
        <textarea class="form-control" id="description" rows="3"></textarea>
      </div>

      <hr class="mb-4">
</form>
<div class="col-md-8 order-md-1">
    <h3 class="mb-3">Hotel Booking</h3>
    <h4 class="mb-3">Customer Booking information</h4>
    <form class="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName">First name</label>
          <input type="text" class="form-control" id="firstName" placeholder="Valid first name is required." value="" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Last name</label>
          <input type="text" class="form-control" id="lastName" placeholder="Valid Second name is required." value="" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="email">Email <span class="text-muted">(Important)</span></label>
        <input type="email" class="form-control" id="email" placeholder="you@example.com">
      </div>

      <div class="mb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" placeholder="eg.1234 Main St" required>
      </div>

      <div class="mb-3">
        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
      </div>

      <div class="row">
        <div class="col-md-5 mb-3">
          <label for="country">Country</label>
          <select class="custom-select d-block w-100" id="country" required>
            <option value="">Choose...</option>
            <option>United States</option>
            <option>United Kingdom</option>
            <option>kenya</option>
            <option>Uganda</option>
            <option>Tanzania</option>
          </select>
        </div>
      </div>
      <hr class="mb-4">

      <h4 class="mb-3">Payment</h4>

      <div class="d-block my-3">
        <div class="custom-control custom-radio">
          <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
          <label class="custom-control-label" for="credit">Credit card</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="debit">Debit card</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="paypal">PayPal</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="cc-name">Name on card</label>
          <input type="text" class="form-control" id="cc-name" placeholder="Name on card is required" required>
          <small class="text-muted">*Full name as displayed on card</small>
        </div>
        <div class="col-md-6 mb-3">
          <label for="cc-number">Credit card number</label>
          <input type="text" class="form-control" id="cc-number" placeholder="Credit card number is required" required>
        </div>
      </div>
      <hr class="mb-4">
      <button class="btn btn-primary btn-lg btn-block" type="submit">Book a hotel</button>
    </form>
  </div>
</div>
@endsection