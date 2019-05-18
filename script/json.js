 

 
   	$("button").click(function() {
        $.getJSON("contact.json",function(contactObj){


            $.each(function(key, value){
                    $("ul").append("<li>"+value.khaulat+"</li>");
            });

        });
    });
