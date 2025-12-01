<?= view('Backend/backend_partials/header', ['title' => 'All Gallery Images']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="main-title">All Gallery Images</h2>
      <a href="<?= base_url('add_gallery') ?>" class="btn btn-primary">Add New Image</a>
    </div>

    <?php if (session()->getFlashdata('message')): ?>
      <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Animal Type</th>
            <th>Breed Name</th>
            <th>Created At</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($gallery as $item): ?>
            <tr>
              <td><?= esc($item['gallery_id']) ?></td>
              <td>
                <img src="<?= base_url('uploads/gallery/' . $item['image']) ?>" alt="Gallery Image" style="width: 80px; height: 80px; object-fit: cover;">
              </td>
              <td><?= esc($item['animal_type']) ?></td>
              <td><?= esc($item['breed_name']) ?></td>
              <td><?= esc($item['created_at']) ?></td>
              <td>
                <a href="<?= base_url('edit_gallery/' . $item['gallery_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= base_url('delete_gallery/' . $item['gallery_id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this image?');">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>

