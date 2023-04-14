<section id="content" class="inner-pages">
<div class="row">
    <h1>Permit Renderings</h1>
	<p>More jurisdictions are now requiring a Rendering attached with the Permit Application. At Renderings Plus, we create easy to understand Renderings for all Jurisdictions. We clearly illustrate the projected project and take the guessing out of ‘plan reading’ done by jurisdictions. With our Photo Realistic Renderings, jurisdictions will truly understand what the projected build is, therefore your application will potentially get approved faster.</p>
    <div id="gall1" class="gallery-container"> 
			<ul class="gallery clearfix" >
				<?php foreach ($gallery as $gall) {  if($gall["rel"] == "permit") { ?>
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