<!DOCTYPE html>
<html>

	<!-- Head -->
	<?php include_once 'feature/head.php'?>

    <body class="bg-langoostVioletDark80 font-Montserrat font-body text-13px bg-no-repeat bg-left-bottom pb-80px overflow-hidden" style="background-image: url(images/content/fill.png);background-repeat: no-repeat;background-position: 0% 0%;">
		<header class="h-16 sm:pb-12px sm:pt-12px b2b-header">
			<div class="container w-full mx-auto">
				<img src="images/logos/logo-langoost-b2b.svg" class="h-10"  />
			</div>
		</header>
		<section>
			<div class="w-fullmt-0 right-0">
				<form class="bg-white shadow-xl mb-4 justify-center px-32px pt-32px mr-120px ml-auto mt-0 rounded w-450px">
					<h3 class="mb-8 text-20px font-extrabold items-center text-langoostVioletDark80 text-center">
							Connectez-vous
						</h3>
					<div class="flex flex-wrap justify-center mb-32px">
						<div class="mb-3 sm:mb-0">
							<button class="bg-facebookColor text-white rounded font-bold py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
								Facebook
							</button>
						</div>
						<div class="sm:pl-2">
							<button	class="bg-googleColor text-white rounded font-bold py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
								Google
							</button>
						</div>
						<div class="sm:pl-2">
							<button	class="bg-linkedInColr text-white rounded font-bold py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
								LinkedIn
							</button>
						</div>
						<div class="sm:pl-2">
							<button	class="bg-twitterColor text-white rounded font-bold py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
								Twitter
							</button>
						</div>
					</div>
					
					<div class="relative">
						<p class="mb-4 text-center absolute -top-9px left-47pc bg-white">OU</p>
						<hr class="block w-full mb-4 border-0 border-t border-langoostGrey10" />
					</div>

					<div class="w-full md:w-full py-6 px-8">
						
						<div class="mb-4">
							<span class="text-langoostGrey10">EMAIL</span>
							<input class="bg-white border border-langoostGrey10 rounded w-full py-2 px-3 text-langoostGrey10 leading-tight focus:bg-white active:bg-white" type="email" placeholder="Email"/>
						</div>
						<div class="mb-0">
							<span class="text-langoostGrey10"> MOT DE PASSE</span>
							<input class="bg-white border border-langoostGrey10 rounded w-full py-2 px-3 text-langoostGrey10 mb-3 leading-tight focus:bg-white active:bg-white" type="password" placeholder="Mot de passe"/>
						</div>
						<div class="mb-6">
							<a href="#" class="text-langoostOrange80">Mot de passe oublié ?</a>
						</div>
						<button	class="block mx-auto btn-global btn-primary btn-premium-large focus:outline-none focus:shadow-outline" type="submit">
							Se connecter
						</button>

						<div class="w-full justify-between mt-8 text-center">	
							<span class="pr-2">Pas encore inscrit.e ?</span><span><a class="text-langoostOrange80 font-bold" href="register.php">Inscrivez-vous</a></span>
						</div>
					</div>
					
				</form>
			</div>
		</section>
    </body>
</html>