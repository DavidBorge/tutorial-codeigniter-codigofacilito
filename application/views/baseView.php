<?php

$this->load->view('includes/headView');  // Ruta de la vista: \application\views\includes\headView.php

$this->load->view($bodyContent);  // Ruta de la vista definida en el controlador que esté llamando a esta vista, en la variable $datos['bodyContent']

$this->load->view('includes/endOfHTMLView');  // Ruta de la vista: \application\views\includes\endOfHTMLView.php

?>