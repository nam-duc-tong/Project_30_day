<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js
"></script>
    <script>
        $(document).ready(function() {
            $("#tinh").click(function(){
                var file_a = $("#txtA").val();
                var file_b = $("#txtB").val();
                $.post("xuly.php",{a:file_a,b:file_b},function(data){
                    $("#ketqua").html(data);
                });
            });
        });
    </script>
</head>
<body>
    <input id = "txtA" type="text" name = "txtA" type="text"></br>
    <input id = "txtB" type="text" name = "txtB" type="text"></br>
    <input id = "tinh" type="button" value = "Gui">
    <h2 id="ketqua"></h2>
    <iframe width="1350" height="480" src="https://www.youtube.com/embed/HvbLH9swaqc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>