<?= view('Backend/backend_partials/header', ['title' => 'All Posts']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="main-title">All Posts</h2>
      <a href="<?= base_url('add_new_post') ?>" class="btn btn-primary">Add Post</a>
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
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($posts as $post): ?>
            <tr>
              <td><?= esc($post['post_id']) ?></td>
              <td>
                <?php if ($post['image']): ?>
                  <img src="<?= base_url('uploads/posts/' . $post['image']) ?>" alt="Post Image" style="width: 60px; height: 60px; object-fit: cover;">
                <?php else: ?>
                  <span class="text-muted">No Image</span>
                <?php endif; ?>
              </td>
              <td><?= esc($post['title']) ?></td>
              <td><?= esc(substr($post['textarea'], 0, 50)) ?>...</td>
              <td><?= esc($post['created_at']) ?></td>
              <td>
                <a href="<?= base_url('edit_post/' . $post['post_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= base_url('delete_post/' . $post['post_id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this post?');">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>

