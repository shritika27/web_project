
function delete_patient_records(id)
{
	if(confirm("are you sure you want to delete the record"))
	{
		document.patient_view.act.value="delete_patient_records";
		document.patient_view.id.value=id;
		document.patient_view.submit();
	}
}
function delete_booked_app_records(id)
{
	if(confirm("are you sure you want to delete the record"))
	{
		document.booked_app_view.value="delete_booked_app_records";
		document.booked_app_view.id.value=id;
		document.booked_app_view.submit();
	}
}