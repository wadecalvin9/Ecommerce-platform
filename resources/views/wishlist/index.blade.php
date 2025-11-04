<x-main>
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />

    <div class="cart-page single-column">
        <h2 class="wishlist">Your Wishlist</h2>

        @if (session('Success'))
            <p class="success">{{ session('Success') }}</p>
        @endif

        @if ($wishItems->isEmpty())
            <div class="empty-cart">
                <i class="fa-solid fa-heart-crack"></i>
                <p>Your wishlist is empty.</p>
                <a href="{{ route('home') }}" class="continue-btn">Continue Shopping</a>
            </div>
        @else
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wishItems as $item)
                            <tr>
                                <td>
                                    <img src="{{ $item->product->image_url }}" class="tdimage" alt="{{ $item->product->name }}">
                                </td>

                                <td>
                                    <div class="product-info">
                                        <p class="product-name">
                                            {{ \Illuminate\Support\Str::limit($item->product->name, 50) }}
                                        </p>
                                        <p class="product-price-single">
                                            KSh {{ number_format($item->product->price, 2) }}
                                        </p>
                                    </div>
                                </td>

                                <td>
                                    <div class="actions">
                                        {{-- View Product --}}
                                        <a href="{{ route('product.show', $item->product->id) }}" class="view-btn">
                                            <i class="fa-solid fa-eye"></i>&nbsp; View
                                        </a>


                                        {{-- Remove from Wishlist --}}
                                        <form action="{{ route('wish.remove', $item->id) }}" method="POST" onsubmit="return confirm('Remove this item from wishlist?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete-btn">
                                                <i class="fa-solid fa-trash-can"></i>&nbsp; Remove
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-main>
