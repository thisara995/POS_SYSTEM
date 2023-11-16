
<?php include 'includes/header.php' ;?>
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-3"><i class="fas fa-home"></i> Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                        <i class="fas fa-chart-line" style='font-size:25px'></i>
                        <span class="ml-2">&nbsp;Sales</span>
                        </div>
                         <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                    </div>
                </div>
            </div>
                

            <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                        <i class="fas fa-list-alt icon"  style='font-size:25px'></i>
                        <span class="ml-2">&nbsp;Products</span>
                        </div>
                         <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                    </div>
                </div>
            </div>
            

            <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                        <i class="fas fa-list-alt icon"  style='font-size:25px'></i>
                        <span class="ml-2">&nbsp;Categories</span>
                        </div>
                         <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                    </div>
                </div>
            </div>
            

            <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                        <i class="fa-solid fa-users-line"  style='font-size:25px'></i>
                        <span class="ml-2">&nbsp;Customers</span>
                        </div>
                         <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                        <i class="fa-solid fa-people-group"  style='font-size:25px'></i>
                        <span class="ml-2">&nbsp;Suppliers</span>
                        </div>
                         <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                        <i class="fas fa-chart-bar" style='font-size:25px'></i>
                        <span class="ml-2">&nbsp;Sale Reports</span>
                        </div>
                         <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                        <i class="fa-solid fa-users-gear" style='font-size:25px'></i>
                        <span class="ml-2">&nbsp;User Manager</span>
                        </div>
                         <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                    </div>
                </div>
            </div>

            <div class="row">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-line-chart"></i>
                    Line Chart of Monthly Sales
                </div>
                <div class="card-body">
                    <!-- Canvas for line Chart -->
                    <canvas id="lineChart" width="100%" height="50"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart of Sales distribution by product categories.
                                    </div>
                                    <div class="card-body"><canvas id="myChart" width="100%" height="50"></canvas></div>
                                    <script>                             
                                    var xValues = ["Product 1", "Product 2", "Product 3", "Product 4", "Prouct 5"];
                                    var yValues = [55, 49, 44, 24, 15];
                                    var barColors = 'rgba(96, 130, 182)';

                                    new Chart("myChart", {
                                    type: "bar",
                                    data: {
                                    labels: xValues,
                                    datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues,
                                    label: "Sales distribution by product categories",
                                    }]
                                    },
                                    options: {
                                    legend: {display: false},
                                    title: {
                                    display: true,
                                  
                                    }
                                    }
                                    });
                                    </script>


                                </div>
                            </div>
       
    </main>
<?php  include 'includes/fotter.php';?>