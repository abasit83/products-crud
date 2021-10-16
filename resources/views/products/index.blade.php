@extends('layouts.master', ['page_title' => 'All Products'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">All Products</h3>
                </div> <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">All Products</li>
                    </ol>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">                    
                    <a href="{{ route('products.create') }}" class="btn btn-success btn-sm">Add Product</a>
                    <a href="{{ route('products.export') }}" class="btn btn-success btn-sm" >Export CSV</a>
                </div> <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-striped yajra-datatable">
                        <thead>
                            <tr>
                                <!-- <th>Sr. #</th> -->
                                <th>Title</th>
                                <th>Slug</th>
                                <th>price</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach($products as $key => $p)
                            <tr>
                                <td>{{ $p->title }}</td>
                                <td>{{ $p->slug }}</td>
                                <td>{{ $p->price }}</td>
                                <td>{{ \App\Http\Helpers\Status::GetByText[$p->status] }}</td>
                                <td>
                                    <a href="{{ route('products.show', $p->id) }}">View</a>  |
                                    <a href="{{ route('products.edit', $p->id) }}">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>                  
                    </table>
                </div> <!-- /.card-body -->
            </div> <!-- /.card -->
        </div><!-- /.container-fluid -->   
    </section>  <!-- /.content -->
</div>
@endsection