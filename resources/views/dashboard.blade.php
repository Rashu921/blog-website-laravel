<x-app-layout>

   <link rel="stylesheet" type="text/css" href="style.css">
     
   <div class="dashdiv">



 
       <h4>Add a Post</h4>

       <br><br>

        <form action="{{url('upload_post')}}"  method="POST"  enctype="multipart/form-data">

        @csrf

              <div>
                  <lable>Description</lable>
                  <input type="text" name="description">
             </div>

             <br><br>

             <div>
                  <lable>Upload Image</lable>
                  <input type="file" name="image">
             </div>

             <br><br>

             <div>
                  <input type="submit" name="" class="dashsubmit">
             </div>


        </form>


        <br><br>

        <form action="{{url('view_post')}}"  method="get">

       @csrf
     
            <input type="submit"  value="View My Post"  class="dashsubmit">

       </form>

   </div>


</x-app-layout>
