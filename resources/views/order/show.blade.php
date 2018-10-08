@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <div class="panel panel-default">
                <div class="panel-heading">Order</div>

                <div class="panel-body">
                    
                    <h3>Thank You {{ $order->user->name }}! You order is confirmed!</h3>

                    @if ($order->deliver_method == 'deliver')

                        <p>
                            {{ $order->quantity }} Green bean cakes will deliver to you on {{ $order->date }}
                        </p>

                        <p>
                            Your address is confirmed {{ $order->user->address }}
                        </p>

                    @elseif ($order->deliver_method == 'pickup')

                        <p>
                            {{ $order->quantity }} Green bean cakes will be ready for you to collect on {{ $order->date }}
                        </p>

                        <p>
                            Our address is 27 Signature Blvd, Point cook Vic 3030 Melbourne.
                        </p>

                    @else
                        
                        <!-- Error deliver method -->

                    @endif



                    <p>
                        A copy of you confirmation is also sent to you email  {{ $order->user->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
