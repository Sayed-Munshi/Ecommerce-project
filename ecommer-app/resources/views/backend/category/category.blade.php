@extends('layouts.backend_master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            {{-- Category form --}}
            <div class="card">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>Add new category</h5>
                        <div class="d-inline-flex">
                            <a href="{{ route('categories') }}" class="align-items-center btn btn-theme d-flex gap-2">
                                <i class="fa-solid fa-up-right-from-square"></i>
                                <span>Category List</span>
                            </a>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="my-3 alert alert-primary">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('store.category') }}" class="theme-form theme-form-2 mega-form" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="mb-4 row align-items-center">
                                <label for="category_name" class="form-label-title">Category Name</label>
                                <div class="col-sm-12">
                                    <input id="category_name" name="name" class="form-control" type="text"
                                        placeholder="Name" value="{{ old('name') }}">

                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label for="category_icon" class="form-label-title">Category Icon</label>
                                <div class="col-sm-12">
                                    <input id="category_icon" name="icon" class="form-control" type="file">

                                    @error('icon')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-animation w-25">Add Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
