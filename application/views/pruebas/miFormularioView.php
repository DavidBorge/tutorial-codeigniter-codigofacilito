<div id="container">

    <h1>miFormularioView</h1>
    <p>Estás viendo: \application\views\pruebas\miFormularioView.php</p>

    <hr>

    <h3>Valores de los campos del formulario:</h3>
    
    <p>
        <b>Campo 1: </b>
        <?= $this->input->post('campo1Form') ?>
    </p>

    <p>
        <b>Campo 2: </b>
        <?= $this->input->post('campo2Form') ?>
    </p>

    <p>
        <b>Campo 3: </b>
        <?= $this->input->post('campo3Form') ?>
    </p>

</div>