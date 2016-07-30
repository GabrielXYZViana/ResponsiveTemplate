
<!DOCTYPE html>
<html>
<head>
  <title>Ta Viajando?</title>
  	<link rel="stylesheet" media="all" href="/assets/stylesheets/bootstrap.min.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/font-awesome.min.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/home.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/main.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/preset.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/responsive.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/user.css" data-turbolinks-track="true" />
	<link rel="stylesheet" media="all" href="/assets/stylesheets/application.css" data-turbolinks-track="true" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
</head>
<body>

<nav >
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="/projeto.php">Projeto</a></li>
        <li><a href="/livro.php">Livro</a></li>
        <li><a href="/autora.php">Autora</a></li>
        <li><a href="/index.php"><img src="/assets/images/Logo.png" class="logo" alt=""></a></li>
        <li><a href="/guia.php">Guia</a></li>
        <li><a href="/comoadquirir.php">Como adquirir</a></li>
        <li><a href="/contato.php">Contato</a></li>
      </ul>
    </div>
</nav>

  </section>
  <div class="border2"></div>

  <section id="atendimento">
    <div id="contact-us">
      <div class="container" style="padding-top: 5%;">
        <div class="container">
          <div class="row col-sm-10 col-sm-offset-1">
            <h1><i class="fa fa-group icone"></i>Contato</h1>
            <svg class="svg" width="100%" height="30px" viewBox="0 75 400 50">
              <line x1="-200" x2="620" y1="100" y2="100" stroke="#000" stroke-width="20" stroke-linecap="round" stroke-dasharray="1, 30"/>
            </svg>
            <div class="col-sm-6">
              <?php
              //if "email" variable is filled out, send email
                if (isset($_REQUEST['email']))  {

                //Email information
                $admin_email = "taviajando@taviajando.com.br";
                $name = $_REQUEST['name'];
                $email = $_REQUEST['email'];
                $phone = $_REQUEST['phone'];
                $comment = $_REQUEST['comment'];

                $email_message .= "Nome: ".$name."\n";

                $email_message .= "Email: ".$email."\n";

                $email_message .= "Telefone: ".$phone."\n";

                $email_message .= "Comments: ".$comment."\n";
                //send email
                mail($admin_email, "$subject", $email_message, "From:" . $email);

                //Email response
                echo "Obrigado por entrar em contato!";
                }

                //if "email" variable is not filled out, display the form
                else  {
              ?>

              <div class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"style="padding-bottom:10%;">
                <form method="post">
                  <div>
                    <i class="fa fa-user f-icons" aria-hidden="true"></i>
                    <input type="text" name="name" id="name" class="form-control form" placeholder="Nome Completo" />
                  </div>
                  <div>
                    <i class="fa fa-envelope f-icons" aria-hidden="true"></i>
                    <input type="email" name="email" id="email" class="form-control form" placeholder="E-mail" />
                  </div>
                  <div>
                    <i class="fa fa-phone f-icons" aria-hidden="true"></i>
                    <input type="text" name="phone" id="phone" class="form-control form" placeholder="Telefone" />
                  </div>
                  <div>
                    <i class="fa fa-paper-plane f-icons" aria-hidden="true"></i>
                    <textarea name="comment" id="comments" class="form-control form" rows="7" placeholder="Digite sua mensagem"></textarea>
                  </div>
                  <input type="submit" value="Enviar" class="btn submit" />
                  </form>
              </div>

              <?php
                }
              ?>
            </div>
            <div class="col-sm-6">
              <div class="wow fadeInUp info-contato" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h2>PONTO COM</h2>
                <h3>Acessoria & Comunicação</h3>
                <h4>Aline Sanchotene</h4>
                <div class="center-div">
                  <table >
                    <tr>
                      <th>
                        <i class="fa fa-mobile icone-contato"></i>
                      </th>
                      <th style="font-weight: normal;">
                        <a>(61) 9979-0644</a></br><a>(61) 8207-1189</a>
                      </th>
                    </tr>
                  </table>
                </div>

                  <p>
                    <i class="fa fa-envelope icone-contato-env"></i>
                    <a>
                      PCOMBSB@gmail.com
                    </a>
                  </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


</body>
</html>
