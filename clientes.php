<?php include("./cabecalho.php"); ?>

<h1>Lista de Clientes</h1>

<table border="3>"
<?php
    for($i =0; $i <10; $i++)
    {
        ?>
            <tr>
                <td>Clientes <?php echo $i; ?></td>
                <td>Endereço <?php echo $i; ?></td>
                <td>CPF <?php echo $i; ?></td>
            </tr>
        <?php
    }
?>
</table>

<?php include("./rodape.php"); ?>

