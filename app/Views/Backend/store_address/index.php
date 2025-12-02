<?= view('Backend/backend_partials/header', ['title' => 'All Posts']) ?>

<main class="main users chart-page" id="skip-target">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="main-title">All Contact Us Forms</h2>
        </div>

        <?php if (session()->getFlashdata('message')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email </th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Created At</th>
                        <th>updated At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contact_forms as $post): ?>
                        <tr>
                            <td><?= esc($post['id']) ?></td>
                            <td><?= esc($post['full_name']) ?></td>
                            <td><?= esc($post['email']) ?></td>
                            <td><?= esc(substr($post['subject'], 0, 20)) ?>...</td>
                            <td><?= esc(substr($post['message'], 0, 20)) ?>...</td>
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

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h2 class="main-title">Add New Address</h2>

    
        <?php if (session()->getFlashdata('message')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
        <?php endif; ?>

    <form action="<?= base_url('store_address') ?>" method="post" class="mt-4">
      <div class="mb-3">
        <label for="store_address" class="form-label">Store Address</label>
        <input type="text" name="address" id="store_address" class="form-control" placeholder="e.g., 123 Main St" value="<?= $store_address['address'] ?? '' ?>" required>
      </div>

      <div class="mb-3">
        <label for="store_phone" class="form-label">Store Phone</label>
        <input type="tel" name="phone" id="store_phone" class="form-control" placeholder="e.g., (123) 456-7890" value="<?= $store_address['phone'] ?? '' ?>" required>
      </div>

      <div class="mb-3">
        <label for="store_email" class="form-label">Store Email</label>
        <input type="email" name="email" id="store_email" class="form-control" placeholder="e.g., example@example.com" value="<?= $store_address['email'] ?? '' ?>" required>
      </div>

      <div class="mb-3">
        <label for="store_website" class="form-label">Store Website</label>
        <input type="url" name="website" id="store_website" class="form-control" placeholder="e.g., https://example.com" value="<?= $store_address['website'] ?? '' ?>" required>
      </div>

   

      <button type="submit" class="btn btn-primary">Save Address</button>
      <a href="<?= base_url('list_contact_us_forms') ?>" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>