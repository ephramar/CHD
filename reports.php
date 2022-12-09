<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COVID-19 Health Declaration App</title>
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
  <!-- Custom stylesheet -->
  <link href="css/dashboard.css" rel="stylesheet" type="text/css">
  
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon.ico">
</head>
</head>
<body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Team VolCES</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">

    <?php include 'common/nav-side.php'; ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Volume of Patients</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <h2>List of Patients</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Name</th>
              <th scope="col">Age</th>
              <th scope="col">Gender</th>
              <th scope="col">Nationality</th>
              <th scope="col">Diagnosed</th>
              <th scope="col">Encountered</th>
              <th scope="col">Vaccinated</th>
              <th scope="col">Encoded on</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Ephramar A. Telog</td>
              <td>33</td>
              <td>Male</td>
              <td>Filipino</td>
              <td>No</td>
              <td>No</td>
              <td>Yes</td>
              <td>2022-12-08 11:41:15</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Ephramar A. Telog</td>
              <td>33</td>
              <td>Male</td>
              <td>Filipino</td>
              <td>No</td>
              <td>No</td>
              <td>Yes</td>
              <td>2022-12-08 11:41:15</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Ephramar A. Telog</td>
              <td>33</td>
              <td>Male</td>
              <td>Filipino</td>
              <td>No</td>
              <td>No</td>
              <td>Yes</td>
              <td>2022-12-08 11:41:15</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Ephramar A. Telog</td>
              <td>33</td>
              <td>Male</td>
              <td>Filipino</td>
              <td>No</td>
              <td>No</td>
              <td>Yes</td>
              <td>2022-12-08 11:41:15</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Ephramar A. Telog</td>
              <td>33</td>
              <td>Male</td>
              <td>Filipino</td>
              <td>No</td>
              <td>No</td>
              <td>Yes</td>
              <td>2022-12-08 11:41:15</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Ephramar A. Telog</td>
              <td>33</td>
              <td>Male</td>
              <td>Filipino</td>
              <td>No</td>
              <td>No</td>
              <td>Yes</td>
              <td>2022-12-08 11:41:15</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Ephramar A. Telog</td>
              <td>33</td>
              <td>Male</td>
              <td>Filipino</td>
              <td>No</td>
              <td>No</td>
              <td>Yes</td>
              <td>2022-12-08 11:41:15</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Ephramar A. Telog</td>
              <td>33</td>
              <td>Male</td>
              <td>Filipino</td>
              <td>No</td>
              <td>No</td>
              <td>Yes</td>
              <td>2022-12-08 11:41:15</td>
            </tr>
            <tr>
              <td>9</td>
              <td>Ephramar A. Telog</td>
              <td>33</td>
              <td>Male</td>
              <td>Filipino</td>
              <td>No</td>
              <td>No</td>
              <td>Yes</td>
              <td>2022-12-08 11:41:15</td>
            </tr>
            <tr>
              <td>10</td>
              <td>Ephramar A. Telog</td>
              <td>33</td>
              <td>Male</td>
              <td>Filipino</td>
              <td>No</td>
              <td>No</td>
              <td>Yes</td>
              <td>2022-12-08 11:41:15</td>
            </tr>
          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>

<?php include 'common/footer.php'; ?>

<script src="js/dashboard.js"></script>

</body>
</html>