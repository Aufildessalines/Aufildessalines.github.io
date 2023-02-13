<!DOCTYPE html>
<html lang="fr">
    <head>
                <meta charset="utf-8">
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <br><br><title>Au fil des Salines        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://kit.fontawesome.com/6d273938c6.js" crossorigin="anonymous"></script>
	</head>
    <body>
		<img src="licorne.png" alt="licorne.png" id="licorne.png" style="position:absolute;display:block;z-index:5;" />
        <header>
            <a href="imageetlogo.jpg"><img src="" title="Aufildessalines" alt=""></a>
            <nav>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="page2dentelleauxfuseaux.html">Dentelle aux fuseaux</a></li>
                    <li><a href="page3dentelledetricot.html">Dentelle de tricot</a></li>
                    <li><a href="page4dentelledecrochet.html">Dentelle de crochet</a></li>					
                    <li><a href="page5agurimis.html">Agurimis</a></li>
                    <li><a href="inscription.html">Inscription</a></li>
                    <li><a href="contact.html">Contact</a></li>		
				<form>
					<input type="search" placeholder="Rechercher">
				</form>	
				<div class="lieniconereseaux">
				<p><a href="https://www.facebook.com/dentelle.rivegauche"><i class="fa-brands fa-facebook"></i></a></p>
				<p><a href="https://www.instagram.com/carole.clh/?hl=fr"><i class="fa-brands fa-instagram"></i></a></p>
				<p><a href="https://www.pinterest.fr/carolelehein/au-fil-des-salines-clh/?amp_client_id=CLIENT_ID(_)&mweb_unauth_id=%7B%7Bdefault.session%7D%7D&amp_url=https%3A%2F%2Fwww.pinterest.fr%2Famp%2Fcarolelehein%2Fau-fil-des-salines-clh%2F&open_share=t"><i class="fa-brands fa-pinterest"></i></a></p>	
			    </div>
			    </ul>
            </nav>
        </header>
        <main>
			<h1>
				Au fil des Salines<br><!-- mettre à la ligne --> vous souhaite la bienvenue!
            </h1><br><br><br>
			<div class="miseenpage">
				<section>
					<h2>Dentelle aux fuseaux
					</h2>
					<p>
						<div class="lienpresentation">
						<a href="page2dentelleauxfuseaux.html"> Découvrez mes créations de dentelle aux fuseaux </a>
						<a href="page2-1dentelleauxfuseauxmarquepage.html"> Les marques pages </a>
						<a href="page2-2dentelleauxfuseauxcoussinalliance.html"> Les coussins d'alliance</a>
					</div>
					</p>
				</section>
				<section>
					<h2>Dentelle de tricot
					</h2>
					<p>
						<div class="lienpresentation">
						<a href="page3dentelledetricot.html">Découvrez mes créations de dentelle de tricot</a>
						<a href="page3-1dentelledetricotchalescheches.html"> Les châles et cheches</a>
						<a href="page3-2dentelledetricotetolesecharpes.html"> Les étoles et écharpes</a>
						<a href="page3-3dentelledetricotsnoods.html"> Les snoods</a>
						<a href="page3-4dentelledetricotberetbonnet.html"> Les bérets et bonnets</a>
						<a href="page3-5dentelledetricotmitaine.html"> Les mitaines</a>
						</div>
					</p>
				</section>
				<section>
					<div class="dentelledecrochet">
					<h2>Dentelle de crochet
					</h2>
					<p>
						<div class="lienpresentationdessous">
						<a href="page4dentelledecrochet.html">Découvrez mes créations de dentelle de crochet</a>
						<a href="page4-1dentelledecrochetaccessoires.html"> Les accessoires</a>
						<a href="page4-2dentelledecrochetaccessoireschales.html"> Les accessoires: châles et cheches</a>
						<a href="page4-3dentelledecrochetaccessoiressnood.html"> Les accessoires: snoods</a>
						<a href="page4-4dentelledecrochetaccessoiresetoleecharpe.html"> Les accessoires: étoles et écharpes</a>
						<a href="page4-5dentelledecrochetaccessoiresberetbonnet.html"> Les accessoires: bérets et bonnets</a>
						<a href="page4-6dentelledecrochetaccessoiresmitaine.html"> Les accessoires: mitaines</a>
						<a href="page4-7dentelledecrochetvetement.html"> Les vêtements</a>
						<a href="page4-8dentelledecrochetvetementpull.html"> Les vêtements: pull</a>
						<a href="page4-9dentelledecrochetdecomaison.html"> La déco maison</a>
						</div>
					</div>
					</p>
				</section>
				<section>
					<div class="agurimis">
					<h2>Agurimis
					</h2>
					<p>
						<div class="lienpresentationdessous">
						<a href="page5agurimis.html">Découvrez mes créations d'agurimis</a>
						<a href="page5-1agurimismondemarin.html"> Le monde marin</a>
						<a href="page5-2agurimisdinosaures.html"> Les dinosaures</a>
						<a href="page5-3agurimispoupées.html"> Les poupées</a>
						<a href="page5-4agurimislicornes.html"> Les licornes</a>
						<a href="page5-5agurimiscirque.html"> Le cirque</a>
						<a href="page5-6agurimisdinette.html"> La dinette</a>
						</div>
					</div>
					</p>
				</section>
			</div>
			<div class="newsletter">
            <?php include "inc/script_newsletter.php"?>
		    <span class="erreurs"><?php if(isset($erreur))(echo $erreur;)?></span>
		    <span class="erreurs"><?php if(isset($success))(echo $success;)?></span>
            <span class="line"></span>
				<form action="" method="post">
					<h3>Pour être au courant de chaque nouveauté<br>
						Abonnez vous à ma newsletter!</h3>
					<p></p>
					<div class="email-box">
						<i class="fa-solid fa-envelope"></i>
						<input class="tbox" type="email" name="mailing" placeholder="Entrez votre adresse email">
						<input class="btnbox" type="button" name="button" value="S'inscrire"></button>
					</div>
				</form>
			</div>
        </main>
		<br><br><br><br><br><br><br>
        <footer>
			<div class="iconereseaux">
            <p>
				<p><a href="https://www.facebook.com/dentelle.rivegauche"><i class="fa-brands fa-facebook fa-5x" style="color:pink"></i></a></p>				
				<p><a href="https://www.instagram.com/carole.clh/?hl=fr"><i class="fa-brands fa-instagram fa-5x" style="color: aqua"></i></a></p>
				<p><a href=https://www.pinterest.fr/carolelehein/au-fil-des-salines-clh/?amp_client_id=CLIENT_ID(_)&mweb_unauth_id=%7B%7Bdefault.session%7D%7D&amp_url=https%3A%2F%2Fwww.pinterest.fr%2Famp%2Fcarolelehein%2Fau-fil-des-salines-clh%2F&open_share=t><i class="fa-brands fa-pinterest fa-5x" style="color:aquamarine"></i></a></p>
			</p><br>
			</div>
			<p id="copyrights">
					Copyrights 2023 - Au fil des salines - 
				<a href="mentions_legales.html">Mentions légales</a>
			</p>
			<p id="imageetlogofooter">
			<a href="imageetlogo.jpg"><img src="" title="Aufildessalines" alt=""></a>
			</p>
		</footer>
					<a class="imagetlogo"href="imageetlogo.jpg"><img src="" title="Aufildessalines" alt=""></a>
		<script type="text/javascript">
			//<!--
					document.onmousemove = suitsouris;
					function suitsouris(evenement)
					{
							if(navigator.appName=="Microsoft Internet Explorer")
							{
									var x = event.x+document.body.scrollLeft;
									var y = event.y+document.body.scrollTop;
							}
							else
							{
									var x =  evenement.pageX;
									var y =  evenement.pageY;
							}
							document.getElementById("licorne.png").style.left = (x+1)+'px';
							document.getElementById("licorne.png").style.top  = (y+1)+'px';
					}
			//-->
			</script>
			<script src="./index.js"></script>
    </body>
</html>