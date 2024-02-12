@extends('master.master')

@section('dyncontent')
<!doctype html>
<html lang="en">
<body>

<!-- dashboard.blade.php -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Retrieve the role counts data
    var roleCounts = @json($roleCounts);

    // Function to create the role chart
    function createRoleChart() {
      var roleNames = Object.keys(roleCounts);
      var roleCountsData = Object.values(roleCounts);

      // Map role names to desired labels
      var roleLabels = roleNames.map(role => {
        if (role === "firm_provider") {
          return "Firm Provider";
        } else if (role === "user") {
          return "User";
        } else if (role === "admin") {
          return "Admin";
        } else if (role === "super_admin") {
          return "Super Admin";
        } else {
          return role; // Use the original role name if no mapping is specified
        }
      });

      var ctx = document.getElementById("roleChart").getContext("2d");
      new Chart(ctx, {
        type: "pie",
        data: {
          labels: roleLabels,
          datasets: [{
            data: roleCountsData,
            backgroundColor: roleLabels.map(role => {
              if (role === "Firm Provider") {
                return "#5ac7eb"; // Blue
              } else if (role === "User") {
                return "#90ee90"; // Green
              } else if (role === "Admin") {
                return "#e98b27"; // Orange
              } else {
                return "rgba(75, 192, 192, 0.6)"; // Default color
              }
            }),
            borderColor: "rgba(75, 192, 192, 1)",
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            position: 'bottom'
          }
        }
      });
    }

    // Call the function to create the role chart
    createRoleChart();

    // Retrieve the firm counts data
    var firmCounts = @json($firmCounts);

    // Function to create the firm chart
    function createFirmChart() {
      var ctx = document.getElementById("firmChart").getContext("2d");
      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["Firm Count"],
          datasets: [{
            label: "Firm Count",
            data: [firmCounts],
            backgroundColor: "#5ac7eb", // Blue
            borderColor: "rgba(75, 192, 192, 1)",
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    }

    // Call the function to create the firm chart
    createFirmChart();

     // Retrieve the contact counts data
     var contactCounts = @json($contactCounts);

// Function to create the contact chart
function createContactChart() {
  var ctx = document.getElementById("contactChart").getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Contact Count"],
      datasets: [{
        label: "Contact Count",
        data: [contactCounts],
        backgroundColor: "#ffc107", // Yellow
        borderColor: "rgba(255, 193, 7, 1)",
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
}

// Call the function to create the contact chart
createContactChart();
  });
</script>
<div class="row">
  <div class="col-lg-4 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body">
        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
          <div class="mb-3 mb-sm-0">
            <h5 class="card-title fw-semibold">Register Role Overview</h5>
          </div>
        </div>
        <div class="chart-container">
          <canvas id="roleChart"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body">
        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
          <div class="mb-3 mb-sm-0">
            <h5 class="card-title fw-semibold">Firm Overview</h5>
          </div>
        </div>
        <div class="chart-container">
          <canvas id="firmChart"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body">
        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
          <div class="mb-3 mb-sm-0">
            <h5 class="card-title fw-semibold">Contact Overview</h5>
          </div>
        </div>
        <div class="chart-container">
          <canvas id="contactChart"></canvas>
        </div>
      </div>
    </div>
  </div>
</

      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>

@stop