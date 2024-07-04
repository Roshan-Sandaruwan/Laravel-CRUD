@extends('layouts.layout')
@section('title', 'Product Create')

@section('content')



  <h1>Product Create</h1>

  <form method="post" action="{{route('product.store')}}">

    @csrf
    @method('post')

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="mb-3">
      <label for="qty" class="form-label">Qty</label>
      <input type="text" class="form-control" id="qty" name="qty">
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control" id="price" name="price">
    </div>

    <div class="mb-3">
      <label for="descrption" class="form-label">Description</label>
      <input type="text" class="form-control" id="descrption" name="descrption">
    </div>



    <input type="submit" class="btn btn-primary" value="Save a new product" />
  </form>


  


@endsection