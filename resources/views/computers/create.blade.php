@extends('layout')
@section('title','home')
@section('bodycontent')

<body>
  <h1>Create new Computer</h1>
  <form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="origin">Origin:</label>
    <input type="text" id="origin" name="origin"><br><br>
    <label for="number">Number:</label>
    <input type="price" id="price" name="price" ><br><br>
    <input type="submit" value="Submit">
  </form>
</body>
@endsection