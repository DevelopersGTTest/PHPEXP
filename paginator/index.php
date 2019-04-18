<?php

require_once 'cnn.php';

   $_SESSION['i'] = 0;
   $_SESSION['page_current'] = 0;
    
    $sql_base = "SELECT * FROM animals";
    $query_base = sql($sql_base );

    $results_per_page = 4;

    $number_of_results = mysqli_num_rows($query_base );
    $number_of_pages = ceil($number_of_results/$results_per_page);

    if(!isset( $_GET['page'])){
        $page = 1;
        //var_dump($page);
    }else{
        $page = $_GET['page'];
        $_SESSION['page_current'] = $page;
        //var_dump($page);
    }

    $first_position = ($page -1 ) * $results_per_page;
    $query = 'SELECT * FROM animals LIMIT ' .$first_position . ',' . $results_per_page;
    
    $result = sql($query);
    
    //var_dump($result );

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


    <h1>paginator</h1>

    <div class="container">
            <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            
            
            <?php
                foreach($result as $key => $value):
                //var_dump($value);
            ?>
            <tr>
            <th scope="row"> <?= $value['id_animal'] ?> </th>
            <td> <?= $value['name'] ?>  </td>
            </tr>
            <?php
                endforeach;
            ?>

            
        </tbody>
        </table>

        <div class="container">
        
        
            <nav aria-label="Page navigation example">  
                <ul class="pagination">
                <?php
                    
                    if( isset( $_SESSION['page_current'] ) > 0 || isset( $_SESSION['page_current'] ) >= 1    ):
                ?>
                    <li class="page-item"><a class="page-link" href="#"> &laquo;  </a></li>
                <?php
                    endif;
                ?>
                <?php
        
                    for($page = 1; $page <= $number_of_pages; $page ++):
                        if( $_SESSION['i'] < 3 ):
                ?>
                    <li class="page-item"><a class="page-link" href="index.php?page=<?= $page  ?>"> <?=  $page ?> </a></li>
                <?php
                        endif;
                        $_SESSION['i'] ++;
                    endfor;
                ?>
                <?php
                    if( $_SESSION['page_current']  < $number_of_pages  ):
                ?>
                    <li class="page-item"><a class="page-link" href="index.php?page=<?= $_SESSION['page_current'] + 1  ?>" > &raquo; </a></li>
                <?php
                    endif;
                ?>
                </ul>
            </nav>
        </div>

    </div>

    
</body>
</html>