<?php
//Appel du modèle
include("../modele/modele.php")

 if (!empty($_POST['title']) && !empty($_POST['name']) && !empty($_POST['category'])&& !empty($_POST['price'])&& !empty($_POST['quantity'])&& !empty($_POST['cdp']) && !empty($_POST['city']) && !empty($_POST['description']) )  
    {
    	$title 		 = htmlspecialchars($_POST["title"]);
    	$name  		 = htmlspecialchars($_POST["name"]);
    	$category    = htmlspecialchars($_POST["category"]);
    	$price    	 = htmlspecialchars($_POST["price"]);
    	$quantity    = htmlspecialchars($_POST["quantity"]);
    	$cdp    	 = htmlspecialchars($_POST["cdp"]);
    	$city      	 = htmlspecialchars($_POST["city"]);
  	    $description = htmlspecialchars($_POST["description"]);


        // Remplissage de la base de donnée          
        $req = $bdd->prepare(

        	'INSERT INTO annonce(title, name, category, price, quantity, cdp, city, description) VALUES(:title, :name, :category, :price, :quantity, :cdp, :city, :description')
        	);

        $req->execute(array(
            'title' => $title,
            'name' => $name,
            'category' => $category,
            'price' => $price,
            'quantity' => $quantity,
            'cdp' => $cdp,
            'city' => $city,
            'description'=> $description
            ));

if (isset($_POST['envoyer']) && !empty($_POST['title']) && !empty($_POST['name'])&& !empty($_POST['category']) && !empty($_POST['price']) && !empty($_POST['quantity']) && !empty($_POST['cdp']) && !empty($_POST['city']) &&!empty($_POST['description']))

    {
        echo"Votre annonce a bien été publiée ! ";
?>
     <script> 
    // Redirection vers la page d'accueil         
    setTimeout("location.href = '../index.php';", 3000);           
     </script>

<?php
    }
    
    //Vérification que les champs sont bien tous rempli
        elseif (isset($_POST['valider']) && ($_POST['title']) ||
        		isset($_POST['valider']) && empty($_POST['name']) ||
        		isset($_POST['valider']) && empty($_POST['category']) || 
        		isset($_POST['valider']) && empty($_POST['price']) || 
        		isset($_POST['valider']) && empty($_POST['quantity']) || 
        		isset($_POST['valider']) && empty($_POST['cdp']) || 
        		isset($_POST['valider']) && empty($_POST['city']) || 
        		isset($_POST['valider']) && empty($_POST['description']) == NULL)
        {
             echo"Tu as oublié de remplir un ou plusieurs champs";
?>
    <script >
    // Redirection vers la page d'Inscription 
    setTimeout("location.href = '../vues/annonce.php';", 3000);
    </script>

<?php
	}
	else
            {
                echo"Quelque chose ne vas pas !!";
?>
                <script >
                    // Redirection vers la page d'Inscription 
                    setTimeout("location.href = '../vues/login.php';", 3000);
                </script>
<?php
            }
    }
?>

