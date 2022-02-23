<header id="portada" class="portada">
	<h1 class="portadaH1">
		<picture>
			<source media="(max-width: 450px)" srcset="images/portada-mobile.jpg">
			<img src="images/portada-desktop.jpg" alt="<?=$general['title'];?>" class="img-fluid">
		</picture>
	</h1>
	<div class="row justify-content-center boxInfo">
		<?php foreach ($evento as $eventoItem) { ?>
			<div class="col-sm-4 col-6">
				<div class="gridInfo cross-center">
					<svg class="svg-icon"><use href="images/icons.svg#<?=$eventoItem['imagen'];?>"/></svg>
					<p class="infoP"><?=$eventoItem['descripcion'];?></p>
				</div><!-- gridInfo -->
			</div><!-- col -->	
		<?php } ?>
	</div><!-- row -->
</header>