<?= view('Backend/backend_partials/header', ['title' => 'Edit Post']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h2 class="main-title">Edit Post</h2>

    <?php if (session()->getFlashdata('message')): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('update_post/' . $post['post_id']) ?>" method="post" enctype="multipart/form-data" class="mt-4">
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= esc($post['title']) ?>" required>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <?php if ($post['image']): ?>
          <div class="mb-2">
            <img src="<?= base_url('uploads/posts/' . $post['image']) ?>" alt="Current Image" style="width: 100px; height: 100px; object-fit: cover;">
          </div>
        <?php endif; ?>
        <input type="file" name="image" id="image" class="form-control" accept="image/*">
        <small class="text-muted">Leave empty to keep current image</small>
      </div>

      <div class="mb-3">
        <label for="textarea" class="form-label">Description</label>
        <textarea name="textarea" id="textarea" class="form-control" rows="5" required><?= esc($post['textarea']) ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
      <a href="<?= base_url('posts_listing') ?>" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>

