<div class="bg-img-blue" style="min-height: 100vh;">
   <a href="<?php echo site_url('login/logout'); ?>" class="logout_btn">Log Out</a>
   <div class="container">
      <div class="row">
         <div class="col">
            <h3 class="text-white pt-5">
               Admin Dashboard
            </h3>
            <hr class="text-white">
            <p class="text-white">
               Account Status: <?php echo $user_info['approved']; ?>
            </p>
            <p class="text-white">
               Number of Signups: <?php echo $user_info['signup_counts']; ?>
            </p>
            <p class="text-white">
               Number of Views: <?php echo $user_info['view_counts']; ?>
            </p>
            <p class="text-white">
               View Webinar: <span id="view_page"><input value="<?php echo $user_info['link']; ?>" /></span>
               <span id="copy_webinar_link">
                  <svg version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="white" width="32" height="32">
                     <g id="Text-files"></g>
                     <path d="M53.9791489,9.1429005H50.010849c-0.0826988,0-0.1562004,0.0283995-0.2331009,0.0469999V5.0228 C49.7777481,2.253,47.4731483,0,44.6398468,0h-34.422596C7.3839517,0,5.0793519,2.253,5.0793519,5.0228v46.8432999	c0,2.7697983,2.3045998,5.0228004,5.1378999,5.0228004h6.0367002v2.2678986C16.253952,61.8274002,18.4702511,64,21.1954517,64 h32.783699c2.7252007,0,4.9414978-2.1725998,4.9414978-4.8432007V13.9861002		C58.9206467,11.3155003,56.7043495,9.1429005,53.9791489,9.1429005z M7.1110516,51.8661003V5.0228		c0-1.6487999,1.3938999-2.9909999,3.1062002-2.9909999h34.422596c1.7123032,0,3.1062012,1.3422,3.1062012,2.9909999v46.8432999		c0,1.6487999-1.393898,2.9911003-3.1062012,2.9911003h-34.422596C8.5049515,54.8572006,7.1110516,53.5149002,7.1110516,51.8661003z		 M56.8888474,59.1567993c0,1.550602-1.3055,2.8115005-2.9096985,2.8115005h-32.783699		c-1.6042004,0-2.9097996-1.2608986-2.9097996-2.8115005v-2.2678986h26.3541946		c2.8333015,0,5.1379013-2.2530022,5.1379013-5.0228004V11.1275997c0.0769005,0.0186005,0.1504021,0.0469999,0.2331009,0.0469999		h3.9682999c1.6041985,0,2.9096985,1.2609005,2.9096985,2.8115005V59.1567993z"></path>
                     <path d="M38.6031494,13.2063999H16.253952c-0.5615005,0-1.0159006,0.4542999-1.0159006,1.0158005		c0,0.5615997,0.4544001,1.0158997,1.0159006,1.0158997h22.3491974c0.5615005,0,1.0158997-0.4542999,1.0158997-1.0158997		C39.6190491,13.6606998,39.16465,13.2063999,38.6031494,13.2063999z"></path>
                     <path d="M38.6031494,21.3334007H16.253952c-0.5615005,0-1.0159006,0.4542999-1.0159006,1.0157986		c0,0.5615005,0.4544001,1.0159016,1.0159006,1.0159016h22.3491974c0.5615005,0,1.0158997-0.454401,1.0158997-1.0159016		C39.6190491,21.7877007,39.16465,21.3334007,38.6031494,21.3334007z"></path>
                     <path d="M38.6031494,29.4603004H16.253952c-0.5615005,0-1.0159006,0.4543991-1.0159006,1.0158997		s0.4544001,1.0158997,1.0159006,1.0158997h22.3491974c0.5615005,0,1.0158997-0.4543991,1.0158997-1.0158997		S39.16465,29.4603004,38.6031494,29.4603004z"></path>
                     <path d="M28.4444485,37.5872993H16.253952c-0.5615005,0-1.0159006,0.4543991-1.0159006,1.0158997		s0.4544001,1.0158997,1.0159006,1.0158997h12.1904964c0.5615025,0,1.0158005-0.4543991,1.0158005-1.0158997		S29.0059509,37.5872993,28.4444485,37.5872993z"></path>
                  </svg>
                  Copy Link</span>
            </p>
            <hr class="text-white">
            <div id="admin_board">
               <div id="control_panel">
                  <button type="button" id="btn_export_csv" class="btn bg-red text-white float-end">Export as CSV</button>
               </div>
               <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" data-bs-toggle="tab" href="#user_list">User List</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-bs-toggle="tab" href="#unapproved_users">Unapproved</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-bs-toggle="tab" href="#add_signups">Add SignUps</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-bs-toggle="tab" href="#add_hits">Add Hits</a>
                  </li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane fade show active" id="user_list">
                     <table id="tbl_user_list" class="table text-white">
                        <thead>
                           <tr>
                              <th scope="col">Status</th>
                              <th scope="col">Referral ID</th>
                              <th scope="col">Signup Date</th>
                              <th scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           if ($users !== false) {
                              foreach ($users as $user) {
                           ?>
                                 <tr data-id="<?php echo $user['ID']; ?>">
                                    <td>
                                       <input type="checkbox" id="<?php echo $user['ID']; ?>" name="<?php echo $user['ID']; ?>" role="button" class="user_approve_checker" onclick="update_payment_status(<?php echo $user['ID']; ?>)" <?php echo $user['payment_status'] == 1 ? 'checked' : ''; ?>>
                                    </td>
                                    <td>
                                       <label role="button" for="<?php echo $user['ID']; ?>" onclick="update_payment_status(<?php echo $user['ID']; ?>)"> <?php echo $user['referral_id']; ?></label>
                                    </td>
                                    <td>
                                       <?php echo $user['signup_datetime']; ?>
                                    </td>
                                    <td>
                                       <label role="button" style="float: right; color: #e74c3c; cursor: pointer;" onclick="delete_user(<?php echo $user['ID']; ?>)">Delete</label>
                                    </td>
                                 </tr>
                           <?php
                              }
                           }
                           ?>
                        </tbody>
                     </table>
                  </div>
                  <div class="tab-pane fade" id="unapproved_users">
                     <table class="table text-white" id="tbl_unapproved_users">
                        <thead>
                           <tr>
                              <th scope="col" class="text-center">Status</th>
                              <th scope="col" class="text-center">Referral ID</th>
                              <th scope="col">Signup Date</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           if ($users !== false) {
                              foreach ($users as $user) {
                           ?>
                                 <tr data-id="<?php echo $user['ID']; ?>" payment-status="<?php echo $user['payment_status']; ?>">
                                    <td class="text-center">
                                       <input type="checkbox" id="unapproved_<?php echo $user['ID']; ?>" name="<?php echo $user['ID']; ?>" role="button" class="user_approve_checker" onclick="update_unapproved_payment_status(<?php echo $user['ID']; ?>)" <?php echo $user['payment_status'] == 1 ? 'checked' : ''; ?>>
                                    </td>
                                    <td>
                                       <label role="button" for="unapproved_<?php echo $user['ID']; ?>" onclick="update_unapproved_payment_status(<?php echo $user['ID']; ?>)"> <?php echo $user['referral_id']; ?></label>
                                    </td>
                                    <td>
                                       <?php echo $user['signup_datetime']; ?>
                                    </td>
                                 </tr>
                           <?php
                              }
                           }
                           ?>
                        </tbody>
                     </table>
                  </div>
                  <div class="tab-pane fade" id="add_signups">
                     <div id="add_signup_control_panel" class="py-2">
                        <label for="signup_amount" class="text-white">Singup Amounts:</label>
                        <input type="number" id="signup_amount" style="width: 80px;" name="signup_amount" value="3" class="mx-2">
                        <button class="btn bg-white text-black rounded-0 mx-2" onclick="add_singups()">Add SignUps</button>
                     </div>
                     <p class="text-white" id="add_signup_success">Added <span>3</span> Sign Ups</p>
                     <table class="table text-white" id="tbl_add_signup_users">
                        <thead>
                           <tr>
                              <th scope="col" class="text-center">
                                 <input type="checkbox" id="check_all_signs" role="button" onclick="check_all_signups()">
                              </th>
                              <th scope="col" class="text-center">Referral ID</th>
                              <th scope="col">Signup Date</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           if ($users !== false) {
                              foreach ($users as $user) {
                           ?>
                                 <tr data-id="<?php echo $user['ID']; ?>">
                                    <td class="text-center">
                                       <input type="checkbox" role="button" id="add_signups_<?php echo $user['ID']; ?>" data-id="<?php echo $user['ID']; ?>">
                                    </td>
                                    <td>
                                       <label role="button" for="add_signups_<?php echo $user['ID']; ?>"> <?php echo $user['referral_id']; ?></label>
                                    </td>
                                    <td>
                                       <?php echo $user['signup_datetime']; ?>
                                    </td>
                                 </tr>
                           <?php
                              }
                           }
                           ?>
                        </tbody>
                     </table>
                  </div>

                  <div class="tab-pane fade" id="add_hits">
                     <div id="add_hits_control_panel" class="py-2">
                        <label for="hit_amount" class="text-white">Hit Amounts:</label>
                        <input type="number" id="hit_amount" style="width: 80px;" name="hit_amount" value="1000" class="mx-2">
                        <label for="hit_duration" class="text-white">Duration:</label>
                        <input type="number" id="hit_duration" style="width: 80px;" name="hit_duration" value="30" class="mx-2">
                        <button class="btn bg-white text-black rounded-0 mx-2" onclick="add_hits()">Add Hits</button>
                     </div>
                     <p class="text-white" id="add_hits_success">Added <span>1000</span> Hits</p>
                     <table class="table text-white" id="tbl_add_hits_users">
                        <thead>
                           <tr>
                              <th scope="col" class="text-center">
                                 <input type="checkbox" id="check_all_signs" role="button" onclick="check_all_signups()">
                              </th>
                              <th scope="col" class="text-center">Referral ID</th>
                              <th scope="col">Signup Date</th>
                              <th>Hit Status</th>
                              <th>Hid End Date</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           if ($users !== false) {
                              foreach ($users as $user) {
                           ?>
                                 <tr data-id="<?php echo $user['ID']; ?>">
                                    <td class="text-center">
                                       <input type="checkbox" role="button" id="add_signups_<?php echo $user['ID']; ?>" data-id="<?php echo $user['ID']; ?>">
                                    </td>
                                    <td>
                                       <label role="button" for="add_signups_<?php echo $user['ID']; ?>"> <?php echo $user['referral_id']; ?></label>
                                    </td>
                                    <td>
                                       <?php echo $user['signup_datetime']; ?>
                                    </td>
                                    <td>
                                       <?php echo $user['signup_datetime']; ?>
                                    </td>
                                    <td>
                                       <?php echo $user['signup_datetime']; ?>
                                    </td>
                                 </tr>
                           <?php
                              }
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