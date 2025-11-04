<x-main>
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />

    <div class="checkout-page">
        <h2>Checkout</h2>

        @if ($cartItems->isEmpty())
            <p class="empty-cart">Your cart is empty. <a href="{{ route('home') }}">Go shopping</a></p>
        @else
            <div class="checkout-container">

                <!-- LEFT: Shipping & Payment -->
                <div class="checkout-left">
                    <div class="section">
                        <h3>Shipping Address</h3>
                        <form action="{{ route('checkout.place') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="name" required value="{{ auth()->user()->name ?? '' }}">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" required>
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" required>
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" required value="{{ auth()->user()->email ?? '' }}">
                            </div>


                            <button type="submit" class="place-order-btn">Place Order</button>
                        </form>
                    </div>
                </div>

                <!-- RIGHT: Order Summary -->
                <div class="checkout-right">
                    <div class="summary-box">
                        <h3>Order Summary</h3>

                        <div class="summary-items">
                            @foreach ($cartItems as $item)
                                <div class="summary-item">
                                    <div class="item-info">
                                        <img src="{{ $item->product->image_url }}" alt="{{ $item->product->name }}">
                                        <p>{{ substr($item->product->name, 0, 40) }}</p>
                                    </div>
                                    <div class="item-total">
                                        Ksh {{ number_format($item->product->price * $item->quantity, 2) }}
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @php
                            $subtotal = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
                            $shipping = 200;
                            $total = $subtotal + $shipping;
                        @endphp


                        <div class="summary-totals">
                            <div><span>Subtotal:</span> <span>Ksh {{ number_format($subtotal, 2) }}</span></div>
                            <div><span>Shipping:</span> <span>Ksh {{ number_format($shipping, 2) }}</span></div>
                            <div class="total"><span>Total:</span> <span>Ksh {{ number_format($total, 2) }}</span>
                            </div>
                        </div>
                        <form action="{{ route('paystack.initialize') }}" method="POST">
                            @csrf
                            <input type="hidden" name="amount" value="{{ $total}}">
                            <button type="submit" class="checkout-btn">Checkout</button>
                        </form>

                    </div>
                </div>
            </div>
        @endif
    </div>
</x-main>
