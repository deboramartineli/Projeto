<?php include("./cabecalho.php"); ?>

<h1>Lista de usuários</h1>


<table border="3>"
<?php
    for($i =0; $i <10; $i++)
    {
        ?>
            <tr>
                <td>Nome <?php echo $i; ?></td>
                <td>Email <?php echo $i; ?></td>
                <td><input type="checkbox" /></td>
            </tr>
        <?php
    }
?>
</table>

<?php include("./rodape.php"); ?>