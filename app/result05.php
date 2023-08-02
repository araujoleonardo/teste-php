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
                    function multiplicationTable($number) {
                        for ($i = 1; $i <= 10; $i++) {
                            $result = $number * $i;
                            echo "$number x $i = $result <br>";
                        }
                    }                 
                    
                    if (isset($_POST['n1'])) {
                        $n = $_POST['n1'];
                        
                        multiplicationTable($n);            
                    }
                ?>

            <hr>

            <a href="exec05.html" class="btn btn-primary"> << Back</a>

            </div>
        </div>
    </div>
       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>