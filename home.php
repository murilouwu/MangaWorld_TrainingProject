<?php
	session_start();
	include('assets/PhpManeggerApp.php');
	$checkPreset = array(1, 1);
	HeaderEcho(
		'MangaWorld-Home', 
		[
			[0, 'charset="utf-8"'],
			[0, 'name="viewport" content="width=device-width, initial-scale=1"'],
			[1, 'assets/css/styleII.css'],
			[2, 'assets/script.js'],
			[2, 'https://kit.fontawesome.com/39cab4bf95.js', 'crossorigin="anonymous"'],
			[2, 'https://code.jquery.com/jquery-3.6.0.min.js', 'crossorigin="anonymous"']
		], 
		'assets/imgs/shortLogo.png'
	);
?>
    <body class="BackgrounPatter0 flexDisplay">
        <button class="irTop" style="background-image: url('assets/imgs/index/imgIrTopPrinc.png');"></button>
        <div class="Block-top flexDisplay">
            <div class="certerTop flexDisplay">
                <div class="logoTop"></div>
                <div class="FastAcess flexDisplay">
                    <button class="topicOne bntScroll">Quadrinhos</button>
                    <button class="topicOne bntScroll">Comunidade</button>
                    <button class="topicOne bntScroll">Enquetes</button>
                    <button class="topicOne bntScroll">Scans</button>
                    <button class="topicOne bntScroll">Novidades</button>
                </div>
                <button class="MenuBar" onclick="ocultar('.LeftMenu', 1)"><i class="fa-solid fa-bars"></i></button>
            </div>
        </div>
    </body>
    <script>
        window.addEventListener("load", ()=>{ Scroll0Display('.irTop'); });
        window.addEventListener("scroll", ()=>{ Scroll0Display('.irTop'); });

        document.querySelector(".irTop").addEventListener("click", function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
<?php 
    footEcho();
?>