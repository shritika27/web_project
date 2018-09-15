function delete_doctor_records(id){
	if(confirm("are you sure you want to dalete record!!!")){
	document.doctor_view.act.value="delete_doctor_records";
	document.doctor_view.id.value=id;
	document.doctor_view.submit();
	}
}
function delete_secques_records(id){
	if(confirm("are you sure you want to dalete record!!!")){
	document.doctor_view.act.value="delete_secques_records";
	document.doctor_view.id.value=id;
	document.doctor_view.submit();
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
  
  
  function delete_doctor_app_records(id)
  {
	  if(confirm("are you sure u want to delete the records"))
	  {
		  document.doctor_app_view.act.value="delete_doctor_app_records";
		  document.doctor_app_view.id.value=id;
		  document.doctor_app_view.submit();
	  }
  }	  
  
 