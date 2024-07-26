<!DOCTYPE html>
<html lang="en">

<head>
  <title>Update Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>

  
</head>

<body>

  <div class="container">
    <h3 style="text-align:center;">Update Employee</h3>
    <div class="panel panel-primary">
      <div class="panel-heading">
        Update Employee
        <a href="#" style="margin-top:-7px;margin-left:5px;" class="btn btn-success pull-right">Back</a> &nbsp;&nbsp;

        <a href="#" style="margin-top:-7px;" class="btn btn-success pull-right">List Employees</a>
      </div>
      <div class="panel-body">
        <form action="#" method="post" id="frm-edit-employee">

          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" value="#" class="form-control" id="name" name="name" placeholder="Enter name">
          </div>

          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" value="#" class="form-control" id="email" name="email" placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="phone">Phone number:</label>
            <input type="text" value="#" class="form-control" id="phone" name="phone" placeholder="Enter phone">
          </div>

          <div class="form-group">
            <label for="designation">Designation:</label>
            <select name="designation" id="designation" class="form-control">
              <option value="">Select Designation</option>
            </select>
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>