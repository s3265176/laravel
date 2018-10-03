@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome To Green Bean Bake House</div>

                <div class="panel-body">
                    <br>
                    <div class="jumbotron">
                      <h1 class="display-4">Welcome</h1>
                      <p class="lead">Green bean is a popular Chinses pastry. It is a vary delicious and healthy food</p>

                      <img src="{{ asset('img/green-bean-cake.jpg') }}">
                      
                      <p>Now you can order it Online. However currently can only product 50 eath day. so hurry up!</p>
                      <a class="btn btn-primary btn-lg" href="{{ url('/order/create') }}" role="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
