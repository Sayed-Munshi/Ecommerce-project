@foreach ($subcategories as $subcategory)
<div class="title d-block" id="{{ $subcategory->rel_to_category->id . '-' . $subcategory->rel_to_category->name }}">
    <h2 class="text-theme font-sm">{{ $subcategory->name }}</h2>
    <p>A virtual assistant collects the products from your list</p>
</div>

<div class="row row-cols-xxl-6 row-cols-lg-5 row-cols-md-4 row-cols-sm-3 row-cols-2 g-sm-4 g-3 section-b-space">
    @forelse (App\Models\Product::where('subcategory_id', $subcategory->id)->where('vendor_id', $vendorId)->get() as $product)
        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="{{ route('single.product', $product->slug) }}">
                        <img src="{{ url('/') . Storage::url($product->thumbnail_image) }}"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>

                </div>
                <div class="product-detail position-relative">
                    <a href="{{ route('single.product', $product->slug) }}">
                        <h6 class="name">
                            {{ str($product->product_name)->words(4) }}
                        </h6>
                    </a>

                    {{-- <h6 class="sold weight text-content fw-normal">1 KG</h6> --}}

                    <h6 class="price theme-color">&pound; {{ $product->calculation_price }}</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn" data-product-id="{{ $product->id }}">
                        <button class="btn addcart-button btn buy-button"><i class="fa-solid fa-plus"></i></button>

                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1" data-product-id="{{ $product->id }}">
                                <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-danger text-center">No Product Found</div>
        </div>
    @endforelse
</div>
@endforeach

