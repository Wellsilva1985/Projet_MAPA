<?php	
	require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>				
				<li><a href="index.php" title="HOME" alt="HOME">Home</a></li>
				<li><a href="#" title="Blog" alt="Blog">Blog</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Venham para casa da Dona Rita e escolha a sua Marmita.</h1>
                    </header>
                    <p> Venhan aproveitar nossas delicias</p>
                    <p><a href="#CARDAPIO" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">				
				<h1><a name="CARDAPIO">Confira Nossos Marmitas</h1></a>				
			</header>
			<?php
			//validar se array existe e se não está vazio
			if(is_array($menu) && !empty($menu)){
				foreach($menu as $key => $value){
			?>
			<article>				
				<a href="pagina2.php?id=<?=$value['id'];?>">				
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 0);?>Saiba mais...</p>
			</article>
			<?php
			}
		}else{
			echo "Sem Conteúdo no momento!!!";
		}
			?>
			
		</section>		
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer receber nosso cardápio em seu e-mail?</h1>
                    <p>Informe seu nome e seu e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form action="pagina1.php" method="POST">
                    <input type="text" name = "nome" placeholder="Seu nome">
                    <input type="email" name = "email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>        
	</main>

	<footer class="footer_assinatura">
		<p>WELLINGTON SILVA LOGIN 21011281-5 </p>
		<p>CURSO SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET</p>
	</footer>
</body>
</html>