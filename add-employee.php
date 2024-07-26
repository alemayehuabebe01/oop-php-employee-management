<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">

  </head>

<body>

  <div class="container">
    <h3 style="text-align:center;">Add Employee</h3>
    <div class="panel panel-primary">
      <div class="panel-heading">
        Add Employee
        <a href="./" style="margin-top:-7px;margin-left:5px;" class="btn btn-success pull-right">Back</a> &nbsp;&nbsp;

        <a href="./list-employee.php" style="margin-top:-7px;" class="btn btn-success pull-right">List Employees</a>
      </div>


      <div class="panel-body">
        <form action="" id="frm-add-employee" method="post">

          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" required class="form-control" id="name" name="name" placeholder="Enter name">
            <br>
            <span class="error"></span>
          </div>

          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" required class="form-control" id="email" name="email" placeholder="Enter email">
            <br>
            <span class="error"></span>
          </div>

          <div class="form-group">
            <label for="phone">Phone number:</label>
            <input type="text" required class="form-control" id="phone" name="phone" placeholder="Enter phone">
            <br>
            <span class="error"></span>
          </div>

          <div class="form-group">
            <label for="designation">Designation:</label>
            <select name="designation" required id="designation" class="form-control">
              <option value="">Select Designation</option>
              <option value="web-developer">Web Developer</option>
              <option value="seo">SEO</option>
              <option value="web-designer">Web Designer</option>
            </select>
            <br>
            <span class="error"></span>
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>





  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

      </body>

</html>