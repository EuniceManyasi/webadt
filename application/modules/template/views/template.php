<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta name="description" content="adt kenya">
		<meta name="keywords" content="adt,hiv,kenya,nascop,commodities">
		<meta name="author" content="criat">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="HandheldFriendly" content="True">
		<title><?php echo @$title;?></title>
		<!--Load styles-->
		<?php $this -> load -> view('styles');?>
	</head>
	<body id="body">
		<div class="container-fluid">
			<!--Load Menu-->
			<?php
			if (isset($hide_menu)) {
				
			}
			else{// If menu is not hidden, show it
				$this -> load -> view('menu');
			}
			?>
			<!--Load Side Menu-->
			<div id="body_wrapper" class="row">
				<?php
               if (isset($hide_sidemenu)) {//If side is to be displayed, show it
				?>
				<div class="col-md-12">
					<?php
					//load content
					$this -> load -> view(@$content_view);
					?>
				</div>
				
				<?php
				}else{
				?>
				<div class="col-md-3">
					<?php
					$this -> load -> view('sidemenu');
					?>
				</div>
				<div class="col-md-9">
					<?php
					//load content
					$this -> load -> view(@$content_view);
					?>
				</div>
				<?php
				}
				?>
				<!--Load Footer-->
				<?php $this -> load -> view('footer');?>
			</div>
			
		</div>
		<!--Load scripts-->
		<?php $this -> load -> view('scripts');?>
	</body>
</html>