<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <form method="POST" action="../controller/controller.php" id="styleFormPreferences">
        <h2 class="title">Selecciona tus generos favoritos</h2>
        <div class="label_preferences">
                <label for="aventura">  
                    <input type="checkbox" id="aventura" name="aventura" value="aventura" required class="space_marginbm label_layout "> Aventura
                </label>
            
                <label for="Acción"> 
                    <input type="checkbox" id="Acción" name="Acción" required class="space_marginbm label_layout"> Acción
                </label>

                <label for="RPG"> 
                    <input type="checkbox" id="RPG" name="RPG" required class="space_marginbm label_layout">RPG
                </label>    
                
                <label for="Estrategia"> 
                    <input type="checkbox" id="Estrategia" name="Estrategia" required class="space_marginbm label_layout">Estrategia
                </label>
                
                <label for="Deportes"> 
                    <input type="checkbox" id="Deportes" name="Deportes" required class="space_marginbm label_layout">Deportes
                </label>

                <label for="Shooter"> 
                    <input type="checkbox" id="Shooter" name="Shooter" required class="space_marginbm label_layout">Shooter
                </label>
                       
        </div>
        <button type="submit">Login</button>
    </form>
    </body>
</html>