<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        form {
            max-width: 600px;
            margin: auto;
        }
        input, textarea, select {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
        }
        .btn {
            background: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Add Dog Food Product</h2>
    <?= session()->getFlashdata('message') ?>

    <form action="<?= base_url('/dogfoodproduct/store') ?>" method="post" enctype="multipart/form-data">
        <label>Product Name</label>
        <input type="text" name="product_name" required>

        <label>Product Price</label>
        <input type="number" step="0.01" name="product_price" required>

        <label>Product Stock</label>
        <input type="number" name="product_stock" required>

        <label>Product Image</label>
        <input type="file" name="product_image" required>

        <label>Product Description</label>
        <textarea name="product_description" required></textarea>

        <button class="btn" type="submit">Add Product</button>
    </form>
</body>
</html>
