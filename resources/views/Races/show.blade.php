@extends('layout.main')

@section('content')

<h1> {{$race->name}}</h1>
<p> {{$race->description}}</p>
<table class="table table-dark table-striped w-25">
    <thead>
  <tr>
    <th scope="col">Value</th>
    <th scope="col">#</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">For</th>
    <td>{{$race->mod_for}}</td>
  </tr>
  <tr>
    <th scope="row">Des</th>
    <td>{{$race->mod_des}}</td>
  </tr>
  <tr>
    <th scope="row">Cos</th>
    <td>{{$race->mod_cos}}</td>
  </tr>
  <tr>
    <th scope="row">Int</th>
    <td>{{$race->mod_int}}</td>
  </tr>
  <tr>
    <th scope="row">Sag</th>
    <td>{{$race->mod_sag}}</td>
  </tr>
  <tr>
    <th scope="row">Car</th>
    <td>{{$race->mod_car}}</td>
  </tr>
</tbody>
</table>
@endsection
