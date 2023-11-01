@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Dealer Form</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-12 col-md-12">
        <div class="panel">
            <div class="panel-header">
                <h5>All Dealer Form</h5>
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
                            <th>Conpany Name</th>
                            <th>Name</th>
                            <th>Husband Father</th>
                            <th>Company Address</th>
                            <th>Dealer Address</th>
                            <th>Nid Birth</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Warehouse</th>
                            <th>Visiting Area</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dealerforms as $dealerform)
                            <tr>
                                <td><span class="table-dscr">{{ $dealerform->conpany_name }}</span></td>
                                <td><span class="table-dscr">{{ $dealerform->name }}</span></td>
                                <td><span class="table-dscr">{{ $dealerform->husband_father }}</span></td>
                                <td><span class="table-dscr">{{ $dealerform->company_address }}</span></td>
                                <td><span class="table-dscr">{{ $dealerform->dealer_address }}</span></td>
                                <td><span class="table-dscr">{{ $dealerform->nid_birth }}</span></td>
                                <td><span class="table-dscr">{{ $dealerform->phone }}</span></td>
                                <td><span class="table-dscr">{{ $dealerform->email }}</span></td>
                                <td><span class="table-dscr">{{ $dealerform->warehouse }}</span></td>
                                <td><span class="table-dscr">{{ $dealerform->visiting_area }}</span></td>
                                
                                <td>
                                    <div class="btn-box">
                                        <a href="{{ route('dealerform.visiting', $dealerform->id) }}"><i class="fa-light fa-pen-to-square"></i></a>
                                        <form action="{{ route('dealerform.destroy',  $dealerform->id) }}" method="POST">
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