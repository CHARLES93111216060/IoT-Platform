<?php
require './templates/header.php';
?>

<div class="row">
  <div class="col-4">
    <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
      <nav class="nav nav-pills flex-column">
        <a class="nav-link" href="#invernadero1">Invernadero 1</a>
        <nav class="nav nav-pills flex-column">
          <a class="nav-link ms-3 my-1" href="#temperatura1">Temperatura 1</a>
          <a class="nav-link ms-3 my-1" href="#humedadAmbiente1">Humedad ambiente 1</a>
          <a class="nav-link ms-3 my-1" href="#HumedadSuelo1">HumedadSuelo1</a>
          <a class="nav-link ms-3 my-1" href="#ph1">PH 1</a>
          <a class="nav-link ms-3 my-1" href="#otro1">lo que sea 1</a>
        </nav>
        <a class="nav-link" href="#invernadero2">Invernadero 2</a>
        <nav class="nav nav-pills flex-column">
          <a class="nav-link ms-3 my-1" href="#temperatura2">Temperatura 2</a>
          <a class="nav-link ms-3 my-1" href="#humedadAmbiente2">Humedad ambiente 2</a>
          <a class="nav-link ms-3 my-1" href="#HumedadSuelo2">HumedadSuelo2</a>
          <a class="nav-link ms-3 my-1" href="#ph2">PH 2</a>
          <a class="nav-link ms-3 my-1" href="#otro2">lo que sea 2</a>
        </nav>
        <a class="nav-link" href="#invernadero3">Invernadero 3</a>
        <nav class="nav nav-pills flex-column">
          <a class="nav-link ms-3 my-1" href="#temperatura3">Temperatura 3</a>
          <a class="nav-link ms-3 my-1" href="#humedadAmbiente3">Humedad ambiente 3</a>
          <a class="nav-link ms-3 my-1" href="#HumedadSuelo3">HumedadSuelo3</a>
          <a class="nav-link ms-3 my-1" href="#ph3">PH 3</a>
          <a class="nav-link ms-3 my-1" href="#otro3">lo que sea 3</a>
        </nav>
        <a class="nav-link" href="#invernadero4">Invernadero 4</a>
        <nav class="nav nav-pills flex-column">
          <a class="nav-link ms-3 my-1" href="#temperatura4">Temperatura 4</a>
          <a class="nav-link ms-3 my-1" href="#humedadAmbiente4">Humedad ambiente 4</a>
          <a class="nav-link ms-3 my-1" href="#HumedadSuelo4">HumedadSuelo4</a>
          <a class="nav-link ms-3 my-1" href="#ph4">PH 4</a>
          <a class="nav-link ms-3 my-1" href="#otro4">lo que sea 4</a>
        </nav>

      </nav>
    </nav>
  </div>

  <div class="col-8">
    <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
<!-- invernadero 1 -->
      <div class = 'container' id="invernadero1">
        <div class="datos">
            <h4>Temperatura 1</h4>
            <span id = 'temperatura1'>Cargando ....</span>
            <h4>Humedad ambiente 1</h4>
            <span id = 'humedadAmbiente1'>Cargando ....</span>
            <h4>Humedad suelo 1</h4>
            <span id = 'HumedadSuelo1'>Cargando ....</span>
            <h4>PH 1</h4>
            <span id = 'ph1'>Cargando ....</span>
            <h4>lo que sea 1</h4>
            <span id = 'otro1'>Cargando ....</span>
        </div>
        <div class="imagen">
            <img src="./images/invernadero (Custom).jpeg" alt="">
        </div>
        
      </div>
<!-- invernadero 2 -->
      <div class = 'container' id="invernadero2">
        <div class="datos">
            <h4>Temperatura 2</h4>
            <span id = 'temperatura2'>Cargando ....</span>
            <h4>Humedad ambiente 2</h4>
            <span id = 'humedadAmbiente2'>Cargando ....</span>
            <h4>Humedad suelo 2</h4>
            <span id = 'HumedadSuelo2'>Cargando ....</span>
            <h4>PH 2</h4>
            <span id = 'ph2'>Cargando ....</span>
            <h4>lo que sea 2</h4>
            <span id = 'otro2'>Cargando ....</span>
            </div>
        <div class="imagen">
            <img src="./images/inver (Custom).jpeg" alt="">
        </div>
        
      </div>
<!-- invernadero 3 -->
      <div class = 'container' id="invernadero3">
        <div class="datos">
            <h4>Temperatura 3</h4>
            <span id = 'temperatura3'>Cargando ....</span>
            <h4>Humedad ambiente 3</h4>
            <span id = 'humedadAmbiente3'>Cargando ....</span>
            <h4>Humedad suelo 3</h4>
            <span id = 'HumedadSuelo3'>Cargando ....</span>
            <h4>PH 3</h4>
            <span id = 'ph3'>Cargando ....</span>
            <h4>lo que sea 3</h4>
            <span id = 'otro3'>Cargando ....</span>
        </div>
        <div class="imagen">
            <img src="./images/invernad (Custom).jpeg" alt="">
        </div>
      </div>
<!-- invernadero 4 -->
    <div class = 'container' id="invernadero4">
        <div class="datos">
            <h4>Temperatura 4</h4>
            <span id = 'temperatura4'>Cargando ....</span>
            <h4>Humedad ambiente 4</h4>
            <span id = 'humedadAmbiente4'>Cargando ....</span>
            <h4>Humedad suelo 4</h4>
            <span id = 'HumedadSuelo4'>Cargando ....</span>
            <h4>PH 4</h4>
            <span id = 'ph4'>Cargando ....</span>
            <h4>lo que sea 4</h4>
            <span id = 'otro4'>Cargando ....</span>
        </div>
        <div class="imagen">
            <img src="./images/inv (Custom).jpg" alt="">
        </div>
    </div>
      
    </div>
  </div>
</div>

    
</body>

<?php
require './templates/footer.php';
?>