@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Package / Show #{{ $package->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('packages.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('packages.edit', $package->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Platform</label>
<p>
	{{ $package->platform }}
</p> <label>Tracking_number</label>
<p>
	{{ $package->tracking_number }}
</p> <label>Order_id</label>
<p>
	{{ $package->order_id }}
</p> <label>Country</label>
<p>
	{{ $package->country }}
</p> <label>Method</label>
<p>
	{{ $package->method }}
</p> <label>Paid_date</label>
<p>
	{{ $package->paid_date }}
</p> <label>Shipped_month</label>
<p>
	{{ $package->shipped_month }}
</p> <label>Shipped_week</label>
<p>
	{{ $package->shipped_week }}
</p> <label>Shipped_date</label>
<p>
	{{ $package->shipped_date }}
</p> <label>Amount</label>
<p>
	{{ $package->amount }}
</p> <label>Ship_fee</label>
<p>
	{{ $package->ship_fee }}
</p> <label>Currency</label>
<p>
	{{ $package->currency }}
</p> <label>Items</label>
<p>
	{{ $package->items }}
</p> <label>Weight</label>
<p>
	{{ $package->weight }}
</p> <label>Logistics_status</label>
<p>
	{{ $package->logistics_status }}
</p> <label>Is_closed</label>
<p>
	{{ $package->is_closed }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
