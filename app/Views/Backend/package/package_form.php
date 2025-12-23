<?= view('Backend/backend_partials/header', ['title' => isset($package) ? 'Edit Package' : 'Add Package']) ?>

<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h3><?= isset($package) ? 'Edit Package' : 'Add New Package' ?></h3>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <form method="post" action="<?= isset($package) ? base_url('packages/' . $package['id'] . '/update') : base_url('store_package') ?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <!-- Package Name -->
            <div class="input-box">
                <label>Package Name</label>
                <input type="text" class="form-control" name="package_name" placeholder="Enter package name" 
                       value="<?= esc($package['package_name'] ?? old('package_name')) ?>" required>
                <span class="icon"><i class='bx bx-package'></i></span>
            </div>

            <!-- Package Price -->
            <div class="input-box">
                <label>Package Price</label>
                <input type="number" step="0.01" class="form-control" name="package_price" placeholder="Enter price" 
                       value="<?= esc($package['package_price'] ?? old('package_price')) ?>" required>
                <span class="icon"><i class='bx bx-dollar'></i></span>
            </div>

            <!-- Package Image -->
            <div class="input-box">
                <label>Package Image</label>
                <?php if (isset($package) && !empty($package['package_image'])): ?>
                    <div style="margin-bottom: 10px;">
                        <img src="<?= base_url('uploads/packages/' . esc($package['package_image'])) ?>" 
                             alt="Package Image" style="max-width: 150px; height: auto; border-radius: 4px;">
                    </div>
                <?php endif; ?>
                <input type="file" class="form-control" name="package_image" accept="image/*">
                <span class="icon"><i class='bx bx-image'></i></span>
            </div>

            <!-- Dynamic Services Section -->
            <div class="services-section" style="border: 1px solid #ddd; padding: 20px; border-radius: 4px; margin: 20px 0;">
                <label style="font-weight: bold; font-size: 16px; display: block; margin-bottom: 15px;">
                    Package Services
                </label>

                <div id="services-container">
                    <?php 
                    $services = isset($package) && is_array($package['package_services']) ? $package['package_services'] : [];
                    if (empty($services)) {
                        $services = ['']; // Show at least one empty field
                    }
                    foreach ($services as $index => $service):
                    ?>
                        <div class="service-item" style="display: flex; gap: 10px; margin-bottom: 10px; align-items: center;">
                            <input type="text" class="form-control" name="package_services[]" 
                                   placeholder="Enter service (e.g., Free Consultation, 24/7 Support)" 
                                   value="<?= esc($service) ?>" style="flex: 1;">
                            <button type="button" class="btn btn-danger btn-sm remove-service" style="padding: 8px 12px;">
                                <i class='bx bx-trash'></i> Remove
                            </button>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Add Service Button -->
                <button type="button" class="btn btn-success" id="add-service-btn" style="margin-top: 10px;">
                    <i class='bx bx-plus'></i> Add Service
                </button>
            </div>

            <!-- Submit Buttons -->
            <div class="d-flex gap-2 justify-content-center" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">
                    <i class='bx bx-save'></i> <?= isset($package) ? 'Update Package' : 'Create Package' ?>
                </button>
                <a href="<?= base_url('packages_listing') ?>" class="btn btn-secondary">
                    <i class='bx bx-arrow-back'></i> Cancel
                </a>
            </div>
        </form>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const serviceContainer = document.getElementById('services-container');
    const addServiceBtn = document.getElementById('add-service-btn');

    // Add new service field
    addServiceBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const serviceItem = document.createElement('div');
        serviceItem.className = 'service-item';
        serviceItem.style.cssText = 'display: flex; gap: 10px; margin-bottom: 10px; align-items: center;';
        serviceItem.innerHTML = `
            <input type="text" class="form-control" name="package_services[]" 
                   placeholder="Enter service (e.g., Free Consultation, 24/7 Support)" style="flex: 1;">
            <button type="button" class="btn btn-danger btn-sm remove-service" style="padding: 8px 12px;">
                <i class='bx bx-trash'></i> Remove
            </button>
        `;
        serviceContainer.appendChild(serviceItem);

        // Add remove listener to new element
        serviceItem.querySelector('.remove-service').addEventListener('click', function(e) {
            e.preventDefault();
            serviceItem.remove();
        });
    });

    // Remove service field
    document.querySelectorAll('.remove-service').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            this.closest('.service-item').remove();
        });
    });
});
</script>

<?= view('Backend/backend_partials/footer') ?>
