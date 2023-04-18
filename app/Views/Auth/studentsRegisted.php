<?php /*
$to = "mamakemrosly@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
ini_set('SMTP', "server.com");
ini_set('smtp_port', "50885");
ini_set('sendmail_from', "mamakemrosly@gmail.com");
mail($to,$subject,$txt,$headers); */
?>


<main class="   md:p-0  pt-10  bg-no-repeat  ">
    <section class=" md:flex md:flex-row flex flex-col-reverse w-full h-full  px-8  justify-end items-center gap-y-8 -z-10 bg-transparent" style="background-image: url('/assets/img/download6.svg'); background-repeat:no-repeat;  ">
        <form id="form" action="/students/registed" method="post" class=" z-20  bg-gray-50 p-16 pt-2   flex flex-col rounded-lg gap-y-4  shadow-xl  opacity-100  ">

            <?= csrf_field()  ?>



            <div class="flex justify-center  text-2xl ">
                <h2>Connection</h2>
            </div>


            <?php if (isset($data['authentification-errors'])) : ?>
                <div class="flex justify-center  text-sm w-full h-full bg-red-400  text-white p-2 ">
                    <?= $data['authentification-errors'] ?>
                </div>
            <?php endif ?>


            <div class="flex flex-col  gap-y-1 ">
                <div class="flex justify-center items-center ">
                    <label class="block text-gray-700 text-sm font-bold w-full " for="fristname">
                        Frist name:
                    </label>
                    <input name="fristname" value="<?= set_value('fristname') ?>" class="shadow focus:border-[#144e93] appearance-none border rounded   py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:shadow-lg " id="fristname" type="text" required>
                </div>
                <div class="  text-xs text-red-400  ">
                    <?= validation_show_error('fristname') ?>

                </div>
            </div>


            <div class="flex flex-col  gap-y-1 ">
                <div class="flex   justify-start items-center ">
                    <label class="block text-gray-700 text-sm font-bold w-full " for="lastname">
                        Last name:
                    </label>
                    <input name="lastname" value="<?= set_value('lastname') ?>" class="shadow  appearance-none border rounded   py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-[#144e93] focus:shadow-lg " id="lastname" type="text" required>
                </div>
                <div class="  text-xs text-red-400  ">
                    <?= validation_show_error('lastname') ?>

                </div>
            </div>


            <div class="flex flex-col  gap-y-1 ">
                <div class="flex   justify-start items-center ">
                    <label class="block text-gray-700 text-sm font-bold w-full " for="matricule">
                        Matricule:
                    </label>
                    <input name="matricule" value="<?= set_value('matricule') ?>" max=8 class="shadow appearance-none border rounded   py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-[#144e93] focus:shadow-lg " id="matricule" type="text" required>
                </div>
                <div class="  text-xs text-red-400  ">
                    <?= validation_show_error('matricule') ?>

                </div>
            </div>

           

            <div class="flex flex-col  gap-y-1 ">
                <div class="flex   justify-start items-center ">
                    <label class="block text-gray-700 text-sm font-bold w-full " for="email">
                        Email:
                    </label>
                    <input name="email" value="<?= set_value('email') ?>" max=8 class="shadow appearance-none border rounded   py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-[#144e93] focus:shadow-lg " id="email" type="text" required>
                </div>
                <div class="  text-xs text-red-400  ">
                    <?= validation_show_error('email') ?>

                </div>
            </div>

            <div class="flex flex-col  gap-y-1 ">
                <div class="flex  justify-between items-center ">
                    <label class="block text-gray-700 text-sm font-bold w-full " for="date_naissance">
                        Date naissance:
                    </label>
                    <input name="date_naissance" value="<?= set_value('date_naissance') ?>" class="shadow   w-full  appearance-none border rounded   py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#144e93] focus:shadow-outline focus:shadow-lg " id="date_naissance" type="date" required>
                </div>
                <div class="  text-xs text-red-400  ">
                    <?= validation_show_error('date_naissance') ?>

                </div>
            </div>


            <div class="flex flex-col  gap-y-1 ">
                <div class="flex   justify-start items-center ">
                    <label for="sexe" class="block text-gray-700 text-sm font-bold w-full" >Sexe:</label>

                    <select id="sexe" name="sexe" value="<?= set_value('sexe') ?>" class="bg-gray-50 focus:shadow-lg  border outline-none border-gray-300  w-full text-gray-900 text-sm rounded-lg focus:border-[#144e93] block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="M" selected>Masculin</option>
                        <option value="F">Féminin</option>
                    </select>
                </div>
                <div class="  text-xs text-red-400  ">
                    <?= validation_show_error('sexe') ?>
                </div>
            </div>

            
            <div class="flex flex-col  gap-y-1 ">
                <div class="flex   justify-start items-center ">
                    <label for="niveau" class="block text-gray-700 text-sm font-bold w-full" >Niveau:</label>

                    <select id="niveau" name="niveau" value="<?= set_value('niveau') ?>" class="bg-gray-50 focus:shadow-lg  border outline-none border-gray-300  w-full text-gray-900 text-sm rounded-lg focus:border-[#144e93] block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="level1" selected>Level 1</option>
                        <option value="level2">Level 2</option>
                        <option value="level3">Level 3</option>
                        <option value="master1">Master 1</option>
                        <option value="master2">Master 2</option>
                        <option value="phd">Phd</option>
                    </select>
                </div>
                <div class="  text-xs text-red-400  ">
                    <?= validation_show_error('niveau') ?>
                </div>
            </div>

            <div class="flex flex-col  gap-y-1 ">
                <div class="flex   justify-start items-center ">
                    <label for="filiere" class="block text-gray-700 text-sm font-bold w-full" >filiere:</label>

                    <select id="filiere" name="filiere" value="<?= set_value('filiere') ?>" class="bg-gray-50 focus:shadow-lg   border outline-none border-gray-300  w-full text-gray-900 text-sm rounded-lg  focus:border-[#144e93] block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="informatique" selected>Informatique</option>
                        <option value="informatque">...</option>
                      
                    </select>
                </div>
                <div class="  text-xs text-red-400  ">
                    <?= validation_show_error('filiere') ?>
                </div>
            </div>


            <div class="flex  flex-col  ">
                <div class="flex   justify-start items-center ">
                    <label class="block text-gray-700 text-sm font-bold w-full " for="password">
                        Password:
                    </label>
                    <input name="password" value="" class="shadow  appearance-none border rounded   py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#144e93] focus:shadow-outline  focus:shadow-lg " id="password" type="password" required>
                </div>
                <div class="  text-xs text-red-400  ">
                    <?= validation_show_error('password') ?>
                </div>
            </div>

            
            <div class="flex  flex-col  ">
                <div class="flex   justify-start items-center ">
                    <label class="block text-gray-700 text-sm font-bold w-full " for="passwordConf">
                        password Confirm:
                    </label>
                    <input name="passwordConf" value="" class="shadow  appearance-none border rounded focus:border-[#144e93] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  focus:shadow-lg " id="password" type="password" required>
                </div>
                <div class="  text-xs text-red-400  ">
                    <?= validation_show_error('passwordConf') ?>
                </div>
            </div>

            <div class="flex flex-col justify-end items-center gap-2 ">

                <button class="bg-[#663300] hover:shadow-lg w-full  text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Sign up
                </button>
            </div>


        </form>

    </section>
</main>