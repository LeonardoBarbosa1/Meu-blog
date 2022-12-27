<?php
    include_once("templates/header.php");
    
?>


<link rel="stylesheet" href="css/contato.css">

<main class="div-form">
    <div class="main-form">
        <form id="formulario-contato" action="https://formsubmit.co/leonardobarbosadossantos44@gmail.com" method="POST">
                <h3 class="titulos-formulario">Entre em contato</h3>
                <label>
                <p class="info">Nome</p> 
                <input type="text" name="Nome" placeholder="Digite seu Nome" required/>
                </label>

                <label>
                <p class="info">E-mail</p> 
                <input type="email" name="email" placeholder="Digite seu E-mail" required/>
                </label>

                <label>
                    <p class="info">WhatsApp</p>
                    <input type="tel" name="Telefone" placeholder="Digite seu Telefone" required/>
                </label>

                <label >
                <p class="info">Fale Conosco</p>
                <textarea name="info" placeholder="Qual sua Dúvida?"></textarea>
                </label>
                <div class="botao">
                    <button type="submit">Enviar</button>
                </div>
                
        </form>
    </div>
</main>





<?php
    include_once("templates/footer.php")
?>