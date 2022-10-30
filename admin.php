<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <title>Document</title>
</head>

<body>
    <div class="col-md-8">
        <h1 style="text-align: center;">Student List</h1>
        <table class="table table-bordered">
            <thead class="alert-info">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        require'conn1.php';
                $query=mysqli_query($conn, "SELECT * FROM `admin`") or die(mysqli_error());
                while ($fetch=mysqli_fetch_array($query)) {
                    ?>
                <tr>
                    <td><?php echo $fetch['id']?></td>
                    <td><?php echo $fetch['name']?></td>
                    <td><button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#form_modal<?php echo $fetch['id']?>">View Details</button></td>
                </tr>

                <div class="modal fade" id="form_modal<?php echo $fetch['id']?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">User Details</h3>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="col-md-6">
                                        <h4>ID</h4>
                                        <p><?php echo $fetch['id']?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Name</h4>
                                        <p><?php echo $fetch['name']?></p>
                                    </div>
                                    <br style="clear:both;" />
                                    <div class="col-md-6">
                                        <h4>Email</h4>
                                        <p><?php echo $fetch['email']?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>ID</h4>
                                        <p><?php echo $fetch['id']?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Password</h4>
                                        <p>************</p>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span
                                        class="glyphicon glyphicon-remove"></span> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="js/jquery-3.2.1.min.js">
    </script>
    <script src="js/bootstrap.js"></script>
</body>

</html>