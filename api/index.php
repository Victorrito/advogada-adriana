<?php 
$int = 0;
if ($int == 0) {
	$flow = "./";
}elseif ($int == 1) {
	$flow = "../";
}elseif ($int == 2) {
	$flow = "../../";
}elseif ($int == 3) {
	$flow = "../../../";
}elseif ($int == 4) {
	$flow = "../../../../";
}elseif ($int == 5) {
	$flow = "../../../../../";
}elseif ($int == 6) {
	$flow = "../../../../../../";
}
?>

<!DOCTYPE html>
<html>

<!--HEAD COMPLETO-->
<head>
	<title>Adriana</title>
	<meta name="language" content="pt-BR">
	<meta name="robots" content="all">
	<meta name="author" content="M0rx">
	<meta name="keywords" content="victor, victor site, programação, preciso de um site, criador de site, programador">
	<link rel="canonical" href="https://victor.com.br"/>
	<?php include($flow.'assents/app/head.php');?>
</head>

<!--Importando Css-->
<?php include($flow.'assents/css/style_global.php'); ?>

<!--Body WebSite-->
<body>


<!-- Body -->
<div id="header">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container-fluid">
					<a class="navbar-brand theme-text" href="#">
					&nbsp;Adriana</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link act" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Serviços</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Sobre mim</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contato</a>
						</li>
					</ul>

				</div>
			</div>
		</nav>
		<!-- navbar code -->
		<div class="middle">
			<h1 class="text-white display-3 fw-bold">Olá eu sou <br> Adriana Menezes, <br><span class="theme-text">Seja bem-vindo</span>.</h1>
		</div>
	</div>
	<svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#fff" fill-opacity="1"
			d="M0,192L60,181.3C120,171,240,149,360,133.3C480,117,600,107,720,106.7C840,107,960,117,1080,122.7C1200,128,1320,128,1380,128L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
		</path>
	</svg>
</div>


<div class="about-me mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 bg-image p-5 d-none d-md-block">
			<div class="content text-right">
			</div>
			</div>
			<div class="col-md-6 p-5 text-center">
			<h2 class="title mb-3">Sobre Mim</h2>
			<p class="text-about"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			</p>
			<btn class="btn btn-success btn-container">Saiba mais</btn>
			</div>
		</div>
	</div>
</div>


<div class="books bg-dark text-center mt-5">
	<h1 class="text-center text-white p-3">Meus Livros</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-4 d-flex justify-content-center mb-5">
				<div class="card card-books">
					<img src="assents/img/logo/livro-1.jpg" class="card-img-top" alt="..." style="object-fit: cover;">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-success">Go somewhere</a>
					</div>
				</div>
			</div>

			<div class="col-md-4 d-flex justify-content-center mb-5">
				<div class="card card-books">
					<img src="assents/img/logo/livro-2.jpg" class="card-img-top" alt="..." style="object-fit: cover;">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-success">Go somewhere</a>
					</div>
				</div>
			</div>

			<div class="col-md-4 d-flex justify-content-center mb-5">
				<div class="card card-books">
					<img src="assents/img/logo/livro-3.jpg" class="card-img-top" alt="..." style="object-fit: cover;">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-success">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


  <section id="key-benefits">
      <h1 class="text-center mt-4">Conteúdos e aulas <span class="fw-bold theme-text">GRATUITAS</span></h1>
      <div class="benefits">
        <div class="benefit text-center">
          <div id="benefit-1" class="benefit-img"></div>
		  <h3>Youtube</h3>
          <p>
            Alguma coisa muito legal, que vai fazer a diferença na vida do
            participante.
          </p>
		  <a href="" class="btn btn-success">Saiba mais</a>
        </div>
        <div class="benefit">
          <div id="benefit-2" class="benefit-img"></div>
		  <h3>Telegram</h3>
          <p>
            Alguma coisa muito legal, que vai fazer a diferença na vida do
            participante.
          </p>
		  <a href="" class="btn btn-success">Saiba mais</a>
        </div>

      </div>
    </section>

<div class="cursos bg-dark">
	<div class="container">
		<div class="row">
			<h1 class="text-center text-white my-3">Nossos cursos</h1>
			<div class="col-md-4 mb-5">
				<div class="card" style="width: 100%;">
					<img src="assents/img/logo/photo-1.jpg" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-success btn-container">Go somewhere</a>
					</div>
				</div>
			</div>

			<div class="col-md-4 mb-5">
				<div class="card" style="width: 100%;">
					<img src="assents/img/logo/photo-2.jpg" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-success btn-container">Go somewhere</a>
					</div>
				</div>
			</div>

			<div class="col-md-4 mb-5">
				<div class="card" style="width: 100%;">
					<img src="assents/img/logo/photo-3.jpg" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-success btn-container">Go somewhere</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="section-attributes pb-5" id="section-depoiments-navbar">
    <div class="container">
        <h1 class="title-cards text-center my-2 p-4">Veja o que estão falando de nós!</h1>

        <div class="row">
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card card-card text-center" style="width: 100%">
                  <div class="card-body">
                    <h5 class="card-title fs-4">Alanna Mirtes</h5>
                    <p class="card-text">A Cleo ajudou muito tanto minha empresa quanto as consultoras da Lindíssima. Elas aprenderam como usar e trabalhar nas redes sociais para crescerem e aumentarem suas vendas.<p>
                  </div>
                </div>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <div class="card card-card text-center" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title fs-4">Maria Lins</h5>
                    <p class="card-text">A Cléo já está com a gente mais de 2 anos e nós aprendemos muito com ela e estamos conseguindo crescer nossa empresa tanto nas redes sociais quanto no Google.</p>
                  </div>
                </div>
                
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <div class="card card-card text-center" style="width: 100%">
                  <div class="card-body">
                    <h5 class="card-title fs-4">Laninha</h5>
                    <p class="card-text">Quero agradecer a Cléo pelo maravilhoso trabalho que ela fez aqui para a Innovar, nos mostrando tanto como construir nossa presença digital quanto a criação de campanhas para vender.</p>
                  </div>
                </div>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <div class="card card-card text-center" style="width: 100%">
                  <div class="card-body">
                    <h5 class="card-title fs-4">Antonio</h5>
                    <p class="card-text">Nosso escritório de advocacia só cresceu depois de chamarmos a Cléo para estruturar nossa empresa nas redes sociais. Obrigado!<p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="section bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Informações</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <li><a href="#">Home</a></li>
                            <li><a href="https://wa.me/5581994383204">Contato</a></li>
                            <li><a href="#about">Sobre mim</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Contatos</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <li><a href="https://wa.me/5581994383204">WhatsApp</a></li>
                            <li><a href="https://instagram.com/_lemospedro_?igshid=MzRlODBiNWFlZA==">Instagram</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Nossos Serviços</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <li><a href="">Ebook</a></li>
                            <li><a href="">Curso</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Quer saber mais? Entre em contato!</h6>
                        <p class="contact-info mt-4 text-white">Abaixo estão algumas formas de voce entrar em contato conosco.</p>
                        <div class="mt-5">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="https://instagram.com/_lemospedro_?igshid=MzRlODBiNWFlZA=="><img src="assents/img/logo/instagram.png" class="footer-social-icon"></a></li>
                                <li class="list-inline-item"><a href="https://wa.me/5581994383204"><img src="assents/img/logo/whatsapp.png" class="footer-social-icon"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-5">
            <p class="footer-alt mb-0 f-14 text-white">2023 © Adriana, Todos os direitos reservados</p>
            <p class="footer-alt mb-0 f-14 text-white">CPNJ: 0000 0000 000</p>
        </div>
    </footer>



   
   
   
   



<!-- Finalizar/Body -->
<script src="assents/js/card-ajust-text"></script>
<!--Import Cookie Enable-->

</body>
</html>