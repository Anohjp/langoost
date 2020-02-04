<!DOCTYPE html>
<html>

	<!-- Head -->
	<?php include_once 'feature/head.php'?>

    <body class="bg-langoostVioletDark80 font-Montserrat font-body text-13px bg-no-repeat bg-left-bottom pb-50px overflow-hidden" style="background-image: url(images/content/fill.png);background-repeat: no-repeat;background-position: 0% 0%;">
		<header class="h-16 sm:pb-12px sm:pt-12px b2b-header">
			<div class="container w-full mx-auto">
				<img src="images/logos/logo-langoost-b2b.svg" class="h-10"  />
			</div>
		</header>
		<section>
			<div class="w-full mt-0 right-0">
				<form class="bg-white shadow-xl mb-4 justify-center px-32px pt-32px pb-32px mr-120px ml-auto mt-0 rounded w-650px h-570px">
					<h3 class="text-20px font-extrabold items-center text-langoostVioletDark80 text-center uppercase">
							Inscrivez-vous pour vous <br>entraîner gratuitement !
					</h3>
					
					<div class="flex flex-wrap items-center">
						<!-- Formulaire -->
						<div class="pr-37px border-r border-langoostGrey20 -mr-25px pt-0 mt-12px pb-0 mb-12px" style="width: 55%">
							<div class="mb-4">
								<span class="text-langoostGrey20 uppercase">Prénom</span>
								<input class="bg-white border border-langoostGrey20 rounded w-full py-2 px-3 text-langoostGrey20 leading-tight focus:bg-white active:bg-white" type="text" placeholder="Prénoms"/>
							</div>

							<div class="mb-4">
								<span class="text-langoostGrey20">EMAIL</span>
								<input class="bg-white border border-langoostGrey20 rounded w-full py-2 px-3 text-langoostGrey20 leading-tight focus:bg-white active:bg-white" type="email" placeholder="Email"/>
							</div>
							<div class="mb-0">
								<span class="text-langoostGrey20"> MOT DE PASSE</span>
								<input class="bg-white border border-langoostGrey20 rounded w-full py-2 px-3 text-langoostGrey20 mb-3 leading-tight focus:bg-white active:bg-white" type="password" placeholder="Mot de passe"/>
							</div>
						</div>
						
						<!-- Separator -->
						<div class="relative w-full md:w-full lg:w-1/12">
							<p class="mb-4 text-center bg-white">OU</p>
							
						</div>
						
						<!-- Reseaux sociaux -->
						<div class="w-full md:w-full lg:w-2/5 text-center pl-12px">
							<div class="mb-3 sm:mb-0 lg:mb-3 w-full">
								<button class="bg-facebookColor text-white rounded font-bold py-2 px-4 focus:outline-none focus:shadow-outline w-full" type="button">
									Facebook
								</button>
							</div>
							<div class="mb-3 sm:mb-0 lg:mb-3 w-full">
								<button	class="bg-googleColor text-white rounded font-bold py-2 px-4 focus:outline-none focus:shadow-outline w-full" type="button">
									Google
								</button>
							</div>
							<div class="mb-3 sm:mb-0 lg:mb-3 w-full">
								<button	class="bg-linkedInColr text-white rounded font-bold py-2 px-4 focus:outline-none focus:shadow-outline w-full" type="button">
									LinkedIn
								</button>
							</div>
							<div class="w-full">
								<button	class="bg-twitterColor text-white rounded font-bold py-2 px-4 focus:outline-none focus:shadow-outline w-full" type="button">
									Twitter
								</button>
							</div>
						</div>
					</div>

					<div class="px-8">
						<div class="mb-6 text-center">
							<input type="checkbox" />
							J'accepte que Langoost m'envoie des emails pour m'informer de l'actualité du site, de mon compte ou autre actualité susceptible de m'intéresser.
						</div>
						<button	class="block mx-auto btn-global btn-primary btn-premium-large focus:outline-none focus:shadow-outline" type="submit">
							S'enregistrer
						</button>

						<div class="w-full justify-between mt-8 text-center">	
							<span class="pr-2">Déjà membre ?</span><span><a class="text-langoostOrange80 font-bold" href="login.php">Identifiez-vous</a></span>
						</div>
						<div class="text-center">
							<p>
								En cliquant sur "S'enregistrer", vous acceptez les Conditions Générales d'Utilisation et la Politique de confidentialité. 
							</p>
						</div>
					</div>
				</form>
			</div>
		</section>
    </body>
</html>