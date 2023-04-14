<section id="content" class="inner-pages">
<div class="row">
    <h1>Floorpan Renderings</h1>
	<p>At Renderings Plus, we create superior Floorplan Renderings that show the exact layout of the projected home. Clients will clearly understand the complete layout of the projected home. We offer color 2D floorplans as well as our exclusive 3D floorplans. Simply send us the CAD drawings for a projected home and leave the rest to us. We also offer these floorplans for already built homes.  </p>
    <div id="gall1" class="gallery-container"> 
			<ul class="gallery clearfix" >
				<?php foreach ($gallery as $gall) {  if($gall["rel"] == "floorplan") { ?>
				<li>
					
					<a data-fancybox-group="<?php echo $gall["rel"]?>" class="thumbnail fancy" title="<?php echo $gall["alt"]?>" href="public/images/gallery/<?php echo $gall["src"]?>.jpg">
						<img class="img-responsive" src="public/images/gallery/<?php echo $gall["src"];?>.jpg" alt="<?php echo $gall["alt"];?>">
					</a>
				</li>
				<?php }} ?>
			</ul>
			<div class="page_navigation"></div>
		</div>
    </div>
</section>