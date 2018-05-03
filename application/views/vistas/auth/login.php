<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<br><br><br><br> <br><br><br>
<div class="row">
    <div class="module form-module">
        <div>
        </div>
        <div class="form">
            <h2 style="text-align: center">Iniciar Sesión</h2>
            <?php echo form_open('signin');?>
            <?php if($this->session->flashdata("error")):?>
                <div class="alert alert-danger">
                    <p> <?php echo $this->session->flashdata("error"); ?></p>
                </div>
            <?php elseif($this->session->flashdata("error-user")):?>
                <div class="alert alert-danger">
                    <p> <?php echo $this->session->flashdata("error-user"); ?></p>
                </div>
            <?php endif?>
            <div class="form-group">
                <label for=""> Correo Eléctronico </label>
                <div class="input-group">

                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input type="email" name="correo" value="<?php echo set_value('correo');?>" class="form-control" id="email" placeholder="usuario@gmail.com">
                </div>
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class=" glyphicon glyphicon-lock"></span>
                    </div>
                    <input type="password" name="clave" class="form-control" id="pass" placeholder="Contraseña">
                </div>
            </div>
            <button type="submit" class="">Entrar</button>
            </form>
        </div>
        <div class="cta"><a href="#">¿Olvidó su contraseña?</a></div>
    </div>
</div>
<br><br><br> <br>




