<?= view('Backend/backend_partials/header', ['title' => 'Add New Address']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h2 class="main-title">Add New Address</h2>

    
        <?php if (session()->getFlashdata('message')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
        <?php endif; ?>

    <form action="<?= base_url('store_address') ?>" method="post" class="mt-4">
      <div class="mb-3">
        <label for="store_address" class="form-label">Store Address</label>
        <input type="text" name="address" id="store_address" class="form-control" placeholder="e.g., 123 Main St" required>
      </div>

      <div class="mb-3">
        <label for="store_phone" class="form-label">Store Phone</label>
        <input type="tel" name="phone" id="store_phone" class="form-control" placeholder="e.g., (123) 456-7890" required>
      </div>

      <div class="mb-3">
        <label for="store_email" class="form-label">Store Email</label>
        <input type="email" name="email" id="store_email" class="form-control" placeholder="e.g., example@example.com" required>
      </div>

      <div class="mb-3">
        <label for="store_website" class="form-label">Store Website</label>
        <input type="url" name="website" id="store_website" class="form-control" placeholder="e.g., https://example.com" required>
      </div>

   

      <button type="submit" class="btn btn-primary">Save Address</button>
      <a href="<?= base_url('list_contact_us_forms') ?>" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>