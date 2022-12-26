<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.3.min.js"></script>
</head>
<body>
    <div id="content">
        <form action="main.php" method="post">
         <input type="text" name="firstname"/>
         <input type="submit" value="submit"/>
        </form>
    </div>


    <script>
        // $(document).ready(function(){
        //   $.ajax({
        //     url:'main.php',
        //     type:'GET',
        //     success:function(data)
        //     {
        //         $.each(data,function(key,value){
        //             $('.abc').append(value.id +" "+value.body +"<br/>")
        //         })
        //     }
        //   });
        // });
    </script>
</body>
</html>