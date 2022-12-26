<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.3.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
</head>
<body>
    <div id="content">
    <button id="abc">Show data</button>
     <hr>
     <table class="table">
        <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Edit</th>
        </tr>
       <tbody class="t">

       </tbody>
     </table>
    </div>

    <div class="container">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="em" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Title</label>
    <input type="text" class="form-control" id="title">
  </div>
  
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="update-btn" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
    </div>


    <script>
        $(document).ready(function(){
           
                
                function loadTable(){
            $.ajax({
            url:"rest-api/rest.php",
            type: "GET",
            success:function(data){
                $.each(data,function(key,value){
                
                // $('.t').append("<tr><td data-id='"+value.id+"'"+">"+value.id+"</td><td>"+value.title+"</td><td></td><</tr>")
                $('.t').append("<tr>"+
                "<td>"+value.id+"</td>"+
                "<td>"+value.title+"</td>"+
                "<td>"+
                "<button data-bs-toggle='modal' data-bs-target='#em' class='edit-btn' id=edit-btn data-eid='"+value.id+"'>Edit</button>"
                +"</td>"+
                "</tr>"
                
                )

                })
            }
        })
        }
        loadTable();
       

        $(document).on('click','.edit-btn',function(){
            var postid=$(this).data('eid');
            var obj={id:postid};
            var jsondata=JSON.stringify(obj);
           
            $.ajax({
                url:"http://localhost/php-prac/main.php",
                type:"POST",
                data:obj,
                success:function(data)
                {
                 var result=JSON.parse(data);
                 console.log(result[0].title);
                 $('#id').val(result[0].id);
                 $('#title').val(result[0].title);

                 $('#update-btn').on('click',function(){
                 var updateddata=JOSN.stringify(result);
                 console.log(updateddata);
                //   $.ajax({
                //     url:"main.php",
                //     type:"post",
                //     data:{pid:result[0].id,title:result[0].title},
                //     success:function(data){
                //         console.log(data);
                //     }
            
                //   })


                })
                }
            })
           
        })
      
       
    
    });

        
    </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>
</html>