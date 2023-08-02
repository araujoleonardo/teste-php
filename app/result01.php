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
                    if (isset($_POST['n1']) && isset($_POST['n2'])) {
                        $num1 = $_POST['n1'];
                        $num2 = $_POST['n2'];
                        $operator = $_POST['operator'];

                        function calculate($num1, $num2, $operator) {
                            switch ($operator) {
                                case '+':
                                    return $num1 + $num2;
                                case '-':
                                    return $num1 - $num2;
                                case '*':
                                    return $num1 * $num2;
                                case '/':
                                    // Check for division by zero
                                    if ($num2 == 0) {
                                        return "Division by zero is not allowed.";
                                    } else {
                                        return $num1 / $num2;
                                    }
                                default:
                                    return "Invalid operator.";
                            }
                        }

                        $result = calculate($num1, $num2, $operator);

                        echo "<h3>Result: $result</h3>";
                    } else {
                        echo "<h3>Please fill all the fields and submit the form.</h3>";
                    }
                ?>


            <hr>

            <a href="exec01.html" class="btn btn-primary"> << Back</a>


            </div>
        </div>
    </div>
       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>