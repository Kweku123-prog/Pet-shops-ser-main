
<div class="page-wrapper">
	<div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Categories</h3>
				</div>
				<div class="col-auto text-right">
					<a href="<?php echo $base_url; ?>categories" class="btn btn-primary add-button"><i class="fas fa-sync"></i></a>
					<a class="btn btn-white filter-btn mr-3" href="javascript:void(0);" id="filter_search">
						<i class="fas fa-filter"></i>
					</a>
					
					<a href="<?php echo $base_url; ?>add-category" class="btn btn-primary add-button"><i class="fas fa-plus"></i></a>
				
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<!-- Search Filter -->
		<form action="<?php echo base_url()?>admin/categories/categories" method="post" id="filter_inputs">
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
    
			<div class="card filter-card">
				<div class="card-body pb-0">
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<label>Category</label>
								<select class="form-control" name="category">
									<option value="">Select category</option>
									<?php foreach ($list_filter as $cat) { ?>
									<option value="<?=$cat['id']?>"><?php echo $cat['category_name']?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<label>From Date</label>
								<div class="cal-icon">
									<input class="form-control start_date" type="text" name="from">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<label>To Date</label>
								<div class="cal-icon">
									<input class="form-control end_date" type="text" name="to">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<button class="btn btn-primary btn-block" name="form_submit" value="submit" type="submit">Submit</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</form>
		<!-- /Search Filter -->
				
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-center mb-0 categories_table" id="categories_table">
								<thead>
									<tr>
										<th>#</th>
										<th>Category</th>
										<th>Date</th>
										<th>Featured</th>
										<th class="text-right">Action</th>		  
									</tr>
								</thead>
								<tbody>
								<?php
								$i=1;
								if(!empty($list)){
								foreach ($list as $rows) {
								if($rows['status']==1) {
									$val='checked';
								}
								else {
									$val='';
								}
								if(!empty($rows['created_at'])){
									$date=date(settingValue('date_format'), strtotime($rows['created_at']));
						  		}else{
									$date='-';
								}
								if($rows['is_featured']==1) {
												$val='checked';
												$tag='data-toggle="tooltip" title="Click to Deactivate User ..!"';
											}
											else {
												$val='';
												$tag='data-toggle="tooltip" title="Click to Activate User ..!"';
											}
								if($this->session->userdata('admin_id') == 1) { 
									$display_data = '';
									$display_status = '';
								} else {
									$display_data = 'd-none';
									$display_status = 'disabled';
								}
								
								echo'<tr>
								<td>'.$i++.'</td>
								<td><img class="avatar-sm rounded mr-1" src="'.base_url().$rows['thumb_image'].'" alt="Category Image"> '.$rows['category_name'].'</td>
								<td>'.$date.'</td>
								<td>
									<div>
										<div class="status-toggle">
											<input  id="status_'.$rows['id'].'" class="check change_Status_user2" data-id="'.$rows['id'].'" type="checkbox" '.$val.' '.$display_status.'>
											<label for="status_'.$rows['id'].'" class="checktoggle">checkbox</label>
										</div>
									</div> 
                                </td>
								<td class="text-right">
									<a href="'.base_url().'edit-category/'.$rows['id'].'" class="btn btn-sm bg-success-light mr-2">
										<i class="far fa-edit mr-1"></i> Edit
									</a>
									<a href="javascript:;" class="on-default remove-row btn btn-sm bg-danger-light mr-2 delete_categories '.$display_data.'" id="Onremove_'.$rows['id'].'" data-id="'.$rows['id'].'"><i class="far fa-trash-alt mr-1"></i> Delete</a></td>
								</tr>';
							
								}
								}

								else {
								echo '<tr><td colspan="4"><div class="text-center text-muted">No records found</div></td></tr>';
								}

								?>
								</tbody>
							</table>
						</div> 
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>