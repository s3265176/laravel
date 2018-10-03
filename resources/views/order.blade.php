@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <div class="panel panel-default">
                <div class="panel-heading">Order</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/order') }}">
                        {{ csrf_field() }}

                    
                        <div class='row'>
                            <div class='col-xs-6 col-xs-offset-3' style="text-align: center;">
                                I want to order:
                                <span class='quantity-dispaly'>0</span>
                            </div>
                            <input type="hidden" name="quantity" value='0'>
                        </div>

                        <br>

                        <div class='row adjust-quantity'>
                            <div class='col-xs-1 col-xs-offset-3'>
                                <span class='btn btn-default' data-value='1'>+1</span>
                            </div>
                            <div class='col-xs-1'>
                                <span class='btn btn-default' data-value='2'>+2</span>
                            </div>
                            <div class='col-xs-1'>
                                <span class='btn btn-default' data-value='3'>+3</span>
                            </div>
                            <div class='col-xs-1'>
                                <span class='btn btn-default' data-value='6'>+6</span>
                            </div>
                            <div class='col-xs-1'>
                                <span class='btn btn-default' data-value='10'>+10</span>
                            </div>
                            <div class='col-xs-1'>
                                <span class='btn btn-warning' >Clear</span>
                            </div>
                        </div>

                        <br>

                        <div class='row deliver_method'>
                            <div class="col-xs-3 col-xs-offset-3" style="text-align: center;">
                                <span class='btn btn-default' data-value='pickup'>Pick up myself</span>
                            </div>

                            <div class="col-xs-3" style="text-align: center;">
                                <span class='btn btn-default' data-value='deliver'>Deliver</span>
                            </div>

                            <input type="hidden" name="deliver_method">
                        </div>

                        <br>

                         <div class="form-group">
                            <div class='col-xs-6 col-xs-offset-3'>
                                <input type='date' name='date' class="form-control" />
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                                <button type="submit" class="col-xs-6 col-xs-offset-3 btn btn-primary"> Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
