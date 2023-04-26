<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <meta name="theme-color" content="#563d7c">
    <title>Sage Documentation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link href="<?php echo asset('css/select2.min.css');?>" rel="stylesheet" />
    <link href="<?php echo asset('css/dataTables.min.css');?>" rel="stylesheet">

    <script src="<?php echo asset('js/jquery.min.js');?>"></script>
    <script src="<?php echo asset('js/summernote-bs4.min.js');?>"></script>

    <link rel="stylesheet" href="<?php echo asset('css/toastr.min.css');?>">

    <!-- Custom styles for this template -->
    <link href="<?php echo asset('css/app.css')?>" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 shadow" style="background: rgb(127,127,255);
background: linear-gradient(90deg, rgba(127,127,255,1) 0%, rgba(245,245,250,1) 100%);">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?php echo route('doc/datails/1') ?>"> <b style="color:white">Sage Documentation</b> </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-light w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="<?php route('/search') ?>">Seacrh</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">