jQuery(document).ready(function(){
show();
    function show(){
        $.ajax({
            url:"function.php",
            type:"POST",
            data:{
                'action':"show"
            },
            success:function(responce){
                jQuery(".tdata").html(responce);
            }
        })

    }
    jQuery(".send").click(function(){
        var student_name =jQuery("#student_name").val();
        var fathers_name=jQuery("#fathers_name").val();
        var mothers_name=jQuery("#mothers_name").val();
        var email=jQuery("#email").val();
        var status=jQuery("#status").val();
        var action="insert";
        $.ajax({
            url:"function.php",
            type:"POST",
            data:{
                'student_name':student_name,
                'fathers_name':fathers_name,
                'mothers_name':mothers_name,
                'email':email,
                'status':status,
                'action':action,
            },
            success:function(responce){
                show();
                jQuery(".msg").html(responce);
                jQuery(".msg").fadeOut(2000);
                student_name =jQuery("#student_name").val("");
                fathers_name=jQuery("#fathers_name").val("");
                mothers_name=jQuery("#mothers_name").val("");
                email=jQuery("#email").val("");
                status=jQuery("#status").val("");
            }
        })
    });
    jQuery(document).on("click", ".btn-active", function(){
        var id = jQuery(this).val();
    	$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'action':"active",
				'id':id
			},
			success:function(response){
				show();
			}
		})

    });

    jQuery(document).on("click", ".btn-inactive", function(){
    	var id = jQuery(this).val();
    	$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'action':"inactive",
				'id':id
			},
			success:function(response){
				show();
			}
		})

    });

    jQuery(document).on("click", ".delete", function(){
    	var id = jQuery(this).val();
        jQuery(".MbtnDelete").val(id);
    	// $.ajax({
		// 	url:"function.php",
		// 	type:"POST",
		// 	data:{
		// 		'action':"delete",
		// 		'id':id
		// 	},
		// 	success:function(response){
		// 		show();
		// 	}
		// })

    });
   

    jQuery(document).on("click", ".MbtnDelete", function(){
		var id = jQuery(this).val();
    	$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'action':"delete",
				'id':id
			},
			success:function(response){
				show();
				jQuery("#forDelete").modal("hide");
			}
		})

    });
    jQuery(".MaddNew").click(function(){
		var edit_student_name = jQuery(".edit_student_name").val();
		var edit_fathers_name = jQuery(".edit_fathers_name").val();
		var edit_mothers_name = jQuery(".edit_mothers_name").val();
		var edit_email = jQuery(".edit_email").val();
		var edit_status = jQuery(".edit_status").val();
		var action = "insert";

		$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'edit_student_name':edit_student_name,
				'edit_fathers_name':edit_fathers_name,
				'edit_mothers_name':edit_mothers_name,
				'edit_email':edit_email,
				'edit_status':edit_status,
				'action':action
			},
			success:function(response){
				show();
				jQuery(".msg").html(response);
				jQuery(".msg").fadeOut(2000);
				jQuery(".edit_student_name").val("");
				jQuery(".edit_fathers_name").val("");
				jQuery(".edit_mothers_name").val("");
				jQuery(".edit_email").val("");
				jQuery(".edit_status").val("");
				jQuery("#forInsert").modal("hide");
			}
		})
	});
	
});