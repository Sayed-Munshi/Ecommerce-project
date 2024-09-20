<ul class="list-group list-group-flush">
    @forelse ($products as $product)
        <li class="list-group-item">
            <a href="{{ route('single.product', $product->slug) }}" class="text-decoration-none">
                <img src="{{ url('/') . Storage::url($product->thumbnail_image) }}" alt="{{ $product->product_name }}" style="width: 50px; height: 50px;" class="img-thumbnail">
                <span>{{ $product->product_name }}</span>
            </a>
        </li>
    @empty
        <li class="list-group-item">No products found.</li>
    @endforelse
</ul>
