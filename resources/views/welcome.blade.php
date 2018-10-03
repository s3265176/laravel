@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome To Green Bean Bake House</div>

                <div class="panel-body">
                    <img src="{{ asset('img/green-bean-cake.jpg') }}">

                    <br>

                    <p>Green bean is a popular Chinses pastry. It is a vary delicious and healthy food</p>

                    <p>Now you can order it Online. However currently can only product 50 eath day. so hurry up!</p> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
