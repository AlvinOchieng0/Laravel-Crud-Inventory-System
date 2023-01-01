@extends('layout')

@section('content')

<div class="pull-left">
    <h2>Products crud</h2>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">

            <a class="btn btn-success" href="{{route('products_create')}}">Create New Product</a>
            </div>
        </div>
    </div>
</div>

@if($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Type</th>
        <th>Price</th>
        <th>Option</th>
</tr>

@foreach($products as $product)

<tr>
<td>{{$product->id}}</td>
<td>{{$product->prodname}}</td>
<td>{{$product->prodtype}}</td>
<td>{{$product->price}}</td>
<td>
    <form action="delete/{{$product->id}}" method="POST">
        @csrf
        <input type="submit" value="Delete" class="btn btn-primary">
    </form>
        <a class="btn btn-primary"href="edit/{{ $product->id }}">Edit</a>
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>
    @endsection
</td>
</tr>

@endforeach
</table>
