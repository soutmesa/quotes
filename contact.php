<?php include('includes/header.php'); ?>
	
	<div class="container">
		<div class="col-md-6 col-sm-12">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="inputEmail3" class="col-md-2 control-label">Email</label>
					<div class="col-md-10">
					  <input type="email" class="form-control" id="" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Subscribe
							</label>
						</div>
					</div>
				</div>	
				<div class="form-group">
					<label for="inputPassword3" class="col-md-2 control-label">Message</label>
					<div class="col-md-10">
						<textarea class="form-control" rows="8"></textarea>	
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
			</form>	
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1506.71022462298!2d104.8990666!3d11.5882283!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xec35b38bc42a4403!2z4Z6f4Z-S4Z6T4Z624Z6A4Z-L4Z6A4Z624Z6a4oCL4Z6X4Z684Z6Y4Z634Z6R4Z694Z6b4oCL4Z6C4Z-E4Z6A!5e1!3m2!1skm!2skh!4v1465547159615" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>	

<?php include('includes/footer.php'); ?>