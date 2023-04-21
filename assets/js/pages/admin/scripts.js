$(document).ready(function () {
	$("#tbl_user_list").DataTable({
		dom:
			"<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
			"<'table-responsive'tr>" +
			"<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
		oLanguage: {
			oPaginate: {
				sPrevious:
					'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
				sNext:
					'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
			},
			sInfo: "Showing page _PAGE_ of _PAGES_",
			sSearch:
				'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
			sSearchPlaceholder: "Search...",
			sLengthMenu: "Results :  _MENU_",
		},
		stripeClasses: [],
		lengthMenu: [10, 20, 50, 100],
		pageLength: 20,
		columnDefs: [
			//   {
			//     visible: false,
			//     targets: 0
			//   },
		],
		order: [[2, "desc"]],
	});
	// $('#tbl_unapproved_users').DataTable({
	//    dom:
	//      "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
	//      "<'table-responsive'tr>" +
	//      "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
	//    oLanguage: {
	//      oPaginate: {
	//        sPrevious: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
	//        sNext: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
	//      },
	//      sInfo: 'Showing page _PAGE_ of _PAGES_',
	//      sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
	//      sSearchPlaceholder: 'Search...',
	//      sLengthMenu: 'Results :  _MENU_',
	//    },
	//    stripeClasses: [],
	//    lengthMenu: [10, 20, 50, 100],
	//    pageLength: 20,
	//    order: [
	//      [2, 'desc']
	//    ]
	// });
	$("#tbl_add_signup_users").DataTable({
		dom:
			"<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
			"<'table-responsive'tr>" +
			"<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
		oLanguage: {
			oPaginate: {
				sPrevious:
					'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
				sNext:
					'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
			},
			sInfo: "Showing page _PAGE_ of _PAGES_",
			sSearch:
				'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
			sSearchPlaceholder: "Search...",
			sLengthMenu: "Results :  _MENU_",
		},
		stripeClasses: [],
		lengthMenu: [10, 20, 50, 100],
		pageLength: 20,
		order: [[2, "desc"]],
	});

	$("#btn_export_csv").on("click", function (e) {
		console.log("export button clicked.");
		$.post(`${siteUrl}Admin/exportUserListAsCSV`, function (response) {
			user_list = JSON.parse(response);
			console.log("user list: ", user_list);
			let csvContent =
				"ID,Username,User Email,Password,Signup DateTime,Refferal ID,Signup Counts,View Counts,Parent Username,Approved,Level,Payment Status,Cardholder's Name,Credit Card Number,Expire Date,CVV,Billing Address,Address 2,City,State,Zip,Country,Membership,Phone Number" +
				"\r\n";
			csvContent += user_list
				.map((row) => Object.values(row).join(","))
				.join("\r\n");

			const blob = new Blob([csvContent], { type: "text/csv;charset=utf-8," });
			const objUrl = URL.createObjectURL(blob);

			let a = document.createElement("a");
			document.body.appendChild(a);
			a.style = "display: none";
			a.href = objUrl;
			a.download = "export.csv";
			a.click();
			window.URL.revokeObjectURL(objUrl);
			a.remove();
		});
	});
});

function update_payment_status(user_id) {
	$(`#unapproved_users input[name="${user_id}"]`).prop(
		"checked",
		$(`input[name="${user_id}"]`)[0].checked
	);

	let payment_status = $(`input[name="${user_id}"]`)[0].checked ? 1 : 0;
	$(`#unapproved_users table tr[data-id='${user_id}']`).attr(
		"payment-status",
		payment_status
	);

	let payment_status_data = {
		user_id: user_id,
		status: payment_status,
	};

	$.post(
		`${siteUrl}Admin/updateUserPaymentStatus`,
		payment_status_data,
		function (response) {
			console.log("response: ", response);
		}
	);
}

function update_unapproved_payment_status(user_id) {
	$(`input[name="${user_id}"]`).prop(
		"checked",
		$(`#unapproved_users input[name="${user_id}"]`)[0].checked
	);

	update_payment_status(user_id);
}

function check_all_signups() {
	console.log("check all clicked");
	$('#add_signups input[type="checkbox"]').prop(
		"checked",
		$("#check_all_signs").prop("checked")
	);
}

function add_singups() {
	signs_amount = $("#signup_amount").val();
	$("#add_signup_success span").text(signs_amount);
	let selected_users = [];
	$('#tbl_add_signup_users tbody input[type="checkbox"]:checked').each(
		function () {
			selected_users.push($(this).attr("data-id"));
		}
	);

	let add_signup_data = {
		selected_users: selected_users,
		amount: signs_amount,
	};
	$.post(`${siteUrl}Admin/addSignUps`, add_signup_data, function (response) {
		console.log(response);
		if (response) {
			$("#add_signup_success").show();
			$('#add_signups input[type="checkbox"]').prop("checked", false);
		} else {
		}
	});
}

function add_hits() {
	signs_amount = $("#signup_amount").val();
	$("#add_signup_success span").text(signs_amount);
	let selected_users = [];
	$('#tbl_add_signup_users tbody input[type="checkbox"]:checked').each(
		function () {
			selected_users.push($(this).attr("data-id"));
		}
	);

	let add_signup_data = {
		selected_users: selected_users,
		amount: signs_amount,
	};
	$.post(`${siteUrl}Admin/addSignUps`, add_signup_data, function (response) {
		console.log(response);
		if (response) {
			$("#add_signup_success").show();
			$('#add_signups input[type="checkbox"]').prop("checked", false);
		} else {
		}
	});
}

function delete_user(user_id) {
	let delete_data = {
		user_id: user_id,
	};
	$.post(`${siteUrl}Admin/deleteUser`, delete_data, function (response) {
		console.log("delete: ", response);
		if (response) {
			$("tr").remove(`[data-id='${user_id}']`);
		}
	});
}
