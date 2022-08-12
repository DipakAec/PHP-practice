<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="mt-5 md-3 clearfix">
                    <h2 class="pull-left">Employee Details</h2>
                    <a href="create.php"><button class="btn btn-success pull-right">Create Employee</button></a>


                    <?php
                            include("connection.php");
                            $sql = "SELECT * FROM `employee`";
                            if ($res = mysqli_query($conn,$sql)) {
                                if (mysqli_num_rows($res) > 0) {
                                    echo '<table class="table table-borderd table-striped">';
                                    echo "<thread>";
                                    echo "<tr>";
                                    echo "<th>Id</th>";
                                    echo "<th>Name</th>";
                                    echo "<th>Mail</th>";
                                    echo "<th>Actions</th>";
                                    
                                    echo "</tr>";
                                    echo "</thread>";
                                    //Table body
                                    echo "<tbody>";
                                        while($row = mysqli_fetch_array($res)){
                                            echo "<tr>";
                                            echo "<td>".$row['emp_id'] ."</td>";
                                            echo "<td>".$row['emp_name'] ."</td>";
                                            echo "<td>".$row['emp_mail'] ."</td>";
                                            echo "<td>";
                                            echo '<a href="read.php?id='. $row['emp_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="upodate.php?id='. $row['emp_id'] .'" class="mr-3" title="Pudate Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['emp_id'] .'" class="mr-3" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';

                                            
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                        echo "</tbody>";
                                            echo "</table>";
                                            mysqli_free_result($res);
                                  


                                }
                                else {
                                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                                }
                            }

                            else {
                                echo "Something went Wrong!";
                            }
                            mysqli_close($conn);
                    ?>

                </div>
                </div>
                
            </div>

        </div>

    </div>



</body>
</html>



