<?php
if(isset($_GET['id'])){
	$cards = Cards::newInstance()->getCardById($_GET['id']);
	$title = $cards['title'];
	$description = $cards['description'];
	$url = $cards['url'];
	$image = $cards['image'];
	$color = $cards['color'];
	$facebook = $cards['facebook'];
	$twitter = $cards['twitter'];
	$instagaram = $cards['instagaram'];
	$youtube = $cards['youtube'];
	$linkedin = $cards['linkedin'];

}
?>




<div class="container clearfix">
	<h2 class="border-bottom mb-3">Add new site</h2>
	<form action="action.php" method="post">
		<input type="hidden" name="addCard" value="1">
		<?php if(isset($_GET['id'])){ ?>
			<input type="hidden" name="editCard" value="<?php echo $_GET['id']; ?>">
		<?php } ?>
		<div class="col-md-6 float-left">
			<h4>Genaral</h4>
			<div class="form-group">
				<label>Title</label>
				<input class="form-control" type="text" name="title" value="<?php echo @$title; ?>">
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="description"><?php echo @$description; ?></textarea>
			</div>
			<div class="form-group">
				<label>Forward Url</label>
				<input class="form-control" type="text" name="url" value="<?php echo @$url; ?>">
			</div>
			<div class="form-group">
				<label>Image</label>
				<input class="form-control" type="file" name="image">
			</div>
			<div class="form-group">
				<label>Primary color</label>
				<input class="form-control" type="text" name="color" value="<?php echo @$color; ?>">
			</div>
		</div>
		<div class="col-md-6 float-left">
			<h4>Social</h4>
			<div class="form-group">
				<label>Facebook link</label>
				<input class="form-control" type="text" name="facebook" value="<?php echo @$facebook; ?>">
			</div>
			<div class="form-group">
				<label>Twitter link</label>
				<input class="form-control" type="text" name="twitter" value="<?php echo @$twitter; ?>">
			</div>
			<div class="form-group">
				<label>Instagaram link</label>
				<input class="form-control" type="text" name="instagaram" value="<?php echo @$instagaram; ?>">
			</div>
			<div class="form-group">
				<label>Youtube link</label>
				<input class="form-control" type="text" name="youtube" value="<?php echo @$youtube; ?>">
			</div>
			<div class="form-group">
				<label>Linkedin link</label>
				<input class="form-control" type="text" name="linkedin" value="<?php echo @$linkedin; ?>">
			</div>
			<button class="btn btn-lg btn-primary" type="submit">Submit</button>
		</div>
	</form>
	</div>
</div>
