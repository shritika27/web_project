function delete_digcenter_app_records(id)
{
	if(confirm("are you sure you want to delete the record"))
	{
		document.digcenter_app_view.act.value = "delete_digcenter_app_records";
		document.digcenter_app_view.id.value = id;
		document.digcenter_app_view.submit();
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