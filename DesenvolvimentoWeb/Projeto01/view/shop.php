<?php include_once("header.php"); ?>

<section ng-controller="destaque-controller">

	<div class="container" id="destaque-produtos-container">
		
		 <div id="destaque-produtos" class="owl-carousel owl-theme">
		
			<div class="item" ng-repeat="produto in produtos">
				
				<div style="text-align: center;" class="col-sm-6 col-imagem">
					<a href="produto-{{produto.id_prod}}">
						<img style="max-width: 100%; max-height: 250px;" src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}">
				</a>
				</div>		
				<div class="col-sm-6 col-descricao">
					<h2>{{produto.nome_prod_longo}}</h2>
					<div class="box-valor">
						<div class="text-noboleto text-arial-cinza">no boleto</div>
						<div class="text-por text-arial-cinza">por</div>
						<div class="text-reais text-roxo">R$</div>
						<div class="text-valor text-roxo">{{produto.preco}}</div>
						<div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
						<div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
						<div class="text-total text-arial-cinza">total a prazo R$ {{produto.total}}</div>
					</div>
					<a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> Compre Agora</a>
				</div>

			</div>
				
		</div>

		<button type="button" id="btn-destaque-prev"><i class="fas fa-angle-left"></i></button>
		<button type="button" id="btn-destaque-next"><i class="fas fa-angle-right"></i></button>
		
	</div>

	<div id="promocoes" class="container">
		
		<div class="row">
			<div class="col-md-2">
				
				<div class="box-promocao box-1">
					<p>Escolha por Desconto</p>
				</div>

			</div>
			<div class="col-md-10">

				<div class="row-fluid">
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">40</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>							
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">60</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>							
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">80</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>							
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">85</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>							
						</div>
					</div>
				</div>
				
			</div>
		</div>

	</div>

	<div id="mais-buscados" class="container">

		<div class="row text-center title-default-roxo">
			<h2 style="color: #5E2799;
			font-family: 'OpenSans-Light';
 		   	font-size: 48px;
    		text-transform: uppercase;
    		text-align: center;">Os mais buscados</h2>
			<hr style="border: #FDE192 solid 8px;
			width: 200px;
    		margin: 0 auto;">			
		</div>

		<div class="row">
			
			<div class="col-md-3" ng-repeat="produto in buscados">
				<div class="box-produto-info">
					<a href="produto-{{produto.id_prod}}">
						<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" class="produto-img">
						<h3>{{produto.nome_prod_longo}}</h3>
						<!-- As estrelas dentro dessa Tag a ficam incorrentas, pois ao clicar nas mesmas, somos redirecionados para a páginas que a tag a está apontando, por isso coloquei elas fora da Tag a -->
						<div class="text-valor text-roxo">R$ {{produto.total}}</div>
						<div class="text-parcelado text-arial-cinza">{{produto.parcelas}}x de R$ {{produto.parcela}} sem juros</div>
					</a>
					<div class="estrelas" data-score="{{produto.media}}"></div>
					<div class="text-qtd-reviews text-arial-cinza">({{produto.total_reviews}})</div>
				</div>

			</div>

		</div>
		
	</div>				

</section>

<?php include_once("footer.php"); ?>
<script type="text/javascript" src="js/efeitos.js"></script>
<script>
angular.module("shop", []).controller("destaque-controller", function($scope, $http){

	$scope.produtos = [];
	$scope.buscados = [];

	var initCarousel = function(){

		$("#destaque-produtos").owlCarousel({
	 
	      autoPlay: 5000,
	      items : 1,
	      singleItem: true
	 
	  	});

	var owl = $("#destaque-produtos").data('owlCarousel');

	//owl.owlCarousel();

	$('#btn-destaque-prev').on("click", function(){

	owl.trigger('prev.owl.carousel');

	});

	$('#btn-destaque-next').on("click", function(){

	owl.trigger('next.owl.carousel');

	});
	};

	$http({
	  method: 'GET',
	  url: 'produtos'
	}).then(function successCallback(response) {

	    $scope.produtos = response.data;

	    setTimeout(initCarousel, 1000);

	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });

		var initEstrelas = function(){

		$('.estrelas').each(function(){

	  		$(this).raty({
		  		starHalf    : 'lib/raty/lib/images/star-half.png',                                // The name of the half star image.
				starOff     : 'lib/raty/lib/images/star-off.png',                                 // Name of the star image off.
				starOn      : 'lib/raty/lib/images/star-on.png',
				score		: parseFloat($(this).data("score"))
		  	});

	  	});

	};

	$http({
	  method: 'GET',
	  url: 'produtos-mais-buscados'
	}).then(function successCallback(response) {

	    $scope.buscados = response.data;

	    setTimeout(initEstrelas, 1000);

	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });

	

});

</script>