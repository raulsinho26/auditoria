<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SI Auditoria</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    

	<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
			
    </script>
	
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Cadastro de Auditor</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form action="cadAuditor.php" method="post">
				 <label>DADOS GERAIS</label>
                    <div class="form-group">
                        <label>Nome</label>
                        <input  name="nome" type="text" class="form-control" placeholder="Enter username" required="">
                    </div>
                    <div class="form-group">
                        <label>Endereço de Email</label>
                        <input  name="email" type="email" class="form-control" placeholder="Enter email" required="">
                    </div>
					<div class="form-group">
                        <label>CPF</label>
                        <input  name="cpf" type="cpf" class="form-control" placeholder="Enter CPF" required="">
                    </div>
					<div class="form-group">
                        <label>Cidade</label>
                        <input  name="cidade" type="cidade" class="form-control" placeholder="Enter Cidade" required="">
                    </div>
					<div class="form-group">
                        <label>Logradouro</label>
                        <input  name="logradouro" type="logradouro" class="form-control" placeholder="Rua, Alameda, Avenida" required="">
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input  name="telefone" type="telefone" class="form-control" placeholder="Enter Telefone" required="">
                    </div>
					
					<hr>
					<hr>
					
					<label>FORMAÇÃO ACADEMICA</label>
					
					 <div class="form-group">
                        <label>Curso1</label>
                        <input type="text" class="form-control" placeholder="Enter Curso1" required="">
                    </div>
                    <div class="form-group">
                        <label>Instituição</label>
                        <input type="text" class="form-control" placeholder="Enter Instituição" required="">
                    </div>
					<div class="form-group">
                        <label>Ano Conclusão</label>
                        <input type="text" class="form-control" placeholder="Enter Ano Conclusão" required="">
                    </div>
					
					
                    
                    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Cancelar</button>
                    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Cadastrar</button>
                </form>
               
                <h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="index.html">Tela Inicial</a>
                </h1>
            </div>

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->


	
</body>

</html>