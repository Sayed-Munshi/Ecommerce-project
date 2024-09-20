@extends('layouts.backend_master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>All Sellers</h5>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{ route('vendor.create') }}" class="btn btn-primary">Add New Vendor</a>
                            </div>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-primary">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive table-product">
                        <div id="table_id_wrapper" class="dataTables_wrapper no-footer">
                            <table class="table all-package theme-table dataTable no-footer" id="table_id">
                                <thead>
                                    <tr>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">SL
                                        </th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            NAME</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            EMAIL</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            phone </th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            address</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            Seller</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            Option</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($vendors as $vendor)
                                        <tr>
                                            <td class="text-center">
                                                {{ $loop->index + 1 }}
                                            </td>

                                            <td>
                                                <div class="user-name">
                                                    <span>{{ $vendor->name }}</span>
                                                </div>
                                            </td>

                                            <td>{{ $vendor->email }}</td>

                                            <td>
                                                <div class="badge badge-info">
                                                    {{ $vendor->phone }}
                                                </div>
                                            </td>

                                            <td>{{ $vendor->address }} {{ $vendor->city }}</td>

                                            <td>
                                                <div class="badge badge-success">
                                                    {{ $vendor->seller->name }}
                                                    <br>
                                                    <span class="badge badge-info">{{ $vendor->seller->email }}</span>
                                                </div>
                                            </td>

                                            <td>
                                                <a href="{{ route('vendor.edit', $vendor->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('vendor.destroy', $vendor->id) }}" method="POST"
                                                    style="display: inline-block !important;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">
                                                <div class="alert alert-warning text-center">
                                                    No user found in database
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
