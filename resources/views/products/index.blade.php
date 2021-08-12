@extends('layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          
    
          <h1 class="m-0">Products</h1>
          <br>
          <a href="{{route('products.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add  New Product Item</a>
          
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Product List </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
 
  <!-- Main content -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Product List  </h3>
      </div>
      <br>
     
      <table class="table table-bordered datatable">
        <thead>
            <tr>
                <th>#SL</th>
                <th class="text-center">Image </th>
                <th>Name</th>
                <th>SKU</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($products)
                @foreach ($products as $key=> $product)
                    <tr>
                        <td class="text-center">{{++$key}}</td>
                        <td><img width="64px" src="{{asset('storage/product_images/'.$product->image)}}"/></td>
                        <td>{{$product->name ??''}}</td>
                        <td>{{$product->sku ??''}}</td>
                        <td>{{$product->category->name ??''}}</td>
                        <td>{{$product->brand->name ??''}}</td>
                        <td>
                          <a  href="{{route('products.show',$product->id)}}" class="btn btn-sm btn-primary">
                            <i class="fa fa-desktop"></i>  Show 
                         </a>
                            <a  href="{{route('products.edit',$product->id)}}" class="btn btn-sm btn-info">
                                <i class="fa fa-edit"></i>  Edit 
                            </a>
                            <a  href="javascript:;" class="btn btn-sm btn-danger sa-delete" data-form-id="product-delete-{{$product->id}}">
                              <i class="fa fa-trash"></i>  Delete
                            </a>
                            <form id="product-delete-{{$product->id}}" action="{{route('products.destroy',$product->id)}}" method="post">
                                @csrf 
                                @method('DELETE')

                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>
    </div>
    <!-- /.card -->


  </div>
  <!-- /.content -->
    
  
@endsection
