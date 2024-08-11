@extends('layouts.backend_master')

@push('css')
    <style>
        .icon {
            position: absolute;
            top: 50%;
            right: 24px;
            transform: translateY(-50%)
        }

        .icon i {
            font-size: 18px;
            cursor: pointer;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            {{-- Admin registration form --}}
            <div class="card">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>Add new admin</h5>
                        <div class="d-inline-flex">
                            <a href="{{ route('admin.admins') }}" class="align-items-center btn btn-theme d-flex gap-2">
                                <i class="fa-solid fa-up-right-from-square"></i>
                                <span>Admin List</span>
                            </a>
                        </div>
                    </div>

                    @if(session('success'))
                    <div class="my-3 alert alert-primary">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('add.admin') }}" class="theme-form theme-form-2 mega-form" method="POST">
                        @csrf

                        <div class="row">
                            <div class="mb-4 row align-items-center">
                                <label for="name" class="form-label-title col-sm-2 mb-0">Name</label>
                                <div class="col-sm-10">
                                    <input id="name" name="name" class="form-control" type="text" placeholder="Name" value="{{ old('name') }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label for="email" class="form-label-title col-sm-2 mb-0">Email</label>
                                <div class="col-sm-10">
                                    <input id="email" name="email" class="form-control" type="email" placeholder="Email" value="{{ old('email') }}">
                                
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">Password</label>
                                <div class="col-sm-10">
                                    <div class="position-relative">
                                        <input class="form-control" name="password" id="for-password" type="password" placeholder="Password">
                                        <div class="icon">
                                            <i class="fa-solid fa-eye for-pass-show"></i>
                                        </div>
                                    </div>

                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-2 mb-0">Confirm
                                        Password</label>
                                <div class="col-sm-10">
                                    <div class="position-relative">
                                        <input class="form-control" id="for-confirm-password" type="password" name="password_confirmation" placeholder="Confirm Passowrd">
                                        <div class="icon">
                                            <i class="fa-solid fa-eye for-con_pass-show"></i>
                                        </div>
                                    </div>

                                    @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="mb-4 row align-items-center">
                                <div class="col-sm-2 mb-0"></div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-animation w-25">Add New Admin</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        var forPassword = document.querySelector("#for-password"),
            forPassShow = document.querySelector(".for-pass-show");

        forPassShow.addEventListener("click", function() {
            if(forPassword.type === "password") {
                forPassword.type = 'text';
            }else {
                forPassword.type = 'password';
            }
        });

        var forConPassword = document.querySelector("#for-confirm-password"),
            forConPassShow = document.querySelector(".for-con_pass-show");

        forConPassShow.addEventListener("click", function() {
            if(forPassword.type === "password") {
                forConPassword.type = 'text';
            }else {
                forConPassword.type = 'password';
            }
        });
    </script>
@endpush