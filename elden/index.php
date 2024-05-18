<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Elden Ring</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php 
        
        $url = "https://eldenring.fanapis.com/api/items?limit=10000";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resultado = json_decode(curl_exec($ch));


        // var_dump($resultado);

        foreach ($resultado->data as $item) {
            $src = $item->image;

            // var_dump($item->name);
            echo "Nome: " .$item->name . "<br> Descrição: " .$item->description. "<br> <br>";
            echo "<img src=".$src." style='width: 10%;'> <br>";
        }
        ?>
    </body>
</html>