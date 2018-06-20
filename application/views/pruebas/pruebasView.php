<h1>Pruebas con CodeIgniter</h1>
<hr><hr>


<!-- --------------------------------------------------------------------------- -->
<h2>Versión de CodeIgniter instalada</h2>
<?= CI_VERSION; ?>



<!-- --------------------------------------------------------------------------- -->
<hr><h2>Helpers (Tutorial 7)</h2>
<?= nuevaFuncionEnNuevoHelper(); ?>



<!-- --------------------------------------------------------------------------- -->
<hr><h2>Librerías (Tutorial 8)</h2>
<?= NuevaLibreria::crearListaUL(array('Elemento 1', 'Elemento 2')); ?>



<!-- --------------------------------------------------------------------------- -->
<hr><h2>Formularios con Form Helper (Tutoriales 10 y 11)</h2>

<!-- Abro el formulario (<form action="controlador/método">) -->
<?= form_open("Pruebas/miFormularioAction"); ?>

<!-- Un campo -->
<label>
    Campo 1:
    <?= form_input('campo1Form'); ?>
</label>
<br><br>
<?= form_open("formularios/miformulario"); ?>

<!-- Otro campo, con las propiedades como parámetros de form_input($data = '', $value = '', $extra = '') -->
<label>
    Campo 2:
    <?= form_input('campo2Form', 'Valor de Campo 2'); ?>
</label>
<br><br>

<!-- Otro campo, con las propiedades definidas en un array y label creado con el método de CodeIgniter -->
<?php
    $campo3Propiedades = array('name'        => 'campo3Form',
                               'placeholder' => 'Rellena el Campo 3...',
                               'type'        => 'text',
                               'maxlength'   => '20',
                               'value'       => '');
?>
<?= form_label('Campo 3: ', 'campo3Form'); ?>
<?= form_input($campo3Propiedades); ?>
<br><br>

<!-- Botón de Submit -->
<?= form_submit('botonSubmit', 'Enviar'); ?>

<!-- Cierro el formulario -->
<?= form_close(); ?>



<!-- --------------------------------------------------------------------------- -->
<hr><h2>Base de Datos: conexión, modelo, insert (Tutoriales 9 y 11)</h2>

<!-- Abro el formulario (<form action="controlador/método">) -->
<?= form_open("Pruebas/formularioQueGuardaEnBaseDeDatosAction"); ?>

<!-- Otro campo, con las propiedades definidas en un array y label creado con el método de CodeIgniter -->
<?php
    $campo1Propiedades = array('name'        => 'campo1Form',
                               'placeholder' => 'Rellena el Campo 1...',
                               'type'        => 'text',
                               'maxlength'   => '255',
                               'required'    => 'required');
?>
<?= form_label('Campo 1 (obligatorio): ', 'campo1Form'); ?>
<?= form_input($campo1Propiedades); ?>
<br><br>

<!-- Botón de Submit -->
<?= form_submit('botonSubmit', 'Enviar'); ?>

<!-- Cierro el formulario -->
<?= form_close(); ?>



<!-- --------------------------------------------------------------------------- -->
<hr><h2>Base de Datos: leer datos (Tutorial 12)</h2>

<!-- Comprobaciones -->
<?php //var_dump($getRegistrosMetodo); ?>
<?php //var_dump($getRegistrosMetodo->result()); ?>

<?php
    foreach ($getRegistrosMetodo->result() as $registro) {
        echo $registro->columna1.'<br>';
    }
?>