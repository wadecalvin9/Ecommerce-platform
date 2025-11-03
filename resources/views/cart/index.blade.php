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
                    @foreach ($cartItems as $item)
                        <tr>
                            <td><img src="{{ $item->product->image_url }}" class="tdimage" alt=""></td>
                            <td>{{ substr($item->product->name, 0, 20) }}</td>
                            <td>${{ $item->product->price * $item->quantity }}</td>
                            <td>
                                <div class="qty-controls">
                                    <form class="update-form" action="{{ route('cart.update', $item->id) }}"
                                        method="post">
                                        @method('PUT')
                                        @csrf
                                        <input type="number" class="quantity-input" name="quantity" min="1"
                                            value="{{ $item->quantity }}">
                                    </form>
                                </div>
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
        </div>

        <div class="cart-summary">
            <div class="summary-details">
                @php
                    $totalAmount = $cartItems->sum(function ($item) {
                        return $item->quantity * $item->product->price;
                    });
                @endphp

                <h3>Total: $ {{ $totalAmount }} </h3>
            </div>
            <button class="checkout-btn">Proceed to Checkout</button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all quantity inputs
            const qtyInputs = document.querySelectorAll('.quantity-input');

            qtyInputs.forEach(input => {
                input.addEventListener('change', function() {
                    const form = this.closest('.update-form');
                    if (form) {
                        form.submit();
                    }
                });
            });
        });
    </script>



</x-main>
