function openPopUp(obj)
{
	var data = $(obj).serialize();

	var url = BASE+'report/inventory_pdf?'+data;
	window.open(url, "report", "width=700, heigth=500");

	return false;
}