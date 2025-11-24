
<?= view('Backend/backend_partials/header', ['title' => 'Home Admin']) ?>

    
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Dashboard</h2>
      </div>
    </main>
    <a href="<?= base_url('dogfoodproduct/create') ?>" class="add_my_product">Add Product</a>

<br>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $product): ?>
      <tr>
        <th scope="row"><?= esc($product['id']) ?></th>
        <td><?= esc($product['product_name']) ?></td>
        <td>₹<?= esc($product['product_price']) ?></td>
        <td><img src="<?= base_url('uploads/' . $product['product_image']) ?>" alt="" width="60"></td>
        <td>
          <?php if ($product['product_is_active']): ?>
            <a href="<?= base_url('dogfoodproduct/toggle/' . $product['id']) ?>" class="btn btn-success btn-sm">Active</a>
          <?php else: ?>
            <a href="<?= base_url('dogfoodproduct/toggle/' . $product['id']) ?>" class="btn btn-danger btn-sm">Inactive</a>
          <?php endif; ?>
        </td>
        <td>
          <a href="<?= base_url('dogfoodproduct/delete/' . $product['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this product?');">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>




    <?= view('Backend/backend_partials/footer') ?>


    <style>
      .add_my_product {
  background-color: #28a745; /* Green */
  color: white;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.add_my_product:hover {
  background-color: #218838;
  transform: scale(1.05);
}

.add_my_product:active {
  background-color: #1e7e34;
  transform: scale(0.98);
}

    </style>