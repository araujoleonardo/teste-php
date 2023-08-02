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
                    function average($grades) {
                        $totalGrades = array_sum($grades);
                        $numberGrades = count($grades);
                        $average = $totalGrades / $numberGrades;
                        return $average;
                    }               
                    
                    if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3'])) {
                        $n1 = $_POST['n1'];
                        $n2 = $_POST['n2'];
                        $n3 = $_POST['n3'];
                        
                        $grades = array($n1, $n2, $n3);
                        $average = average($grades);

                        echo "<h3>The average grade is: $average.</h3>";            
                    }
                ?>

            <hr>

            <a href="exec07.html" class="btn btn-primary"> << Back</a>

            </div>
        </div>
    </div>
       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>