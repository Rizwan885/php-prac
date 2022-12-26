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
    <form>
        <label>Country: </label>
        <select name="" id="country">
            <option value="">Select Country</option>
        </select>
        <hr>
        <hr>
        <label>State: </label>
        <select name="" id="state">
            <option value=""></option>
        </select>
        
    </form>

    <script>
    $(document).ready(function(){
        function loadData(type,category){
            $.ajax({
            url:"countriesdata.php",
            type:"POST",
            data:{type:type,id:category},
            success:function(data)
            {
                if(type=="stateData")
                {

                    $('#state').html(data);
                }
                else
                {

                    $('#country').append(data);
                }
            }
        });
        }
        loadData();

        $('#country').on('change',function(){
            var country=$('#country').val();
            loadData("stateData",country);
        })
       
    });
    </script>
</body>
</html>