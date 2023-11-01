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
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visitingareas as $visiting)
                            <tr>
                                <td><span class="table-dscr">{{ $visiting->sl }}</span></td>
                                <td><span class="table-dscr">{{ $visiting->visiting_company_name }}</span></td>
                                <td><span class="table-dscr">{{ $visiting->visiting_product }}</span></td>
                                <td><span class="table-dscr">{{ $visiting->monthly_sell }}</span></td>
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