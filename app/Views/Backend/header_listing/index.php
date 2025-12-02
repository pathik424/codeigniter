<?= view('Backend/backend_partials/header', ['title' => 'All Headers']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="main-title">Headers</h2>
      <a href="<?= base_url('add_new_header') ?>" class="btn btn-primary">Add a Header</a>
    </div>

    <?php if (session()->getFlashdata('message')): ?>
      <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>URL</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($headers as $h): ?>
            <tr>
              <td><?= esc($h['id']) ?></td>
              <td><?= esc($h['header_title']) ?></td>
              <td>
                <a href="<?= esc($h['header_url']) ?>" target="_blank"><?= esc($h['header_url']) ?></a>
              </td>
              <td>
                <?php if ($h['is_active']): ?>
                  <a href="<?= base_url('header/toggle/' . $h['id']) ?>" class="btn btn-success btn-sm">Active</a>
                <?php else: ?>
                  <a href="<?= base_url('header/toggle/' . $h['id']) ?>" class="btn btn-danger btn-sm">Inactive</a>
                <?php endif; ?>
              </td>
              <td>
                <a href="<?= base_url('edit_header/' . $h['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= base_url('delete_header/' . $h['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this header?');">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>