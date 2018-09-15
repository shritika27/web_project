function delete_doctor_records(id){
	if(confirm("are you sure you want to delete record!!!")){
	document.doctor_view.act.value="delete_doctor_records";
	document.doctor_view.id.value=id;
	document.doctor_view.submit();
	}
}
function delete_secques_records(id){
	if(confirm("are you sure you want to delete record!!!")){
	document.security_question_view.act.value="delete_secques_records";
	document.security_question_view.id.value=id;
	document.security_question_view.submit();
	}
}

function delete_digcenter_records(id)
{
	if(confirm("are you sure you want to delete the record"))
	{
		document.digcenter_view.act.value="delete_digcenter_records";
		document.digcenter_view.id.value=id;
		document.digcenter_view.submit();
	}
}
function delete_payment_records(id)
{
	if(confirm("are you sure you want to delete the record"))
	{
		document.payment_form.act.value="delete_payment_records";
		document.payment_form.id.value=id;
		document.payment_form.submit();
	}
}

function delete_patient_records(id){
	if(confirm("are you sure you want to delete record!!!")){
	document.patient_view.act.value="delete_patient_records";
	document.patient_view.id.value=id;
	document.patient_view.submit();
	}
}

function readfile_name(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
				$('#profile_img').attr('src', e.target.result).width(100).height(100);
		};
		reader.readAsDataURL(input.files[0]);
	}
}

/* Use Print Function */

function printData(){
	window.print();
}

/* end print function code */


/* doctor registration file code */

function checkdr_email(){
		var data = jQuery(".check1_email #dr_email").val();
		
		jQuery.ajax({
			method: 'POST',
			url : '_doctor/lib/doctor.php',
			data: {'dr_email': data, 'act': 'check_email'}
		}).done(function(response){
			jQuery(".mail_notification").html(response);
			console.log(response);
		}).fail(function(response){
			console.log("Fail");
		});
		
	}	
	
function check_pass(){
	var slen = jQuery("#pwd").val().length;
	if(slen < "4"){
		jQuery(".pass_notification").html("");
	}
	if(slen == "4"){
		jQuery(".pass_notification").html("<b style='color:red;'>Weak</b>");
	}
	if(slen == "7"){
		jQuery(".pass_notification").html("<b style='color:yellow;'>Good</b>");
	}
	if(slen > "8"){
		jQuery(".pass_notification").html("<b style='color:green;'>Strong</b>");
	}
}

/* end code doctor registration file */

	
/* code for dr_registration form validation */
function validation(frm) {
    if (frm.dr_name.value == "") {
        alert("Please enter doctor name");
		frm.dr_name.focus();
        return false;
    }
	if (frm.dr_gender[0].checked == false && frm.dr_gender[1].checked == false ) {
        alert("You must select male or female");
		frm.dr_gender[1].checked = true;
        return false;
    }
	
	if (frm.dr_contactnumber.value == "") {
        alert("Please enter doctor number");
		frm.dr_contactnumber.focus();
		return false;
    }
	if (frm.dr_email.value == "") {
        alert("Please enter doctor email");
		frm.dr_email.focus();
		return false;
    }
	if (frm.dr_pass.value == "") {
        alert("please enter doctor password");
		frm.dr_pass.focus();
		return false;
    }
	if (frm.dr_cpass.value == "") {
        alert("Please enter doctor cnfirm password");
		frm.dr_cpass.focus();
		return false;
    }	
	if ( frm.dr_pass.value != frm.dr_cpass.value ) {
        alert("Your password not match !! Please enter confirm password.");
		frm.dr_cpass.focus();
		return false;
    }
	if (frm.dr_qualification.value == "") {
        alert("Please enter your qualification");
		frm.dr_qualification.focus();
		return false;
    }
	 if (frm.dr_specialization.value == "") {
        alert("Please enter doctor specialization");
		frm.dr_specialization.focus();
		return false;
    }
	 if (frm.dr_worklocation.value == "") {
        alert("Please enter doctor location");
		frm.dr_worklocation.focus();
		return false;
    }
	 if (frm.dr_sec_question.value == "0") {
        alert("Please enter doctor security question");
		frm.dr_sec_question.focus();
		return false;
    }
	 if (frm.dr_sec_answer.value == "") {
        alert("Please enter doctor security answer");
		frm.dr_sec_answer.focus();
		return false;
    }
	 if (frm.dr_bookingprice.value == "") {
        alert("Please enter doctor booking price");
		frm.dr_bookingprice.focus();
		return false;
    }
	return true;
}
/*  end code for dr_registration form validation */

/* code for diagnosis registration form validation */
function valid(frm) {
    if (frm.dia_name.value == "") {
        alert("Please enter diagnosis name");
		frm.dia_name.focus();
        return false;
    }
	
	if (frm.dia_contnum.value == "") {
        alert("Please enter diagnosis number");
		frm.dia_contnum.focus();
		return false;
    }
	if (frm.dia_email.value == "") {
        alert("Please enter diagnosis email");
		frm.dia_email.focus();
		return false;
    }
	if (frm.dia_pass.value == "") {
        alert("please enter diagnosis password");
		frm.dia_pass.focus();
		return false;
    }
	if (frm.dia_cpass.value == "") {
        alert("Please enter confirm password");
		frm.dia_cpass.focus();
		return false;
    }	
	if ( frm.dia_pass.value != frm.dia_cpass.value ) {
        alert("Your password not match !! Please enter confirm password.");
		frm.dia_cpass.focus();
		return false;
    }
	 if (frm.dia_loc.value == "") {
        alert("Please enter diagnosis location");
		frm.dia_loc.focus();
		return false;
    }
	 if (frm.dia_secqus.value == "0") {
        alert("Please enter diagnosis security question");
		frm.dia_secqus.focus();
		return false;
    }
	 if (frm.dia_secans.value == "") {
        alert("Please enter diagnosis security answer");
		frm.dia_secans.focus();
		return false;
    }
	 if (frm.dia_bookingprice.value == "") {
        alert("Please enter diagnosis booking price");
		frm.dia_bookingprice.focus();
		return false;
    }
	if (frm.dia_govapprove[0].checked == false && frm.dia_govapprove[1].checked == false ) {
        alert("You must select approve or not");
		frm.dia_govapprove[1].checked = true;
        return false;
    }
	if (frm.dia_dateapprove.value == "") {
        alert("Please enter government approve date");
		frm.dia_dateapprove.focus();
		return false;
    }
	return true;
}
/*  end code for dia_registration form validation */

/* code for patient_registration form validation */
function patient_valid(frm) {
    if (frm.patient_name.value == "") {
        alert("Please enter patient name");
		frm.patient_name.focus();
        return false;
    }
   if (frm.patient_gender[0].checked == false && frm.patient_gender[1].checked == false ) {
        alert("You must select male or female");
		frm.patient_gender[1].checked = true;
        return false;
    }
	if (frm.patient_dateofbirth.value == "") {
        alert("Please enter patient date of birth");
		frm.patient_dateofbirth.focus();
		return false;
    }
	
	if (frm.patient_contactnumber.value == "") {
        alert("Please enter contact number");
		frm.patient_contactnumber.focus();
		return false;
    }
	if (frm.patient_email.value == "") {
        alert("Please enter email id");
		frm.patient_email.focus();
		return false;
    }
	if (frm.patient_pass.value == "") {
        alert("Please enter your password");
		frm.patient_pass.focus();
		return false;
    }
	if (frm.patient_cpass.value == "") {
        alert("Please enter confirm password");
		frm.patient_cpass.focus();
		return false;
    }
	if ( frm.patient_cpass.value != frm.patient_pass.value ) {
        alert("Your password not match !! Please enter confirm password.");
		frm.patient_cpass.focus();
		return false;
    }
	if (frm.patient_group[0].checked == false && frm.patient_group[1].checked == false && frm.patient_group[2].checked == false && frm.patient_group[3].checked == false && frm.patient_group[4].checked == false && frm.patient_group[5].checked == false && frm.patient_group[6].checked == false && frm.patient_group[7].checked == false ) {
        alert("You must select blood group");
		frm.patient_group[0].checked = true;
        return false;
    }
	 if (frm.patient_problem.value == "") {
        alert("Please enter your problem");
		frm.patient_problem.focus();
		return false;
    }
	 if (frm.patient_location.value == "") {
        alert("Please enter your current location");
		frm.patient_location.focus();
		return false;
    }
	 if (frm.patient_sec_ques.value == "0") {
        alert("Please select security question");
		frm.patient_sec_ques.focus();
		return false;
    }
	 if (frm.patient_sec_ans.value == "") {
        alert("Please enter security answer");
		frm.patient_sec_ans.focus();
		return false;
    }
	
	return true;
}
/*  end code for patient registration form validation */