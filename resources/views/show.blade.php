@extends('app')
 
@section('content')
<h1 class="page-header text-center">UTS FAHMI HUWAIDI</h1>
<div class="row">
    <div class="col-md-12 col-md-offset-1">
        <h2>Product Table
            <button type="button" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add Product</button>
        </h2>
    </div>
</div>
<div class="pb-3">
                  <form class="d-flex" action="{{url('product')}}" method="get">
                  @csrf
                      <input class="form-control me-1" type="search" name="keyword" value="{{ Request::get('keyword') }}" 
                      placeholder="Enter Keyword" aria-label="Search">
                      <button class="btn btn-primary" type="submit">Search</button>
                  </form>
                </div>
<div class="row">
    <div class="col-md-12 col-md-offset-1">
        @if (session('flash_message_success'))
        <div class="flash alert-success">
            {{ session('flash_message_success') }}
        </div>
        @endif
            @error('nim')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        <table class="table table-bordered table-responsive table-striped">
            <thead>
                <th>Product Name</th>
                <th>Size</th>
                <th>Price</th>
                <th>Action</th>
                
            </thead>
            <tbody>
                @foreach($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->name }}</td>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->address }}</td>
                        
                        <td>
                            <a href="#edit{{$mahasiswa->id}}" data-bs-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i> Edit</a> 
                            <a href="#delete{{$mahasiswa->id}}" data-bs-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
                            @include('action')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection