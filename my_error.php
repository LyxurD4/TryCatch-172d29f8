<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>yoyoyo het is je niffo, fred tiffo</title>
</head>
<body>
    <?php        
        try {
            $getal = 0;
            if($getal === 0) {
                throw new Exception ("Er is iets fout gegaan.");
            }
            $getal = 5 / $getal;
        } catch (Exception $exception) {
            echo $exception -> getMessage();
        }
        
        
    ?>
</body>
</html>