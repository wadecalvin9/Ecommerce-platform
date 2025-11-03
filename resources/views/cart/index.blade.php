<x-main>
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />

    <div class="cart-page">
        <h2>Your Cart</h2>

        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product</th>
                        {{-- <th>Category</th> --}}
                        <th>Price</th>
                        <th>Quantity</th>
                      {{--  <th>Status</th>  --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Example static rows — replace with @foreach ($cartItems as $item) --}}
                    <tr>
                        <td><img src="https://images.pexels.com/photos/34505700/pexels-photo-34505700.jpeg" class="tdimage" alt=""></td>
                        <td>Maison Lume T-shirt</td>
                       {{-- <td>Fashion</td> --}}
                        <td>$25</td>
                        <td>
                            <div class="qty-controls">
                                <button class="qty-btn">−</button>
                                <input type="number" value="1" min="1">
                                <button class="qty-btn">+</button>
                            </div>
                        </td>
                        {{-- <td><span class="status available">Available</span></td> --}}
                        <td>

                            <button class="delete-btn">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="cart-summary">
            <div class="summary-details">
                <p><strong>Subtotal:</strong> $70</p>
                <p><strong>Tax:</strong> $5.60</p>
                <h3>Total: $75.60</h3>
            </div>
            <button class="checkout-btn">Proceed to Checkout</button>
        </div>
    </div>
</x-main>
