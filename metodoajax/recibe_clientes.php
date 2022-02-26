<?php
    $codigo = $_POST['codigo'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dui = $_POST['dui'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Dui</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $codigo ?></td>
                <td><?php echo $nombres ?></td>
                <td><?php echo $apellidos ?></td>
                <td><?php echo $dui ?></td>
                <td><?php echo $direccion ?></td>
                <td><?php echo $telefono ?></td>
                <td><?php echo $email ?></td>
            </tr>
        </tbody>
    </table>
</div>