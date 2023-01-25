<?php
require 'dbcon.php';
session_start();


if(isset($_POST['delete_employee']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['delete_employee']);

    $query = "DELETE FROM employee WHERE id='$employee_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_employee']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['employee_id']);
    
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $department =mysqli_real_escape_string($con, $_POST['department']);
    $sex = mysqli_real_escape_string($con,$_POST['sex']);
    $maritalStatus = mysqli_real_escape_string($con,$_POST['marital-status']);
    $salary = mysqli_real_escape_string($con,$_POST['salary']);
    $address = mysqli_real_escape_string($con,$_POST['address']);

    $query = "UPDATE employee SET name='$name', department='$department', sex='$sex', marital_status='$maritalStatus' ,salary='$salary',address='$address' WHERE id='$employee_id' ";
    
   
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Employee Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Updated";
        header("Location: index.php");
        exit(0);
    }
}


if(isset($_POST['save_employee']))
{
    
    
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $department =mysqli_real_escape_string($con, $_POST['department']);
    $sex = mysqli_real_escape_string($con,$_POST['sex']);
    $maritalStatus = mysqli_real_escape_string($con,$_POST['marital-status']);
    $salary = mysqli_real_escape_string($con,$_POST['salary']);
    $address = mysqli_real_escape_string($con,$_POST['address']);

    // Insert the data into the database
    $query = "INSERT INTO employee(name, department, sex, marital_status, salary, address)
    VALUES ('$name', '$department', '$sex', '$maritalStatus', '$salary', '$address')";
   
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Employee Created Successfully";
        header("Location: employee-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Created";
        header("Location: employee-create.php");
        exit(0);
    }
}




?>