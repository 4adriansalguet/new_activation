<section id="content" class="inner-pages">
<div class="row">
    <h1>Residential Renderings</h1>
	<p>At Renderings Plus, we specialize in creating Elevation Renderings for the Real Estate Market. With our award winning Renderings, show your clients the true projection of the final home build. You will have full control of each pixel therefore renderings can have different scenes, views from multiple perspectives, show different building materials, day or night scenes, and much more. With our Elevation Renderings, your unbuilt homes will come to life. We also make renderings for already built homes without the blueprints. With our Photo Realistic Elevation Renderings, you”ll be able to capture and hold the attention of potential home buyers. </p>
    <div id="gall1" class="gallery-container"> 
			<ul class="gallery clearfix" >
				<?php foreach ($gallery as $gall) {  if($gall["rel"] == "residential") { ?>
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