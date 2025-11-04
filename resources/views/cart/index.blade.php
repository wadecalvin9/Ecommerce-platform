<x-main>
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />

    <div class="cart-page">
        <!-- Left side: Cart items -->
        <div class="table-container">
            <h2>Your Shopping Cart</h2>

            @if ($cartItems->isEmpty())
                <div class="empty-cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p>Your cart is empty.</p>
                    <a href="{{ route('home') }}" class="continue-btn">Continue Shopping</a>
                </div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                            <tr>
                                <td>
                                    <img src="{{ $item->product->image_url }}" class="tdimage"
                                        alt="{{ $item->product->name }}">
                                </td>
                                <td>
                                    <div class="product-info">
                                        <p class="product-name">{{ $item->product->name }}</p>
                                        <p class="product-price-single">KSh
                                            {{ number_format($item->product->price, 2) }}</p>
                                    </div>
                                </td>
                                <td>
                                    <strong>KSh {{ number_format($item->product->price * $item->quantity, 2) }}</strong>
                                </td>
                                <td>
                                    <form class="update-form" action="{{ route('cart.update', $item->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="quantity" class="qty-dropdown" onchange="this.form.submit()">
                                            @for ($i = 1; $i <= 10; $i++)
                                                <option value="{{ $i }}"
                                                    {{ $item->quantity == $i ? 'selected' : '' }}>
                                                    Qty: {{ $i }}
                                                </option>
                                            @endfor
                                        </select>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="delete-btn">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <!-- Right side: Summary -->
        <div class="cart-summary">
            @php
                $totalAmount = $cartItems->sum(fn($item) => $item->quantity * $item->product->price);
            @endphp

            <div class="summary-details">
                <h3>Subtotal ({{ $cartItems->count() }} items):</h3>
                <p class="total-price">KSh {{ number_format($totalAmount, 2) }}</p>
            </div>
            <a style="text-decoration: none; padding: 10px;" href="/checkout" class="checkout-btn">Proceed to Checkout</a>

        </div>
    </div>
</x-main>
