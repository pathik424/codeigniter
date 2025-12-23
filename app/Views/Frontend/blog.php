<?= view('Frontend/frontend_partials/header', ['title' => 'Blog', 'headers' => isset($headers) ? $headers : []]) ?>


   <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image:url('<?php echo base_url('FontendAssets/images/bg_2.jpg'); ?>');"  data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
						<?php if (!empty($posts)): ?>
				<?php foreach ($posts as $post): 

					//print_r($post); ?>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
          
			  	<a href="<?= base_url('post/' . $post['post_id']) ?>" class="block-20 rounded" style="background-image: url('<?php echo $post['image'] ? base_url('uploads/posts/' . $post['image']) : base_url('FontendAssets/images/image_1.jpg'); ?>');">
							</a>
              <div class="text p-4">
              	<div class="meta mb-2">
                  <div>
					<a href="#"> <?= date('F d, Y', strtotime($post['created_at'])) ?></a>
				  </div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="<?= base_url('post/' . $post['post_id']) ?>"><?= esc($post['title']) ?></a></h3>

              </div>
            </div>
          </div>

		  <?php endforeach; ?>
		  	<?php else: ?>
				<div class="col-12 text-center">
					<p>No posts available.</p>
				</div>
			<?php endif; ?>
        </div>
      </div>
    </section>

<?php echo view('Frontend/frontend_partials/footer'); ?>