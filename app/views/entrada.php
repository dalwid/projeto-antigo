<?php $this->layout('master') ?>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">

                <div class="mt-5 pt-5">    
                    <form action="/calculo" method="post" class="form-group mt-5 pt-5">


                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary" type="submit">Calcular</button>
                            </div>
                            <input type="text" name="entrada" placeholder="Digite a o valor da sua entrada" class="form-control">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

</section>