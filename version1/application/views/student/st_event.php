<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8"><?php echo form_open_multipart('Student/event'); ?>
		<div class="card">
			<div class="card card-header"><?php echo $title;?></div>
			<div class="card card-body">
				<div class="card card-title"><h4>Event</h4></div>
				<div class="form-group" style="color: red;"><?php echo validation_errors();?> </div>
				<div class="form-group">
					<label>Title</label>
					<input type="text" name="title" placeholder="Event title" class="form-control">
				</div>
				<div class="form-group">
					<label>Event Desciption</label>
					<textarea class="form-control" type="text" name="description"></textarea>
				</div>
				<div class="form-group">
					<label>Location</label>
					<input type="text" name="location" placeholder="Location Event hold on" class="form-control">
				</div>
				<div class="form-group">
					<label>Upload photo</label>
					<input class="form-control" type="file" name="photo">
				</div>
				
				<div class="form-group">
					<button class="btn btn-info" value="upload">Submit</button><a href="vevent" class="btn btn-primary">view Event</a>
				</div>
			</div>
		</div><?php echo form_close();?>
	</div>
	<div class="col-md-2"></div>
</div>