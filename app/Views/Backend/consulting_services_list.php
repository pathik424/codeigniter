<?= view('Backend/backend_partials/header', ['title' => 'All Posts']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="main-title">All Consulting Services</h2>
    </div>

    <?php if (session()->getFlashdata('message')): ?>
      <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Service</th>
            <th>name</th>
            <th>Vehicle Numbner</th>
            <th>Appointment Date</th>
            <th>Message</th>
            <th>Created At</th>
            <th>updated At</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pathik as $post): ?>
            <tr>
              <td><?= esc($post['id']) ?></td>
              <td><?= esc($post['service']) ?></td>
              <td><?= esc($post['name']) ?></td>
              <td><?= esc($post['vehicle_number']) ?></td>
              <td><?= esc($post['appointment_date']) ?></td>
              <td><?= esc($post['message']) ?></td>
             
              <td><?= esc($post['created_at']) ?></td>
              <td><?= esc($post['updated_at']) ?></td>
              <td>
        
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>