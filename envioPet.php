\<?php
    $falha = 0;
    require_once 'classe.php';
    $p = new Pet("epiz_31597876_inter", "sql112.epizy.com", "epiz_31597876", "polido123");

    $id_categoria = 0;
if (isset($_POST['petName'])) {
    if ($_POST['att'] == 1) {
        $id_upd = $_POST['id_upd'];
        $name_pet = $_POST['petName'];
        $idade_pet = $_POST['petAge'];
        $tipo_pet = $_POST['petPorte'];
        $peso_pet = $_POST['petPeso'];
        if (!empty($petName) != NULL) {
            $p->atualizarPet($id_upd, $name_pet, $idade_pet, $peso_pet,$porte_pet,$tipo_pet);
        }
    } else {
        $name_pet = $_POST['petName'];
        $idade_pet = $_POST['petAge'];
        $tipo_pet = $_POST['petPorte'];
        $peso_pet = $_POST['petPeso'];
        $p->cadastrarPet($name_pet, $idade_pet, $peso_pet,$porte_pet,$tipo_pet);
    }
}
?>
<?php
if (isset($_GET['id_up'])) {
    $id_update = addslashes($_GET['id_up']);
    $res = $p->buscarPet($id_update);
}
?>

<head>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <?php
    if ($falha == 1) {
        echo '<script> alert("falha no envio") </script>';
    ?>
        <div class="container">
            RETORNANDO...
            <img src="loading.gif">
            <script type="text/javascript">
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 2000);
            </script>
        </div>
    <?php
    } else {
    ?>
        <div class="container">
            <script type="text/javascript">
                setTimeout(function() {
                    alert('Enviado com Sucesso');
                    window.location.href = "index.php";
                }, 2000);
            </script>
            ENVIANDO...
            <img src="img/loading.gif">
        <?php
    }
        ?>
</body>

</html>