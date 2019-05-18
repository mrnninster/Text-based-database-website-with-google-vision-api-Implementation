
   	$("#deji").click(function() {
        $.getJSON("script/contact.json",function(contactObj){


            $.each(contactObj, function(key, value){
                    $("#dejip").append("<li>"+value.deji+"</li>");
            });

        });
    });


   	$("#demi").click(function() {
        $.getJSON("script/contact.json",function(contactObj){


            $.each(contactObj, function(key, value){
                    $("#put").append("<li>"+value.demi+"</li>");
            });

        });
    });

       	$("#khaulat").click(function() {
        $.getJSON("script/contact.json",function(contactObj){


            $.each(contactObj, function(key, value){
                    $("#khaulatp").append("<li>"+value.khaulat+"</li>");
            });

        });
    });
        $("#Alfawaaz").click(function() {
        $.getJSON("script/contact.json",function(contactObj){


            $.each(contactObj, function(key, value){
                    $("#Alfawaazp").append("<li>"+value.Alfawaaz+"</li>");
            });

        });
    });
         $("#jonadzy").click(function() {
        $.getJSON("script/contact.json",function(contactObj){


            $.each(contactObj, function(key, value){
                    $("#jonadzyp").append("<li>"+value.jonadzy+"</li>");
            });

        });
    });
          $("#tife").click(function() {
        $.getJSON("script/contact.json",function(contactObj){


            $.each(contactObj, function(key, value){
                    $("#tifep").append("<li>"+value.tife+"</li>");
            });

        });
    });