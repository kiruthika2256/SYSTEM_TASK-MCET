<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Employee Create</title>
</head>
<body>
  
    <div class="container mt-5">

    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Employee Add 
                            <a href="index.php" class="btn btn-danger float-end">View</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            
                            <div class="mb-3">
                                <label>Employee Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <select id="department" name="department" class="form-control" required>
                                <option value="IT">IT</option>
                                <option value="HR">HR</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Finance">Finance</option>
                            </select>
                            </div>
                    
                            <div class="form-group mb-3">
                                <label for="sex">Sex:</label>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="sexMale" value="male" required>
                                <label class="form-check-label" for="sexMale">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="sexFemale" value="female" required>
                                <label class="form-check-label" for="sexFemale">Female</label>
                                </div>
                                <div class="invalid-feedback">Please select a sex</div>
                            </div>
                            <div class="mb-3">
                            <label for="marital-status">Marital Status</label>
                                <select id="marital-status" name="marital-status" class="form-control" required >
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="salary">Salary</label>
                                <input type="number" id="salary" name="salary" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="address">Address</label>
                                <textarea id="address" name="address" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_employee" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
