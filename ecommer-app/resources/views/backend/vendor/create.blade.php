@extends('layouts.backend_master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header">
                        <h5>Add New Vendor</h5>
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

                    <form action="{{ route('store.vendor') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Vendor Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Vendor Name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Vendor Email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" value="{{ old('phone') }}">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="{{ old('address') }}">
                        </div>

                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="{{ old('city') }}">
                        </div>

                        <div class="form-group">
                            <label for="seller_id">Select Seller</label>
                            <select class="form-control" id="seller_id" name="seller_id">
                                <option value="">-- Select Seller --</option>
                                @foreach ($sellers as $seller)
                                    <option value="{{ $seller->id }}">{{ $seller->name }} - {{ $seller->email }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mt-2">Save Vendor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
