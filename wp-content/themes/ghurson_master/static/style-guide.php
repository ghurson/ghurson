<?php
\NV\Theme::get_header();
\NV\Theme::output_file_marker(__FILE__);

?>
<?php $page = get_post(27); echo $page->post_content?>

	<div class="row">
		<div class="large-12 columns">
			<div class="spacer-large"></div>
			<h1>Site Name: Style Guide</h1>
			<p><em>All content is displayed within content blocks: set up your spacing on these blocks so it remains consistent throughout the site. We've put in divider lines so the spacing is visible. </em></p>
			<div class="spacer-xlarge"></div>
		</div>
	</div>
	<div class="one-px-line"></div>

	<div class="row content-block">
		<div class="large-12 columns">
			<h1>Site colors:</h1>
			<div class="color-swatch navy">Navy</div>
			<div class="color-swatch blue">Blue</div>
			<div class="color-swatch light-blue">Light-blue</div>
			<div class="color-swatch gray">Gray</div>
			<div class="color-swatch gold">Gold</div>
			<div class="color-swatch sand">Sand</div>
			<div class="color-swatch beige">Beige</div>
			<div class="color-swatch light-beige">Light-beige</div>
		</div>
	</div>

	<div class="one-px-line"></div>

	<div class="row content-block">
		<div class="large-12 columns">
			<h1>Text Styles:</h1>
			<div class="one-px-line"></div>
			<h1>h1: used for XXX <small>this is small subtext inline with the title</small></h1>
			<h2>h2: used for XXX <small>this is small subtext inline with the title</small></h2>
			<h3>h3: used for XXX <small>this is small subtext inline with the title</small></h3>
			<h4>h4: used for XXX <small>this is small subtext inline with the title</small></h4>
			<h5>h5: used for XXX <small>this is small subtext inline with the title</small></h5>
			<h6>h6: used for XXX<small>this is small subtext inline with the title</small></h6>
			<p>p: Paragraph text <small>this is small subtext inline.</small></p>

			<div class="row collapse">
				<div class="spacer-small"></div>
				<h3>Multi-line text examples:</h3>
				<div class="one-px-line"></div>
				<div class="spacer-small"></div>
				<div class="medium-6 columns">
					<h1>h1: Lorem ipsum dolor sit amet, consectetur.</h1>
					<div class="one-px-line"></div>
					<h2>h2: Lorem ipsum dolor sit amet, consectetur.</h2>
					<div class="one-px-line"></div>
					<h3>h3: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</h3>
					<div class="one-px-line"></div>
					<h4>h4: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</h4>
					<div class="one-px-line"></div>
					<h5>h5: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</h5>
					<div class="one-px-line"></div>
					<h6>h6: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</h6>
				</div>
				<div class="medium-5 columns">
					<p>p: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<h3>Bulleted text:</h3>
					<div class="one-px-line"></div>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						<li>Lorem ipsum dolor sit amet.</li>
						<li>Incididunt ut labore et dolore magna aliqua.</li>
					</ul>
					<div class="spacer-small"></div>
					<h3>A links in text:</h3>
					<div class="one-px-line"></div>
					<p>Lorem ipsum dolor sit amet, <a href="">consectetur adipisicing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
				</div>
			</div>

			<div class="row collapse">
				<div class="large-12 columns">
					<div class="spacer-medium"></div>
					<h3>Have any custom text styles? <small>List them here:</small></h3>
					<div class="one-px-line"></div>

					<div class="interior-page"><h1>interior-page title (h1)</h1></div>
					<div class="serif">Serif: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					<div class="spacer-medium"></div>
					<div class="pull-quote">Pull quote: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					<div class="spacer-medium"></div>
					<div class="caption">Special caption text: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					<div class="spacer-medium"></div>
					<div class="intro">Special intro text: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				</div>
			</div>
		</div>
	</div>

	<div class="one-px-line"></div>

	<div class="row content-block">
		<div class="medium-4 columns">
			<h1>Icons:</h1>
			<p>All these icons are included in the fontello package.</p>
			<div title="Code: 0xe800" class="the-icons span3"><i class="icon-facebook"></i> <span class="i-name">icon-facebook</span><span class="i-code">0xe800</span></div>
			<div title="Code: 0xe801" class="the-icons span3"><i class="icon-twitter"></i> <span class="i-name">icon-twitter</span><span class="i-code">0xe801</span></div>
			<div title="Code: 0xe80b" class="the-icons span3"><i class="icon-linkedin"></i> <span class="i-name">icon-linkedin</span><span class="i-code">0xe80b</span></div>
			<div title="Code: 0xe80c" class="the-icons span3"><i class="icon-pinterest"></i> <span class="i-name">icon-pinterest</span><span class="i-code">0xe80c</span></div>
			<div title="Code: 0xe80d" class="the-icons span3"><i class="icon-gplus"></i> <span class="i-name">icon-gplus</span><span class="i-code">0xe80d</span></div>
			<div title="Code: 0xe803" class="the-icons span3"><i class="icon-mail"></i> <span class="i-name">icon-mail</span><span class="i-code">0xe803</span></div>
			<div title="Code: 0xe805" class="the-icons span3"><i class="icon-search"></i> <span class="i-name">icon-search</span><span class="i-code">0xe805</span></div>
			<div title="Code: 0xe806" class="the-icons span3"><i class="icon-phone"></i> <span class="i-name">icon-phone</span><span class="i-code">0xe806</span></div>
			<div title="Code: 0xe807" class="the-icons span3"><i class="icon-quote-left"></i> <span class="i-name">icon-quote-left</span><span class="i-code">0xe807</span></div>
			<div title="Code: 0xe808" class="the-icons span3"><i class="icon-quote-right"></i> <span class="i-name">icon-quote-right</span><span class="i-code">0xe808</span></div>
			<div title="Code: 0xe809" class="the-icons span3"><i class="icon-angle-up"></i> <span class="i-name">icon-angle-up</span><span class="i-code">0xe809</span></div>
			<div title="Code: 0xe80a" class="the-icons span3"><i class="icon-angle-down"></i> <span class="i-name">icon-angle-down</span><span class="i-code">0xe80a</span></div>

			<div class="spacer-medium"></div>
			<h6>Here you can put icons inside of a circle</h6>
			<div class="one-px-line"></div>
			<div class="spacer-small"></div>
			<div class="circle icon"><i class="icon-angle-down"></i></div>
		</div>
		<div class="medium-4 columns">
			<h1>Buttons:</h1>
			<a class="button large">large button</a><br />
			<a class="button">button</a><br />
			<a class="button medium">medium button</a><br />
			<a class="button tiny">tiny button</a><br />
			<a class="button read-more">read-more button</a><br />
			<h5>Secondary color Buttons: <small>Sizing options carryover</small></h5>
			<a class="button gray-green">button</a>
			<h5>Ghost Buttons: <small>Sizing options carryover</small></h5>
			<a class="button ghost">button</a>
		</div>
		<div class="medium-4 columns">
			<h1>Spacers:</h1>
			<p>Never put any content within a spacer div. <small>We've divided these with lines so they are visible</small></p>
			<div class="row">
				<div class="small-4 columns">
					<p>spacer-xlarge</p>
					<div class="spacer-small"></div>
					<p>spacer-large</p>
					<p class="small">spacer-medium</p>
					<p class="small">spacer-small</p>
					<p class="small">spacer-xsmall</p>
				</div>
				<div class="small-8 columns">
					<div class="one-px-line"></div>
					<div class="spacer-xlarge"></div>
					<div class="one-px-line"></div>
					<div class="spacer-large"></div>
					<div class="one-px-line"></div>
					<div class="spacer-medium"></div>
					<div class="one-px-line"></div>
					<div class="spacer-small"></div>
					<div class="one-px-line"></div>
					<div class="spacer-xsmall"></div>
					<div class="one-px-line"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="one-px-line"></div>

	<div class="row content-block">
		<div class="medium-3 columns sidebar gray">
			<h1>Sidebar</h1>
			<p>I'm a sidebar, I go on the left. More explanation of style and where it's used...</p>
			<p>I've had to adjust some of my text styles, please note:</p>
			<h3>h3 Sample title</h3>
			<h5>h5 Sample title</h5>
		</div>

		<div class="medium-8 columns">
			<h1>Form:</h1>
			<article id="article-83" class="post-83 post type-post status-draft format-standard hentry category-uncategorized">
				<h1 class="article-head"></h1>
				<div>
					<div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1">
						<form method="post" enctype="multipart/form-data" id="gform_1" action="/tarc/dev/?p=83&amp;preview=true">
							<div class="gform_heading">
								<span class="gform_description"></span>
							</div>
							<div class="gform_body">
								<ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below">
									<li id="field_1_1" class="gfield columns field_sublabel_below field_description_below">
										<label class="gfield_label" for="input_1_1">Input Label</label>
										<div class="ginput_container"><input name="input_1" id="input_1_1" type="text" value="" class="large" tabindex="1" placeholder="large-12.columns"></div>
									</li>
									<li id="field_1_4" class="gfield medium-4 columns field_sublabel_below field_description_above">
										<label class="gfield_label" for="input_1_4">Input Label</label>
										<div class="ginput_container"><input name="input_4" id="input_1_4" type="text" value="" class="small" tabindex="2" placeholder="large-4.columns"></div>
									</li>
									<li id="field_1_5" class="gfield medium-4 columns field_sublabel_below field_description_above">
										<label class="gfield_label" for="input_1_5">Input Label</label>
										<div class="ginput_container"><input name="input_5" id="input_1_5" type="text" value="" class="small" tabindex="3" placeholder="large-4.columns"></div>
									</li>
									<li id="field_2_1" class="gfield medium-4 columns field_sublabel_below field_description_above"><label class="gfield_label" for="input_2_1">Website</label>	<div id="input_1_container" class="row collapse">
											<div class="small-3 large-2 columns">
												<span class="prefix">http://</span>
											</div>
											<div class="small-9 large-10 columns">
												<input id="input_1" type="text" placeholder="Enter your URL" tabindex="" name="input_1" class="placeholder" value="">
											</div>
										</div>
									</li>
									<li id="field_1_7" class="gfield columns field_sublabel_below field_description_below">
										<label class="gfield_label" for="input_1_7">Select Box</label>
										<div class="ginput_container">
											<select name="input_7" id="input_1_7" class="large gfield_select" tabindex="5">
												<option value="Husker">Husker</option>
												<option value="Husker 2">Husker 2</option>
												<option value="Husker 3">Husker 3</option>
											</select>
										</div>
									</li>
									<li id="field_1_8" class="gfield medium-6 columns field_sublabel_below field_description_below">
										<label class="gfield_label">Choose Your Favorite</label>
										<div class="ginput_container">
											<ul class="gfield_radio" id="input_1_8">
												<li class="gchoice_1_8_0"><input name="input_8" type="radio" value="Radio 1" id="choice_1_8_0" tabindex="6"><label for="choice_1_8_0" id="label_1_8_0">Radio 1</label></li>
												<li class="gchoice_1_8_1"><input name="input_8" type="radio" value="Radio 2" id="choice_1_8_1" tabindex="7"><label for="choice_1_8_1" id="label_1_8_1">Radio 2</label></li>
											</ul>
										</div>
									</li>
									<li id="field_1_12" class="gfield medium-6 columns field_sublabel_below
								field_description_below">
										<label class="gfield_label">Choose your favorite</label>
										<div class="ginput_container">
											<ul class="gfield_checkbox" id="input_1_12">
												<li class="gchoice_1_12_1">
													<input name="input_12.1" type="checkbox" value="Checkbox 1" id="choice_1_12_1" tabindex="10">
													<label for="choice_1_12_1" id="label_1_12_1">Checkbox 1</label>
												</li><li class="gchoice_1_12_2">
													<input name="input_12.2" type="checkbox" value="Checkbox 2" id="choice_1_12_2" tabindex="11">
													<label for="choice_1_12_2" id="label_1_12_2">Checkbox 2</label>
												</li></ul></div></li>
									<li id="field_1_10" class="gfield columns field_sublabel_below field_description_below">
										<label class="gfield_label" for="input_1_10">Text Area</label>
										<div class="ginput_container">
											<textarea name="input_10" id="input_1_10" class="textarea medium" tabindex="9" placeholder="small-12.columns" rows="10" cols="50"></textarea>
										</div>
									</li>
								</ul>
							</div>
							<div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_1" class="gform_button button" value="Submit" tabindex="10" onclick="if(window[&quot;gf_submitting_1&quot;]){return false;}  window[&quot;gf_submitting_1&quot;]=true;  ">
								<input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
								<input type="hidden" class="gform_hidden" name="gform_submit" value="1">
								<input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
								<input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsIjkwNmM1OTAyYzYwYjRhMGE1N2E2MTY3NzQwN2E0MjY3Il0=">
								<input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
								<input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
								<input type="hidden" name="gform_field_values" value="">
							</div>
						</form>
					</div>
					<script type="text/javascript"> jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 1) {if(typeof Placeholders != 'undefined'){
							Placeholders.enable();
						}} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );
					</script><script type="text/javascript"> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [1, 1]) } ); </script>
				</div>
			</article>
		</div>
	</div>

	<div class="one-px-line"></div>

	<div class="row content-block">
		<div class="large-12 columns">
			<h1>Image styles &amp; formatting</h1>
			<h3>This is a full screen image, only XX height.</h3>
			<p class="small">You can apply the center tag to the container of the image to fluidly expand and center an image in any defined container.</p>
		</div>
	</div>

	<div class="full-screen-img center">
		<img src="img/sample.jpg" alt="" />
	</div>
	<div class="row content-block">
		<div class="large-12 columns">
			<h3>Here are gridded images, centered within their frame. <small>Click on an image to show reveal modal styling for site.</small></h3>
			<div class="one-px-line"></div>
			<div class="spacer-medium"></div>
			<ul class="gridded-images small-block-grid-2 medium-block-grid-3 large-block-grid-4">
				<li class="center" data-reveal-id="myModal"><img src="img/sample.jpg" alt="" /></li>
				<li class="center"><img src="img/sample-vertical.jpg" alt="" /></li>
				<li class="center"><img src="img/sample.jpg" alt="" /></li>
				<li class="center"><img src="img/sample.jpg" alt="" /></li>
				<li class="center"><img src="img/sample-vertical.jpg" alt="" /></li>
				<li class="center"><img src="img/sample.jpg" alt="" /></li>
				<li class="center"><img src="img/sample.jpg" alt="" /></li>
			</ul>

		</div>



		<div class="large-12 columns">
			<div class="spacer-xlarge"></div>
			<h3>This is a set of thumbnails set to function as a standard gallery</h3>
			<div class="one-px-line"></div>
			<div class="spacer-medium"></div>
			<!--      	<div class="carousel">-->
			<ul class="clearing-thumbs" data-clearing>
				<li><a class="th" href="img/sample.jpg"><img src="img/sample.jpg"></a></li>
				<li><a class="th" href="img/sample.jpg"><img src="img/sample.jpg"></a></li>
				<li><a class="th" href="img/sample-vertical.jpg"><img src="img/sample-vertical.jpg"></a></li>
				<li><a class="th" href="img/sample.jpg"><img src="img/sample.jpg"></a></li>
				<li><a class="th" href="img/sample-vertical.jpg"><img src="img/sample-vertical.jpg"></a></li>
				<li><a class="th" href="img/sample.jpg"><img src="img/sample.jpg"></a></li>
			</ul>
			<!--      	</div>-->
		</div>
	</div>

	<div class="one-px-line"></div>

	<div class="row collapse content-block">
		<div class="large-12 columns">
			<h1>Here's text in a table format:</h1>
			<div class="spacer-medium"></div>
			<div class="row" data-equalizer>
				<ul class="gridded-text small-block-grid-2 medium-block-grid-3 large-block-grid-4"  data-equalizer>
					<li data-equalizer-watch>
						<h4>Cell 1</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</li>
					<li data-equalizer-watch>
						<h4>Cell 2</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</li>
					<li data-equalizer-watch>
						<h4>Cell 3</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</li>
					<li data-equalizer-watch>
						<h4>Cell 4</h4>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</li>
					<li data-equalizer-watch>
						<h4>Cell 5</h4>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</li>
					<li data-equalizer-watch>
						<h4>Cell 6</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="one-px-line"></div>


	<div class="row content-block">
		<div class="large-12 columns">
			<h1>Here's how accordion content looks:</h1>

			<ul class="accordion" data-accordion>
				<li class="accordion-navigation">
					<a href="#panel1a"><h4>Accordion 1 <span class="right"><i class="icon-angle-down"></i></span></h4></a>
					<div id="panel1a" class="content active">
						Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				</li>
				<li class="accordion-navigation">
					<a href="#panel2a"><h4>Accordion 2 <span class="right"><i class="icon-angle-down"></i></span></h4></a>
					<div id="panel2a" class="content">
						Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				</li>
				<li class="accordion-navigation">
					<a href="#panel3a"><h4>Accordion 3 <span class="right"><i class="icon-angle-down"></i></span></h4></a>
					<div id="panel3a" class="content">
						Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				</li>
			</ul>

		</div>
	</div>

	<div class="one-px-line"></div>

	<div class="row collapse content-block">
		<div class="large-12 columns">
			<h1>Text with a center gutter inside a collapsed row, but no other padding.</h1>
			<div class="one-px-line"></div>
			<div class="spacer-large"></div>
			<div class="row collapse">
				<div class="small-6 columns center-gutter-right">
					<h3>Content on the left</h3>
					<p>You can put photos, or anything in these. You could use them for buttons too.</p>
					<img src="img/sample.jpg" alt="" />
					<div class="spacer-medium"></div>
					<a href="" class="button expand">Link Text</a>
				</div>
				<div class="small-6 columns center-gutter-left">
					<h3>Content on the right</h3>
					<p>You can put photos, or anything in these. You could use them for buttons too.</p>
					<a href="" class="button expand">Link Text</a>
					<img src="img/sample-vertical.jpg" alt="" />
				</div>
			</div>
		</div>
	</div>

	<div class="one-px-line"></div>



	<div class="one-px-line"></div>

	<div class="row content-block">
		<div class="medium-12 columns">
			<h1>Reveal Modal <small>for content based pop-ups</small></h1>
			<div class="one-px-line"></div>
			<div class="spacer-medium"></div>
			<div class="button" data-reveal-id="modalId">Activate modal</div>
			<div id="modalId" class="reveal-modal" data-reveal>
				<h1>Awesome. I have it.</h1>
				<h3>Your couch.  It is mine.</h3>
				<p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
				<a class="close-reveal-modal" aria-label="Close">&#215;</a>
			</div>
		</div>
	</div>

	<div class="one-px-line"></div>
<?php TSD\Display::acf_flexible_content(27) ?>
<?php
\NV\Theme::get_footer();