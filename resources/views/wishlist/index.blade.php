<x-main>
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />

    <div class="cart-page">
        <h2>WishList</h2>

        @if (session('Success'))
            <p class="success">{{ session('Success') }}</p>
        @endif



        @if ($wishItems->isEmpty())
            <p style="text-align: center;margin-top:70px; font-size:50px;">No items</p>
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



                        {{-- Example static rows — replace with @foreach ($cartItems as $item) --}}
                        @foreach ($wishItems as $item)
                            <tr>
                                <td><img src="{{ $item->product->image_url }}" class="tdimage" alt=""></td>
                                <td>{{ substr($item->product->name, 0, 20) }}</td>
                                <td>
                                    <form action="{{ route('wish.remove', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="delete-btn">Remove</button>
                                        <a  href="" style="background-color:rgba(240, 248, 255, 0.194); color: black;" class="delete-btn">View</a>
                                    </form>




                                </td>




                            </tr>
                        @endforeach




        @endif


        </tbody>
        </table>
    </div>





</x-main>
