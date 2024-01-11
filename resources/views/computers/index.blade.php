@extends('layout')
@section('indexcontent')
@section('title','show')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>in @yield('title')</title>
   <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<h1>computers !</h1>
@foreach ($computers as $computer)
@if(count($computers)>0)
    <a href="{{route('computers.show',['computer'=>$computer['id']] ) }}" >
    <li>{{$computer['id']}} {{$computer['name']}} is from {{$computer['origin']}} - <strong>999$</strong></li>
    </a>
   

@else
    <h3>there are no computers !</h3>
@endif
@endforeach
</html>
@endsection