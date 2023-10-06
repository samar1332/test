<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        body{
            padding:20px;
            margin:20px;
        }
    </style>
</head>
<body>
    <h1 id="header">Input</h1>
    <div class="div">
        <form id="form">
            <input class = "form-control mt-2 mb-2 text" type="text" name="number" placeholder="Enter any text">
            <button type="button" id="submit"  class= "btn btn-primary">Submit</button>
        </form>

        <hr>
        <h2>Response</h2>
        <div class="shadow p-4 mb-5 bg-light text-primary rounded" id="response">

        </div>
    </div>
     
    <script type="text/javascript">

        $(document).ready(function(){
            
            $("#submit").click(function(){
                var text=$(".text").val();
                // console.log(text);
                // var temp='<h1 class="display-1" style="color:#124f63;">'+text+'</h1>';
                // $("#response").html(temp);
                // $("#header").toggle();

                //To send asynchronous request
                var loader='<div class="spinner-grow text-primary" role="status"><span class="sr-only">Loading...</span></div>'+
                '<div class="spinner-grow text-secondary" role="status">'+
                '<span class="sr-only">Loading...</span>'+
                '</div>';
                $("#response").html(loader);
                $.ajax({
                    type:"POST",
                    url:"api/rest_api.php",
                    data:{
                        get_text:text
                    },
                    success:function(evt){
                        console.log(evt);

                        setTimeout(function(){
                            $("#response").html(evt);

                        },3000);

                    },error:function(evt){
                        console.log(evt);
                        alert("Error Occured");
                    }
                });
            });

            //on key up
            // $(".text").blur(function(){
            //     var val =$(this).val();
            //     console.log(val);
            //     $("#response").html(val);
            // });

            $("#header").dblclick(function(){
                $(this).css({
                    "color": "blue"
                });

                $(this).prop("contenteditable", true);
            });



        });

    </script>
    


</body>
</html>