
<main class="flex  gap-x-6 ">

   
<?php require "tmp.php"; ?>


    <section class="  ml-5  md:p-0  mt-7  pt-10    ">

        <section class=" md:flex md:flex-row flex  w-full h-full    justify-end items-start gap-y-8 -z-10 bg-transparent">

            <form id="form" action="/teachers/registed" method="post" class=" w-full  bg-gray-50  p-16 pt-2   flex flex-col rounded-lg gap-y-4  shadow-xl  opacity-100  ">

                <?= csrf_field()  ?>

                <div class="flex justify-center  text-2xl ">
                    <h2>Teacher registration</h2>
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
                        <input name="fristname" value="<?= set_value('fristname') ?>" class="shadow border-gray-200 focus:border-[#144e93] appearance-none border rounded   py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:shadow-lg " id="fristname" type="text" required>
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
                        <input name="lastname" value="<?= set_value('lastname') ?>" class="shadow border-gray-200 appearance-none border rounded   py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-[#144e93] focus:shadow-lg " id="lastname" type="text" required>
                    </div>
                    <div class="  text-xs text-red-400  ">
                        <?= validation_show_error('lastname') ?>

                    </div>
                </div>



                <div class="flex flex-col  gap-y-1 ">
                    <div class="flex   justify-start items-center ">
                        <label class="block text-gray-700 text-sm font-bold w-full " for="email">
                            Email:
                        </label>
                        <input name="email" value="<?= set_value('email') ?>" max=8 class="shadow border-gray-200 appearance-none border rounded   py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-[#144e93] focus:shadow-lg " id="email" type="text" required>
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
                        <input name="date_naissance" value="<?= set_value('date_naissance') ?>" class="shadow border-gray-200  w-full  appearance-none border rounded   py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#144e93] focus:shadow-outline focus:shadow-lg " id="date_naissance" type="date" required>
                    </div>
                    <div class="  text-xs text-red-400  ">
                        <?= validation_show_error('date_naissance') ?>

                    </div>
                </div>


                <div class="flex flex-col  gap-y-1 ">
                    <div class="flex   justify-start items-center ">
                        <label for="sexe" class="block text-gray-700 text-sm font-bold w-full">Sexe:</label>

                        <select id="sexe" name="sexe" value="<?= set_value('sexe') ?>" class=" focus:shadow-lg   border outline-none border-gray-200  w-full text-gray-900 text-sm rounded-lg focus:border-[#144e93] block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="M" selected>Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                    </div>
                    <div class="  text-xs text-red-400  ">
                        <?= validation_show_error('sexe') ?>
                    </div>
                </div>

                <div class="flex  flex-col  ">
                    <div class="flex   justify-start items-center ">
                        <label class="block text-gray-700 text-sm font-bold w-full " for="code">
                           Secret code:
                        </label>
                        <input name="code" value="" class="shadow border-gray-200 appearance-none border rounded   py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#144e93] focus:shadow-outline  focus:shadow-lg " id="code" type="password" required>
                    </div>
                    <div class="  text-xs text-red-400  ">
                        <?= validation_show_error('code') ?>
                    </div>
                </div>




                <div class="flex  flex-col  ">
                    <div class="flex   justify-start items-center ">
                        <label class="block text-gray-700 text-sm font-bold w-full " for="password">
                            Password:
                        </label>
                        <input name="password" value="" class="shadow  appearance-none border rounded border-gray-200  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-[#144e93] focus:shadow-outline  focus:shadow-lg " id="password" type="password" required>
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
                        <input name="passwordConf" value="" class="shadow  appearance-none border border-gray-200 rounded focus:border-[#144e93] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  focus:shadow-lg " id="password" type="password" required>
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
    </section>

</main>