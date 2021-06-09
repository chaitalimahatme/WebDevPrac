<!DOCTYPE html>
<html>

<body>
  ​
  <h2>Student Form</h2>
  <form action={{route('student.form.submit')}} method="POST">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" placeholder="Title..."><br><br>
    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description" placeholder="Description..."><br><br>

    <button onclick="myFunction()"> Submit </button>

    <script>
      function myFunction() {
        alert("Data Successfully Submited!");
      }
    </script>
  </form>
  ​​
</body>

</html>
​