$(document).ready(function(){

			$("#logotipo").on("mouseover", function(){
				$("#banner h1").addClass("efeito");
			}).on("mouseout", function(){
				$("#banner h1").removeClass("efeito");
			});

			//focus -> Quando o cursor estiver piscando dentro da caixa de pesquisa
			//blur -> Quando o cursor perder o foco na caixa de pesquisa

			$("input-search").on("focus", function(){ 

				$("li.search").addClass("ativo");

			}).on("blur", function(){ 

				$("li.search").removeClass("ativo");

			});

			$(".thumbnails").owlCarousel({

				loop: true,
				margin: 10,
				navigation: true,
				navigationText: ["Anterior", "Próximo"],
				
				items : 4

			});

		});