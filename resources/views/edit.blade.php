<!DOCTYPE html>
<html>

<body>
  ​
  <h2>Student Form</h2>
  <form action={{route('student.form.update',$data->id)}} method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" value="{{$data->title}}"><br><br>
    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description" value="{{$data->description}}"><br><br>
    <button onclick="myFunction()"> Submit </button>

    <script>
      function myFunction() {
        alert("Data Successfully Edited!");
      }
    </script>
  </form>
  ​
  ​
</body>

</html>