@extends('layouts.backend_master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>All Admins</h5>
                        <div class="d-inline-flex">
                            <a href="{{ route('category') }}" class="align-items-center btn btn-theme d-flex gap-2">
                                <i class="fa-solid fa-plus"></i>
                                Add Category
                            </a>
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
                                            ICON</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            CREATED</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            Option</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($categories as $category)
                                        <tr>
                                            <td class="text-center">
                                                {{ $loop->index + 1 }}
                                            </td>

                                            <td>
                                                <div>
                                                    <span>{{ ucwords($category->name) }}</span>
                                                </div>
                                            </td>

                                            <td>
                                                <img width="50" src="{{ url('/') . Storage::url($category->icon) }}"
                                                    alt="{{ $category->name }}" />
                                            </td>

                                            <td>{{ $category->created_at->diffForHumans() }}</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('delete.category', $category->id) }}">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">
                                                <div class="alert alert-warning text-center">
                                                    No data found in database
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
