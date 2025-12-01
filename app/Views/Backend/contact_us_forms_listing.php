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

<?= view('Backend/backend_partials/footer') ?>