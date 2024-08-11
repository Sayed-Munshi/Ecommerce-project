@extends('layouts.backend_master')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-10">
            {{-- Profile Info --}}
            <div class="card">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>Profile Info</h5>
                    </div>

                    @if (session('info_success'))
                        <div class="alert alert-primary">{{ session('info_success') }}</div>
                    @endif

                    <form action="{{ route('update.profile.info') }}" method="POST" class="theme-form theme-form-2 mega-form" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="mb-4 row align-items-center">
                                <label for="name" class="form-label-title">Name</label>
                                <div class="col-sm-12">
                                    <input id="name" name="name" class="form-control" type="text" value="{{ Auth::user()->name }}">

                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label for="email" class="form-label-title">Email</label>
                                <div class="col-sm-12">
                                    <input id="email" name="email" class="form-control" type="email" value="{{ Auth::user()->email }}">

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <label for="photo" class="col-form-label form-label-title">Photo</label>
                                <div class="col-sm-12">
                                    <input id="photo" name="photo" class="form-control form-choose" type="file" onchange="document.getElementById('upload_photo').src = window.URL.createObjectURL(this.files[0])">

                                    @error('photo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="mb-4 row align-items-center">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-12">
                                    @if (Auth::user()->photo)
                                        <div class="mt-3">
                                            <img id="upload_photo" width="60" src="{{ asset('uploads') }}/users_photo/admin/{{ Auth::user()->photo }}" alt="profile pic" />
                                        </div>
                                    @else
                                        <div class="mt-3">
                                            <img id="upload_photo" width="60" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}?rounded=true?background=random?bold=true" alt="avatar"/>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            

                            <div class="mb-4 row align-items-center">
                                <div class="col-sm-2 mb-0"></div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-animation w-25">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-10">
            {{-- Password --}}
            <div class="card">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>Password change</h5>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-primary">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('update.password') }}" method="POST" class="theme-form theme-form-2 mega-form">
                        @csrf

                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title" for="current_password">Current Password</label>
                            <div class="col-sm-12">
                                <input name="current_password" class="form-control" type="password" placeholder="Current Password" id="current_password">

                                @error('current_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                @if (session('warning'))
                                    <small class="text-danger">{{ session('warning') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title">New Password</label>
                            <div class="col-sm-12">
                                <input name="password" class="form-control" type="password" placeholder="New Password">

                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title">Confirm
                                Password</label>
                            <div class="col-sm-12">
                                <input name="password_confirmation" class="form-control" type="password" placeholder="Confirm Passowrd">

                                @error('password_confirmation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <div class="col-sm-2 mb-0"></div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-animation w-25">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection