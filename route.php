
<?php
echo"salut";

// Récupérez le chemin de l'URL
$path = $_SERVER['REQUEST_URI'];

// Définissez les routes
$routes = [
    '/' => './index.php',
    // '/about' => 'about.php',
    // '/contact' => 'contact.php',
    // '/admin' => './admin/login.html',
];

// Vérifiez si le chemin existe dans les routes
if (array_key_exists($path, $routes)) {
    // Incluez la page correspondante à la route
    include $routes[$path];
} else {
    // Gérez le cas où la route n'est pas trouvée (par exemple, affichez une page d'erreur 404)
    echo 'Page not found';
}
?>