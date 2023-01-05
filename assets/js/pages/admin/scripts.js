$(document).ready(function() {
   $('#copy_webinar_link').on('click', function() {
      console.log('aaaaa');
      $('#view_page input').select();      
      document.execCommand("copy");
   });
});

function update_payment_status(user_id) {
   $(`#unapproved_users input[name="${user_id}"]`).prop("checked", $(`input[name="${user_id}"]`)[0].checked);
   
   let payment_status = ($(`input[name="${user_id}"]`)[0].checked ? 1 : 0);
   $(`#unapproved_users table tr[data-id='${user_id}']`).attr('payment-status', payment_status);
   
   let payment_status_data = {
      user_id: user_id,
      status: payment_status
   }
   console.log('checked_user: ', user_id);
   console.log('data: ', payment_status_data);
   $.post(`${siteUrl}Admin/updateUserPaymentStatus`, payment_status_data, function(response) {
      console.log('response: ', response);
   });
}

function update_unapproved_payment_status(user_id) {
   $(`input[name="${user_id}"]`).prop("checked", $(`#unapproved_users input[name="${user_id}"]`)[0].checked);
   
   update_payment_status(user_id);
}

function check_all_signups() {
   console.log('check all clicked');
   $('#add_signups input[type="checkbox"]').prop('checked', $('#check_all_signs').prop("checked"));   
}

function add_singups() {
   signs_amount = $('#signup_amount').val();
   $('#add_signup_success span').text(signs_amount);
   let selected_users = [];
   $('#tbl_add_signup_users tbody input[type="checkbox"]:checked').each(function() {
      selected_users.push($(this).attr('data-id'));
   });
   
   let add_signup_data = {
      selected_users: selected_users,
      amount: signs_amount
   }
   $.post(`${siteUrl}Admin/addSignUps`, add_signup_data, function(response) {
      console.log(response);
      if (response) {
         $('#add_signup_success').show();
         $('#add_signups input[type="checkbox"]').prop('checked', false);
      } else {
           
      }
   });
}

function delete_user(user_id) {
	let delete_data = {
		user_id: user_id
	}
	$.post(`${siteUrl}Admin/deleteUser`, delete_data, function(response) {
		console.log('delete: ', response);
		if(response) {
			$("tr").remove(`[data-id='${user_id}']`);
		}
	});
}
