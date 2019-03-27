<?php 
    global $nomePagina;

    $nomePagina = "Contato";

    validarDadosFormulario();

    include ("/_pageParts/headerHTML.php");

    function validarDadosFormulario(){
        try
        {
            global $mensagemErroFormularioContato;

            global $mensagemSucessoFormularioContato;

            $mensagemSucessoFormularioContato = "";

            $mensagemErroFormularioContato = "";
    
            if(!isset($_POST["submit"]))
                return;
    
            $nome = $_POST["form-name"];
            $email = $_POST["form-email"];
            $mensagem = $_POST["form-mensagem"];
    
            if($nome == "" || $email == "" || $mensagem == "")
            {
                $mensagemErroFormularioContato =  "Preencha todos os campos corretamente para realizar o envio da mensagem.";
                return;
            }

            if(@mail($email, "Contato Web Site - Nome para Contato" . $nome, $mensagem))
                $mensagemSucessoFormularioContato = "Sucesso ao enviar a mensagem. Obrigado pela contribuição!! Responderemos em breve";
            else
            {
                $mensagemErroFormularioContato =  "Erro ao realizar o envio da Mensagem. Por favor, nos encaminhe a mensagem para esse e-mail 'xxxx@xxxx.com.br' enquanto resolvemos esse problema.";
                $mensagemErroFormularioContato .= "\r\n Erro gerado: " . $errorMessage = error_get_last()['message'];
            }

        }catch(Exception $e){

            $mensagemErroFormularioContato =  "Erro ao realizar o envio da mensagem. Por favor, nos encaminhe a mensagem para esse e-mail 'xxxx@xxxx.com.br' enquanto resolvemos esse problema.";

            $mensagemErroFormularioContato .= "\r\n Erro gerado: " . $e.getMessage();;
        }
    }
?>

<main>
    <h1 class="title-header-bar title-header-bar--white title-header-bar--green-background">Entre em Contato</h1>
    
    <div class="containerLimiter">
        <section class="entre-contato">
            
            <p class="short-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo doloribus aut placeat blanditiis debitis qui? Corporis enim neque totam veniam aliquid eos nobis voluptatum praesentium. Possimus corporis aperiam minus?</p>

            <form class="entre-contato__form" action="#" method="POST">
                <?php if($mensagemErroFormularioContato != ""):?>
                    <div class="entre-contato__form__error">
                        <?php echo $mensagemErroFormularioContato; ?>
                    </div>
                <?php endif;?>

                <?php if($mensagemSucessoFormularioContato != ""):?>
                    <div class="entre-contato__form__sucess">
                        <?php echo $mensagemSucessoFormularioContato; ?>
                    </div>
                <?php endif;?>

                <input class="entre-contato__form__input" id="form-name" name="form-name" type="text" placeholder="* O seu Nome">
                <input class="entre-contato__form__input" id="form-email" name="form-email" type="email" placeholder="* Um E-mail para Contato">
                <textarea class="entre-contato__form__input entre-contato__form__input--text-area" id="form-mensagem" name="form-mensagem" placeholder="* A sua Mensagem para Nós"></textarea>
                <input class="entre-contato__form__submit" type="submit" value="Enviar" name="submit">
            </form>
        </section>
    </div>

</main>

<?php include ("/_pageParts/footerHTML.php") ?>