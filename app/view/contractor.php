<section id="content" class="inner-pages">
<div class="row">
    <h1>Contractor Renderings</h1>
	<p>At Renderings Plus, we help Visualize and Market the projected work of Contractors. We clearly illustrate your projected work in a Photo Realistic Rendering, therefore your customers will easily understand your projected work. Simply, send us images of the project in its current state and we'll finish your projected work in a High Quality Photo Realistic Rendering. With our Renderings, you can take the Marketing of your projected work to a more Professional Level. </p>
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