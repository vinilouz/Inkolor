<div id="content-nav" class="position-fixed list-group d-none d-lg-flex">
	<a class="list-group-item p-0" href="#header"></a>
	<a class="list-group-item p-0" href="#sec-2"></a>
	<a class="list-group-item p-0" href="#sec-3"></a>
	<a class="list-group-item p-0" href="#sec-4"></a>
	<a class="list-group-item p-0" href="#sec-5"></a>
	<a class="list-group-item p-0" href="#sec-6"></a>
	<a class="list-group-item p-0" href="#sec-7"></a>
</div>

<?php // Get field group
$topo = get_field('topo');?>

<section id="sec-1" class="content-topo" >

	<div class="container banner">
		<div class="row">
			<div class="col-12 col-md-4">
				<?php // Text fields from section 'topo'
				echo '<span class="text-scroll">'.$topo['topo_left']['sub_title'].'</span>';
				echo '<h2 class="text-banner text-dark">'.$topo['topo_left']['title'].'</h2>';
				echo '<div class="desc mt-3 mb-md-5">'.$topo['topo_left']['description'].'</div>';
				echo '<a class="mt-md-3 text-cta bg-primary"
					target="'.$topo['topo_left']['botao']['target'].'"
					href="'.$topo['topo_left']['botao']['url'].'">
						<span class="bg-white rounded-circle icon-arrow-down mr-4"></span>'
						.$topo['topo_left']['botao']['title']
					.'</a>';
				?>
			</div>
			<div class="col">
				<img src="<?php echo $topo['image']['url'];?>" alt="<?php echo $topo['image']['alt'];?>">
			</div>
		</div>
	</div>

	<div class="container desconto pb-4">
		<div class="row">
			<div class="col-12 col-lg-7">
				<div class="d-flex position-relative">
					<div class="circle d-none d-lg-flex">
						<span class="icon-medal"></span>
					</div>
					<div class="wrapper-text ml-lg-4 pl-lg-3 pt-lg-4">
						<?php
						echo '<span class="text-scroll text-primary">'.$topo['desconto']['sub_title'].'</span>';
						echo '<h2 class="text-titulo text-dark">'.$topo['desconto']['title'].'</h2>';
						echo '<div class="mt-3 text-texto">'.$topo['desconto']['description'].'</div>';?>
					</div>
					<span class="text-silhueta text-light">
						<?php echo $topo['desconto']['value'].'%'; ?>
					</span>
				</div>
			</div>
			<div class="col offset-xl-1">
				<?php // Check rows exists.
				if( $topo['lista'] ) {
					echo '<ul class="checklist mt-0 mt-lg-5">';
					foreach( $topo['lista'] as $row ) {
						echo '<li class="text-texto">';
							echo $row['texto'];
						echo '</li>';
					}
					echo '</ul>';
				}?>
			</div>
		</div>
	</div>

</section>

<?php // Get field group 'produtos'
$produtos = get_field('produtos');?>
<section id="sec-2" class="produtos">
	<img class="bg d-none d-lg-block" src="<?php echo $produtos['image']['url'];?>" alt="<?php echo $produtos['image']['alt'];?>">
	<div class="shape"></div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-6 pt-lg-5 mt-5">
				<div class="d-flex position-relative">
					<div class="wrapper-text">
						<?php
						echo '<span class="text-scroll text-warning">'.$produtos['txts']['sub_title'].'</span>';
						echo '<h2 class="text-titulo text-white">'.$produtos['txts']['title'].'</h2>';
						echo '<div class="mt-3 text-texto text-white">'.$produtos['txts']['description'].'</div>';
						?>
					</div>
					<span class="text-silhueta text-dark d-none d-lg-block">
						<?php echo $produtos['txts']['value'].'+'; ?>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $buyOn = get_field('compre_online'); ?>
<section id="sec-3" class="compre-online">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5">
				<div class="circle -min position-absolute">
					<span class="icon-buyon"></span>
				</div>
				<?php // Text fields from section 'topo'
				echo '<h2 class="text-titulo text-gradient">'.$buyOn['txts']['title'].'</h2>';
				echo '<div class="text-texto mt-2 mb-4">'.$buyOn['txts']['description'].'</div>';
				echo '<a class="mt-3 text-cta bg-primary"
					target="'.$buyOn['txts']['botao']['target'].'"
					href="'.$buyOn['txts']['botao']['url'].'">
						<span class="bg-white rounded-circle icon-buyon mr-4"></span>'
						.$buyOn['txts']['botao']['title']
					.'</a>';
				?>
			</div>
			<div class="col">
				<img class="phone position-absolute" src="<?php echo $buyOn['group_left']['image']['url'];?>" alt="<?php echo $buyOn['group_left']['image']['alt'];?>">
				<div class="box position-relative bg-primary rounded-circle float-right mt-5">
				<?php // Check rows exists.
				if( $buyOn['group_left']['lista'] ) {
					echo '<ul class="d-flex align-items-center flex-column justify-content-center">';
					foreach( $buyOn['group_left']['lista'] as $row ) {
						echo '<li class="text-sub-titulo text-white">';
							echo '<span>'.$row['item'].'</span>';
							echo '<img src="'.$row['icon']['url'].'" alt="'.$row['icon']['alt'].'">';
						echo '</li>';
					}
					echo '</ul>';
				}?>

				</div>
			</div>
		</div>
	</div>
</section>

<?php $infos = get_field('informacoes'); ?>
<section id="sec-4" class="infos">
	<div class="container">
		<div class="row position-relative">
			<div class="col order-2 order-lg-1">
				<img class="bg" src="<?php echo $infos['image']['url'];?>" alt="<?php echo $infos['image']['alt'];?>">
			</div>
			<div class="col-12 col-lg-5 offset-lg-7 order-1 order-lg-2">
				<div class="wrapper-text pt-4">
					<?php
					echo '<span class="text-scroll text-primary">'.$infos['txts']['sub_title'].'</span>';
					echo '<h2 class="text-titulo text-dark">'.$infos['txts']['title'].'</h2>';
					// Check rows exists.
					if( $infos['txts']['lista'] ) {
						echo '<ul class="checklist mt-4">';
						foreach( $infos['txts']['lista'] as $row ) {
							echo '<li class="text-texto">';
								echo $row['texto'];
							echo '</li>';
						}
						echo '</ul>';
					}?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $quality = get_field('qualidade'); ?>
<section id="sec-5" class="quality">
	<img class="bg d-none d-xl-block" src="<?php echo $quality['image']['url'];?>" alt="<?php echo $quality['image']['alt'];?>">
	<div class="container">
		<div class="row">
			<div class="col col-xl-7">
				<div class="d-flex position-relative">
					<div class="circle d-none d-lg-flex">
						<span class="icon-guard"></span>
					</div>
					<div class="wrapper-text pl-4 pt-4">
						<?php
						echo '<h2 class="text-titulo text-dark">'.$quality['txts']['title'].'</h2>';
						echo '<div class="mt-3 text-texto">'.$quality['txts']['description'].'</div>';
						if( $quality['qualidades'] ) {
							echo '<ul class="grid">';
							foreach( $quality['qualidades'] as $qualities ) {
								echo '<li class="text-texto font-weight-bold d-flex align-items-center">';
									echo '<img class="mr-3" src="'.$qualities['icon']['url'].'" alt="'.$qualities['icon']['alt'].'">';
									echo '<span>'.$qualities['item'].'</span>';
								echo '</li>';
							}
							echo '</ul>';
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $selos = get_field('certificados'); ?>
<section id="sec-6" class="certificados">
	<div class="container">
		<div class="row">
			<div class="col order-md-2 order-md-2 order-lg-1">
				<?php // Check Swiper exists.
				if( $selos['slide'] ) {
					echo '<div class="swiper-certificados">';
						echo '<div class="swiper-container">';
							echo '<div class="swiper-wrapper">';
								foreach( $selos['slide'] as $slide ) {
									echo '<div class="swiper-slide d-flex align-items-center justify-content-center">';
										echo '<img src="'.$slide['image']['url'].'" alt="'.$slide['image']['alt'].'">';
									echo '</div>';
								}
							echo '</div>';
						echo '</div>';
						// Add Arrows
						echo '<div class="swiper-button-next"></div>';
						echo '<div class="swiper-button-prev"></div>';
					echo '</div>';
				}?>
			</div>
			<div class="col-12 col-lg-6 offset-lg-1 order-md-1 order-lg-2">
				<div class="wrapper-text pt-5 mt-3">
					<?php
					echo '<span class="text-scroll text-info">'.$selos['txts']['sub_title'].'</span>';
					echo '<h2 class="text-titulo text-dark">'.$selos['txts']['title'].'</h2>';
					echo '<div class="mt-3 text-texto">'.$selos['txts']['description'].'</div>';?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $contato = get_field('contato'); ?>
<section id="sec-7" class="contato bg-light">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5">
				<div class="circle -min position-absolute">
					<span class="icon-plan"></span>
				</div>
				<?php // Text fields from section 'topo'
				echo '<h2 class="text-titulo text-dark">'.$contato['title'].'</h2>';
				echo '<div class="text-texto mt-2 mb-4">'.$contato['description'].'</div>';
				echo '<img class="bg d-none d-lg-block" src="'.$contato['image']['url'].'" alt="'.$contato['image']['alt'].'">';?>
			</div>
			<div class="col-12 col-lg-5 offset-lg-1">
				<?php echo do_shortcode('[contact-form-7 id="145" title="Contact form"]');?>
			</div>
		</div>
	</div>
</section>
