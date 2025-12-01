<?= view('Backend/backend_partials/header', ['title' => 'Edit Gallery Image']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h2 class="main-title">Edit Gallery Image</h2>

    <form action="<?= base_url('update_gallery/' . $gallery['gallery_id']) ?>" method="post" enctype="multipart/form-data" class="mt-4">
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <div class="mb-2">
          <img src="<?= base_url('uploads/gallery/' . $gallery['image']) ?>" alt="Current Image" style="width: 150px; height: 150px; object-fit: cover;">
        </div>
        <input type="file" name="image" id="image" class="form-control" accept="image/*">
        <small class="text-muted">Leave empty to keep current image</small>
      </div>

      <div class="mb-3">
        <label for="animal_type" class="form-label">Animal Type</label>
        <select name="animal_type" id="animal_type" class="form-control" required>
          <option value="">Select Animal Type</option>
          <option value="Cat" <?= $gallery['animal_type'] == 'Cat' ? 'selected' : '' ?>>Cat</option>
          <option value="Dog" <?= $gallery['animal_type'] == 'Dog' ? 'selected' : '' ?>>Dog</option>
          <option value="Other" <?= $gallery['animal_type'] == 'Other' ? 'selected' : '' ?>>Other</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="breed_name" class="form-label">Breed Name</label>
        <input type="text" name="breed_name" id="breed_name" class="form-control" value="<?= esc($gallery['breed_name']) ?>" required>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
      <a href="<?= base_url('gallery_listing') ?>" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>

