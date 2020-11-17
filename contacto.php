<?php $menu="Contacto"; include('includes/header.php');?>
<br>
<div class="row blue-text text-darken-4">

    <div class="col s12 m9 l7 offset-m3 offset-l2 white"style="border-radius:50px;">

        <div class="row">

                <div class="col s12 m5 l4 center blue darken-4 white-text">
                    <br><br><br>
                    <img src="./images/hombre.png" width="150px" height="auto" alt="">
                    <h4>Información de Contacto</h4>
                    <p>tovaropa@gmail.com</p>
                    <p>(+57) 310 262 3169</p>
                    <br><br><br><br>
                </div>

                <div class="col s12 m7 l8">
            
                <form action="enviar.php" method="post" class="container center">
                    <h5>Envia un mensaje</h5>
                               
                        <!-- Nombres -->
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="last_name" type="text" name="nombre" class="validate" required>
                            <label for="last_name">Nombre Completo</label>
                        </div>

                        <!-- Celular -->
                        <div class="input-field">
                            <i class="material-icons prefix">settings_cell</i>
                            <input id="cell" type="tel" name="telefono" class="validate" required>
                            <label for="cell">Celular</label>
                        </div>

                        <!-- E-mail -->
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input id="mail" type="email" name="correo" class="validate" required>
                            <label for="mail">E-mail</label>
                        </div>

                       <!-- Asunto -->
                       <div class="input-field">
                            <i class="material-icons prefix">outlined_flag</i>
                            <input id="Asunto" type="text" name="asunto" class="validate" required>
                            <label for="Asunto">Asunto</label>
                        </div>

                        <!-- Mensaje -->
                        <div class="input-field">
                            <i class="material-icons prefix">description</i>
                            <input id="Mensaje" type="text" name="mensaje" class="validate" required>
                            <label for="Mensaje">Mensaje</label>
                        </div>

                        <input type="submit" value="Enviar" id="btnSend" class="btn blue darken-4">
                    </div>
                </form>
            </div>
        </div>    
    </div>
</div>

<br>

<?php include('includes/footer.php');?>
