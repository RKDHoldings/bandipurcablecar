<?php
 include('includes/html_header.php');
 ?>
 <?php
 include('includes/navbar.php');
 ?>
  <!-- banner -->
 <section id="breadcrumb">
         <div class="bg-overlay pt-opacity4" style="background-image: url('img/service4-bg.webp');"></div>
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h2 class="breadcrumb-title">award and recognition</h2>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i>Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">award and recognition</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
</section>
<section id="award_recognition">
   <div class="container">
     <h2 class="section-title">COMPANY SNAPSHOT</h2>
     <p>As of Ashar 31, 2081</p>
     <div class="row care_rating">
         <div class="col-lg-12">
         <table class="company-table">
            <tr>
                <th class="table-title">Company Category</th>
                <td class="table-details">Public Limited</td>
            </tr>
            <tr>
                <th class="table-title">Registered Office</th>
                <td class="table-details">Kalimati-13, Kathmandu</td>
            </tr>
            <tr>
                <th class="table-title">Field Office</th>
                <td class="table-details">Bandipur-4, Tanahun</td>
            </tr>
            <tr>
                <th class="table-title">Company Registration Date</th>
                <td class="table-details">Registered as Private Limited Company: Push 22, 2069<br>
                    Converted to Public Limited Company: Bhadra 17, 2078</td>
            </tr>
            <tr>
                <th class="table-title">Company Registration No</th>
                <td class="table-details">270364/078/079</td>
            </tr>
            <tr>
                <th class="table-title">Permanent Account No. (PAN)</th>
                <td class="table-details">600918925</td>
            </tr>
            <tr>
                <th class="table-title">Objectives</th>
                <td class="table-details">
                i. Cable car operation with well-equipped Tourism Infrastructure<br>
                ii. Well-equipped Hotel operation with quality assurance<br>
                iii. Well-equipped sightseeing center<br>
                iv. Convenience restaurant operation<br>
                v. Investment in recreation, adventure, tourism infrastructure
                </td>
            </tr>
            <tr>
                <th class="table-title">Area of operation</th>
                <td class="table-details">Tourism, Hospitality, Adventure and Recreational activities</td>
            </tr>
            <tr>
                <th class="table-title">Cable car ropeway distance</th>
                <td class="table-details">1616 meters</td>
            </tr>
            <tr>
                <th class="table-title">Hotel Accommodation</th>
                <td class="table-details">80 Keys</td>
            </tr>
            <tr>
                <th class="table-title">No. of Shareholders</th>
                <td class="table-details">5670</td>
            </tr>
            <tr>
                <th class="table-title">No. of employees</th>
                <td class="table-details">74</td>
            </tr>
            <tr>
                <th class="table-title">
                    Other information <br>
                    Website: <br>
                    Email:
                </th>
                <td class="table-details">
                    <br>
                <a href="http://www.bandipurhill.com" target="_blank">www.bandipurhill.com</a><br>
                <a href="mailto:info@bandipurhill.com">info@bandipurhill.com</a>
                </td>
            </tr>
            </table>
            <!-- <img src="img/company-snapshot.png" alt="company-details"> -->
         </div>
     </div>  
</div>
</section>

<section id="award_details">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h6>Capital Structure</h6>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h6>Proposed Share Holding Pattern</h6>
            </div>     
           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <canvas id="barGraph" ></canvas>
                <p>Note: Total Capital = 2 Arba 55 Crore (Promoter + Public)
                </p>
            </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <canvas id="pieChart"></canvas>
                </div>              
        </div>
    </div>  
</section>

<script>
    var xValues = ["Authorized", "Issued", "Promoter", "Public"];
    var yValues = [300.00, 255.00, 224.40, 30.60];
    var barColors = ["#004f8a", "#004f8a","#004f8a","#004f8a"];

    new Chart("barGraph", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
            display: true,
            text: "Capital Structure (NPR Crore)"
            },
        }
    });
</script>
<script>
    var xValues = ["Promoter", "Public (IPO)"];
    var yValues = [88, 12];
    var barColors = [
    "#004f8a",
    "#ff7800"
    ];

    new Chart("pieChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            title: {
            display: true,
            text: ""
            }
        }
    });
</script>
<?php
 include('includes/footer.php');
 ?>