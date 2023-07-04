<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Yantramanav:wght@100;300;400;500;700;900&display=swap');
	@import url('https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css');
	@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');



	*{
		margin: 0;
		padding: 0;
		font-family: 'Yantramanav', sans-serif;
	}
	.bg-1{
		background-color: #5182ED;
	}
	.bg-grad{
		background-image: linear-gradient(to right, #7351ed, #6b66f1, #6878f2, #6a88f1, #7396ee, #7499ec, #769ceb, #789fe9, #6e98ea, #6491ec, #5a89ec, #5182ed);
	}
	.ventical-50{
		position: relative;
		top: 50%;
		transform: translateY(-50%); 
	}

	/* SEÇÃO NAVBAR E HEADER */
	#header {
		background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
		url("assents/img/logo/header.jpg");
		background-position-x: center;
    	background-position-y: -1px;
		background-size: cover;
		width: 100%;
		height: 100vh;
		position: relative;
	}
	:root {
		--main-color: #009000;
	}

	.navbar-brand{
		font-size: 27px;
	}

	.navbar ul li a{
		font-size: 19px;
	}

	.act,
	.navbar ul li a:hover {
		color: var(--main-color) !important;
		border-bottom: 1px solid var(--main-color);
	}
	.theme-text {
		color: var(--main-color) !important;
	}

	svg.wave {
		position: absolute;
		bottom: -70px;
	}
	.middle {
		display: flex;
		justify-content: start;
		align-items: center;
		height: 80vh;
		width: 70%;
	}
	.middle h1 {
		font-size: 70px;
	}


	.bg-image{
		background-image: url('assents/img/logo/about-image1.jpg');
		background-size: cover;
		height: 300px;
		object-fit: cover;
	}

	.btn-container{
		width: 100%;
	}

	.title{
		position: relative;
      	display: inline-block;
		font-family: 'Yantramanav', sans-serif;
	}

	.title:after{
		content: '';
      	position: absolute;
      	bottom: -5px;
      	left: 0;
      	width: 50%;
      	height: 2px;
      	background-color: green;
	}

	/* Benefits section */
	#key-benefits h2 {
		background-color: var(--secondary);
		text-align: center;
		padding: 2em;
		font-weight: 500;
	}

	.benefits {
		display: flex;
		justify-content: space-around;
		padding: 4em;
		width: 80%;
		margin: 0 auto;
	}

	.benefit {
		text-align: center;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		max-width: 20%;
		color: var(--text-tertiary);
	}

	.benefit .benefit-img {
		width: 250px;
		height: 250px;
		border-radius: 50%;
		background-size: cover;
		background-position: center;
		margin-bottom: 1em;
	}

	#benefit-1 {
		background-image: url("assents/img/logo/youtube.png");
	}

	#benefit-2 {
		background-image: url("assents/img/logo/telegram-logo-1-1.png");
	}

	/* Mobile section */
	@media (max-width: 450px) {
	
		/* Benefits section */
		.benefits {
			flex-direction: column;
			align-items: center;
			width: auto;
			padding: 2em;
		}

		.benefit {
			max-width: 100%;
			margin-bottom: 2em;
		}

	}

	@media (max-width: 768px) {
		.benefits {
			flex-direction: row; /* Os benefícios serão dispostos lado a lado novamente */
			justify-content: space-between;
			align-items: center;
			flex-wrap: wrap; /* Benefícios serão quebrados em várias linhas */
		}

		.benefit {
			flex-basis: calc(50% - 10px); /* Cada benefício ocupa metade da largura disponível */
			margin-bottom: 20px; /* Adiciona espaçamento entre os benefícios na direção vertical */
		}

		.benefit:nth-child(even) {
			margin-left: 20px; /* Adiciona espaçamento à esquerda para benefícios pares */
		}
		
		.benefit p {
			margin: 10px 0; /* Aumenta o espaçamento vertical do texto */
		}
		
	}

	/* FOOTER */

	.bg-footer {
		background-color: var(--main-color);
		padding: 50px 0 30px;
	}
	.footer-heading {
		letter-spacing: 2px;
	}

	.footer-link a {
		color: #fff;
		line-height: 40px;
		font-size: 14px;
		transition: all 0.5s;
	}

	.footer-link a:hover {
		color: #1bbc9b;
	}

	.contact-info {
		color: #acacac;
		font-size: 14px;
	}

	.footer-social-icon {
		font-size: 15px;
		height: 34px;
		width: 34px;
		line-height: 34px;
		border-radius: 3px;
		text-align: center;
		display: inline-block;
	}


	.footer-heading {
		position: relative;
		padding-bottom: 12px;
	}

	.footer-heading:after {
		content: '';
		width: 25px;
		border-bottom: 1px solid #FFF;
		position: absolute;
		left: 0;
		bottom: 0;
		display: block;
		border-bottom: 1px solid #1bbc9b;
	}

	.list-inline {
		padding-left: 0;
		list-style: none;
	}

	.list-inline-item:not(:last-child) {
		margin-right: 0.5rem;
	}
	.list-inline-item {
		display: inline-block;
	}
	*, ::after, ::before {
		box-sizing: border-box;
	}
	user agent stylesheet
	li {
		display: list-item;
		text-align: -webkit-match-parent;
	}

	


	
</style>