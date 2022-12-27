@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Package /
          @if($package->id)
            Edit #{{ $package->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($package->id)
          <form action="{{ route('packages.update', $package->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('packages.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="mb-3">
                	<label for="platform-field">Platform</label>
                	<input class="form-control" type="text" name="platform" id="platform-field" value="{{ old('platform', $package->platform ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="tracking_number-field">Tracking_number</label>
                	<input class="form-control" type="text" name="tracking_number" id="tracking_number-field" value="{{ old('tracking_number', $package->tracking_number ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="order_id-field">Order_id</label>
                	<input class="form-control" type="text" name="order_id" id="order_id-field" value="{{ old('order_id', $package->order_id ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="country-field">Country</label>
                	<input class="form-control" type="text" name="country" id="country-field" value="{{ old('country', $package->country ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="method-field">Method</label>
                	<input class="form-control" type="text" name="method" id="method-field" value="{{ old('method', $package->method ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="paid_date-field">Paid_date</label>
                	<input class="form-control" type="text" name="paid_date" id="paid_date-field" value="{{ old('paid_date', $package->paid_date ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="shipped_month-field">Shipped_month</label>
                	<input class="form-control" type="text" name="shipped_month" id="shipped_month-field" value="{{ old('shipped_month', $package->shipped_month ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="shipped_week-field">Shipped_week</label>
                	<input class="form-control" type="text" name="shipped_week" id="shipped_week-field" value="{{ old('shipped_week', $package->shipped_week ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="shipped_date-field">Shipped_date</label>
                    <input class="form-control" type="text" name="shipped_date" id="shipped_date-field" value="{{ old('shipped_date', $package->shipped_date ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="amount-field">Amount</label>
                    <input class="form-control" type="text" name="amount" id="amount-field" value="{{ old('amount', $package->amount ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="ship_fee-field">Ship_fee</label>
                    <input class="form-control" type="text" name="ship_fee" id="ship_fee-field" value="{{ old('ship_fee', $package->ship_fee ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="currency-field">Currency</label>
                	<input class="form-control" type="text" name="currency" id="currency-field" value="{{ old('currency', $package->currency ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="items-field">Items</label>
                    <input class="form-control" type="text" name="items" id="items-field" value="{{ old('items', $package->items ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="weight-field">Weight</label>
                    <input class="form-control" type="text" name="weight" id="weight-field" value="{{ old('weight', $package->weight ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="logistics_status-field">Logistics_status</label>
                    <input class="form-control" type="text" name="logistics_status" id="logistics_status-field" value="{{ old('logistics_status', $package->logistics_status ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="is_closed-field">Is_closed</label>
                    <input class="form-control" type="text" name="is_closed" id="is_closed-field" value="{{ old('is_closed', $package->is_closed ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('packages.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
