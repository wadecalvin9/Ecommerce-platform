<x-main>
    <link rel="stylesheet" href="{{ asset('./css/profile.css') }}">

    <div class="profile-page">
        <!-- Sidebar -->
        <aside class="profile-sidebar">
            <a href="/"><i class="fa-solid fa-house"></i></a>
            <a href="/orders"><i class="fa-solid fa-box"></i></a>
            <a href="/favorites"><i class="fa-solid fa-heart"></i></a>
            <a href="/settings"><i class="fa-solid fa-gear"></i></a>
        </aside>
        <!-- Main Content -->
        <main class="profile-content">
            <div class="profile-card">
                <h2>Profile</h2>

                <div class="profile-layout">
                    <!-- Left side -->
                    <div class="profile-image">
                        <div class="avatar-container">
                            <img src="https://images.pexels.com/photos/871495/pexels-photo-871495.jpeg"
                                alt="Profile Image">
                            <label for="avatar-upload" class="camera-icon">
                                <i class="fa-solid fa-camera"></i>
                            </label>
                            <input id="avatar-upload" type="file" hidden>
                        </div>

                        <div class="upload-section">
                            <button class="upload-btn">Logo</button>
                            <button class="upload-btn">Vendor Documents</button>
                        </div>
                    </div>

                    <!-- Right side -->
                    <div class="profile-info">
                        <p><strong>Name:</strong> {{ Auth::user()->name ?? 'User Name' }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email ?? 'user@email.com' }}</p>
                        <p><strong>Phone Number:</strong> +254 712 345 678</p>
                        <p><strong>Address:</strong> 285 N Broad St, Nairobi, Kenya</p>

                        <a class="edit-btn" href="/edit"><i class="fa-solid fa-pen"></i></a>
                    </div>
                </div>
            </div>
        </main>
    </div>

</x-main>
