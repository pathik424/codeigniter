<?= view('Backend/backend_partials/header', ['title' => 'SMTP Settings']) ?>

<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h2 class="main-title">SMTP Settings</h2>

    <?php if (session()->getFlashdata('message')): ?>
      <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('smtp_settings/save') ?>" method="post" class="mt-4">
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="smtp_host" class="form-label">SMTP Host</label>
            <input type="text" name="smtp_host" id="smtp_host" class="form-control" 
                   value="<?= isset($settings['smtp_host']) ? esc($settings['smtp_host']) : '' ?>" 
                   placeholder="e.g., smtp.gmail.com" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="smtp_port" class="form-label">SMTP Port</label>
            <input type="number" name="smtp_port" id="smtp_port" class="form-control" 
                   value="<?= isset($settings['smtp_port']) ? esc($settings['smtp_port']) : '587' ?>" 
                   placeholder="e.g., 587" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="smtp_user" class="form-label">SMTP Username</label>
            <input type="text" name="smtp_user" id="smtp_user" class="form-control" 
                   value="<?= isset($settings['smtp_user']) ? esc($settings['smtp_user']) : '' ?>" 
                   placeholder="e.g., your-email@gmail.com" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="smtp_pass" class="form-label">SMTP Password</label>
            <input type="password" name="smtp_pass" id="smtp_pass" class="form-control" 
                   value="<?= isset($settings['smtp_pass']) ? esc($settings['smtp_pass']) : '' ?>" 
                   placeholder="App Password" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="smtp_crypto" class="form-label">Encryption</label>
            <select name="smtp_crypto" id="smtp_crypto" class="form-control" required>
              <option value="tls" <?= (isset($settings['smtp_crypto']) && $settings['smtp_crypto'] == 'tls') ? 'selected' : '' ?>>TLS</option>
              <option value="ssl" <?= (isset($settings['smtp_crypto']) && $settings['smtp_crypto'] == 'ssl') ? 'selected' : '' ?>>SSL</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="from_name" class="form-label">From Name</label>
            <input type="text" name="from_name" id="from_name" class="form-control" 
                   value="<?= isset($settings['from_name']) ? esc($settings['from_name']) : '' ?>" 
                   placeholder="e.g., Pet Sitting" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="from_email" class="form-label">From Email</label>
            <input type="email" name="from_email" id="from_email" class="form-control" 
                   value="<?= isset($settings['from_email']) ? esc($settings['from_email']) : '' ?>" 
                   placeholder="e.g., noreply@yourdomain.com" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="admin_emails" class="form-label">Admin Emails (comma separated for multiple)</label>
            <input type="text" name="admin_emails" id="admin_emails" class="form-control" 
                   value="<?= isset($settings['admin_emails']) ? esc($settings['admin_emails']) : '' ?>" 
                   placeholder="e.g., admin1@example.com, admin2@example.com" required>
            <small class="text-muted">Separate multiple emails with commas</small>
          </div>
        </div>
      </div>

      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Save Settings</button>
        <a href="<?= base_url('smtp_settings/test') ?>" class="btn btn-secondary">Send Test Email</a>
      </div>
    </form>
  </div>
</main>

<?= view('Backend/backend_partials/footer') ?>

