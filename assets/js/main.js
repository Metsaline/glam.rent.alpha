$('#bronProduct').validate({
	ignore: "",
	rules: {
	},
	messages: {},
	submitHandler: function(form) {
		
		var form = $('#bronProduct')[0];
        var formData = new FormData(form);
        event.preventDefault();

		$.ajax({
            type:'POST',
            url: "../ajax/order.php",
			dataType: "json",
            data: formData,
			cache:false,
            contentType: false,
            processData: false,
            success:function(data){
				if (data.success === "1") {
					location.href = data.url;
				} else {
				}
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
            }
        });

	}
});


function LoadCategory() { 
	$.getJSON( "ajax/main.php", {'LoadCategory':"1"}, function( data ) {
		if (data.success === "0") {
		} else {
			
		}
	});
}

function OrderPay(cart_id) {
	$.getJSON( "ajax/order.php", {'OrderPay':"1","cart_id":cart_id}, function( data ) {
		location.href = data.url;
	});
}
