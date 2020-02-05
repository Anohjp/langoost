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
                    <div class="">
                        <h1 class="text-76px font-extrabold text-white relative top-10px">Devis</h1>
                        <img src="images/content/demande-devis-img1.jpg" class="ml-0 mr-auto -mt-140px" />
                    </div>
                </div>

                <div class="w-full lg:w-1/2 lg:p-75px">
                    <div>
                        <h3 class="text-30px font-bold mb-20px">On a hâte de connaître<br> votre requête !</h3>
                        <p class="text-16px">Envoyez-nous votre demande et recevez votre devis <br>sous maximum 48h !</p>
                    </div>
                    <div class="text-12px mt-20px">
                        <form action="" class="text-langoostGrey20 font-normal pb-50px">
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
                    </div>
                </div>
            </div>
        </section>

    </div><!-- // bodyContent-->

    <!-- Footer -->

    <?php include_once './feature/footer/footer.php'?>


    </body>
</html>