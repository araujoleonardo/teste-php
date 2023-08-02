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
                    function factorial($number) {
                        if ($number == 0 || $number == 1) {
                            return 1;
                        } else {
                            return $number * factorial($number - 1);
                        }
                    }
                    
                    if (isset($_POST['n1'])) {
                        $num = $_POST['n1'];
                    
                        if (!is_numeric($num) || $num < 0 || strpos($num, '.') !== false) {
                            echo "<h3>Please enter a non-negative integer.</h3>";
                        } else {
                            $result = factorial($num);
                            echo "<h3>Factorial of $num is: $result </h3>";
                        }
                    }
                ?>

            <hr>

            <a href="exec03.html" class="btn btn-primary"> << Back</a>


            </div>
        </div>
    </div>
       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>