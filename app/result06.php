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
                    function countVowels($string) {
                        $vowels = array('a', 'e', 'i', 'o', 'u');
                        $numVowels = 0;

                        for ($i = 0; $i < strlen($string); $i++) {
                            if (in_array($string[$i], $vowels)) {
                                $numVowels++;
                            }
                        }
                        return $numVowels;
                    }                
                    
                    if (isset($_POST['string'])) {
                        $string = $_POST['string'];
                        
                        $numVowels = countVowels($string);
                        echo "<h3> The string has {$numVowels} vowels.</h3>";            
                    }
                ?>

            <hr>

            <a href="exec06.html" class="btn btn-primary"> << Back</a>

            </div>
        </div>
    </div>
       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>