@extends('admin.layouts.app')

@section('pageTitle', 'Orders')

@section('head')
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ url('vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb" class="d-flex align-items-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Subscribes</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Orders</h6>
                    <div class="table-responsive">
                        <table id="orders" class="table table-lg">
                            <thead>
                            <tr>
                                <th style="text-align-last: center; width:50px;">No</th>
                                <th style="text-align-last: center; width:100px;">Email</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($subscribes as $value)
                                <tr>
                                    <td style="text-align-last: center; width:50px;">{{$loop->iteration}}</td>
                                    <td style="text-align-last: center; width:80px;">{{$value->email}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
