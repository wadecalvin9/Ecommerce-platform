<x-main>
    <link rel="stylesheet" href="{{ asset('./css/profile.css') }}">
  <div class="profile-container">
    <div class="profile-card">
      <div class="profile-header">
        <div class="avatar-section">
          <div class="avatar-wrapper">
            <img src="https://images.pexels.com/photos/2065201/pexels-photo-2065201.jpeg" alt="User Avatar" class="avatar">
            <label for="avatar-upload" class="avatar-upload">
              <i class="fa-solid fa-camera"></i>
            </label>
            <input type="file" id="avatar-upload" hidden>
          </div>
          <h2>{{ auth()->user()->name ?? 'User Name' }}</h2>
          <p class="email">{{ auth()->user()->email ?? 'user@email.com' }}</p>
        </div>
      </div>

      <form action="" method="POST" class="profile-form">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label>Full Name</label>
          <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required>
        </div>

        <div class="form-group">
          <label>Email Address</label>
          <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
        </div>

        <div class="form-group">
          <label>Phone Number</label>
          <input type="text" name="phone" value="{{ old('phone', auth()->user()->phone ?? '') }}">
        </div>

        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" value="{{ old('address', auth()->user()->address ?? '') }}">
        </div>

        <button type="submit" class="btn-save">
          <i class="fa-solid fa-save"></i> Save Changes
        </button>
      </form>
    </div>
  </div>
</x-main>
