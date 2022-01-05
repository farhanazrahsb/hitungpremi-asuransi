<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
$('#id_okupasi').change(function(){               
$('#id_kelas').load('../cari_data_kelas.php?okupasi=' + $(this).val(),function(responseTxt,statusTxt,xhr)
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
$('#id_kelas').change(function(){               
$('#id_rate').load('../cari_data_rate_kebakaran.php?kelas=' + $(this).val(),function(responseTxt,statusTxt,xhr)
{
if(statusTxt=="success")
$('.loading').remove();
});
return false;
});
});
</script>