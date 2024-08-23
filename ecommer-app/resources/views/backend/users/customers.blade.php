@extends('layouts.backend_master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>All Customers</h5>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-primary">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-warning">{{ session('error') }}</div>
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
                                            ROLE</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            CREATED</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            Option</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($customers as $customer)
                                        <tr>
                                            <td class="text-center">
                                                {{ $loop->index + 1 }}
                                            </td>

                                            <td>
                                                <div class="user-name">
                                                    <span>{{ $customer->name }}</span>
                                                </div>
                                            </td>

                                            <td>{{ $customer->email }}</td>

                                            <td>
                                                <div class="badge badge-info">
                                                    {{ $customer->role }}
                                                </div>
                                            </td>

                                            <td>{{ $customer->created_at->diffForHumans() }}</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('delete.user', $customer->id) }}">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
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
