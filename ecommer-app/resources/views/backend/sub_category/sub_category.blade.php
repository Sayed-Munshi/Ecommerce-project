@extends('layouts.backend_master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            {{-- Subcategory form --}}
            <div class="card">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>Add new subcategory</h5>
                        <div class="d-inline-flex">
                            <a href="{{ route('subcategories') }}" class="align-items-center btn btn-theme d-flex gap-2">
                                <i class="fa-solid fa-up-right-from-square"></i>
                                <span>Subcategory List</span>
                            </a>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="my-3 alert alert-primary">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('store.subcategory') }}" class="theme-form theme-form-2 mega-form" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="mb-4 row align-items-center">
                                <label for="select_category" class="form-label-title">Select Category</label>
                                <div class="col-sm-12">
                                    <select name="category_id" id="select_category" class="form-select">
                                        <option value="">Select an option</option>

                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('category_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label for="subcategory_name" class="form-label-title">Subcategory Name</label>
                                <div class="col-sm-12">
                                    <input id="subcategory_name" name="name" class="form-control" type="text"
                                        placeholder="Name" value="{{ old('name') }}">

                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-animation w-25">Add Subcategory</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
