
<?php

use app\controllers\CalculoController;

 $this->layout('master') ?>
<?php


 $result = new CalculoController;

var_dump($result->getZ());

?>




<section class="">
  <div class="container">
    
      <form>

        <div class="form-row mt-5 pt-5">
          <div class="form-group col-md-6">
            <label for="ajudante" class="text-white"><h4>Ajudante</h4></label>
            <input type="number" class="form-control" id="ajudante" placeholder="Ajudante" disabled="disabled"
            value="" name="ajudante">
          </div>
          <div class="form-group col-md-6">
            <label for="garagem" class="text-white"><h4>Garagem</h4></label>
            <input type="number" class="form-control" id="garagem" placeholder="Garagem" disabled="disabled" name="garagem">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="material" class="text-white"><h4>Material</h4></label>
            <input type="number" class="form-control" id="material" placeholder="Material" disabled="disabled" name="material">
          </div>
          <div class="form-group col-md-6">
            <label for="paulo" class="text-white"><h4>Paulo</h4></label>
            <input type="number" class="form-control" id="paulo" placeholder="Paulo" disabled="disabled" name="paulo">
          </div>
        </div>

      </form>    

  </div>
</section>