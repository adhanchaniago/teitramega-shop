<section class="section gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<div class="categories-wrapper white-bg">
						<h3 class="block-title">Kategori Produk</h3>
						<ul class="vertical-menu">
							<?php foreach ($kategori as $key => $value): ?>
								<li <?php if ($value->status == 'yes'): ?> class="dropdown" <?php endif ?>>	<a <?php if ($value->status == 'yes'): ?> class="dropdown-toggle" data-toggle="dropdown" <?php endif ?>	href="<?php if ($value->status == 'no'): ?>	<?php echo base_url('kategori/'.$value->slug) ?> <?php else: ?>	# <?php endif ?>" role="button">
									<?php echo $value->nama ?><?php if ($value->status == 'yes'): ?><i class="caret-right fa fa-angle-right"></i><?php endif ?>
								</a>
								<?php if ($value->status == 'yes'): ?>
								<ul class="dropdown-menu">
								<?php endif ?>
									<?php if ($value->status == 'yes'): ?>
										<?php foreach ($this->mhome->get_sub_kategori($value->id) as $key => $values): ?>
											<li><a href="<?php echo base_url('sub-kategori/'.$values->slug) ?>"> <?php echo $values->nama ?></a></li>
										<?php endforeach ?>
										
									<?php endif ?>
							<?php if ($value->status == 'yes'): ?>
								</ul>
							<?php endif ?>
							</li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
				<div class="col-md-9 col-sm-8">
					<div class="touch-slider owl-carousel" data-slider-pagination="true">
						<div class="item">
							<a href="category.html"><img src="assets/img/touch-slider/img1.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="category.html"><img src="assets/img/touch-slider/img2.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="category.html"><img src="assets/img/touch-slider/img3.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<?php foreach ($kategori as $key => $value): ?>

	<section class="section">
		<div class="container">
			<h1 class="section-title"><?php echo $value->nama ?> Products</h1>
			<hr class="lines">
			<div class="row">
				<div class="col-md-12">
					<div id="new-products-<?php echo $value->id ?>" class="owl-carousel">

						<?php foreach ($this->mhome->get_produk_kategori($value->id) as $key => $values): ?>
						
						<div class="item" style="padding: 3px">
							<div class="shop-product">
								<div class="product-box">
									<a href="#"><img src="<?php base_url('/') ?>assets/img/feature-products/<?php echo $values->foto ?> " alt=""></a>
									<div class="cart-overlay">
									</div>
									<span class="sticker new"><strong><?php echo $values->discount ?> %</strong></span>
									<div class="actions">
										<div class="add-to-links">
											<a href="#" class="btn-cart"><i class="icon-basket"></i></a>
											<a href="#" class="btn-wish"><i class="icon-heart"></i></a>
											<a class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
										</div>
									</div>
								</div>
								<div class="product-info">
									<h4 class="product-title"><a href="<?php echo base_url('detail/'.$values->slug) ?>"><?php echo $values->nama ?></a></h4>
									<div class="align-items">
										<div class="pull-left">
											<span class="price">IDR <?php echo number_format($values->harga,0)  ?></span>
										</div>
										<div class="pull-right">
											<div class="reviews-icon">
												<i class="i-color fa fa-star"></i>
												<i class="i-color fa fa-star"></i>
												<i class="i-color fa fa-star"></i>
												<i class="i-color fa fa-star"></i>
												<i class="i-color fa fa-star"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php endforeach ?>

	<div class="support section">
		<div class="container">
			<div class="row">
				<div class="support-inner">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="row-normal clearfix">
							<div class="support-info">
								<div class="info-title">
									<i class="icon-plane"></i>
									Gratis Ongkir Seluruh Dunia
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="row-normal clearfix">
							<div class="support-info">
								<div class="info-title">
									<i class="icon-earphones-alt"></i>
									Layanan Pelanggan 24 Jam
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="row-normal clearfix">
							<div class="support-info">
								<div class="info-title">
									<i class="icon-refresh"></i>
									Kebijakan Pengembalian Mudah
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	