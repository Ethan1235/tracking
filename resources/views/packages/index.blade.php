@extends('layouts.default')
@section('title', '包裹列表')

@section('content')
<!--main content start-->
<section class="main-content-wrapper">
    <section id="main-content" class="animated fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div class="btn-group">
                              <button type="button" class="btn btn-primary">
                                创建新包裹
                              </button>
                        </div>

                        <div class="actions pull-right">
                            <i class="fa fa-expand"></i>
                            <i class="fa fa-chevron-down"></i>
                            <i class="fa fa-times"></i>
                        </div>
                    </div>


                    <div class="panel-body">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                      <th class="text-xs-center">#</th>
                                      <th>Platform</th> 
                                      <th>Tracking_number</th> 
                                      <th>Order_id</th>
                                      <th>Country</th>
                                      <th>Method</th>
                                      <!-- <th>Paid_date</th> -->
                                      <!-- <th>Shipped_month</th>  -->
                                      <!-- <th>Shipped_week</th> -->
                                      <th>Shipped_date</th>
                                      <th>Amount</th> 
                                      <th>Ship_fee</th> 
                                      <th>Currency</th> 
                                      <th>Items</th> 
                                      <th>Weight</th> 
                                      <th>Logistics_status</th>
                                      <th>Is_closed</th>
                                      <th class="text-xs-right">OPTIONS</th>
                              </tr>
                            </thead>

                            <tbody>
                              @foreach($packages as $package)

            <tr>
                  <td class="text-xs-center"><strong>{{$package->id}}</strong></td>
                  <td>{{$package->platform}}</td>
                  <td>{{$package->tracking_number}}</td>
                  <td>{{$package->order_id}}</td>
                  <td>{{$package->country}}</td>
                  <td>{{$package->method}}</td>
                  <!-- <td>{{$package->paid_date}}</td> -->
                  <!-- <td>{{$package->shipped_month}}</td> -->
                  <!-- <td>{{$package->shipped_week}}</td> -->
                  <td>{{$package->shipped_date}}</td>
                  <td>{{$package->amount}}</td>
                  <td>{{$package->ship_fee}}</td>
                  <td>{{$package->currency}}</td>
                  <td>{{$package->items}}</td>
                  <td>{{$package->weight}}</td>
                  <td>{{$package->logistics_status}}</td>
                  <td>{{$package->is_closed}}</td>
                  <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="https://www.baidu.com/$package->id">V</a>
                  <a class="btn btn-sm btn-warning" href="{{ route('packages.edit', $package->id) }}">E</a>
                  <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                  </td>                              
            </tr>

                              @endforeach
                            </tbody>
                        </table>
                        {!! $packages->render() !!}
                    </div>

                </div>
            </div>
        </div>
    </section>
</section>
<!--main content end-->
@stop