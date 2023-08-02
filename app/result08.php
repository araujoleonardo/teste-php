<!doctype html>
<html>
<head>
    <title>Test PHP!</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-5">
        <div class="card row m-3">
            <div class="card-body">
            
                <?php
                    function futureValue($initialValue, $interestRate, $investmentTime) {
                        $futureValue = $initialValue * pow(1 + $interestRate / 100, $investmentTime);
                        $futureValue = number_format($futureValue, 2);
                        return $futureValue;
                    }           
                    
                    if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3'])) {
                        $initialValue = $_POST['n1'];
                        $interestRate = $_POST['n2'];
                        $investmentTime = $_POST['n3'];

                        $futureValue = futureValue($initialValue, $interestRate, $investmentTime);

                        echo "<h3>The final value of the investment is: $futureValue.</h3>";            
                    }
                ?>

            <hr>

            <a href="exec08.html" class="btn btn-primary"> << Back</a>

            </div>
        </div>
    </div>
       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>