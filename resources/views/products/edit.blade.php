@extends('layouts.layout')
@section('title', 'Product Edit')

@section('content')



  <h1>Product Edit</h1>

  <form method="post" action="{{route('product.update',['product'=>$product])}}">

    @csrf
    @method('put')

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
    </div>

    <div class="mb-3">
      <label for="qty" class="form-label">Qty</label>
      <input type="text" class="form-control" id="qty" name="qty" value="{{$product->qty}}">
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
    </div>

    <div class="mb-3">
      <label for="descrption" class="form-label">Description</label>
      <input type="text" class="form-control" id="descrption" name="descrption" value="{{$product->descrption}}">
    </div>



    <input type="submit" class="btn btn-primary" value="Update" />
  </form>


  


@endsection