<?= view('Frontend/frontend_partials/header', ['title' => 'Gallery', 'headers' => isset($headers) ? $headers : []]) ?>




<section class="hero-wrap hero-wrap-2" style="background-image:url('<?php echo base_url('FontendAssets/images/bg_2.jpg'); ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Gallery</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
<?php
        if (!empty($gallery)): 
        foreach ($gallery as $item):
        ?>


            <div class="col-md-4 ftco-animate">
                <div class="work mb-4 img d-flex align-items-end" style="background-image: url(<?php echo base_url('uploads/gallery/' . $item['image']); ?>);">
           <a href="<?php echo base_url('uploads/gallery/' . $item['image']); ?>" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="fa fa-expand"></span>
							</a>
                    <div class="desc w-100 px-4">
                        <div class="text w-100 mb-3">
                            	<span><?php echo $item['animal_type']; ?></span>
									<h2><a href="work-single.html"> <?php echo $item['breed_name']; ?></a></h2>
                        </div>
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