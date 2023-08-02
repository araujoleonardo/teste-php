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
                    if (isset($_POST['n1'])) {
                        $num1 = $_POST['n1'];

                        if(isPrime($num1) == true)
                        {
                            echo "<h3>$num1 is prime!</h3>";
                        }else{
                            echo "<h3>$num1 is not prime!</h3>";
                        }

                    } else {
                        return "<h3>Please fill all the fields and submit the form.</h3>";
                    }

                    function isPrime($num1)
                    {

                        if($num1 <= 1)
                        {
                            return false; 
                        }

                        for ($i = 2; $i <= $num1 / 2; $i++) {
                            if ($num1 % $i == 0) {
                                return false;
                            }
                        }

                        return true;
                    }

                    
                    $i = 0;
                    $n = 2;
                    $primes = [];
                
                    while ($i < 10) {
                        if (isPrime($n)) {
                            $primes[] = $n;
                            $i++;
                        }
                        $n++;
                    }
                    
                    echo "<br>";

                    echo "The first 10 prime numbers are: ";
                    foreach ($primes as $prime) {
                        echo $prime . " ";
                    }

                ?>

            <hr>

            <a href="exec02.html" class="btn btn-primary"> << Back</a>


            </div>
        </div>
    </div>
       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>