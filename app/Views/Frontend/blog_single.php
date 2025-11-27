<?= view('Frontend/frontend_partials/header', ['title' => $post['title'], 'headers' => isset($headers) ? $headers : []]) ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('FontendAssets/images/bg_2.jpg'); ?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url('home') ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <p>
              <?php if ($post['image']): ?>
                <img src="<?= base_url('uploads/posts/' . $post['image']) ?>" alt="<?= esc($post['title']) ?>" class="img-fluid">
              <?php else: ?>
                <img src="<?= base_url('FontendAssets/images/image_1.jpg') ?>" alt="" class="img-fluid">
              <?php endif; ?>
            </p>
            <h2 class="mb-3"><?= esc($post['title']) ?></h2>
            <div class="meta mb-3">
              <span class="mr-3"><i class="fa fa-calendar"></i> <?= date('F d, Y', strtotime($post['created_at'])) ?></span>
              <span><i class="fa fa-user"></i> <?= esc($post['author_name']) ?></span>
            </div>
            <div class="post-content">
              <?= nl2br(esc($post['textarea'])) ?>
            </div>
            
          </div> <!-- .col-md-8 -->
          
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <?php foreach ($recent_posts as $recent): ?>
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(<?= $recent['image'] ? base_url('uploads/posts/' . $recent['image']) : base_url('FontendAssets/images/image_1.jpg') ?>);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="<?= base_url('post/' . $recent['post_id']) ?>"><?= esc($recent['title']) ?></a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> <?= date('M d, Y', strtotime($recent['created_at'])) ?></a></div>
                      <div><a href="#"><span class="icon-person"></span> <?= esc($recent['author_name']) ?></a></div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

        </div>
      </div>
    </section>

<?= view('Frontend/frontend_partials/footer') ?>

