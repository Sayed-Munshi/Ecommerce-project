@extends('layouts.backend_master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>Product List</h5>
                        <div class="d-inline-flex">
                            <a href="{{ route('product') }}" class="align-items-center btn btn-theme d-flex gap-2">
                                <i class="fa-solid fa-plus"></i>
                                Add Product
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
                                            SELL PRICE</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            THUMBNAIL</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            CREATED</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170px;">
                                            Option</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <td class="text-center">
                                                {{ $loop->index + 1 }}
                                            </td>

                                            <td>
                                                <div class="user-name">
                                                    <span>{{ $product->product_name }}</span>
                                                </div>
                                            </td>

                                            <td>{{ $product->sell_price }}</td>

                                            <td>
                                                <img width="80"
                                                    src="{{ url('/') . Storage::url($product->thumbnail_image) }}"
                                                    alt="">
                                            </td>

                                            <td>{{ $product->created_at->diffForHumans() }}</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('delete.product', $product->id) }}">
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
                                                    No products found in database
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
