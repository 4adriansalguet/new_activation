<section id="content" class="inner-pages">
<div class="row">
    <h1>Interior Renderings</h1>
	<p>At Renderings Plus, we specialize in creating upscale Interior Renderings. Show clients what each Key Space of the projected home is going to be when built. We pay close attention to every detail in the Rendering, which results in a Superior Interior Rendering. We highlight all the Furnishings and all the finishes of your projected homes with superior lighting techniques. With our Photo Realistic Renderings, you’ll be able capture and hold the attention of potential home buyers.</p>
    <div id="gall1" class="gallery-container"> 
			<ul class="gallery clearfix" >
				<?php foreach ($gallery as $gall) {  if($gall["rel"] == "interior") { ?>
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