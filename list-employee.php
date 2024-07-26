<!DOCTYPE html>
<html lang="en">

<head>
  <title>List Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
  
</head>

<body>

  <div class="container">
    <h3 style="text-align:center;">List Employee</h3>
    <div class="panel panel-primary">
      <div class="panel-heading">
        List Employee
        <a href="#" style="margin-top:-7px;margin-left:5px;" class="btn btn-success pull-right">Back</a> &nbsp;&nbsp;

        <a href="#" style="margin-top:-7px;" class="btn btn-success pull-right"> <i class="fa fa-plus"></i> Add Employee</a>
      </div>
      <div class="panel-body">
        <table class="table table-bordered" id="tbl-list-employee">
          <thead>
            <tr>
              <th>#ID</th>
              <th>#Name</th>
              <th>#Email</th>
              <th>#Phone</th>
              <th>#Designation</th>
              <th>#Action</th>
            </tr>
          </thead>
          <tbody>
            
                <tr>
                  <td>#</td>
                  <td>#</td>
                  <td>#</td>
                  <td>#</td>
                  <td>#</td>
                  <td>
                    <a href="#" class="btn btn-info"> <i class="fa fa-eye"></i> View</a>

                    <a href="#" class="btn btn-warning"> <i class="fa fa-pencil"></i> Edit</a>
                    <a href="#" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>
           

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

  <script>

   
  </script>
</body>

</html>