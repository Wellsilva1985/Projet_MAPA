<?php

var_dump($_POST);

if(isset($_POST)){
    if(!empty($_POST)){
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = $_POST['nome'];
            echo $nome;
        }else{
            echo "Campo nome não existe ou não foi preenchido!!";
        }
    }else{
        echo "Campos vazios";
    }
}else{
    echo "Erro";
}
?>

<header>
		<nav>
			<ul>				
				<li><a href="index.php" title="HOME" alt="HOME">Home</a></li>
				<li><a href="#" title="Blog" alt="Blog">Blog</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
                <p><h2>Página em construção !!!</h2></p>
			</ul>
		</nav>
	</header>