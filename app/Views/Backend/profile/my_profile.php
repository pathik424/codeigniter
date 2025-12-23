<?= view('Backend/backend_partials/header', ['title' => 'Edit Profile Picture']) ?>

<main class="main users chart-page" id="skip-target">
    <div class="container">
        <?php if (session()->getFlashdata('message')): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

        <h3>My Profile</h3>

        <br>
        <br>

        <div class="profile-picture-section" style="text-align: center; margin-bottom: 30px;">
           
            <?php if (!empty($profile['profile_picture'])): ?>
                <img src="<?= base_url('uploads/my_profile/' . esc($profile['profile_picture'])) ?>" 
                     alt="Profile Picture" 
                     style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 2px solid #ddd;">
            <?php else: ?>
                <div style="width: 150px; height: 150px; border-radius: 50%; background-color: #f0f0f0; display: flex; align-items: center; justify-content: center; margin: 0 auto; border: 2px solid #ddd;">
                    <span style="color: #999;">No Picture</span>
                </div>
            <?php endif; ?>
        </div>

<br>
            <form method="post" action="<?= base_url('profile/update'); ?>" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                
                <div class="input-box">
                    <label>Your Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?= esc($profile['name'] ?? '') ?>">
                    <span class="icon"><i class='bx bx-user'></i></span>
                </div>

                <div class="input-box">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username" value="<?= esc($profile['username'] ?? '') ?>" readonly>
                    <span class="icon"><i class='bx bx-user'></i></span>
                </div>

                <div class="input-box">
                    <label>Your Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?= esc($profile['email'] ?? '') ?>">
                    <span class="icon"><i class='bx bx-envelope'></i></span>
                </div>

                <div class="input-box">
                    <label>Profile Picture</label>
                    <input type="file" class="form-control" name="profile_picture" placeholder="Upload profile picture">
                    <span class="icon"><i class='bx bx-image'></i></span>
                </div>

                <div class="input-box">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                </div>

                <div class="input-box">
                    <label>Repeat Password</label>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Repeat password">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                </div>

                <div class="btn btn-secondary ">
                    <button type="submit" class="btn">Update</button>
                </div>

                <a href="<?= base_url('headers_listing') ?>" class="btn btn-secondary">Cancel</a>
            </form>
     
    </div>
</main>

<?= view('Backend/backend_partials/footer') ?>

