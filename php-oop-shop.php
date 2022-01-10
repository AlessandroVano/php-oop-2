<?php 
require_once __DIR__ . '/classes/utente.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>PHP OOP SHOP </h1>
    </header>

    <main>
         <section>
             <h2>Prodotto in vendita </h2>       
             <div> Xbox serie s </div>
             <div>il suo prezzo di listino è 300€</div>
         </section>

        <section>
            <?php // istanza
            $user1 = new User('Alessandro Vanoli', 'Xbox Serie S', 300);
           /*  var_dump($user1); */
            ?>
            <hr>
            <h5> Nome utente dell'avvenuto acquisto:  <?php echo $user1->getNome(); ?> </h5> 
            
            <h5> hai acquistato il prodotto: <?php echo $user1->getProdotto(); ?> <h5>
            <h5>Grazie alla tua carta livello 3 il tuo costo è di: <?php echo $user1->GetLivelloCarta(); ?>€ <h5>
        </section>
    </main>
</body>
</html>