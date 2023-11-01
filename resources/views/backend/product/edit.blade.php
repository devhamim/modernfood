@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Product</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-6 col-md-4 m-auto">
        <div class="panel">
            <div class="panel-header">
                <h5>Edit Product</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $products->id }}">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" value="{{ $products->name }}">
                            
                        </div>
                        <div class="col-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm" value="{{ $products->title }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="3" name="description" class="form-control form-control-sm">{{ $products->description }}</textarea>
                        </div>  
                        <div class="col-12">
                            <div class="upload-category-thumbnail">
                                <label class="form-label" id="addCatThumb">Image</label>
                                <input type="file" name="image" class="form-control" id="thumbUpload" value="{{ $products->image }}">
                            </div>
                            <div class="my-3">
                                <img width="100" id="blah" src="{{ asset('uploads/product') }}/{{ $products->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Home Page</label>
                            <div class="form-check mb-10">
                                <input class="form-check-input" type="radio" name="define" id="gridRadios1" value="2" {{ $products->define == 2 ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check mb-10">
                                <input class="form-check-input" type="radio" name="define" id="gridRadios2" value="1" {{ $products->define == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios2">
                                    No
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control form-control-sm" id="">
                                <option value="1" {{ $products->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $products->status == 2 ? 'selected' : '' }}>Deactive</option>
                            </select>
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
    
</div>
@endsection