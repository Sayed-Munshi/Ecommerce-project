@extends('layouts.backend_master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header">
                        <h5>Edit Vendor</h5>
                    </div>

                    <div class="col-md-12 mb-3">
                        <a href="{{ route('admin.vendors') }}" class="btn btn-secondary mb-3">Back to All Vendors</a>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-primary">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('vendor.update', $vendor->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Vendor Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $vendor->name) }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $vendor->email) }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $vendor->phone) }}">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $vendor->address) }}">
                        </div>

                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $vendor->city) }}">
                        </div>

                        <div class="form-group">
                            <label for="seller_id">Select Seller</label>
                            <select class="form-control" id="seller_id" name="seller_id">
                                @foreach ($sellers as $seller)
                                    <option value="{{ $seller->id }}" {{ $vendor->seller_id == $seller->id ? 'selected' : '' }}>
                                        {{ $seller->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mt-2">Update Vendor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
