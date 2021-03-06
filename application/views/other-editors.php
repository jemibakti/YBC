<!DOCTYPE html>
		<!-- END NAVIGATION -->

		<!-- MAIN PANEL -->
<div id="main" role="main">
<form action="<?php echo site_url().'AdminWebObor/simpan' ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
			<!-- RIBBON -->
	<div id="ribbon">

		<span class="ribbon-button-alignment"> 
			<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
				<i class="fa fa-refresh"></i>
			</span> 
		</span>

		<!-- breadcrumb -->
		<ol class="breadcrumb">
			<li>Home</li><li>Forms</li><li>Tambah Data</li>
		</ol>
	</div>
<div id="content">
<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			<i class="fa fa-pencil-square-o fa-fw "></i> 
				Forms
			<span>> 
				Tambah Data
			</span>
		</h1>
	</div>
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
		
	</div>
</div>
	<section id="widget-grid" class="">
		<div class="row">
				<article class="col-sm-12 col-md-12 col-lg-6">
					<div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false">
						<header>
							<span class="widget-icon"> <i class="fa fa-eye"></i> </span>
							<h2>Tambah Data</h2>
						</header>
						<div>
							<div class="jarviswidget-editbox">
							</div>
							<div class="widget-body">
								<fieldset class="form-horizontal">
									<div class="form-group">
										<label class="col-md-2 control-label">Nama</label>
										<div class="col-md-10">
											<input class="form-control" name="title" placeholder="Input Title" type="text">
											<input name="group_id" type="hidden" value="<?php echo $group_id; ?>">
											<input name="jenis" type="hidden" value="<?php echo $jenis; ?>">
										</div>
									</div>	
									<div class="form-group">
										<label class="col-md-2 control-label">Title</label>
										<div class="col-md-10">
											<input class="form-control" name="nama" placeholder="Input Nama" type="text">
											<input name="group_id" type="hidden" value="<?php echo $group_id; ?>">
											<input name="jenis" type="hidden" value="<?php echo $jenis; ?>">
										</div>
									</div>												
									<div class="form-group">
										<label class="col-md-2 control-label">Deskripsi</label>
										<div class="col-md-10">
											<textarea name="deskripsi" class="form-control summernote" placeholder="Textarea" rows="5"></textarea>
										</div>
									</div>
								</fieldset>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-12">
												<button class="btn btn-default" type="submit">
													Cancel
												</button>
												<button class="btn btn-primary" type="submit">
													<i class="fa fa-save"></i>
													Submit
												</button>
											</div>
										</div>
									</div>
							</div>
						</div>
					</div>
				</article>
				<article class="col-sm-12 col-md-12 col-lg-6">
					<div class="jarviswidget" id="wid-id-0">
						<header>
							<span class="widget-icon"> <i class="fa fa-eye"></i> </span>				
						</header>	
						<div>
							<div class="jarviswidget-editbox">
							</div>
							<div class="widget-body">
								<form class="form-horizontal">
									<fieldset>
										<legend>File inputs</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">File input</label>
											<div class="col-md-10">
												<input type="file" id="imgInp" name="file" class="btn btn-default" >
												<p class="help-block">
													Max File 500 kb.
												</p>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<div class="form-group">
											<div class="col-md-10">
												<img id='img-upload' style="margin-top:30px;" class="img-responsive text-center" ><hr/>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</article>
			</div>	
		</article>
		</div>
	</section>
	<div class="page-footer">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<span class="txt-color-white">SmartAdmin 1.8.2 <span class="hidden-xs"> - Web Application Framework</span> © 2014-2015</span>
			</div>
		</div>
	</div>
	<script data-pace-options='{ "restartOnRequestAfter": true }' src="<?php echo base_url().'assets/';?>js/plugin/pace/pace.min.js"></script>

	<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		if (!window.jQuery) {
			document.write('<script src="<?php echo base_url().'assets/';?>js/libs/jquery-2.1.1.min.js"><\/script>');
		}
	</script>

	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script>
		if (!window.jQuery.ui) {
			document.write('<script src="<?php echo base_url().'assets/';?>js/libs/jquery-ui-1.10.3.min.js"><\/script>');
		}
	</script>

	<!-- IMPORTANT: APP CONFIG -->
	<?php $this->load->view('js')?>

	<!-- PAGE RELATED PLUGIN(S) -->
	<script src="<?php echo base_url().'assets/';?>js/plugin/summernote/summernote.min.js"></script>
	<script src="<?php echo base_url().'assets/';?>js/plugin/markdown/markdown.min.js"></script>
	<script src="<?php echo base_url().'assets/';?>js/plugin/markdown/to-markdown.min.js"></script>
	<script src="<?php echo base_url().'assets/';?>js/plugin/markdown/bootstrap-markdown.min.js"></script>
	

	<script type="text/javascript">
	
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();

			/*
			 * SUMMERNOTE EDITOR
			 */
			
			$('.summernote').summernote({
				height: 200,
				toolbar: [
				['style', ['style']],
				['font', ['bold', 'italic', 'underline', 'clear']],
				['fontname', ['fontname']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['height', ['height']],
				['table', ['table']],
				['insert', ['link', 'picture', 'hr']],
				['view', ['fullscreen', 'codeview', 'help']]

			  ]
			});						
		})
		
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$('#img-upload').attr('src', e.target.result);
				}
				
				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#imgInp").change(function(){
				readURL(this);
		});
	</script>
</body>

</html>