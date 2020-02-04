<!DOCTYPE html>
<html>

    <!-- Head -->
    <?php include_once 'feature/head.php'?>

    <body class="bg-gray-100 font-Montserrat font-body text-16px" style="overflow-x: hidden;">

    <!-- Header -->
    <div class="w-full bg-white">
        <?php include_once 'feature/header/b2c-header.php' ?>
    </div>

    <div id="bodyContent">
        
        <section>
            <div class="w-full flex flex-wrap">
                <div class="w-full lg:w-1/2 text-center bg-white">
                    <div class="bg-langoostGold100">
                        <h1 class="text-76px font-extrabold text-white relative top-10px">Contact</h1>
                        <img src="images/content/contact-general-img1.png" class="mx-auto -mt-96px" />
                    </div>
                </div>

                <div class="w-full lg:w-1/2 lg:p-75px">
                    <div>
                        <h3 class="text-30px font-bold mb-20px">On a hâte de connaître <br>votre requête !</h3>
                        <p class="text-16px">N'hésitez pas à nous contacter par téléphone ou par <br>mail, on revient très vite vers vous !</p>
                    </div>
                    <div class="text-12px mt-20px">
                        <form action="" class="border-b border-langoostGrey20 text-langoostGrey20 font-normal pb-50px">
                            <div class="w-full pb-20px">
                                <label>QUI ÊTES-VOUS ?</label><br>
                                <select class="border border-langoostGrey20 w-full h-30px rounded">
                                    <option></option>
                                    <option>Select 1</option>
                                    <option>Select 1</option>
                                    <option>Select 1</option>
                                </select>
                            </div>
                            <div class="w-full flex pb-20px">
                                <div class="w-1/2 pr-5px">
                                    <label>NOM COMPLET</label><br>
                                    <input type="text" name="name" value="" class="border border-langoostGrey20 w-full h-30px rounded"/>
                                </div>
                                <div class="w-1/2">
                                    <label>EMAIL</label><br>
                                    <input type="email" name="email" value="" class="border border-langoostGrey20 w-full h-30px rounded"/>
                                </div>
                            </div>
                            <div class="w-full pb-20px">
                                <label>OBJET DE VOTRE DEMANDE</label><br>
                                <select class="border border-langoostGrey20 w-full h-30px rounded">
                                    <option></option>
                                    <option>Select 1</option>
                                    <option>Select 1</option>
                                    <option>Select 1</option>
                                </select>
                            </div>
                            <div class="w-full">
                                <label>VOTRE MESSAGE</label><br>
                                <textarea name="message" class="border border-langoostGrey20 w-full rounded"></textarea>
                            </div>
                            <div class="mt-40px">
                                <p><a href="#" class="btn-global btn-primary btn-primary-small">Envoyer</a></p>
                            </div>
                        </form>

                        <div class="">
                            <h3 class="text-20px font-bold mt-20px">Besoin d’un coup de pouce ? <br>Notre assistance à votre service !</h3>
                            <div class="mt-20px text-16px">
                                <p>
                                    <span class="mr-30px">
                                        <span class="bg-langoostGrey10 py-4px px-5px rounded-full mr-10px"><i class="fas fa-phone-alt"></i></span>
                                        <span class="text-16px"> (0)7 71 77 40 45</span>
                                    </span> 
                                    <span>
                                        <span class="bg-langoostGrey10 py-4px px-5px rounded-full mr-10px"><i class="fas fa-user"></i></span>
                                        <span class="text-16px"> [at]langoost[dot]com</span>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="mt-50px">
                            
                                <h3 class="text-20px font-bold mt-20px">Une question commerciale ? <br>Testez la réactivité de nos sales !</h3>
                                <div class="mt-20px text-16px">
                                    <p>
                                        <span class="mr-30px">
                                            <span class="bg-langoostGrey10 py-4px px-5px rounded-full mr-10px"><i class="fas fa-phone-alt"></i></span>
                                            <span class="text-16px"> (0)7 71 77 40 45</span>
                                        </span> 
                                        <span>
                                            <span class="bg-langoostGrey10 py-4px px-5px rounded-full mr-10px"><i class="fas fa-user"></i></span>
                                            <span class="text-16px"> [at]langoost[dot]com</span>
                                        </span>
                                    </p>
                                </div>
                            
                        </div>
                    </div>
                </div>

                <div class="w-full -mt-116px">
                    <img src="images/content/contact-cercle-orange.png" class="mr-0 ml-auto" />
                </div>
            </div>
        </section>

    </div><!-- // bodyContent-->

    <!-- Footer -->

    <?php include_once './feature/footer/footer.php'?>


    </body>
</html>