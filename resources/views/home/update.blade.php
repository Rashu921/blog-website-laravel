<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<body>
    
      <x-app-layout>
      </x-app-layout>

      <div style="padding-left: 40%;  padding-top: 10%;">

           <form action="{{url('confirm_update',$data->id)}}" method="POST" enctype="multipart/form-data">

           @csrf

                    <div>
                        <lable>Change Description</lable>
                        <input type="text" name="description"  value="{{$data->description}}">
                    </div>

                    <br><br>

                    <div>
                        <lable>current Image</lable>
                        <img src="/post/{{$data->image}}" height="200px" width="200px">
                    </div>


                    <div>
                        <lable>Chnage Image</lable>
                        <input type="file" name="image">  
                    </div>

                    <br><br>

                    <div>
                        
                        <input type="submit" value="update" style="background-color: skyblue;  cursor: pointer;  border-radius: 10px;
                        margin-left: 13%;  padding: 10px;  font-size: 16px;">
                    </div> 

           </form>

      </div>

</body>
</html> 