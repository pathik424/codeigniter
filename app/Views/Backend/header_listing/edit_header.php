<?= view('Backend/backend_partials/header', ['title' => 'Edit Header']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h2 class="main-title">Edit Header</h2>

    <form action="<?= base_url('update_header/' . $header['id']) ?>" method="post" class="mt-4">
      <div class="mb-3">
        <label for="header_title" class="form-label">Header Title</label>
        <input type="text" name="header_title" id="header_title" class="form-control" value="<?= esc($header['header_title']) ?>" required>
      </div>

      <div class="mb-3">
        <label for="header_url" class="form-label">Header URL</label>
        <input type="text" name="header_url" id="header_url" class="form-control" value="<?= esc($header['header_url']) ?>" required>
        <small class="text-muted">Base URL will be applied automatically for internal links.</small>
      </div>

      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="is_active" id="is_active" <?= $header['is_active'] ? 'checked' : '' ?>>
        <label class="form-check-label" for="is_active">Active</label>
      </div>

      <button type="submit" class="btn btn-primary">Update Header</button>
      <a href="<?= base_url('headers_listing') ?>" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>