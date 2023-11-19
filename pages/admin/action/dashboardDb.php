<?php

include '../include/dbConnection.php';

$totalScholarQuery = "SELECT * FROM scholar";
$totalScholar = mysqli_query($conn, $totalScholarQuery);

$totalApplicantQuery = "SELECT * FROM registration";
$totalApplicant = mysqli_query($conn, $totalApplicantQuery);

$totalNewScholarQuery = "SELECT * FROM newscholar_award ";
$totalNewScholar = mysqli_query($conn, $totalNewScholarQuery);

$totalRenewalProcessQuery = "SELECT * FROM renewal_process WHERE process_status IS NULL";
$totalRenewalProcess = mysqli_query($conn, $totalRenewalProcessQuery);

$totalExaminerQuery = "SELECT * FROM registration_approval WHERE action_type = 'approve' AND exam_status IS NULL";
$totalExaminer = mysqli_query($conn, $totalExaminerQuery);

$totalReleaseQuery = "SELECT * FROM renewal_award";
$totalRelease = mysqli_query($conn, $totalReleaseQuery);

$totalArchiveQuery = "SELECT * FROM scholar_archive";
$totalArchive = mysqli_query($conn, $totalArchiveQuery);


$totalRenewedQuery = "SELECT * FROM scholar WHERE scholar_status = 'Approve' ";
$totalRenewed = mysqli_query($conn, $totalRenewedQuery);

$totalUnprocessedQuery = "SELECT * FROM scholar WHERE scholar_status = 'Uploaded' ";
$totalUnprocessed = mysqli_query($conn, $totalUnprocessedQuery);

$totalUnrenewedQuery = "SELECT * FROM scholar WHERE scholar_status IS NULL ";
$totalUnrenewed = mysqli_query($conn, $totalUnrenewedQuery);

$totalAwardQuery = "SELECT * FROM renewal_award";
$totalAward = mysqli_query($conn, $totalAwardQuery);
$totalAwardCount = $totalAward->num_rows;

$totalNewAwardQuery = "SELECT * FROM newscholar_award";
$totalNewAward = mysqli_query($conn, $totalNewAwardQuery);
$totalAwardNewCount = $totalNewAward->num_rows;

$totalCombinedCount = $totalAwardCount + $totalAwardNewCount;
