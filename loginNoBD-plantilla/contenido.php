<?
//aquí tendremos que iniciar sesión y comprobar que hay un username almacenado en la sesión
//si lo hay podemos mostrar el contenido privado
//en caso contracio usaremos la función header("Location: login.php"); para redirigir al usuario
//al login
session_start();

if(isset($_SESSION["usuario"])) {
    echo "<h1 hola, >" . $_SESSION["usuario"] ."</h1>";
    echo "Este el contenido premium";
?>

<a href="cerrarsesion.php"></a>

<?
} else {
    header ("Location: login.php");
}
?>
