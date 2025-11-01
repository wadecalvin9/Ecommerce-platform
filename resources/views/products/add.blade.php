<x-main>
  <div class="add-product-container">
    <div class="add-product-card">
      <h2><i class="fa-solid fa-box"></i> Add New Product</h2>

      @if(session('success'))
        <div class="alert success">{{ session('success') }}</div>
      @endif

      @if($errors->any())
        <div class="alert error">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data" class="product-form">
        @csrf

        <div class="form-group">
          <label for="name">Product Name</label>
          <input type="text" name="name" id="name" placeholder="Enter product name" required>
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description" rows="3" placeholder="Enter product description"></textarea>
        </div>

        <div class="form-group">
          <label for="price">Price (USD)</label>
          <input type="number" step="0.01" name="price" id="price" placeholder="0.00" required>
        </div>

        <div class="form-group">
          <label for="image">Product Image</label>
          <div class="image-preview-wrapper">
            <img id="preview" src="{{ asset('images/placeholder.png') }}" alt="Preview">
          </div>
          <input type="file" name="image" id="image" accept="image/*">
        </div>

        <button type="submit" class="btn-primary">
          <i class="fa-solid fa-plus"></i> Add Product
        </button>
      </form>
    </div>
  </div>
  <script>
    document.getElementById('image').addEventListener('change', function(e) {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
          document.getElementById('preview').src = event.target.result;
        };
        reader.readAsDataURL(file);
      }
    });
  </script>
</x-main>
