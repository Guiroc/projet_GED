$('.read').click(function(){
		var identifiant = $(this).data('id');
		$('#base').load('kernel/controller/Document/c_read_document.php',{id : identifiant,});
});
$('#retour').click(function(){
		$('#base').load('kernel/controller/Document/c_document.php');
});
$('#nouveau').click(function(){
		$('#base').load('kernel/controller/Document/c_insert_document.php');
});