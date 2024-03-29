<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Subscriptions</h3>
                </div>
                <div class="col-auto text-right">
                    <a href="<?php echo $base_url; ?>add-subscription" class="btn btn-primary add-button">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->


        <div class="row pricing-box">

            <?php
            if (!empty($list)) {


                foreach ($list as $subscription) {

                    $str = $subscription['fee_description'];
                    $description = (explode(" ", $str));
                    $description = $description[1];
                    //Currency Convertion Based 
                    $currency_code_old = $subscription['currency_code'];
                    $subscription_amount = get_gigs_currency($subscription['fee'], $currency_code_old, $currency_code);
                    switch ($description) {
                        case "Day":
                            $drt= "Day";
                            break;
                        case "Days":
                            $drt= "Day";
                            break;
                        case "Month":
                            $drt= "Monthly";
                            break;
                        case "Months":
                            $drt= "Monthly";
                            break;
                        case "Year":
                            $drt= "Yearly";
                            break;
                        case "Years":
                            $drt= "Yearly";
                            break;
                        default:
                            $drt= "Monthly";
                    }
                    ?>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="pricing-header">
                                    <h2><?php echo $subscription['subscription_name']; ?></h2>
                                    <p><?php echo $drt; ?> Price</p>
                                </div>              
                                <div class="pricing-card-price">
                                    <h3 class="heading2 price"><?php echo currency_code_sign(settings('currency')).$subscription_amount; ?></h3>
                                    <p>Duration: <span><?php echo $subscription['fee_description']; ?></span></p>
                                </div>
                                <ul class="pricing-options">
                                    <li><i class="far fa-check-circle"></i> One listing submission</li>
                                    <li><i class="far fa-check-circle"></i> <?php echo $subscription['fee_description']; ?> expiration</li>
                                </ul>

                                <a href="<?php echo $base_url . 'edit-subscription/' . $subscription['id']; ?>" class="btn btn-primary btn-block">Edit</a>
                            <?php if($user_role == 1) { ?>
								<button type="button" sid="<?=$subscription['id']?>" id="chkdel_subcribe" class="btn btn-danger btn-block">Delete</button>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }else {
                echo "No Data Found";
            }
            ?>
        </div>
    </div>
</div>
<div class="modal" id="sub_delete_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you confirm to Delete.</p>
      </div>
      <div class="modal-footer">
        <button type="button" id="confirm_delete_sub" data-id="" class="btn btn-primary">Confirm</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>