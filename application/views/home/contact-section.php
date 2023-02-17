<?php defined("BASEPATH") or exit(); ?>

<section id="contact_section">
   <div class="container">
      <div class="row">
         <div class="col-lg-7 col-sm-12">
            <div class="green-border p-3 mb-3">
               <p class="text-center text-white sub-title mb-0">
                  Don’t Need To Call??<br>
                  I’M READY TO JOIN!!!
               </p>
            </div>
            <div class="green-border p-3 mb-3">
               <p class="text-center text-white sub-title mb-0">
                  Fill Out The Form Below
               </p>

               <form id="signup_form" class="mb-3">
                  <input type="hidden" id="parent_referral_id" name="parent_referral_id" value="admin">
                  <div class="mb-3">
                     <input type="text" class="form-control" id="card_name" name="card_name" placeholder="Cardholder's Name" required>
                  </div>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="credit_card_name" name="credit_card_name" placeholder="Credit Card Number" required>
                  </div>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="expire_date" name="expire_date" placeholder="Expiration Date ex. 10/24 or 1024" required>
                  </div>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="cvv_card" name="cvv_card" placeholder="CVV - 3 digit code on back of card" required>
                  </div>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="bill_addr" name="bill_addr" placeholder="Billing Address - ex. 123 Main St." required>
                  </div>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="addr_2" name="addr_2" placeholder="Address 2 (optional)">
                  </div>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="city_region" name="city_region" placeholder="City or Region" required>
                  </div>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="state_province" name="state_province" placeholder="State - Province" required>
                  </div>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code - Postal Code" required>
                  </div>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                  </div>
                  <div class="mb-3">
                     <select id="membership" name="membership" class="form-select" required>
                        <option value="Royal Monthly Membership">Royal Monthly Membership</option>
                        <option value="$9.99 For First 30 Days / Royal Membership" selected="selected">$9.99 For First 30 Days / Royal Membership</option>
                     </select>
                  </div>
                  <div class="mb-3">
                     <input type="email" class="form-control" id="email" name="email" placeholder="Enter Valid Email" required>
                  </div>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="username" name="username" placeholder="Enter New Login Username" required>
                     <p id="duplicate_user_alert" class="d-none text-red">Username has already exists!</p>
                  </div>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="password" name="password" placeholder="Enter New Login Password" required>
                  </div>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="referral_id" name="referral_id" placeholder="Create Your Referral ID: ONLY LETTERS & NUMBERS - ex.  BobsMoneytree1" required>
                     <p id="duplicate_referral_id_alert" class="d-none text-red">Referral ID has already exists!</p>
                     <p id="invalid_referral_id_alert" class="d-none text-red">Only Enter Numbers & Letters ( No spaces & No special symbols )!</p>
                  </div>
                  <div class="mb-3">
                     <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" required>
                  </div>
                  <input type="submit" class="btn bg-green w-100 rounded-pill text-white text-uppercase strong-txt p-3" value="Pay Now">
               </form>

               <p class="text-center text-white mb-0">
                  <strong>Your Total Payment Today Is $9.99 for 1st 30 Days</strong>
               </p>
               <p class="text-center text-white">
                  $199 will be rebilled automatically every 30 days for as long as you remain a member, cancel at any time. NOTE* If you cancel you will lose your existing monthly commissions
               </p>
               <img src="<?php echo base_url(); ?>assets/imgs/payment_icon_list_img-300x39.png" width="300" height="39" alt="" class="mx-auto d-block" />
               <p class="text-center text-white">
                  <strong>After payment is complete, your webinar is created immediately. You will be directed straight into your backend dashboard. Make sure to remember your login username and password</strong>
               </p>
               <p class="text-center text-white">
                  <strong>Once inside dashboard you will have access to the Free Traffic Checklist, so you can begin sending traffic to your new webinar</strong>
               </p>
               <p class="text-center text-white">
                  <strong>Your success coach will contact you within 24 hours.</strong>
               </p>
            </div>
         </div>
         <div class="col-lg-5 col-sm-12">
            <div class="green-border mb-3 p-3">
               <p class="text-center text-white sub-title mb-0">
                  48 Hour Upgrade Bonus!
               </p>
               <div class="countdown-container">
                  <div class="days-container">
                     <div class="days"></div>
                     <div class="days-label">days</div>
                  </div>
                  <div class="hours-container">
                     <div class="hours"></div>
                     <div class="hours-label">hours</div>
                  </div>
                  <div class="minutes-container">
                     <div class="minutes"></div>
                     <div class="minutes-label">minutes</div>
                  </div>
                  <div class="seconds-container">
                     <div class="seconds"></div>
                     <div class="seconds-label">seconds</div>
                  </div>
               </div>
               <p style="text-align: center; color: white; font-size: 16px; font-family: 'Muli',Helvetica,Arial,Lucida,sans-serif; margin-top: 20px;">
                  Join Within 48 Hours and get started for Only $9.99, for your first 30 Days! Completely Risk Free, Cancel Anytime
               </p>
            </div>

            <div class="green-border p-3 mb-3 d-flex">
               <div style="width: 60px;">
                  <img src="<?php echo base_url(); ?>assets/imgs/privacy_icon.png" width="40" />
               </div>
               <div>
                  <p class="strong-txt text-white">
                     Privacy
                  </p>
                  <p class="text-white">
                     We never store or sell your private data
                  </p>
               </div>
            </div>
            <div class="green-border p-3 mb-3 d-flex">
               <div style="width: 60px;">
                  <img src="<?php echo base_url(); ?>assets/imgs/secure_order_icon.png" width="40" />
               </div>
               <div>
                  <p class="strong-txt text-white">
                     Secure Order
                  </p>
                  <p class="text-white">
                     256 bit encryption
                  </p>
               </div>
            </div>

            <div class="green-border p-3 mb-3 d-flex">
               <div style="width: 60px;">
                  <img src="<?php echo base_url(); ?>assets/imgs/approved_icon.png" width="40" />
               </div>
               <div>
                  <p class="strong-txt text-white">
                     Approved Content
                  </p>
               </div>
            </div>
         </div>
      </div>
</section>

<script>
   $(document).ready(function() {
      setTimeout(function() {
         let domain_url = `<?php echo base_url(); ?>`;
         let current_url = window.location.href;
         if (domain_url.slice(-1) == '/') {
            domain_url = domain_url.slice(0, -1);
         }
         if (current_url.slice(-1) == '/') {
            current_url = current_url.slice(0, -1);
         }

         let admin_username = 'admin';
         parent_referral_id = 'admin';

         if (current_url != domain_url) {
            parent_referral_id = current_url.replace(`${domain_url}/?`, '').split('#')[0];
         }
         $('#parent_referral_id').attr('value', parent_referral_id);
      }, 2000);

      $('#username').keyup(function() {
         if (!$('#duplicate_user_alert').hasClass('d-none')) {
            $('#duplicate_user_alert').addClass('d-none');
         }
      });

      $('#referral_id').keyup(function() {
         if (!$('#duplicate_referral_id_alert').hasClass('d-none')) {
            $('#duplicate_referral_id_alert').addClass('d-none');
         }
         let referral_id = $('#referral_id').val();
         if (referral_id == '')
            return;
         console.log(referral_id);
         console.log('string checker:', /^([a-zA-Z0-9]{1,})$/.test(referral_id));
         if (!/^([a-zA-Z0-9]{1,})$/.test(referral_id)) {
            $('#invalid_referral_id_alert').removeClass('d-none');
            $('#signup_form input[type="submit"]').prop("disabled", true);
            return;
         } else {
            if (!$('#invalid_referral_id_alert').hasClass('d-none')) {
               $('#invalid_referral_id_alert').addClass('d-none');
            }
            $('#signup_form input[type="submit"]').prop("disabled", false);
         }
      });

      $('#signup_form').submit(function() {
         let post_data = $('#signup_form').serialize();
         console.log('submit url: ', `<?php echo base_url('email'); ?>`);
         $.post(`<?php echo base_url('email'); ?>`, post_data, function(data) {
            console.log('submit result: ', data);
            switch (data) {
               case 'Username has already exists!':
                  $('#duplicate_user_alert').removeClass('d-none');
                  break;
               case 'Referral ID has already exists!':
                  $('#duplicate_referral_id_alert').removeClass('d-none');
                  break;
               default:
                  window.location.href = `<?php echo base_url('login'); ?>`;
            }
         });

         return false;
      });
   });
</script>