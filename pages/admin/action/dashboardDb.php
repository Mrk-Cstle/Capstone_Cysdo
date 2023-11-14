<?php

include '../include/dbConnection.php';

$totalScholarQuery = "SELECT * FROM scholar";
$totalScholar = mysqli_query($conn, $totalScholarQuery);

$totalApplicantQuery = "SELECT * FROM registration";
$totalApplicant = mysqli_query($conn, $totalApplicantQuery);

$totalNewScholarQuery = "SELECT * FROM examination where requirements_status = 'Approve'";
$totalNewScholar = mysqli_query($conn, $totalNewScholarQuery);

$totalRenewalProcessQuery = "SELECT * FROM renewal_process";
$totalRenewalProcess = mysqli_query($conn, $totalRenewalProcessQuery);

$totalExaminerQuery = "SELECT * FROM registration_approval WHERE action_type = 'approve' AND exam_status IS NULL";
$totalExaminer = mysqli_query($conn, $totalExaminerQuery);

$totalReleaseQuery = "SELECT * FROM renewal_award";
$totalRelease = mysqli_query($conn, $totalReleaseQuery);
