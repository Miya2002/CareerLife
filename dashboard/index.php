<?php
    session_start();
    if($_SESSION['account_type'] === 'recruiter'){
        header('Location: /CareerLife/dashboard/recruiter');
    }
    else if($_SESSION['account_type'] === 'jobseeker'){
        header('Location: /CareerLife/dashboard/jobseeker');
    }
    else{
        header('Location: /CareerLife/account/register');
    }
?>