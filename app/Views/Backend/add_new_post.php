<?= view('Backend/backend_partials/header', ['title' => 'Add New Post']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h2 class="main-title">Add New Post</h2>

    <?php if (session()->getFlashdata('message')): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('store_post') ?>" method="post" enctype="multipart/form-data" class="mt-4">
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Enter post title" value="<?= old('title') ?>" required>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*">
      </div>

      <div class="mb-3">
        <label for="textarea" class="form-label">Description</label>
        <textarea name="textarea" id="textarea" class="form-control" rows="5" placeholder="Enter post description" required><?= old('textarea') ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url('posts_listing') ?>" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>

