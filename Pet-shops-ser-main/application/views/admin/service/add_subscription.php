<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="row">
			<div class="col-xl-8 offset-xl-2">
			
			  <!-- Page Header -->
			  <div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Add Subscription</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<div class="card">
					<div class="card-body">
                        <form id="addSubscription" method="post">
                            <div class="form-group">
                                <label>Subscription Name</label>
                                <input class="form-control" type="text" placeholder="Free Trial" name="subscription_name" id="subscription_name">
                            </div>
                            <div class="form-group">
                                <label>Subscription Amount</label>
                                <input class="form-control sub-amount" type="number" step="0.01" min="0" name="amount" id="amount">
                            </div>
                            <div class="form-group">
                                <label>Subscription Durations</label>
								<select class="form-control select" name="duration" id="duration">
									<option value="">Select Duration</option>
									<option value="0">One Day</option>
									<option value="1">One Month</option>
									<option value="3">3 Months</option>
									<option value="6">6 Months</option>
									<option value="12">One Year</option>
									<option value="24">2 Years</option>
								</select>
                                <input type="hidden" name="subscription_description" id="subscription_description" value="">
                            </div>
                            <div class="mt-4">
								<?php if($user_role==1){?>
                                <button class="btn btn-primary" type="submit">Submit</button>
								<?php }?>

								<a href="<?php echo $base_url; ?>subscriptions" class="btn btn-cancel">Cancel</a>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>