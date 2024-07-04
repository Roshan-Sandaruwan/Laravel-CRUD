@extends('layouts.layout')
@section('title', 'Product Create')

@section('content')

{{-- notofocation --}}

{{-- @if (session('success'))
<div aria-live="polite" aria-atomic="true" class="position-relative">      
  <div class="toast-container top-0 end-0 p-3">

    <div class="toast show notification" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <strong class="me-auto">Notification</strong>
        <small class="text-body-secondary">just now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        {{ session('success') }}
      </div>
    </div>

    
  </div>
</div>
@endif --}}




  <h1>Product</h1>
  
  <div>
    <table class="table table-striped">
      
      <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Description</th>
      </tr>

      @foreach ($products as $product)

      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->qty}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->descrption}}</td>
      </tr>
          
      @endforeach





    </table>
  </div>


@endsection