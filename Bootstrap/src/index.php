<!DOCTYPE html>
<html lang="en">
  <head> 
    <link rel="icon" type="image/x-icon" href="favicon.ico">
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
          font-weight: 700;
          background: linear-gradient(to right, #967f65,rgba(236, 219, 177, 0.77));
          background-size: 200%;
          background-clip: text;
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          animation: animate-gradient 5.0s linear infinite;
      }
      
      @keyframes animate-gradient{
        to{
          background-position: 200%;
        }
      }
      @media (min-width: 1px) {
          .custom-h1 {
              font-size: 2rem;
          }
      }
      @media (min-width: 576px) {
          .custom-h1 {
              font-size: 2rem;
          }
      }
      @media (min-width: 768px) {
          .custom-h1 {
              font-size: 3rem;
          }
      }
      
      @media (min-width: 992px) {
          .custom-h1 {
              font-size: 3.8rem; 
          }
      }
      </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>Computer Diagram Floor Plan</title>
  </head>
  <body class="bg-secondary">
    
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img
        src="../../src/kpj-johor-logo.png"
        class="img-fluid"
        alt="KPJ LOGO"
        width="324"
        height="47"
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
          ><strong>Computer Diagram Floor Plan</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="list.php"
            >Computer Database</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" target="_blank"
            href="https://lucid.app/lucidchart/33185ebe-ecb2-4f63-b6ad-6d74820e409b/edit?viewport_loc=-1058%2C-1081%2C2796%2C1293%2CmIWi79TFlhco&invitationId=inv_eeb05368-9e38-4c44-9602-af9c9bdb2527"
            >Computer Diagram</a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link disabled"
            href="#"
            tabindex="-1"
            aria-disabled="true"
          >IT Services Department</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

      
    <div class="position-relative" style="max-width: 100%;">
    <div
  class="bg-image d-flex justify-content-center align-items-center "
  style="
    background-image: url('../../src/jsh-building.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    width: 100%;">
  <strong>
    <h1 class="custom-h1 text-white text-center">
      Johor Specialist Hospital <br />Computer Diagram Floor Plan
    </h1>
  </strong>
</div>

<!-- dropdown bar-->
        <div class="container mt-4">
        <div class="p-3 d-flex justify-content-around align-items-center rounded-pill shadow bg-light"> 
    <div>
        <label class="me-2">Block</label>
        <select id="blockSelect" class="form-select form-select-sm d-inline w-auto" aria-label="Select Block">
            <option selected>Select Block</option>
            <option value="outpatient">Outpatient Block</option>
            <option value="inpatient">Inpatient Block</option>
        </select>
    </div>
    <div>
        <label class="me-2">Floor</label>
        <select id="floorSelect" class="form-select form-select-sm d-inline w-auto" aria-label="Select Floor" disabled>
            <option selected>Select Floor</option>
        </select>
    </div>
</div>

<!-- Image container -->
<div class="mt-4 text-center">
    <div id="imageContainer" class="image-container">
        <p>Please select a block and floor to view the images.</p>
    </div>
</div>

<script>
    // Floor options for each block
    const floorOptions = {
        outpatient: ["Basement 2", "1st Floor", "2nd Floor", "3rd Floor"],
        inpatient: ["1st Floor", "2nd Floor", "3rd Floor", "4th Floor", "5th Floor", "6th Floor", "7th Floor"]
    };

    // Images for each block and floor
    const images = {
        outpatient: {
            1: "../../src/FLOORS/KPJ JSH Computer Diagram Floor Plan - Basement 2 Outpatient.png",
            2: "../../src/FLOORS/KPJ JSH Computer Diagram Floor Plan - First Floor Outpatient.png",
            3: "../../src/FLOORS/KPJ JSH Computer Diagram Floor Plan - Second Floor Outpatient.png",
            4: "../../src/FLOORS/KPJ JSH Computer Diagram Floor Plan - Third Floor Outpatient.png"
        },
        inpatient: {
            1: "../../src/FLOORS/KPJ JSH Computer Diagram Floor Plan - First Floor Inpatient.png",
            2: "../../src/FLOORS/KPJ JSH Computer Diagram Floor Plan - Second Floor Inpatient.png",
            3: "../../src/FLOORS/KPJ JSH Computer Diagram Floor Plan - Third Floor Inpatient.png",
            4: "../../src/FLOORS/KPJ JSH Computer Diagram Floor Plan - Fourth Floor Inpatient.png",
            5: "../../src/FLOORS/KPJ JSH Computer Diagram Floor Plan - Fifth Floor Inpatient.png",
            6: "../../src/FLOORS/KPJ JSH Computer Diagram Floor Plan - Sixth Floor Inpatient.png",
            7: "../../src/FLOORS/KPJ JSH Computer Diagram Floor Plan - Seventh Floor Inpatient.png"
        }
    };

    const blockSelect = document.getElementById("blockSelect");
    const floorSelect = document.getElementById("floorSelect");
    const imageContainer = document.getElementById("imageContainer");

    // Update floor 
    blockSelect.addEventListener("change", function () {
        const block = blockSelect.value;

        // Reset floor 
        floorSelect.innerHTML = '<option selected>Select Floor</option>';
        floorSelect.disabled = true;

        // Populate floor
        if (floorOptions[block]) {
            floorOptions[block].forEach((floor, index) => {
                const option = document.createElement("option");
                option.value = index + 1; // Floor number
                option.textContent = floor;
                floorSelect.appendChild(option);
            });
            floorSelect.disabled = false;
        }

        // Reset image 
        imageContainer.innerHTML = "<p>Please select a block and floor to view the images.</p>";
    });

    // Update image 
    floorSelect.addEventListener("change", function () {
        const block = blockSelect.value;
        const floor = floorSelect.value;
        if (images[block] && images[block][floor]) {
            imageContainer.innerHTML = `<img src="${images[block][floor]}" alt="Block ${block}, Floor ${floor}" class="img-fluid rounded shadow">`;
        } else {
            imageContainer.innerHTML = "<p>No image available for the selected block and floor.</p>";
        }
    });
</script>

          </div>
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
          <div class="text-white">
            <a class="text-white" >Designed and Developed by IT Services Department @ 2025</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
