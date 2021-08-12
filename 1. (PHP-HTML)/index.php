<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArrayObject</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <h1>ArrayObject</h1>

    <?php 
        include 'dataArray.php';

        $company = new dataArray();   
        $company->Name = 'Field Nation'; 
        $company->Business = 'Software Service';
        $company->Location = 'Bangladesh'; 
        
        echo $company->displayAsTable();
        echo "<br>";

        $company2 = new dataArray();    
        $company2->Name = 'Google'; 
        $company2->Business = 'Software Service';
        $company2->Location = 'USA';
 
        
        echo $company2->displayAsTable();
    ?>
</body>
</html>
