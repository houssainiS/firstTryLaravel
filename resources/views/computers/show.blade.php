@extends('layout')
@section('showcontent')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title','show computer')</title>
   <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<h1>computers show !</h1>

    
<h3>{{$computer['name']}} is from {{$computer['origin']}} - <strong>999$</strong></h3>
    


</html>
@endsection