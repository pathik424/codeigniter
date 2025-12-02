<?= view('Backend/backend_partials/header', ['title' => 'All Posts']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="main-title">All Client Feedbacks</h2>
      <a href="<?= base_url('add_new_client_feedback') ?>" class="btn btn-primary">Add Client Feedback</a>
    </div>

    <?php if (session()->getFlashdata('message')): ?>
      <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
             <th>Client Profile Image</th>
            <th>Client Name</th>
            <th>Client Position</th>
            <th>Client Feedback</th>
            <th>Created At</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($feedbacks as $feedback): ?>
            <tr>
              <td><?= esc($feedback['feedback_id']) ?></td>
              <td>
                <?php if ($feedback['client_profile_image']): ?>
                  <img src="<?= base_url('uploads/feedbacks/' . $feedback['client_profile_image']) ?>" alt="Client Profile Image" style="width: 60px; height: 60px; object-fit: cover;">
                <?php else: ?>
                  <span class="text-muted">No Image</span>
                <?php endif; ?>
              </td>
              <td><?= esc($feedback['client_name']) ?></td>
              <td><?= esc($feedback['client_position']) ?></td>
              <td><?= substr(esc($feedback['client_feedback']), 0, 20) ?>...</td>
                <td><?= esc(date('Y-m-d H:i', strtotime($feedback['created_at']))) ?></td>
              <td>
                <a href="<?= base_url('edit_client_feedback/' . $feedback['feedback_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= base_url('delete_client_feedback/' . $feedback['feedback_id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this client feedback?');">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>

