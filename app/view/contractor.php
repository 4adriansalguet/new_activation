<section id="content" class="inner-pages">
<div class="row">
    <h1>Contractor Renderings</h1>
    <p>Information coming soon</p>
	<p>At Renderings Plus, we specialize in creating Renderings for the Commercial Real Estate Market. We offer a
			comprehensive Marketing Campaign which includes our upscale Elevation Renderings, Interior Renderings, and
			Floorplan Renderings. Whether built or unbuilt, your commercial projects will come to life. Catch the hold
			the attention of potential customers as well as your investors. We have done countless commercial projects
			from five star resorts to large multi family complexes and everything in between. Your clients will love
			your new Photo Realistic Renderings for all commercial projects.</p>
    <div id="gall1" class="gallery-container"> 
			<ul class="gallery clearfix" >
				<?php foreach ($gallery as $gall) {  if($gall["rel"] == "contractor") { ?>
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