<?= view('Backend/backend_partials/header', ['title' => 'Add New Client Feedback']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h2 class="main-title">Add New Client Feedback</h2>

    <?php if (session()->getFlashdata('message')): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('store_client_feedback') ?>" method="post" enctype="multipart/form-data" class="mt-4">
      <div class="mb-3">
        <label for="client_name" class="form-label">Client Name</label>
        <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Enter client name" value="<?= old('client_name') ?>" required>
      </div>
      <div class="mb-3">
        <label for="client_position" class="form-label">Client Position</label>
        <input type="text" name="client_position" id="client_position" class="form-control" placeholder="Enter client position" value="<?= old('client_position') ?>" required>
      </div>

      <div class="mb-3">
        <label for="client_profile_image" class="form-label">Client Profile Image</label>
        <input type="file" name="client_profile_image" id="client_profile_image" class="form-control" accept="image/*">
      </div>

      <div class="mb-3">
        <label for="client_feedback" class="form-label">Client Feedback</label>
        <textarea name="client_feedback" id="client_feedback" class="form-control" rows="5" placeholder="Enter client feedback" required><?= old('client_feedback') ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url('client_feedbacks_listing') ?>" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>

