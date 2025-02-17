<?php include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <style>
      .navbar {
        font-family: "Inria Sans", serif;
       font-size: 1.1rem; /* Adjust font size for navbar text */
      }
      .custom-h1 {
          font-family: "Inria Sans", serif;
          font-size: 3rem; 
          font-weight: 700
      }
      @media (min-width: 1px) {
          .custom-h1 {
              font-size: 1.5rem;
          }
      }
      @media (min-width: 576px) {
          .custom-h1 {
              font-size: 1.5rem;
          }
      }
      @media (min-width: 768px) {
          .custom-h1 {
              font-size: 3rem;
          }
      }
      
      @media (min-width: 992px) {
          .custom-h1 {
              font-size: 4rem; 
          }
      }
    </style>
    <link rel="stylesheet" href="main.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>    
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <img
            src="../../src/kpj-johor-logo.png"
            class="img-fluid"
            alt="KPJ LOGO"
            width="324"
            height="47"
            class="d-inline-block align-text-top"
        />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a
                class="nav-link active text-white"
                aria-current="page"
                href="index.php"
                ><strong>Computer Diagram Floor Plan</strong></a
            >
            </li>
            
            <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="list.php"
                >Computer Database</a
            >
            </li>
            <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" target="_blank" href="https://lucid.app/lucidchart/33185ebe-ecb2-4f63-b6ad-6d74820e409b/edit?viewport_loc=-1058%2C-1081%2C2796%2C1293%2CmIWi79TFlhco&invitationId=inv_eeb05368-9e38-4c44-9602-af9c9bdb2527"
                >Computer Diagram</a
            >
            </li>
            <li class="nav-item">
            <a
                class="nav-link disabled"
                href="#"
                tabindex="-1"
                aria-disabled="true"
                >IT Department Services</a
            >
            </li>
        </ul>
        
        </div>
    </div>
    </nav>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
        <h1>Search computer data</h1>
        
        <div>
            <a href="list.php" class="btn btn-primary text-light">Back to list</a>
            <a href="create.php" class="btn btn-primary text-light">Add computer</a>
        </div>
        
    </header>
    <div class="container my-5">
    <form action="" method="GET">
        <div class="input-group mb-3">
            <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?> "class="form-control" placeholder="Search Data" >
            <button type="submit" class="btn btn-primary text-light">Search</button>   
        </div>
    </form>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>IP</th>
                <th>Ram</th>
                <th>Storage</th>
                <th>OS</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if (isset($_GET['search'])) {
                $filtervalues = mysqli_real_escape_string($conn, $_GET['search']);
                $query = "SELECT * FROM computers WHERE CONCAT(id, name, ip, ram, storage, os, department) LIKE '%$filtervalues%'";
                $query_run = mysqli_query($conn, $query);
            
                if ($query_run && mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $items) {
                        ?>
                        <tr>
                            <td><?= $items['id']; ?></td>
                            <td><?= $items['name']; ?></td>
                            <td><?= $items['ip']; ?></td>
                            <td><?= $items['ram']; ?></td>
                            <td><?= $items['storage']; ?></td>
                            <td><?= $items['os']; ?></td>
                            <td><?= $items['department']; ?></td>
                            <td>
                                <a href="edit.php?id=<?= $items['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="delete.php?id=<?= $items['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="8">No record found</td>
                    </tr>
                    <?php
                }
            }
            
                ?>
        </tbody>
        
    
    
</body>
</html>