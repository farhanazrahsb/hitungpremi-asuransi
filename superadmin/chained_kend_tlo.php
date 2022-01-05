<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
$('#id_kategori').change(function(){               
$('#id_wilayah').load('../cari_data_wilayah_tlo.php?kategori=' + $(this).val(),function(responseTxt,statusTxt,xhr)
{
if(statusTxt=="success")
$('.loading').remove();
});
return false;
});
});
</script>

<script type="text/javascript">
$(function(){
$('#id_wilayah').change(function(){               
$('#id_rate').load('../cari_data_rate_tlo.php?wilayah=' + $(this).val(),function(responseTxt,statusTxt,xhr)
{
if(statusTxt=="success")
$('.loading').remove();
});
return false;
});
});
</script>
