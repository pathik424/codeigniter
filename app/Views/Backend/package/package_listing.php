<?= view('Backend/backend_partials/header', ['title' => 'Packages']) ?>

<main class="main users chart-page" id="skip-target">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h3>Packages</h3>
            <a href="<?= base_url('add_new_package') ?>" class="btn btn-primary">
                <i class='bx bx-plus'></i> Add New Package
            </a>
        </div>

        <?php if (session()->getFlashdata('message')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <?php if (!empty($packages)): ?>
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Package Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Services</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($packages as $package): ?>
                        <tr>
                            <td><?= esc($package['id']) ?></td>
                            <td><?= esc($package['package_name']) ?></td>
                            <td>$<?= number_format($package['package_price'], 2) ?></td>
                            <td>
                                <?php if (!empty($package['package_image'])): ?>
                                    <img src="<?= base_url('uploads/packages/' . esc($package['package_image'])) ?>" 
                                         alt="Package" style="max-width: 60px; height: 60px; object-fit: cover; border-radius: 4px;">
                                <?php else: ?>
                                    <span class="badge bg-secondary">No Image</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php 
                                $services = is_string($package['package_services']) 
                                    ? json_decode($package['package_services'], true) 
                                    : $package['package_services'];
                                if (is_array($services) && !empty($services)):
                                ?>
                                    <ul style="margin: 0; padding-left: 20px;">
                                        <?php foreach (array_slice($services, 0, 3) as $service): ?>
                                            <li><?= esc($service) ?></li>
                                        <?php endforeach; ?>
                                        <?php if (count($services) > 3): ?>
                                            <li><em>+<?= count($services) - 3 ?> more</em></li>
                                        <?php endif; ?>
                                    </ul>
                                <?php else: ?>
                                    <span class="text-muted">No services</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('edit_package/' . $package['id']) ?>" class="btn btn-sm btn-warning">
                                    <i class='bx bx-edit'></i> Edit
                                </a>
                                <a href="<?= base_url('delete_package/' . $package['id']) ?>" class="btn btn-sm btn-danger" 
                                   onclick="return confirm('Are you sure?');">
                                    <i class='bx bx-trash'></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-info">
                No packages found. <a href="<?= base_url('add_new_package') ?>" class="alert-link">Create one now</a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?= view('Backend/backend_partials/footer') ?>
