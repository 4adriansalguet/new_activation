<section id="content" class="inner-pages">
<div class="row">
    <h1>Virtual staging Renderings</h1>
    <p>At Renderings Plus, we work with Real Estate Firms and Real Estate Agents to help sell listings faster with our Virtual Staging service. We can turn any empty space to a Key Space of the home. We only use the most realistic 3D models, which results in an upscale Photo Realistic image. With many furniture styles to choose from, show your clients what the Key Space in the home can be. Simply send us images of any space and we”ll transform them into a fully Customized Key Space of the home. We can help unlock the Full Potential of your listings and help sell your client’s home faster.</p>
    <div id="gall1" class="gallery-container"> 
			<ul class="gallery clearfix" >
				<?php foreach ($gallery as $gall) {  if($gall["rel"] == "virtual") { ?>
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