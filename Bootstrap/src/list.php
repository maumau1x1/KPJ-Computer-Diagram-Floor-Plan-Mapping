<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <?php session_start()?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <style>
      .navbar {
      font-family: 'Roboto', sans-serif;
       font-size: 1rem; /* Adjust font size for navbar text */
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
    <title>Computer List</title>
    
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
      
</head>
<body class="#">
    
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
                >IT Services Department</a
              >
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    <?php
        if(isset($_SESSION['status'])){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Alert.</strong> <?= $_SESSION['status'];?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            unset($_SESSION['status']);
        }
        ?>
<div class="container my-5">
    <header class="d-flex justify-content-between my-4">
        <h1>Computer List</h1>
        
        <div>
          
            <a href="create.php" class="btn btn-primary text-light">Add computer</a>
            <a href="search.php" class="btn btn-primary text-light">Search computer</a>
        </div>
        
    </header>
    
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
            include("connect.php");
            $sql = "SELECT * FROM computers";
            $result = mysqli_query($conn,$sql);
            
            while($row= mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["ip"]?></td>
                    <td><?php echo $row["ram"]?></td>
                    <td><?php echo $row["storage"]?></td>
                    <td><?php echo $row["os"]?></td>
                    <td><?php echo $row["department"]?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger ">Delete</a>
                    </td>
                </tr>
                <?php
            }
          ?>
          
            
        </tbody>
    </table>
    <div
          class="d-flex justify-content-center align-items-center p-2"
          style="
            background-color: #967f65;
            width: 100%;
            font-family: 'Inria Sans', serif;">
          <div class="me-2 text-white">
            <img
              src="../../src/kpj-white.png"
              alt="Logo"
              style="height: 40px; width: auto;"
            />
          </div>
          <!-- Text Section -->
          <div class="text-white">
            
            <a class="text-white" >Designed and Developed by IT Services Department @ 2025</a>
          </div>
        </div>
</body>

</html>