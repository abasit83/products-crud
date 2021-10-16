@extends('layouts.master', ['page_title' => 'View Product'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Product Details</h3>
                </div> <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">All Products</a></li>
                        <li class="breadcrumb-item active">View Product</li>
                    </ol>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <!-- <div class="card-header">
                    <h3 class="card-title">Details</h3>
                </div> --> <!-- /.card-header -->
                <div class="card-body">
                    <h2 class="lead"><b>Title</b></h2>
                    <p class="text-muted">{{ $product->title }}</p>
					
                    <h2 class="lead"><b>Description</b></h2>
                    <p class="text-muted">{!! $product->description !!}</p>
                    
                    <h2 class="lead"><b>Price</b></h2>
                    <p class="text-muted">{{ $product->price }}</p>
                    
                    <h2 class="lead"><b>Created At</b></h2>
                    <p class="text-muted">{{ $product->created_at }}</p>
                    
                    <h2 class="lead"><b>Updated At</b></h2>
                    <p class="text-muted">{{ $product->updated_at }}</p>
                </div> <!-- /.card-body -->
            </div> <!-- /.card -->		
        </div> <!-- /.container-fluid -->
    </section>
    
</div> <!-- /.content -->
@endsection