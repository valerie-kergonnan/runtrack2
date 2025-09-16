<?php

    $bool=true;
    $entier=2;
    $string="jem'aime";
    $float=5.2;
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>job-03</title>
    </head>
    <body>
           <table>
                <tr>
                    <th>type</th>
                    <th>nom</th>
                    <th>valeur</th>
                    <th>decimal</th>
                </tr>
                <tr>
                    <td><?php echo $bool; ?></td>
                    <td><?php echo $entier; ?></td>
                    <td><?php echo $string; ?></td>
                    <td><?php echo $float; ?></td>              
                </tr>
            </table> 
    </body>
    </html>

    