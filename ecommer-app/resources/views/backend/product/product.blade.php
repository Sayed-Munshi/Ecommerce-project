@extends('layouts.backend_master')

@push('css')
    {{-- Rich Text Editor --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <style>
        .note-editable {
            height: 160px;
        }

        #preview {
            display: none;
            height: 80px;
            width: 80px;
            object-fit: cover;
            object-position: center
        }

        .upload__inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .upload__btn {
            display: inline-block;
            font-weight: 400;
            color: #898989;
            text-align: center;
            width: 100%;
            height: 38px;
            cursor: pointer;
            border-radius: 3px;
            font-size: 14px;
            background-color: #f9f9f6;
            border: 1px solid #efefef;
        }

        .upload__btn-box {
            margin-bottom: 2px;
        }

        .upload__img-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .upload__img-box {
            width: 100px;
            padding: 0 10px;
            margin-bottom: 8px;
        }

        .upload__btn-box p {
            line-height: 38px
        }

        .upload__img-close {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 4px;
            right: 4px;
            text-align: center;
            line-height: 20px;
            z-index: 1;
            cursor: pointer;
        }

        .upload__img-close:after {
            content: "✖";
            font-size: 14px;
            color: white;
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data"
                        class="theme-form theme-form-2 mega-form">
                        @csrf

                        <div class="card-header-2 d-flex justify-content-between align-items-center">
                            <h5>Add New Product</h5>
                            <div class="d-inline-flex">
                                <a href="{{ route('products') }}" class="align-items-center btn btn-theme d-flex gap-2">
                                    <i class="fa-solid fa-up-right-from-square"></i>
                                    Product List
                                </a>
                            </div>
                        </div>

                        <div class="d-block d-md-flex gap-4">
                            <div class="w-100 mb-3">
                                <label class="form-label-title" for="product_name">Product Name</label>
                                <input name="product_name" id="product_name" class="form-control" type="text"
                                    placeholder="Product Name" value="{{ old('product_name') }}">

                                @error('product_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="w-100 mb-3">
                                <label class="form-label-title" for="category">Select Category</label>
                                <select class="form-select all-category" name="category_id" id="category">
                                    <option value="">Select option</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-block d-md-flex gap-4">
                            <div class="w-100 mb-3">
                                <label class="form-label-title" for="subcategory">Select Subcategory</label>
                                <select class="form-select all-subcategory" name="subcategory_id" id="subcategory">
                                    <option value="">Select option</option>
                                </select>

                                @error('subcategory_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="w-100 mb-3">
                                <label class="form-label-title" for="purchase_price">Purchase Price</label>
                                <input name="purchase_price" id="purchase_price" class="form-control" type="number"
                                    placeholder="Purchase Price" value="{{ old('purchase_price') }}">

                                @error('purchase_price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-block d-md-flex gap-4">
                            <div class="w-100 mb-3">
                                <label class="form-label-title" for="discount_type">Discount Type</label>
                                <select class="form-select" name="discount_type" id="discount_type"
                                    value="{{ old('discount_type') }}">
                                    <option value="">Select option</option>
                                    <option value="fixed">Fixed</option>
                                    <option value="percentage">Percentage</option>
                                </select>

                                @error('discount_type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="w-100 mb-3">
                                <label class="form-label-title" for="discount_amount">Discount Amount</label>
                                <input name="discount_amount" id="discount_amount" class="form-control" type="number"
                                    placeholder="Fixed amount / percentage number" value="{{ old('discount_amount') }}">

                                @error('discount_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-block d-md-flex gap-4">
                            <div class="w-100 mb-3">
                                <label class="form-label-title" for="sell_price">Sell Price</label>
                                <input name="sell_price" id="sell_price" class="form-control" type="number"
                                    placeholder="Discount amount">

                                @error('sell_price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="w-100 mb-3"></div>
                        </div>

                        <div class="d-block d-md-flex gap-4">
                            <div class="w-100 mb-3">
                                <label class="form-label-title" for="thumbnail">Thumbnail Image</label>
                                <input type="file" class="form-control" name="thumbnail_image" accept="jpg, png"
                                    id="thumbnail">

                                @error('thumbnail_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <img id="preview" class="my-2" alt="" />
                            </div>

                            <div class="w-100 mb-3">
                                <label class="form-label-title" for="gallery_image">Gallery Image</label>
                                <div class="upload__box">
                                    <div class="upload__btn-box">
                                        <label class="upload__btn">
                                            <p>Upload images from here..</p>
                                            <input id="gallery_image" type="file" accept="jpg, png" multiple
                                                data-max_length="20" class="upload__inputfile" name="gallery_image[]">
                                        </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
                                </div>

                                @error('gallery_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label-title" for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="5"
                                placeholder="Description">{!! old('description') !!}</textarea>

                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label-title" for="additional_description">Additional Description</label>
                            <textarea name="additional_description" id="additional_description" class="form-control" cols="30"
                                rows="5" placeholder="Additional Description">{!! old('additional_description') !!}</textarea>

                            @error('additional_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary w-50 mx-auto">Add New Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- Rich Text Editor --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote();
            $('#additional_description').summernote();
        });
    </script>

    <script>
        var upload = document.querySelector('#thumbnail'),
            preview = document.querySelector('#preview');

        upload.addEventListener('change', function() {
            preview.style.display = 'block';
            preview.src = window.URL.createObjectURL(this.files[0])
        });
    </script>

    <script>
        jQuery(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $('.upload__inputfile').each(function() {
                $(this).on('change', function(e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function(f, index) {

                        if (!f.type.match('image.*')) {
                            return;
                        }

                        if (imgArray.length > maxLength) {
                            return false
                        } else {
                            var len = 0;
                            for (var i = 0; i < imgArray.length; i++) {
                                if (imgArray[i] !== undefined) {
                                    len++;
                                }
                            }
                            if (len > maxLength) {
                                return false;
                            } else {
                                imgArray.push(f);

                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    var html =
                                        "<div class='upload__img-box'><div style='background-image: url(" +
                                        e.target.result + ")' data-number='" + $(
                                            ".upload__img-close").length + "' data-file='" + f
                                        .name +
                                        "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                    imgWrap.append(html);
                                    iterator++;
                                }
                                reader.readAsDataURL(f);
                            }
                        }
                    });
                });
            });

            $('body').on('click', ".upload__img-close", function(e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
            });
        }
    </script>

    <script>
        var allCategory = document.querySelector('.all-category'),
            allSubCategory = document.querySelector('.all-subcategory');

        allCategory.addEventListener('change', function() {
            var value = this.value;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "/get-subcategory",
                type: "POST",
                data: {
                    "category_id": value
                },
                success: function(data) {
                    allSubCategory.innerHTML = data
                }
            });
        });
    </script>
@endpush
