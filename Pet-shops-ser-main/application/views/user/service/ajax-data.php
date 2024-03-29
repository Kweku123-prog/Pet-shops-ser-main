
						
						<?php
							$this->session->flashdata('success_message');
							$placholder_img = $this->db->get_where('system_settings', array('key'=>'service_placeholder_image'))->row()->value;
							if(!empty($services)){
								foreach ($services as $srows) {
									$mobile_image=explode(',', $srows['mobile_image']);
									$this->db->select("service_image");
									$this->db->from('services_image');
									$this->db->where("service_id",$srows['id']);
									$this->db->where("status",1);
									$image = $this->db->get()->row_array(); 
									$this->db->select('AVG(rating)');
									$this->db->where(array('service_id'=>$srows['id'],'status'=>1));
									$this->db->from('rating_review');
									$rating = $this->db->get()->row_array();
									$avg_rating = round($rating['AVG(rating)'],1);    
									$provider_details = $this->db->where('id',$srows['user_id'])->get('providers')->row_array();
									$service_availability=$this->db->where('service_id',$srows['id'])->where('status!=',6)->where('status!=',7)->from('book_service')->count_all_results();

                                ?>
								
									<div class="col-lg-4 col-md-6">
										<div class="service-widget">
											<div class="service-img">
												<a href="<?php echo base_url().'service-preview/'.$srows['id'].'?sid='.md5($srows['id']);?>">
												<?php if ($image['service_image'] != '' && (@getimagesize(base_url().$image['service_image']))) { ?>
													<img class="img-fluid serv-img" alt="Service Image" src="<?php echo base_url() . $image['service_image']; ?>">
												<?php } else { ?>
													<img class="img-fluid serv-img" alt="Service Image" src="<?php echo ($placholder_img)? base_url().$placholder_img:base_url().'uploads/placeholder_img/1641376248_user.jpg'; ?>">
												<?php } ?>  
												</a>
												<div class="item-info">
													<div class="service-user">
														<a href="javascript:void(0);">
															<?php if(file_exists($provider_details['profile_img'])) { ?>
															<img src="<?php echo base_url().$provider_details['profile_img']?>">
															<?php } else { ?>
																<img src="<?php echo base_url();?>assets/img/user.jpg">
															<?php } ?>
														</a>
														<span class="service-price"><?php echo currency_conversion(settings('currency')).$srows['service_amount'];?></span>
													</div>
													<div class="cate-list">
														<a class="bg-yellow" href="<?php echo base_url().'search/'.str_replace(' ', '-', strtolower($srows['category_name']));?>"><?php echo $srows['category_name'];?></a>
													</div>
												</div>
											</div>
											<div class="service-content">
												<h3 class="title">
													<a href="<?php echo base_url().'service-preview/'.$srows['id'].'?sid='.md5($srows['id']);?>"><?php echo $srows['service_title'];?></a>
												</h3>
												<div class="rating">

													<?php 
													for($x=1;$x<=$avg_rating;$x++) {
														echo '<i class="fas fa-star filled"></i>';
													}
													if (strpos($avg_rating,'.')) {
														echo '<i class="fas fa-star"></i>';
														$x++;
													}
													while ($x<=5) {
														echo '<i class="fas fa-star"></i>';
														$x++;
													}
													?>
													<span class="d-inline-block average-rating">(<?php echo $avg_rating?>)</span>
												</div>
												<div class="user-info">
													<div class="row">
														<span class="col ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx<?=rand(00,99)?></span></span>
															<span class="col ser-location"><span><?php echo $srows['service_location'];?></span> <i class="fas fa-map-marker-alt ml-1"></i></span>
													</div>
													<div class="service-action">
														<div class="row">
															<div class="col"><a href="<?php echo base_url()?>user/service/edit_service/<?php echo $srows['id']?>" class="text-success"><i class="far fa-edit"></i> Edit</a></div>
															<?php if($service_availability==0){?>
															
															<div class="col text-right"><a href="javascript:void(0);" class="si-delete-service text-danger" data-id="<?php echo $srows['id']; ?>"><i class="fas fa-info-circle"></i> Inactive</a></div>
														<?php }else{?>
															<div class="col text-right"><a href="javascript:void(0);" class="text-danger" data-toggle="modal" data-target="#deleteNotConfirmModal"><i class="far fa-trash-alt"></i> Inactive</a></div>
														<?php }?>
														</div>
													</div>
												</div>											
											</div>
										</div>								
									</div>
									<?php } }
									else{
										echo '<div class="col-xl-12 col-lg-12">No Services Found</div>';
									} ?>
                                  
					<!-- Pagination Links -->
					<?php 
					if(!empty($services)){
						echo $this->ajax_pagination->create_links();
					} ?>