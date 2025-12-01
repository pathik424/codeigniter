<?= view('Backend/backend_partials/header', ['title' => 'Add Gallery Image']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h2 class="main-title">Add Gallery Image</h2>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('store_gallery') ?>" method="post" enctype="multipart/form-data" class="mt-4">
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
      </div>

      <div class="mb-3">
        <label for="animal_type" class="form-label">Animal Type</label>
        <select name="animal_type" id="animal_type" class="form-control" required>
          <option value="">Select Animal Type</option>
          <option value="Cat">Cat</option>
          <option value="Dog">Dog</option>
          <option value="Other">Other</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="breed_name" class="form-label">Breed Name</label>
        <input type="text" name="breed_name" id="breed_name" class="form-control" placeholder="Enter breed name" required>
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a href="<?= base_url('gallery_listing') ?>" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>

