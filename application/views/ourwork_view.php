
<div class="container" style="border:solid px red; margin-top:20px;">

	<div class="row" style="border:solid px white;margin-top:150px;">
		<div class="col-md-8 col-md-offset-2">
			<!--<h1 class="about_title">about us</h1>-->
			<img src="images/ourwork-title.png">		
		</div>
	</div>
    
   	<div class="row push-left-aai-ow" style="border:solid px green; margin-top:40px;">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="row push-left-ow">
				<div class="col-md-3 col-sm-4 col-xs-4 col-md-offset-1">		
					<a href="" data-toggle="modal" data-target="#ac-casestudies" class="ourwork-case topopup">
						<span class="ourwork-label"> case<br>studies </span>
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-4">		
					<a href="" data-toggle="modal" data-target="#ac-brand" class="ourwork-case">
						<span class="ourwork-label"> on-ground<br>activations </span>
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-4">		
					<a href="" data-toggle="modal" data-target="#ac-events" class="ourwork-case">
						<span class="ourwork-label-s"> events </span>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row push-left-aai-ow" style="border:solid px green; margin-top:40px;">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="row push-left-ow">
				<div class="col-md-3 col-sm-4 col-xs-4 col-md-offset-1">		
					<a href="" data-toggle="modal" data-target="#ac-trial-sampling" class="ourwork-case">
						<span class="ourwork-label"> trial<br>&amp; sampling </span>
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-4">		
					<a href="" data-toggle="modal" data-target="#ac-ambient" class="ourwork-case">
						<span class="ourwork-label"> ambient<br>media </span>
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-4">		
					<a href="" data-toggle="modal" data-target="#ac-tie-ups" class="ourwork-case">
						<span class="ourwork-label-s"> tie-ups </span>
					</a>
				</div>
			</div>	
		</div>
	</div>
</div>
<!-- Modal case studies activations-->
	
<!-- Modal brand activations-->
	<div class="modal fade" id="ac-brand" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="">
			  <div class="modal-content modal_btop">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">On-ground Activations</h4>
					 </div>
					<div class="modal-body">
						<div class="container">
							<span>
								Activations Advertising Inc. specializes in on-ground brand engagement to generate brand interest and excitement among consumers. Working closely with clients, 
								we develop new ways in creating better brand experiences that will translate to convert and activate new customers.
							</span>
						</div>
						<div>&nbsp;</div>
						<div class="text-center" style="border:solid px #CCC;border-radius:4px 4px;">
							<div class="col-md-12 col-sm-12 parent_container">
								
								<div id="carousel" class="" style="position:relative;">
									<div class="col-md-12 col-sm-12 pre_view">
										<img src="images/brand-activations/prev-img/1.jpg" class="col-md-12 col-sm-12"/>
									</div>
									
									<div class="thumb-wrap"	>
										<ul style="width: 4000px;" class="thumbs">
										<?php
											$aai_img = "";
											for($ctrl = 1; $ctrl < 28; $ctrl++)
											{
												$aai_img .= "<li><a class='click_link_brand' alt='images/brand-activations/prev-img/". $ctrl . ".jpg' style='cursor:pointer;width:100%;'><div style='width:100%;height:87px;background-image:url(\"images/brand-activations/prev-img/". $ctrl . ".jpg\");background-size:cover;'></div></a></li>"; 
											}
											echo $aai_img;
										?>
										</ul>
										<div style="position:relative;top:31px;">
											<input type="hidden" class="carousel_count" value="5"/>
											<input type="hidden" class="slide_length" value="100"/> 
											<input type="hidden" class="click_count" value="0"/>
											<div id="prev_1"><span class="prev_btn glyphicon glyphicon-circle-arrow-left" style="position:absolute;left:0px;z-index:9999;display:none;cursor:pointer;font-size:32px;color:#e5e5e5;">  </span></div>
											<div id="next_1"><span class="next_btn glyphicon glyphicon-circle-arrow-right" style="position:absolute;right:0;z-index:9999;display:none;cursor:pointer;font-size:32px;color:#e5e5e5;">  </span></div>
										</div>
									</div>
								</div>
								<!--
								<div class="container" style="margin-top:20px;">
									<input type="hidden" class="carousel_count" value="5"/>
									<input type="hidden" class="slide_length" value="100"/> 
									<input type="hidden" class="click_count" value="0"/>
									<div id="prev_1">
										<button class="prev_btn btn btn-primary btn-sml" style="float:left;display:;"> Prev </button>
									</div>
									<div id="next_1">
										<button class="next_btn btn btn-primary btn-sml" style="float:right;"> Next </button>
									</div>
									
								</div>
								-->
								<div>&nbsp;</div>
							</div>
						</div>
					</div>
			  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	
<!-- Modal events -->
	<div class="modal fade" id="ac-events" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="">
			  <div class="modal-content modal_btop">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Events</h4>
					 </div>
					<div class="modal-body">
						<div class="container">
							<span>
								From awards shows, sales conventions, product launches and publicity events, we handle all stages of event organization from early conceptualization, 
								planning, logistics and actual implementation. 
							</span>
						</div>
						<div>&nbsp;</div>
						<div class="text-center" style="border:solid px #CCC;border-radius:4px 4px;">
							<div class="col-md-12 col-sm-12 parent_container">
								
								<div id="carousel" class="">
									<div class="col-md-12 col-sm-12 pre_view_events">
										<img src="images/events/prev-img/1.jpg" class="col-md-12 col-sm-12"/>
									</div>
									
									<div class="thumb-wrap">
										<ul style="width: 4000px;" class="thumbs">
										<?php
											$aai_img = "";
											for($ctrl = 1; $ctrl < 27; $ctrl++)
											{
												$aai_img .= "<li><a class='click_link_events' alt='images/events/prev-img/". $ctrl . ".jpg' style='cursor:pointer;width:100%;'><div style='width:100%;height:87px;background-image:url(\"images/events/prev-img/". $ctrl . ".jpg\");background-size:cover;'></div></a></li>"; 
											}
											echo $aai_img;
										?>
										</ul>
										<div style="position:relative;top:31px;">
											<input type="hidden" class="carousel_count" value="5"/>
											<input type="hidden" class="slide_length" value="100"/> 
											<input type="hidden" class="click_count" value="0"/>
											<div id="prev_1"><span class="prev_btn glyphicon glyphicon-circle-arrow-left">  </span></div>
											<div id="next_1"><span class="next_btn glyphicon glyphicon-circle-arrow-right">  </span></div>
										</div>
									</div>
								</div>
								<!--
								<div class="container" style="margin-top:20px;">
									<input type="hidden" class="carousel_count" value="5"/>
									<input type="hidden" class="slide_length" value="100"/> 
									<input type="hidden" class="click_count" value="0"/>
									<div id="prev_1">
										<button class="prev_btn btn btn-primary btn-sml" style="float:left;display:;"> Prev </button>
									</div>
									<div id="next_1">
										<button class="next_btn btn btn-primary btn-sml" style="float:right;"> Next </button>
									</div>
								</div>
								-->
								<div>&nbsp;</div>
							</div>
						</div>
					</div>
			  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<!-- Modal Trial and sampling -->
	<div class="modal fade" id="ac-trial-sampling" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="">
			  <div class="modal-content modal_btop">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Trial and Sampling</h4>
					 </div>
					<div class="modal-body">
						<div class="container">
							<span>
								Our diverse team of brand specialists and ambassadors go where the customers are through large-scale on ground product trial and sampling. 
								We visit every home, every town and every city to ensure that our client’s products are introduced and experienced by thousands of households and millions of individuals nationwide.
							</span>
						</div>
						<div>&nbsp;</div>
						<div class="text-center" style="border:solid px #CCC;border-radius:4px 4px;">
							<div class="col-md-12 col-sm-12 parent_container">
								<div id="carousel" class="">
									<div class="col-md-12 col-sm-12 pre_view_trial">
										<img src="images/trial-sampling/prev-img/1.jpg" class="col-md-12 col-sm-12"/>
									</div>
									
									<div class="thumb-wrap">
										<ul style="width: 4000px;" class="thumbs">
										<?php
											$aai_img = "";
											for($ctrl = 1; $ctrl < 27; $ctrl++)
											{
												$aai_img .= "<li><a class='click_link_trial' alt='images/trial-sampling/prev-img/". $ctrl . ".jpg' style='cursor:pointer;width:100%;'><div style='width:100%;height:87px;background-image:url(\"images/trial-sampling/prev-img/". $ctrl . ".jpg\");background-size:cover;'></div></a></li>"; 
											}
											echo $aai_img;
										?>
										</ul>
										<div style="position:relative;top:31px;">
											<input type="hidden" class="carousel_count" value="5"/>
											<input type="hidden" class="slide_length" value="100"/> 
											<input type="hidden" class="click_count" value="0"/>
											<div id="prev_1"><span class="prev_btn glyphicon glyphicon-circle-arrow-left">  </span></div>
											<div id="next_1"><span class="next_btn glyphicon glyphicon-circle-arrow-right">  </span></div>
										</div>
									</div>
								</div>
								<!--
								<div class="container" style="margin-top:20px;">
									<input type="hidden" class="carousel_count" value="5"/>
									<input type="hidden" class="slide_length" value="100"/> 
									<input type="hidden" class="click_count" value="0"/>
									<div id="prev_1">
										<button class="prev_btn btn btn-primary btn-sml" style="float:left;display:;"> Prev </button>
									</div>
									<div id="next_1">
										<button class="next_btn btn btn-primary btn-sml" style="float:right;"> Next </button>
									</div>
								</div>
								-->
								<div>&nbsp;</div>
							</div>
						</div>
					</div>
			  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->	

	<!-- Modal Ambient Media activations-->
	<div class="modal fade" id="ac-ambient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="">
			  <div class="modal-content modal_btop">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Ambient Media</h4>
					 </div>
					<div class="modal-body">
						<div class="container">
							<span>
								<!--text here-->
							</span>
						</div>
						<div>&nbsp;</div>
						<div class="text-center" style="border:solid px #CCC;border-radius:4px 4px;">
							<div class="col-md-12 col-sm-12 parent_container">
								
								<div id="carousel" class="">
									<div class="col-md-12 col-sm-12 pre_view_ambient">
										<img src="images/ambient-media/prev-img/1.jpg" class="col-md-12 col-sm-12"/>
									</div>
									
									<div class="thumb-wrap">
										<ul style="width: 4000px;" class="thumbs">
										<?php
											$aai_img = "";
											for($ctrl = 1; $ctrl < 6; $ctrl++)
											{
												$aai_img .= "<li><a class='click_link_ambient' alt='images/ambient-media/prev-img/". $ctrl . ".jpg' style='cursor:pointer;width:100%;'><div style='width:100%;height:87px;background-image:url(\"images/ambient-media/prev-img/". $ctrl . ".jpg\");background-size:cover;'></div></a></li>"; 
											}
											echo $aai_img;
										?>
										</ul>
										<div style="position:relative;top:31px;display:none;">
											<input type="hidden" class="carousel_count" value="5"/>
											<input type="hidden" class="slide_length" value="100"/> 
											<input type="hidden" class="click_count" value="0"/>
											<div id="prev_1"><span class="prev_btn glyphicon glyphicon-circle-arrow-left">  </span></div>
											<div id="next_1"><span class="next_btn glyphicon glyphicon-circle-arrow-right">  </span></div>
										</div>
									</div>
								</div>
								<!--
								<div class="container" style="margin-top:20px;">
									<input type="hidden" class="carousel_count" value="5"/>
									<input type="hidden" class="slide_length" value="100"/> 
									<input type="hidden" class="click_count" value="0"/>
									<div id="prev_1">
										<button class="prev_btn btn btn-primary btn-sml" style="float:left;display:none;"> Prev </button>
									</div>
									<div id="next_1">
										<button class="next_btn btn btn-primary btn-sml" style="float:right;display:none;"> Next </button>
									</div>
								</div>
								-->
								<div>&nbsp;</div>
							</div>
								
							</div>
						</div>
					</div>
			  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
<!-- Modal tie-ups -->
	<div class="modal fade" id="ac-tie-ups" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="">
			  <div class="modal-content modal_btop">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Tie-ups</h4>
					 </div>
					<div class="modal-body">
						<div class="container">
							<span>
								Activations Advertising Inc. brings together brands, companies and organizations that allow them to share their expertise and products in order to 
								fulfil our client’s plans in marketing and advertising plans. Through tie ups and other forms of collaborations, we have bridged the gaps inherent between companies.
							</span>
						</div>
						
						<div>&nbsp;</div>
						<div class="text-center" style="border:solid px #CCC;border-radius:4px 4px;">
							<div class="col-md-12 col-sm-12 parent_container">
								<div id="carousel" class="">
									<div class="col-md-12 col-sm-12 pre_view_tieup">
										<img src="images/tie-ups/prev-img/1.jpg" class="col-md-12 col-sm-12"/>
									</div>
									
									<div class="thumb-wrap">
										<ul style="width: 4000px;" class="thumbs">
										<?php
											$aai_img = "";
											for($ctrl = 1; $ctrl < 6; $ctrl++)
											{
												$aai_img .= "<li><a class='click_link_tieup' alt='images/tie-ups/prev-img/". $ctrl . ".jpg' style='cursor:pointer;width:100%;'><div style='width:100%;height:87px;background-image:url(\"images/tie-ups/prev-img/". $ctrl . ".jpg\");background-size:cover;'></div></a></li>"; 
											}
											echo $aai_img;
										?>
										</ul>
										<div style="position:relative;top:31px;display:none;">
											<input type="hidden" class="carousel_count" value="5"/>
											<input type="hidden" class="slide_length" value="100"/> 
											<input type="hidden" class="click_count" value="0"/>
											<div id="prev_1"><span class="prev_btn glyphicon glyphicon-circle-arrow-left">  </span></div>
											<div id="next_1"><span class="next_btn glyphicon glyphicon-circle-arrow-right">  </span></div>
										</div>
									</div>
								</div>
								<!--
								<div class="container" style="margin-top:20px;">
									<input type="hidden" class="carousel_count" value="5"/>
									<input type="hidden" class="slide_length" value="100"/> 
									<input type="hidden" class="click_count" value="0"/>
									<div id="prev_1">
										<button class="prev_btn btn btn-primary btn-sml" style="float:left;display:none;"> Prev </button>
									</div>
									<div id="next_1">
										<button class="next_btn btn btn-primary btn-sml" style="float:right;display:none;"> Next </button>
									</div>
								</div>
								-->
								<div>&nbsp;</div>
							</div>
						</div>
					</div>
			  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
