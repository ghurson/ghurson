<div class="hero">
	<div class="bg-img"></div>
	<div class="spacer-xlarge"></div>
	<div class="spacer-xlarge"></div>
	<div class="columns text-center">
		<div class="interior-page"><h1>Cloud Automation</h1>
			<h1 class="big">reimagined</h1>
			<h1 class="thick">for a unified, multi-cloud world</h1>
			<div class="spacer-large"></div>
			<h3 class="green-text">Learn How it Works</h3>
			<div class="columns text-center">
                <a href="#section1"><img class="hero-circle" src="<?php print NV_IMG ?>/greenarrow.svg"></a>
			</div>
			<div class="spacer-xlarge"></div>
			<div class="spacer-xlarge"></div>
			<div class="spacer-xlarge"></div>
			<div class="spacer-xlarge"></div>
			<div class="spacer-xlarge"></div>
		</div>
	</div>

	<img  class="hide-for-medium-down" src="<?php print NV_IMG ?>/dotted.png">
    <div class="dvc-gartner-img">
    <?php
    $images = get_field('images', 'option');
    foreach($images as $image):?>
        <img src="<?php print $image['url'] ?>" alt="" />
    <?php endforeach; ?>
    </div>
</div>

<!----------------------------------------END HERO---------------------------------------->
<section class="dark home-animation"id="step1init">
	<div class="bg-tri hide-for-medium-down"></div>
	<div class="animation-container tween first">
		<div class="row">
			<div class="columns server">
				<h1 id="step1">Auto-discover</h1>
				<p>Real-time discovery of cloud resources, tag data, and state changes…wherever, whenever and however they come about…using cloud native API’s and agentless data harvesting.</p>
                <div class="show-for-medium-down text-center img-holder">
                    <img class="server first show-for-medium-down" src="<?php print NV_IMG ?>/step1.png">
                </div>

				<div class="z-fix hide-for-medium-down">
					<div class="panel">
						<div class="scanner"></div>
						<ul class="something">
						</ul>
					</div>
				</div>
				<div class="tween-box hide-for-medium-down">
						<img id="yellow1" class="server tween-yellow" src="<?php print NV_IMG ?>/server-gray.svg">
						<img id="lid1"class="top" src="<?php print NV_IMG ?>/yellowtop.svg">
						<img id="blue1" class="server tween-blue medium" src="<?php print NV_IMG ?>/server-gray.svg">
						<img id="lid2"class="top" src="<?php print NV_IMG ?>/yellowtop.svg">
						<img id="grey1" class="server tween-gray medium" src="<?php print NV_IMG ?>/server-gray.svg">
						<img id="lid3"class="top" src="<?php print NV_IMG ?>/redtop.svg">
						<img id="grey2" class="server tween-gray small" src="<?php print NV_IMG ?>/server-gray.svg">
						<img id="lid4"class="top" src="<?php print NV_IMG ?>/redtop.svg">
						<img id="grey3" class="server tween-gray small" src="<?php print NV_IMG ?>/server-gray.svg">
						<img id="lid5"class="top" src="<?php print NV_IMG ?>/yellowtop.svg">
						<img id="grey4" class="server tween-gray" src="<?php print NV_IMG ?>/server-gray.svg">
						<img id="lid6"class="top" src="<?php print NV_IMG ?>/redtop.svg">
						<img id="grey5" class="server tween-gray" src="<?php print NV_IMG ?>/server-gray.svg">
						<img id="lid7"class="top" src="<?php print NV_IMG ?>/bluetop.svg">
						<img id="grey6" class="server tween-gray medium" src="<?php print NV_IMG ?>/server-gray.svg">
						<img id="lid8"class="top" src="<?php print NV_IMG ?>/bluetop.svg">
						<img id="grey7" class="server tween-gray small" src="<?php print NV_IMG ?>/server-gray.svg">
						<img id="lid9"class="top" src="<?php print NV_IMG ?>/bluetop.svg">
						<img class="plane hide-for-medium-down" src="<?php print NV_IMG ?>/plane-bg.svg">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="light home-animation" id="step2init">
	<div class="bg-dot hide-for-medium-down"></div>
	<div class="animation-container tween second">
		<div class="spacer-large"></div>
		<div class="spacer-large"></div>
		<div class="row unify"  id="step2">
			<div class="columns">
				<h1>Unify </h1>
				<p>Unification engine abstracts and normalizes different cloud taxonomy into a consolidated data model with standardized lifecycle control of cloud resources.</p>
                <div class="show-for-medium-down text-center img-holder">
                    <img class="server second show-for-medium-down" src="<?php print NV_IMG ?>/Step-2-analyze-bg.png">
                </div>

				<img class="plane hide-for-medium-down" src="<?php print NV_IMG ?>/plane-bg.svg">
				<img class="logo-images hide-for-medium-down" src="<?php print NV_IMG ?>/logos.png">
				<div class="tween-box duplicate hide-for-medium-down">
					<img id="redb" class="server tween-gray" src="<?php print NV_IMG ?>/server-red.svg">
					<img id="yellowb" class="server tween-gray" src="<?php print NV_IMG ?>/server-yellow.svg">
					<img id="blueb" class="server tween-gray" src="<?php print NV_IMG ?>/server-blue.svg">
					<img id="redm" class="server tween-blue medium" src="<?php print NV_IMG ?>/server-red.svg">
					<img id="yellowm" class="server tween-gray medium" src="<?php print NV_IMG ?>/server-yellow.svg">
					<img id="bluem" class="server tween-gray medium" src="<?php print NV_IMG ?>/server-blue.svg">
					<img id="reds" class="server tween-gray small" src="<?php print NV_IMG ?>/server-red.svg">
					<img id="yellows" class="server tween-gray small" src="<?php print NV_IMG ?>/server-yellow.svg">
					<img id="blues" class="server tween-gray small" src="<?php print NV_IMG ?>/server-blue.svg">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="dark home-animation" id="step4">
	<div class="bg-tri hide-for-medium-down"></div>
	<div class="animation-container">
		<div class="row">
			<div class="columns">
				<h1 id="step5">Analyze </h1>
				<p>An intelligent system analyzes the real-time, unified data to identify any infrastructure changes including those impacting security, performance, and cost.</p>

			</div>
		</div>
        <div class="show-for-medium-down text-center img-holder">
            <img class="server third show-for-medium-down" src="<?php print NV_IMG ?>/static-3-bg1.png">
        </div>
        <img id="step6" class="server third hide-for-medium-down" src="<?php print NV_IMG ?>/step3-bg-old.png">

	</div>
</section>
<section class="light home-animation" id="last">
	<div class="bg-dot hide-for-medium-down"></div>
	<div class="animation-container">
		<div class="row">
			<div class="columns">
				<h1>Event Driven Automation </h1>
				<p> Triggered by state change, DivvyCloud’s flexible plugin and policy engine allows customers to create automated actions to manage and self-heal cloud infrastructure.</p>
                <div class="show-for-medium-down text-center img-holder">
                    <img class="server second show-for-medium-down" src="<?php print NV_IMG ?>/step4.png">
                </div>


			</div>
		</div>

		<div class="robots">
			<div class="serverbg">
				<img class="hide-for-medium-down" src="<?php print NV_IMG ?>/serverbg.png">
			</div>
			<div class="reapers">
				<img class="left hide-for-medium-down" src="<?php print NV_IMG ?>/reaper.png">
				<img class="right hide-for-medium-down" src="<?php print NV_IMG ?>/reaper.png">
			</div>
			<div class="cop">
				<div id="cop" class="body">
					<img class="upper hide-for-medium-down" src="<?php print NV_IMG ?>/cop-body.svg">
					<img class="arm left hide-for-medium-down" src="<?php print NV_IMG ?>/cop-arm.svg">
					<img class="lower hide-for-medium-down" src="<?php print NV_IMG ?>/cop-lowerbody.svg">
					<img class="shield hide-for-medium-down" src="<?php print NV_IMG ?>/shield.svg">
				</div>
				<img class="shadow hide-for-medium-down" src="<?php print NV_IMG ?>/shadow.svg">
			</div>
			<div  class="nerd">
				<div id="nerd" class="body">
					<img class="nerd hide-for-medium-down" src="<?php print NV_IMG ?>/nerd.svg">
					<img class="arm left hide-for-medium-down" src="<?php print NV_IMG ?>/nerd-arm.svg">
					<img class="shadow hide-for-medium-down" src="<?php print NV_IMG ?>/shadow.svg">
				</div>
				<img id="server" class="server hide-for-medium-down" src="<?php print NV_IMG ?>/server.svg">
			</div>
			<div id="docter" class="docter">
				<img class="arm left hide-for-medium-down" src="<?php print NV_IMG ?>/doctor-arm.svg">
				<img class="body hide-for-medium-down" src="<?php print NV_IMG ?>/doctor-body.svg">
				<img class="shadow hide-for-medium-down" src="<?php print NV_IMG ?>/shadow.svg">
			</div>
		</div>
	</div>
</section>









