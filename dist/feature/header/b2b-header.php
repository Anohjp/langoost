<header id="luxbar" class="luxbar-fixed bg-langoostViolet80 h-16 sm:pb-12px sm:pt-4px b2b-header">
    <input type="checkbox" class="luxbar-checkbox" id="luxbar-checkbox"/>
    <div class="luxbar-menu luxbar-menu-right luxbar-menu-material-cyan container mx-auto flex justify-between">
        <ul class="luxbar-navigation mx-auto w-full bg-langoostViolet80">
            <li class="luxbar-header">
                <a href="b2b-home.php" class="luxbar-brand">
                    <img class="h-10" src="./images/logos/logo-langoost-b2b.svg" alt="logo">
                </a>
                <div class="flex h-mx items-center border border-langoostTextWhite text-12px rounded-full px-4px py-4px w-auto">
                    <a href="b2c-home.php" class="mt-0 mb-0 ml-0 mr-2 text-langoostTextWhite bg-langoostViolet80 rounded-full pt-1 pb-1 pl-3 pr-3">Particuliers</a>
                    <a href="b2b-home.php" class="mt-0 mb-0 ml-3 mr-0 text-langoostVioletDark80 bg-langoostTextWhite rounded-full pt-1 pb-1 pl-3 pr-3">Professionnels</a>
                </div>
                <label class="luxbar-hamburger luxbar-hamburger-doublespin" id="luxbar-hamburger" for="luxbar-checkbox"> <span class="b2b"></span> </label>
            </li>
            
            <!-- Block items menu -->
            <li>
                <ul class="luxbar-navigation bg-langoostViolet80 h-16 -mt-4px">
                <!--Qui êtes-vous-->
                    <li class="luxbar-item hoverable hover:bg-blue-800 hover:text-white">
                        <input type="checkbox" value="selected" id="toggle-one" class="toggle-input">
                        <!-- Menu niveau 1 -->
                        <label for="toggle-one" class="block cursor-pointer lg:text-13px b2b-menu font-medium">Qui êtes-vous ?</label>
                        <!-- Drpdown -->
                        <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                            <div class="container mx-auto flex flex-wrap justify-between mx-2 w-1/2">
                                <!-- Header 1 -->
                                <div class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3 text-center">
                                    <a href="#" class="b2b-sous-menu mb-2">
                                        <i class="fas fa-hotel b2b-icone-sous-menu"></i><br />
                                        Etablisement <br>d'enseignement
                                    </a>
                                </div>
                                <!-- Header 2 -->
                                <div class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3 text-center">
                                    <a href="#" class="b2b-sous-menu mb-2">
                                        <i class="fas fa-building b2b-icone-sous-menu"></i><br />
                                        Organisme <br>de formation
                                    </a>
                                </div>
                                <!-- Header 3 -->
                                <div class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3 text-center">
                                    <a href="#" class="b2b-sous-menu mb-2">
                                        <i class="fas fa-city b2b-icone-sous-menu"></i><br />
                                        Entreprise
                                    </a>
                                </div>

                                <!-- Header 4 -->
                                <div class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3 text-center">
                                    <a href="#" class="b2b-sous-menu">
                                        <i class="fas fa-bullhorn text-21px text-langoostViolet80 hover:text-langoostOrange80"></i><br />
                                        Distributeur
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Nos solutions-->
                    <li class="luxbar-item hoverable hover:bg-blue-800 hover:text-white">
                        <input type="checkbox" value="selected" id="toggle-two" class="toggle-input">
                        <!-- Menu niveau 1 -->
                        <label for="toggle-two" class="block cursor-pointer lg:text-13px b2b-menu font-medium">Nos solutions</label>
                        <!-- Drpdown -->
                        <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                            <div class="container mx-auto flex flex-wrap justify-between mx-2 lg:w-1/4">
                                <!-- Header 1 -->
                                <div class="px-4 w-full sm:w-1/2 lg:w-1/2 pb-6 pt-6 lg:pt-3 text-center">
                                    <a href="#" class="b2b-sous-menu mb-2">
                                        <i class="fas fa-graduation-cap b2b-icone-sous-menu"></i><br />
                                        Tests de langue
                                    </a>
                                </div>
                                <!-- Header 2 -->
                                <div class="px-4 w-full sm:w-1/2 lg:w-1/2 pb-6 pt-6 lg:pt-3 text-center">
                                    
                                    <a href="#" class="b2b-sous-menu mb-2">
                                        <i class="fas fa-briefcase b2b-icone-sous-menu"></i><br />
                                        Business English
                                    </a>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </li>

                    <!--Nos services -->
                    <li class="luxbar-item hoverable hover:bg-blue-800 hover:text-white">
                        <input type="checkbox" value="selected" id="toggle-third" class="toggle-input">
                        <!-- Menu niveau 1 -->
                        <label for="toggle-third" class="block cursor-pointer lg:text-13px b2b-menu font-medium">Nos services</label>
                        <!-- Drpdown -->
                        <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                            <div class="container mx-auto sm:w-full sm:overflow-y-auto lg:overflow-y-hidden lg:w-2/3 flex flex-wrap justify-between mx-2">
                                <!-- Header 1 -->
                                <ul class="px-4 w-full sm:w-1/2 lg:w-1/3 pb-6 pt-6 lg:pt-3">
                                    <h3 class="b2b-sous-menu b2b-sous-menu-header mb-2"><i class="fas fa-graduation-cap b2b-icone-sous-menu-header mr-3px"></i>Notre pédagogie</h3>
                                    <li class="b2b-sous-menu2 ml-6">
                                        <a href="#" class="block p-1">Evaluation prédagogique</a>
                                    </li>
                                    <li class="b2b-sous-menu2 ml-6">
                                        <a href="#" class="block p-1">Parcours de formation</a>
                                    </li>
                                    <li class="b2b-sous-menu2 ml-6">
                                        <a href="#" class="block p-1">Validation des compétences</a>
                                    </li>
                                </ul>
                                <!-- Header 2 -->
                                <ul class="px-4 w-full sm:w-1/2 lg:w-1/3 pb-6 pt-6 lg:pt-3">
                                    
                                    <h3 class="b2b-sous-menu b2b-sous-menu-header mb-2"><i class="fas fa-user-friends b2b-icone-sous-menu-header mr-3px"></i>Notre accompagnement</h3>
                                    <li class="b2b-sous-menu2 ml-6">
                                        <a href="#" class="block">Espace d'administration dédié</a>
                                    </li>
                                    <li class="b2b-sous-menu2 ml-6">
                                        <a href="#" class="block">Egagement</a>
                                    </li>
                                    <li class="b2b-sous-menu2 ml-6">
                                        <a href="#" class="block">Validation des compétences</a>
                                    </li>
                                </ul>
                                <!-- Header 3 -->
                                <ul class="px-4 w-full sm:w-1/2 lg:w-1/3 pb-6 pt-6 lg:pt-3">
                                    
                                    <h3 class="b2b-sous-menu b2b-sous-menu-header mb-2"><i class="fas fa-laptop-code b2b-icone-sous-menu-header mr-3px"></i>Intégrer notre solution</h3>
                                    <li class="b2b-sous-menu2 ml-6">
                                        <a href="#" class="block">SSO/API</a>
                                    </li>
                                    <li class="b2b-sous-menu2 ml-6">
                                        <a href="#" class="block">Marque blanche</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <!--Nos tarifs-->
                    <li class="luxbar-item">
                        <a href="#" class="block lg:text-13px b2b-menu font-medium">Nos tarifs</a>
                    </li>
                    
                    <!--Langoost-->
                    <li class="luxbar-item hoverable hover:bg-blue-800 hover:text-white">
                        <input type="checkbox" value="selected" id="toggle-four" class="toggle-input">
                        <!-- Menu niveau 1 -->
                        <label for="toggle-four" class="block cursor-pointer lg:text-13px b2b-menu font-medium">Langoost</label>
                        <!-- Drpdown -->
                        <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                            <div class="container mx-auto flex flex-wrap justify-between mx-2 sm:w-full lg:w-3/5">
                                <!-- Header 1 -->
                                <div class="px-4 w-full sm:w-1/3 lg:w-1/5 pb-6 pt-6 lg:pt-3 text-center">
                                    <a href="#" class="b2b-sous-menu mb-2">
                                        <img src="./images/icon/png/icons-default-langoost.png" class="mx-auto my-0 pb-1">
                                        Le pari de Langost
                                    </a>
                                </div>
                                <!-- Header 2 -->
                                <div class="px-4 w-full sm:w-1/3 lg:w-1/5 pb-6 pt-6 lg:pt-3 text-center">
                                    
                                    <a href="#" class="b2b-sous-menu mb-2">
                                        <i class="fas fa-users b2b-icone-sous-menu"></i><br />
                                        La Dream Team
                                    </a>
                                    
                                </div>
                                <!-- Header 3 -->
                                <div class="px-4 w-full sm:w-1/3 lg:w-1/5 pb-6 pt-6 lg:pt-3 text-center">
                                    
                                    <a href="#" class="b2b-sous-menu mb-2">
                                        <i class="fas fa-laptop b2b-icone-sous-menu"></i><br />
                                        Nos profs
                                    </a>
                                    
                                </div>

                                <!-- Header 4 -->
                                <div class="px-4 w-full sm:w-1/3 lg:w-1/5 pb-6 pt-6 lg:pt-3 text-center">
                                    
                                    <a href="#" class="b2b-sous-menu">
                                        <i class="fas fa-trophy b2b-icone-sous-menu"></i><br />
                                        Nos fiertés
                                    </a>
                                    
                                </div>

                                <!-- Header 5 -->
                                <div class="px-4 w-full sm:w-1/2 lg:w-1/5 pb-6 pt-6 lg:pt-3 text-center">
                                    
                                    <a href="#" class="b2b-sous-menu">
                                        <i class="fas fa-smile-wink b2b-icone-sous-menu"></i><br />
                                        Rejoins l'aventure
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Notre blog-->
                    <li class="luxbar-item">
                        <a href="#" class="block lg:text-13px b2b-menu font-medium">Notre blog</a>
                    </li>
                    <li class="luxbar-item items-center">
                        <div class="flex mt-8px ml-30px">
                            <span class="">
                                <a href="#" class="bouton-menu px-24px py-10px">Demo gratuite</a>
                            </span>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>

        
    </div>
</header>