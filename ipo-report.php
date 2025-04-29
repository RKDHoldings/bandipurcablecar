<?php
   $page = "investors";
?>
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
                <h2 class="breadcrumb-title">IPO</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">IPO Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!--ipo reports  -->
<section id="investment_budget">
    <div class="container">
    <h6>IPO Report</h6>
    <h2 class="section-title">निष्काशन पछिको चुक्त  पुँजी  </h2>
        <table class="investment-table">
            <thead>
                <tr>
                    <th>क्र.सं.</th>
                    <th>विवरण</th>
                    <th>शेयर संख्या</th>
                    <th>चुक्ता रकम (रु.)</th>
                    <th>पूँजी संरचना</th>
                    <th>भुक्तानी विवरण</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>१</td>
                    <td>संस्थापक शेयरधनी</td>
                    <td>२,२४,४०,०००</td>
                    <td>२,२४,४०,००,०००/-</td>
                    <td>८८%</td>
                    <td>शतप्रतिशत भुक्तानी भइसकेको ।</td>
                </tr>
                <tr>
                    <td>२</td>
                    <td>सर्वसाधारण समूह</td>
                    <td>३०,६०,०००</td>
                    <td>३०,६०,००,०००/-</td>
                    <td>१२%</td>
                    <td>निष्काशन पश्चात भुक्तानी हुने ।</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">जम्मा</td>
                    <td>२,५५,००,०००</td>
                    <td>३०१,००,००,०००/-</td>
                    <td>१००%</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>   
        
        <h2 class="section-title">सर्वसाधारणमा निष्काशन गरिने शेयरको बिवरण </h2>
        <table class="investment-table">
            <thead>
                <tr>
                    <th>क्र.सं.</th>
                    <th>विवरण</th>
                    <th>शेयर संख्या</th>
                    <th>चुक्ता रकम (रु.)</th>
                    <th>पूँजी संरचना</th>
                    <th>भुक्तानी विवरण</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>२.१</td>
                    <td>वैदेशिक रोजगारी</td>
                    <td>२,५५,०००</td>
                    <td>२,५५,००,०००/-</td>
                    <td>१०%</td>
                    <td>शतप्रतिशत</td>
                </tr>
                <tr>
                    <td>२.२</td>
                    <td>सामुहिक लगानीकोष</td>
                    <td>१,२७,५००</td>
                    <td>१,२७,५०,०००/-</td>
                    <td>५%</td>
                    <td>निष्काशन पश्चात शतप्रतिशत भुक्तानी हुने ।</td>
                </tr>
                <tr>
                    <td>२.३</td>
                    <td>कम्पनीका कर्मचारी</td>
                    <td>७६,५००</td>
                    <td>७६,५०,०००/-</td>
                    <td>३%</td>
                    <td></td>
                </tr>
                <tr>
                    <td>२.४</td>
                    <td>सर्वसाधारण</td>
                    <td>२०,९१,०००</td>
                    <td>२०,९१,००,०००/-</td>
                    <td>८२%</td>
                    <td></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">जम्मा</td>
                    <td>२५,५०,०००</td>
                    <td>७५,५०,००,०००/-</td>
                    <td>१००%</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
</section>
<!-- investment strategy -->

<!-- financial analysis -->


<?php
include('includes/footer.php');
?>

<script>
    feather.replace()
</script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
</script>

<script>
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 1,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: true,
            navigation: false,
            navigationText: ["", ""],
            slideSpeed: 1000,
            singleItem: true,
            autoPlay: true
        });
    });
</script>
<!-- for pie chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.5/Chart.min.js"></script>

<!--debt equity  -->
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Debt % ", "Equity %"],
            datasets: [{
                backgroundColor: [

                    "#004f8a",
                    "#ff7800"
                ],
                data: [28.77, 71.23]
            }]
        }
    });
</script>
<script>
    var ctx = document.getElementById("myChart2").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["RKD Tourism % ", "Panchase %", "Others %"],
            datasets: [{
                backgroundColor: [

                    "#004f8a",
                    "#6dacdceb",
                    "#ff7800"
                ],
                data: [61, 25, 14]
            }]
        }
    });
</script>