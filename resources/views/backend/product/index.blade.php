@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Product</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-4 col-md-5">
        <div class="panel">
            <div class="panel-header">
                <h5>Add New Product</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm " value="{{ old('title') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="3" name="description" class="form-control form-control-sm">{{ old('description') }}</textarea>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control form-control-sm @error('image') is-invalid @enderror" value="{{ old('image') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Home Page</label>
                            <div class="form-check mb-10">
                                <input class="form-check-input @error('define') is-invalid @enderror" type="radio" name="define" id="gridRadios1" value="2" checked="">
                                <label class="form-check-label" for="gridRadios1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check mb-10">
                                <input class="form-check-input @error('define') is-invalid @enderror" type="radio" name="define" id="gridRadios2" value="1">
                                <label class="form-check-label" for="gridRadios2">
                                    No
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-12 d-flex justify-content-end">
                            <div class="btn-box">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xxl-8 col-md-7">
        <div class="panel">
            <div class="panel-header">
                <h5>All About</h5>
                <div class="btn-box d-flex gap-2">
                    <div id="tableSearch"></div>
                    <div class="digi-dropdown dropdown">

                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-filter-option">
                    <div class="row justify-content-between g-3">
                        <div class="col-xxl-4 col-6 col-xs-12">
                            
                        </div>
                        <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                            <div id="productTableLength"></div>
                        </div>
                    </div>
                </div>
                <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped" id="allProductTable">
                    <thead>
                        <tr>
                            <th class="no-sort">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="markAllProduct">
                                </div>
                            </th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Define</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <div class="table-category-card">
                                        <div class="part-icon">
                                            <span><img src="{{ asset('uploads/product') }}/{{ $product->image }}" alt=""></span>
                                        </div>
                                        <div class="part-txt" style="width: 120px">
                                            <span class="category-name">{{ $product->name }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="table-dscr">{{ $product->title }}</span></td>
                                <td><span class="table-dscr">{{ $product->description }}</span></td>
                                <td>
                                    @if ($product->define == 1)
                                        <span class="table-dscr text-primary">Product</span>
                                    @else
                                        <span class="table-dscr text-primary">Home</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($product->status == 1)
                                        <span class="table-dscr text-success">Active</span>
                                    @else
                                        <span class="table-dscr text-warning">Deactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-box">
                                        <a href="{{ route('products.edit', $product->id) }}"><i class="fa-light fa-pen-to-square"></i></a>
                                        <form action="{{ route('products.destroy',  $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" border-0 mr-2">
                                                <i class="fa-light fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>
</div>
@endsection