<?php
    $this->layout('master'); 
 ?>

<section class="">
  <div class="container">
    
      <form >
        
        <div class="form-row mt-5 pt-5">
          <div class="form-group col-md-6">
            <label for="ajudante" class="text-white"><h4>Ajudante</h4></label>
            <input type="text" class="form-control" id="ajudante" placeholder="Ajudante" disabled="disabled"
            value="<?=$this->e($_SESSION['menor'])?>" name="ajudante">
          </div>
          <div class="form-group col-md-6">
            <label for="garagem" class="text-white"><h4>Garagem</h4></label>
            <input type="number" class="form-control" id="garagem" placeholder="Garagem" disabled="disabled" name="garagem" 
            value="<?=$this->e($_SESSION['menor'])?>">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="material" class="text-white"><h4>Material</h4></label>
            <input type="number" class="form-control" id="material" placeholder="Material" disabled="disabled" name="material" 
            value="<?=$this->e($_SESSION['menor'])?>">
          </div>
          <div class="form-group col-md-6">
            <label for="paulo" class="text-white"><h4>Paulo</h4></label>
            <input type="number" class="form-control" id="paulo" placeholder="Paulo" disabled="disabled" name="paulo"
            value="<?=$this->e($_SESSION['restante'])?>">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <a href="/" class="btn btn-primary btn-block">Calcular</a>
          </div>
        </div>  

      </form>    

  </div>
</section>

<?php session_destroy(); ?>