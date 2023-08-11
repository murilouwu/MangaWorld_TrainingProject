<?php
	session_start();
	include('assets/PhpManeggerApp.php');
	$checkPreset = array(1, 1);
	HeaderEcho(
		'MangaWorld', 
		[
			[0, 'charset="utf-8"'],
			[0, 'name="viewport" content="width=device-width, initial-scale=1"'],
			[1, 'assets/css/style.css'],
			[2, 'https://accounts.google.com/gsi/client', 'async defer'],
			[2, 'https://unpkg.com/jwt-decode/build/jwt-decode.js', 'crossorigin="anonymous" async defer'],
			[2, 'assets/script.js'],
			[2, 'https://kit.fontawesome.com/39cab4bf95.js', 'crossorigin="anonymous"'],
			[2, 'https://code.jquery.com/jquery-3.6.0.min.js', 'crossorigin="anonymous"']
		], 
		'assets/imgs/shortLogo.png'
	);
?>
	<body class="BackgrounPatter0 flexDisplay">
		<button class="irTop" style="background-image: url('assets/imgs/index/imgIrTopPrinc.png');"></button>
		<!--Menu lateral-->
		<div class="LeftMenu">
			<i class="exitLeftMenu fa-solid fa-circle-xmark" onclick="ocultar('.LeftMenu', 0)"></i>
			<div class="escCadorLogin flexDisplay">
				<div class="btnsManagerLtMenu flexDisplay">
					<button class="btnLtMenu" onclick="oculForm(['#LoginForm', '#SignInForm'], 0)"><i class="fa-solid fa-user-check"></i></button>
					<button class="btnLtMenu" onclick="oculForm(['#LoginForm', '#SignInForm'], 1)"><i class="fa-solid fa-user-plus"></i></button>
				</div>
				<div class="FormsLtMenu flexDisplay">
					<form class="FormLtMenu" method="post" id="LoginForm">
						<label> Entrar: </label>
						<div id="buttonLog"></div>
					</form>
					<form class="FormLtMenu" method="post" enctype="multipart/form-data" id="SignInForm">
						<label> Cadastrar: </label>
						<div id="buttonCad"></div>
					</form>
				</div>
			</div>
		</div>
		<!--tolls-->
		<div class="Block-top flexDisplay">
			<div class="certerTop flexDisplay">
				<div class="logoTop"></div>
				<div class="FastAcess flexDisplay">
					<button class="topicOne bntScroll">O que é este Site</button>
					<button class="topicOne bntScroll">Diferencial</button>
					<button class="topicOne bntScroll">Entrar</button>
					<button class="topicOne bntScroll">Desenvolvedor</button>
					<button class="topicOne bntScroll">Contato</button>
				</div>
				<button class="MenuBar" onclick="ocultar('.LeftMenu', 1)"><i class="fa-solid fa-bars"></i></button>
			</div>
		</div>
		<!--"sumário"-->
		<div class="Block-One flexDisplay">
			<div class="BigBlockOne flexDisplay">
				<div class="textOne flexDisplay">
					<button class="topicOne bntScroll">O que é este Site</button>
					<button class="topicOne bntScroll">Diferencial</button>
					<button class="topicOne bntScroll">Entrar</button>
					<button class="topicOne bntScroll">Desenvolvedor</button>
					<button class="topicOne bntScroll">Contato</button>
				</div>
				<div class="text2One flexDisplay"></div>
			</div>
			<div class="shortBlockOne flexDisplay">
				<div class="cardTextOne flexDisplay">
					<i class="iconShort0 fa-solid fa-book-open"></i>
					<p class="palagrafyOne">Entre em um <strong>Mundo</strong> de aventuras, mistérios e emoções. Descubra o poder neste site de <strong>Mangas, Webtoons e Hqs</strong></p>
				</div>
				<div class="cardTextOne flexDisplay">
					<i class="iconShort0 fa-solid fa-users"></i>
					<p class="palagrafyOne">Faça parte de uma <strong>comunidade</strong> Conecte-se, troque ideias e mergulhe em discussões sobre suas obras preferidas neste <strong>site</strong></p>
				</div>
				<div class="cardTextOne flexDisplay">
					<i class="iconShort0 fa-solid fa-user-pen"></i>
					<p class="palagrafyOne">Transforme suas ideias em <strong>Mangas, Webtoons e Hqs</strong>. Junte-se à nossa comunidade de autores e scanners, compartilhe suas obras-primas ou scans.</p>
				</div>
				<div class="cardTextOne flexDisplay">
					<i class="iconShort0 fa-solid fa-sack-xmark"></i>
					<p class="palagrafyOne">Um serviço de <strong>fã para fã</strong>, sem objetivos <strong>financeiros</strong>. Compartilhamos <strong>Mangas, Webtoons e Hqs</strong> sem restrições. Nós dedicamos a <strong>Mangas webtoons e hqs</strong></p>
				</div>
			</div>
		</div>
		<!--O que é este Site-->
		<div class="Block-Two flexDisplay">
			<div class="meioBlock2 flexDisplay">
				<div class="textBlock2 flexDisplay">
					<h2>O que é este Site?</h2>
					<p>Nosso site é um destino online dedicado aos leitura de <strong>Mangas, Webtoons e Hqs</strong>. Aqui, você os encontrará publicados pelos os usuários do site.</p>
				</div>
				<img src="assets/imgs/index/ScannBook.png" class="imgReprBlock2">
			</div>
			<div class="meioBlock2 typeMain2-Block2 flexDisplay">
				<img src="assets/imgs/index/CapaIlustrativa.jpg" class="imgReprBlock2">
				<div class="textBlock2 flexDisplay">
					<div class="blockIconBlock2 flexDisplay">
						<i class="fa-solid fa-globe"></i>
						<h4>Web</h4>
					</div>
					<div class="blockIconBlock2 cor2-Block2 flexDisplay">
						<i class="fa-solid fa-book-open-reader"></i>
						<h4>Hqs</h4>
					</div>
				</div>
			</div>
		</div>
		<!--Diferencial-->
		<div class="Block-Tre flexDisplay">
			<div class="cardMost-tre flexDisplay">
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-star"></i>
			    <p class="cardTextTre flexDisplay"><label>Diferenciais</label>Aqui mostraremos nosso diferencial exclusivo</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-cube"></i>
			    <p class="cardTextTre flexDisplay"><label>Visualização 3D</label>Leia quadrinhos em um formato tridimensional</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-address-book"></i>
			    <p class="cardTextTre flexDisplay"><label>WebComics</label>Leia quadrinhos criados por nossos talentosos usuários escritores e desenhistas e apoie-os</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-people-robbery"></i>
			    <p class="cardTextTre flexDisplay"><label>Fóruns</label>Converse com outros fãs diretamente em nossa comunidade</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-ranking-star"></i>
			    <p class="cardTextTre flexDisplay"><label>Votações</label>Participe de rankings variados, como Melhor Waifu, Melhor Personagem e muito mais</p>
			  </div>
			  <div class="cardTre flexDisplay">
			    <i class="fa-solid fa-heart"></i>
			    <p class="cardTextTre flexDisplay"><label>Bem-vindo</label>Agora que conhece o site, que tal explorá-lo mais de perto?</p>
			  </div>
			</div>
		</div>
		<!--Entrar-->
		<div class="Block-Two flexDisplay">
			<div class="meioBlock2 flexDisplay">
				<div class="textBlock2 flexDisplay">
					<h2>Entre e Participe!</h2>
					<p>Faça sua conta e tenha a experiencia completa do site, intereja com a comunidade, publique suas obras, ou scans!!!</p>
				</div>
				<img src="assets/imgs/index/Amém.jpg" class="imgReprBlock2">
			</div>
			<div class="meioBlock2 typeMain2-Block2 flexDisplay">
				<div class="textBlock4 flexDisplay">
					<div class="blockIconBlock2 cor2-Block4 flexDisplay">
						<i class="fa-solid fa-person-walking-arrow-right"></i>
						<button class="BtnEntrarBlock4" onclick="OpenModal(1, ['.LeftMenu','.btnLtMenu'], 0)">Entrar</button>
					</div>
					<div class="blockIconBlock2 cor2-Block2 cor2-Block4 flexDisplay">
						<i class="fa-solid fa-user-plus"></i>
						<button class="BtnEntrarBlock4 cssBlock4" onclick="OpenModal(1, ['.LeftMenu','.btnLtMenu'], 1)">Se Cadastrar</button>
					</div>
				</div>
			</div>
		</div>
		<!--Desenvolvedor-->
		<div class="Block-Five flexDisplay">
			<div class="centerBlock5 flexDisplay">
				<div class="TextBlock5 flexDisplay">
					<h3>Desenvolverdor e Designer</h3>
					<p>Como programador e artista, percebi a conexão entre essas duas áreas aparentemente distintas. Com base nessas habilidades, decidi criar este site para compartilhar minhas obras de arte e muito mais.</p>
				</div>
				<div class="developerBlock5 flexDisplay">
					<img src="https://avatars.githubusercontent.com/u/91744500?v=4" class="perfilBlock5">
					<label class="lbBlock5">Murilo Gimenez Couto Mendes</label>
					<div class="linksBlock5 flexDisplay">
						<a href="https://github.com/murilouwu" class="linkRedrect">Projetos no Github</a>
						<a href="https://www.deviantart.com/murilogimenez" class="linkRedrect">Portifolio DeviantArt</a>
					</div>
				</div>
			</div>
		</div>
		<!--Contato-->
		<div class="BlockSex flexDisplay">
			<h1 class="title6">Contato</h1>
			<h6 class="subtitle6">Aproxime o mouse dos cards</h6>
			<div class="gridBlock5 flexDisplay">
				<div class="cardGridBlock5 flexDisplay" style="background-image: url('https://yt3.googleusercontent.com/lsgdll7BZfDWNyWmSvcz9VZghG8nAR3K1DGeW_pRjGgojaKBBUev0UjB-XgPaHzT1TmUkgGJty0=s176-c-k-c0x00ffffff-no-rj');">
					<h2 class="titleBlc5">DinossauroComGonorreia</h2>
					<p class="palagrafyBlc5">Meu Canal do Youtube</p>
					<i class="iconBlck5 fa-brands fa-youtube" onclick="redirect('https://www.youtube.com/channel/UC5j326FDOeG70i3KixHsTSw')"></i>
				</div>
				<div class="cardGridBlock5 type4CardBlock6 flexDisplay" style="background-image: url('https://scontent-gru2-2.xx.fbcdn.net/v/t39.30808-6/275410217_360254972646150_4390390322356645339_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=dxPUMRHHvI4AX8Zp2bd&_nc_ht=scontent-gru2-2.xx&oh=00_AfC63Bhmqm5bENQduPh6YZNRolKOz-akxYmzfW06EOtWdw&oe=649F822E');">
					<h2 class="titleBlc5">Murilo Gimenez</h2>
					<p class="palagrafyBlc5">Meu Facebook</p>
					<i class="iconBlck5 fa-brands fa-facebook" onclick="redirect('https://www.facebook.com/murilo.gimenez.7543/')"></i>
				</div>
				<div class="cardGridBlock5 type3CardBlock6 flexDisplay" style="background-image: url('https://pbs.twimg.com/profile_images/1340344627019321353/488wE2fh_400x400.jpg');">
					<h2 class="titleBlc5">V</h2>
					<p class="palagrafyBlc5">Meu Twitter</p>
					<i class="iconBlck5 fa-brands fa-twitter" onclick="redirect('https://twitter.com/v43410730')"></i>
				</div>
				<div class="cardGridBlock5 type2CardBlock6 flexDisplay" style="background-image: url('assets/imgs/index/Amém.jpg');">
					<h2 class="titleBlc5 ">MuriloDaSaladaDeDesenho</h2>
					<p class="palagrafyBlc5">Meu Instragram</p>
					<i class="iconBlck5 fa-brands fa-instagram" onclick="redirect('https://twitter.com/v43410730')"></i>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			window.addEventListener("load", ()=>{ Scroll0Display('.irTop'); });
			window.addEventListener("scroll", ()=>{ Scroll0Display('.irTop'); });

			document.querySelector(".irTop").addEventListener("click", function() {
			    window.scrollTo({ top: 0, behavior: 'smooth' });
			});
			document.querySelector(".logoTop").addEventListener("click", function() {
			    window.scrollTo({ top: 0, behavior: 'smooth' });
			});

			let scrollsTops = [1000, 1750, 2500, 3300, 3900, 1000, 1750, 2500, 3300, 3900];

			const buttons = document.querySelectorAll('.bntScroll');

			buttons.forEach((button, index) => {
			    button.addEventListener('click', () => {
			        const scrollDistance = scrollsTops[index];
			        window.scrollTo({ top: scrollDistance, behavior: 'smooth' });
			    });
			});
			
			window.onload = function () {
				google.accounts.id.initialize({
					client_id: "986510640429-ojm0avl7epimmsmekq2p06dq457qbn7n.apps.googleusercontent.com"
				});
				google.accounts.id.renderButton(
					document.getElementById("buttonLog"),
					{ 
						theme: "filled_black", 
						size: "large",
						type: "standard",
						shape: "pill",
						text: " {button.$text}",
						logo_alignment: "left"
					},
					Login
				);
				google.accounts.id.renderButton(
					document.getElementById("buttonCad"),
					{ 
						theme: "filled_black", 
						size: "large",
						type: "standard",
						shape: "pill",
						text: " {button.$text}",
						logo_alignment: "left"
					},
					SignUp
				);
				google.accounts.id.prompt();
			}

			function SignUp(response) {
				const data = jwt_decode(response.credential);
				
				$.ajax({
					url: 'login.php',
					method: 'POST',
					data: {
						NomeUser: data.name,
						EmailUser: data.email
					},
					success: function(response) {
						console.log('Valores enviados com sucesso!');
					},
					error: function(xhr, status, error) {
						console.error('Erro ao enviar os valores: ' + error);
					}
				});
			}
			
			function Login(response) {
				const data = jwt_decode(response.credential);
				
				$.ajax({
					url: 'login.php',
					method: 'POST',
					data: {
						NomeUser: data.name,
						EmailUser: data.email
					},
					success: function(response) {
						console.log('Valores enviados com sucesso!');
					},
					error: function(xhr, status, error) {
						console.error('Erro ao enviar os valores: ' + error);
					}
				});
			}
		</script>
	</body>
<?php 
    footEcho();
?>