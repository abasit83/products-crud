@extends('layouts.master', ['page_title' => 'Edit Product'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Edit Product</h3>
                </div> <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">All Products</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card-body">
                <form method="post" action="{{ route('products.update', $product->id) }}">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $product->title }}" class="form-control"/>
						@error('title')
						<span class="validation-error" ><i class='fas fa-exclamation-circle'></i> {{ $message }}</span>
						@enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="5">{{ $product->description }}</textarea>
						@error('description')
						<span class="validation-error" ><i class='fas fa-exclamation-circle'></i> {{ $message }}</span>
						@enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" value="{{ $product->price }}" class="form-control"/>
                        @error('price')
                        <span class="validation-error" ><i class='fas fa-exclamation-circle'></i> {{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                        @foreach(\App\Http\Helpers\Status::GetByText as $key => $type)
                            <option value="{{$key}}" @if($key == $product->status) selected @endif>{{$type}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success btn-sm">Save Page</button>
                    </div>
                </form>
            </div>
        </div>
    </section> <!-- /.content -->
</div>
@endsection