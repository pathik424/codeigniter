<?= view('Backend/backend_partials/header', ['title' => 'Edit Post']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h2 class="main-title">Edit Client Feedback</h2>

    <?php if (session()->getFlashdata('message')): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('update_client_feedback/' . $feedback['feedback_id']) ?>" method="post" enctype="multipart/form-data" class="mt-4">
      <div class="mb-3">
        <label for="client_name" class="form-label">Client Name</label>
        <input type="text" name="client_name" id="client_name" class="form-control" value="<?= esc($feedback['client_name']) ?>" required>
      </div>
      <div class="mb-3">
        <label for="client_position" class="form-label">Client Position</label>
        <input type="text" name="client_position" id="client_position" class="form-control" value="<?= esc($feedback['client_position']) ?>" required>
      </div>

      <div class="mb-3">
        <label for="client_profile_image" class="form-label">Client Profile Image</label>
        <?php if ($feedback['client_profile_image']): ?>
          <div class="mb-2">
            <img src="<?= base_url('uploads/feedbacks/' . $feedback['client_profile_image']) ?>" alt="Current Image" style="width: 100px; height: 100px; object-fit: cover;">
          </div>
        <?php endif; ?>
        <input type="file" name="client_profile_image" id="client_profile_image" class="form-control" accept="image/*">
        <small class="text-muted">Leave empty to keep current image</small>
      </div>

      <div class="mb-3">
        <label for="client_feedback" class="form-label">Client Feedback</label>
        <textarea name="client_feedback" id="client_feedback" class="form-control" rows="5" required><?= esc($feedback['client_feedback']) ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
      <a href="<?= base_url('client_feedbacks_listing') ?>" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>

