$('.read').click(function(){
		var identifiant = $(this).data('id');
		$('#base').load('kernel/controller/c_read_document.php',{id : identifiant,});
});
$('#retour').click(function(){
		$('#base').load('kernel/controller/c_document.php');
});