<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Determination d'un mention avec php & bootstrap 5</title>
</head>
<body>
    <br>

    <div class="container"><br><br><br>
        <div class="text-center">
            <img src="logo.png" alt="logo_xarala" class="img-thumbnails">
        </div>
        <div class="listeleve">
            <select class="form-select" aria-label="Default select example">
                <option selected>Ouvrir Pour Séléctionun éléve</option>
                <option value="1">Elhaji Samba Sy</option>
                <option value="2">Fatbinetou Ndiaye</option>
                <option value="3">Ousmane Sonko</option>
            </select>
        </div><br><br><br>
        <div class="variable">
        
        <div class="row align-items-center justify-content-around align-content-center">
                <div class="col-9">
                    <label>La Moyenne</label>
                    <form method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Entrée Une Note</span>
                            <input type="number" class="form-control" id="input_number" name="input_number" aria-describedby="basic-addon3">
                            <button class="btn btn-secondary" type="submit" value="submit" id="button-addon3">Envoyer</button>
                    </div>
                    </form>
                </div>
            
        </div>
        <br>
    
        <div class="row align-items-center justify-content-around align-content-center">
                    <h2 class="col-2 col-xs-6"> Décision </h2>
                <div class="col-4 col-xs-6 appreiation ">
                <?php
                    if (isset($_POST['input_number'])) {
                        $input  =$_POST['input_number'];
                        
                        if(is_numeric($input)) {
                            $num= (int)$input;
                            
                            if($num <= 9) {
                                echo '<h2 style="color : green;">Ajournée</h2>';
                                } else {
                                    echo '<h2 style="color : blue;">Admis</h2>';
                                }
                            }
                        }
                ?>
                </div>
                  
                    <h2 class="col-2 col-xs-6"> Mention </h2>
                <div class="col-4 col-xs-6 appreiation ">
                <?php
                    
                    if (isset($_POST['input_number'])) {
                        $input  =$_POST['input_number'];
                        
                        if(is_numeric($input)) {
                            $num= (int)$input;
                            
                            if($num < 10) {
                                    echo '<h2 style="color : green;">Pas de mention</h2>';
                                } elseif($num >= 10 && $num <= 11.99) {
                                    echo '<h2 style="color : blue;">passable</h2>';
                                } elseif($num >= 12 && $num <= 13.99) {
                                    echo '<h2 style="color : blue;">Assez Bien</h2>';
                                } elseif($num >= 14 && $num <= 15.99) {
                                    echo '<h2 style="color : blue;">Bien</h2>';
                                } elseif($num >= 16 && $num <= 16.99) {
                                    echo '<h2 style="color : blue;">Trés Bien</h2>';
                                } elseif ($num >= 17) {
                                    echo '<h2 style="color : blue;">Excellent</h2>';
                                }
                            }
                        }
                ?>
                </div>
        </div>
        
           
           
           
        
        </div>
        <br><br><br>
        <!-- <div class="row align-items-center justify-content-around align-content-center appreiations">
            <div class="col-12 align-items-center justify-content-around align-content-center ">
                <h2>Appréciation</h2>
            </div>
        </div> <br><br><br> -->
        
        <div class="text">
            <p>Copyright &copy; 2023 | Xarala | Elhadji Samba Sy</p>
        </div>
    
    </div>
    
    
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>