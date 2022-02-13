<?=$cabecera?>
<a class="btn btn-success mb-5 mt-3"href="<?=base_url('crear')?>">Añadir producto</a>

        <table class="table table-dark">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

            <?php foreach ($productos as $producto): ?>

                <tr>
                    <td><?= $producto['id']; ?></td>
                    <td>
                    
                    <img class="img-thumbnail" 
                    src="<?=base_url()?>/uploads/<?=$producto['imagen']?>" 
                    width="100" alt="">
                    
                    </td>
                    <td><?= $producto['nombre']; ?></td>
                    <td>

                        <a href="<?=base_url('editar/'.$producto['id']);?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?=base_url('borrar/'.$producto['id']);?>" class="btn btn-danger" type="button">Borrar</a>

                    </td>


                </tr>

            <?php  endforeach; ?>

            </tbody>
        </table>
<?=$pie?>
