<h1>Pruebas con CodeIgniter</h1>
<hr><hr>


<!-- =========================================================================== -->
<h2>Versión de CodeIgniter instalada</h2>
<?= CI_VERSION; ?>



<!-- =========================================================================== -->
<hr><h2>Helpers (Tutorial 7)</h2>
<?= nuevaFuncionEnNuevoHelper(); ?>



<!-- =========================================================================== -->
<hr><h2>Librerías (Tutorial 8)</h2>
<?= NuevaLibreria::crearListaUL(array('Elemento 1', 'Elemento 2')); ?>



<!-- =========================================================================== -->
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



<!-- =========================================================================== -->
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



<!-- =========================================================================== -->
<hr><h2>Base de Datos: leer datos (Tutorial 12)</h2>

<!-- Comprobaciones -->
<?php //var_dump($getRegistrosMetodo); ?>
<?php //var_dump($getRegistrosMetodo->result()); ?>

<?php
    foreach ($getRegistrosMetodo->result() as $registro) {
        echo 'id: '.$registro->id.' - '.$registro->columna1.'<br>';
    }
?>
<?= form_close(); ?>
<?= form_close(); ?>



<!-- =========================================================================== -->
<hr><h2>Base de Datos: leer un dato por id (Tutorial 13)</h2>

<!-- Comprobaciones -->
<?php var_dump($getRegistroByIDMetodo->num_rows()); ?>
<?php //var_dump($getRegistrosMetodo->result()); ?>

<?php
    // foreach ($getRegistrosMetodo->result() as $registro) {
    //     echo $registro->columna1.'<br>';
    // }
?>
<?= form_close(); ?>



<!-- =========================================================================== -->
<hr><h2>URL: obtener la URL actual en distintas formas (Tutorial 13)</h2>

<p>
    <b>$this->uri->uri_string()</b><br>
    <?= $this->uri->uri_string(); ?>
</p>
<p>
    <b>$this->uri->ruri_string()</b><br>
    <?= $this->uri->ruri_string(); ?>
</p>
</p>
<p>
    <b>$this->uri->total_segments()</b><br>
    <?= $this->uri->total_segments(); ?>
</p>
</p>
<p>
    <b>$this->uri->total_rsegments()</b><br>
    <?= $this->uri->total_rsegments(); ?>
</p>
</p>
<p>
    <b>$this->uri->segment_array()</b><br>
    <?php var_dump($this->uri->segment_array()); ?>
</p>
</p>
<p>
    <b>$this->uri->rsegment_array()</b><br>
    <?php var_dump($this->uri->rsegment_array()); ?>
</p>



<!-- =========================================================================== -->
<hr><h2>URL: obtener segmentos de la URL actual en distintas formas (Tutorial 13)</h2>

<h3>Un segmento concreto</h3>

<p>
    <b>$this->uri->segment($n[, $no_result = NULL])</b><br>
    <b>$this->uri->segment(1)</b><br>
    <?= $this->uri->segment(1); ?>
</p>
<p>
    <b>$this->uri->segment($n[, $no_result = NULL])</b><br>
    <b>$this->uri->segment(2)</b><br>
    <?php var_dump($this->uri->segment(2)); ?>
</p>
<p>
    <b>$this->uri->segment($n[, $no_result = NULL])</b><br>
    <b>$this->uri->segment(2)</b><br>
    <?php 
        if( ! $this->uri->segment(2) ){
            echo 'El segmento no existe.';
        }
    ?>
</p>
<p>
    <b>$this->uri->rsegment($n[, $no_result = NULL])</b><br>
    <b>$this->uri->rsegment(1)</b><br>
    <?= $this->uri->rsegment(1); ?>
</p>
<p>
    <b>$this->uri->rsegment($n[, $no_result = NULL])</b><br>
    <b>$this->uri->rsegment(2)</b><br>
    <?php var_dump($this->uri->rsegment(2)); ?>
</p>

<h3>Un segmento con / delante, dentrás o ambos</h3>

<p>
    <b>$this->uri->slash_segment($n[, $where = 'trailing'])</b><br>
    <b>$this->uri->slash_segment(1)</b><br>
    <?= $this->uri->slash_segment(1); ?>
</p>
<p>
    <b>$this->uri->slash_segment(1, $where = 'trailing')</b><br>
    <?= $this->uri->slash_segment(1, $where = 'trailing'); ?>
</p>
</p>
<p>
    <b>$this->uri->slash_segment(1, $where = 'leading')</b><br>
    <?= $this->uri->slash_segment(1, $where = 'leading'); ?>
</p>
</p>
<p>
    <b>$this->uri->slash_segment(1, $where = 'both')</b><br>
    <?= $this->uri->slash_segment(1, $where = 'both'); ?>
</p>
</p>
<p>
    <b>$this->uri->slash_rsegment($n[, $where = 'trailing'])</b><br>
    <b>$this->uri->slash_rsegment(1)</b><br>
    <?= $this->uri->slash_rsegment(1); ?>
</p>
<p>
    <b>$this->uri->slash_rsegment(1, $where = 'trailing')</b><br>
    <?= $this->uri->slash_rsegment(1, $where = 'trailing'); ?>
</p>
</p>
<p>
    <b>$this->uri->slash_rsegment(1, $where = 'leading')</b><br>
    <?= $this->uri->slash_rsegment(1, $where = 'leading'); ?>
</p>
</p>
<p>
    <b>$this->uri->slash_rsegment(1, $where = 'both')</b><br>
    <?= $this->uri->slash_rsegment(1, $where = 'both'); ?>
</p>
<p>
    <b>$this->uri->slash_rsegment($n[, $where = 'trailing'])</b><br>
    <b>$this->uri->slash_rsegment(1)</b><br>
    <?= $this->uri->slash_rsegment(1); ?>
</p>

<h3>Pasar la URI a un array asociativo (cuando haya pares key/value en ella)</h3>
<p>
    <b>$this->uri->uri_to_assoc([$n = 3[, $default = array()]])</b><br>
    <b>$this->uri->uri_to_assoc()</b><br>
    <?php var_dump($this->uri->uri_to_assoc()); ?>
</p>
<p>
    <b>$this->uri->ruri_to_assoc([$n = 3[, $default = array()]])</b><br>
    <b>$this->uri->ruri_to_assoc()</b><br>
    <?php var_dump($this->uri->ruri_to_assoc()); ?>
</p>
</p>
<p>
    <b>$this->uri->assoc_to_uri($array)</b><br>
    <b>$this->uri->assoc_to_uri($array)</b><br>
    <?php //var_dump($this->uri->assoc_to_uri()); ?>
</p>