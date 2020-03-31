<?php include_once("header.php"); ?>

<section>

	<div class="container" id="destaque-produtos-container" ng-controller="destaque-controller">
		
		 <div id="destaque-produtos" class="owl-carousel owl-theme">
		
			<div class="item" ng-repeat="produto in produtos">
				
				<div class="col-sm-6 col-imagem">
					<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}">
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
			
			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img src="img/produtos/panelas.png" alt="Panelas" class="produto-img">
						<h3>Conjunto de Panelas Tramontina Versalhes Alumínio Antiaderente 5</h3>
						<div class="text-valor text-roxo">R$ 109,90</div>
						<div class="text-parcelado text-arial-cinza">10x de R$ 10,99 sem Juros</div>
					</a>
					<div class="estrelas" data-score="3"></div>
					<div class="text-qtd-reviews text-arial-cinza">(354)</div>
				</div>

			</div>
			
			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img src="img/produtos/panelas.png" alt="Panelas" class="produto-img">
						<h3>Conjunto de Panelas Tramontina Versalhes Alumínio Antiaderente 5</h3>
						<div class="text-valor text-roxo">R$ 109,90</div>
						<div class="text-parcelado text-arial-cinza">10x de R$ 10,99 sem Juros</div>
					</a>
					<div class="estrelas" data-score="2.5"></div>
					<div class="text-qtd-reviews text-arial-cinza">(450)</div>
				</div>

			</div>

			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img src="img/produtos/panelas.png" alt="Panelas" class="produto-img">
						<h3>Conjunto de Panelas Tramontina Versalhes Alumínio Antiaderente 5</h3>
						<div class="text-valor text-roxo">R$ 109,90</div>
						<div class="text-parcelado text-arial-cinza">10x de R$ 10,99 sem Juros</div>
					</a>
					<div class="estrelas" data-score="4"></div>
					<div class="text-qtd-reviews text-arial-cinza">(210)</div>
				</div>

			</div>

			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img src="img/produtos/panelas.png" alt="Panelas" class="produto-img">
						<h3>Conjunto de Panelas Tramontina Versalhes Alumínio Antiaderente 5</h3>
						<div class="text-valor text-roxo">R$ 109,90</div>
						<div class="text-parcelado text-arial-cinza">10x de R$ 10,99 sem Juros</div>
					</a>
					<div class="estrelas" data-score="3.5"></div>
					<div class="text-qtd-reviews text-arial-cinza">(342)</div>
				</div>

			</div>

		</div>
		
	</div>				

</section>

<?php include_once("footer.php"); ?>

<script>
angular.module("shop", []).controller("destaque-controller", function($scope){

	$scope.produtos = [];

	$scope.produtos.push({
		nome_prod_longo:"Smartphone Motorola Moto X Play Dual Chip Desbloqueado Andoid 5.1",
		foto_principal:"moto-x.png",
		preco:"1.259",
		centavos:"10",
		parcelas:8,
		parcela:"174,88",
		total:"1.399,00"
	});	

	$scope.produtos.push({
		nome_prod_longo:"Iphone",
		foto_principal:"moto-x.png",
		preco:"1.259",
		centavos:"10",
		parcelas:8,
		parcela:"174,88",
		total:"1.399,00"
	});	

});
</script>

<script type="text/javascript" src="js/efeitos.js"></script>
<script>
$(function(){
	$("#destaque-produtos").owlCarousel({

	autoplay: 5000,

	items : 1,

	singleItem: true

	});

	var owl = $("#destaque-produtos");

	owl.owlCarousel();

	$('#btn-destaque-prev').on("click", function(){

	owl.trigger('prev.owl.carousel');

	});

	$('#btn-destaque-next').on("click", function(){

	owl.trigger('next.owl.carousel');

	});

	$('.estrelas').each(function(){

		$(this).raty({
			starHalf	: 'lib/raty/lib/images/star-half.png',
			starOff		: 'lib/raty/lib/images/star-off.png',
			starOn		: 'lib/raty/lib/images/star-on.png',
			score		: parseFloat($(this).data("score"))
		});

	});

});

</script>