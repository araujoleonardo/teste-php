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
                    function palindrome($word) {
                        $reversed_word = strrev($word);
                        return $word == $reversed_word;
                    }
                    
                    if (isset($_POST['word'])) {
                        $p = $_POST['word'];
                    
                        if (palindrome($p)) {
                            echo "<h3>$p is a palindrome.</h3>";
                        } else {
                            echo "<h3>$p is not a palindrome.</h3>";
                        }
                    }
                ?>

            <hr>

            <a href="exec04.html" class="btn btn-primary"> << Back</a>


            </div>
        </div>
    </div>
       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>