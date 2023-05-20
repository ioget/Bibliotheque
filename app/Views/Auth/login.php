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


<main class="   md:p-0  h-[70vh]  bg-no-repeat  ">
    <section class=" md:flex md:flex-row flex flex-col-reverse w-full h-full  px-8  justify-center items-center gap-y-8 -z-10 bg-transparent" style="background-image: url('/assets/img/download6.svg'); background-repeat:no-repeat;  ">
        <form id="form" action="/login" method="post" class=" z-20  bg-gray-50 p-12 pt-2   flex flex-col rounded-lg gap-y-4  shadow-2xl  opacity-100  ">

            <?= csrf_field()  ?>



            <div class="flex justify-center  text-2xl ">
                <h2>Connection</h2>
            </div>


            <?php if (isset($data['authentification-errors'])) : ?>
                <div class="flex justify-center  text-sm w-full h-full bg-red-400  text-white p-2 ">
                    <?= $data['authentification-errors'] ?>
                </div>
            <?php endif ?>

            <?php if (isset($data['authentification-succes'])) : ?>
                <div class="flex justify-center  text-sm w-full h-full bg-green-400  text-white p-2 ">
                    <?= $data['authentification-succes'] ?>
                </div>
            <?php endif ?>


            <div class="flex flex-col  gap-y-1 ">
                <div class="flex justify-center items-center ">
                    <label class="block text-gray-700 text-sm font-bold w-full " for="username">
                        Username:
                    </label>
                    <input name="username" value="<?= set_value('username') ?>" class="shadow border-gray-200 appearance-none border rounded   py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:shadow-lg " id="username" type="text" required>
                </div>
                <div class="  text-xs text-red-400  ">
                    <?= validation_show_error('username') ?>

                </div>
            </div>

            <div class="flex  flex-col  ">
                <div class="flex justify-center items-center ">
                    <label class="block text-gray-700 text-sm font-bold w-full " for="password">
                        Password:
                    </label>
                    <input name="password" value="" class="shadow border-gray-200 appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  focus:shadow-lg " id="password" type="password" required>
                </div>
                <div class="  text-xs text-red-400  ">
                    <?= validation_show_error('password') ?>
                </div>
            </div>

            <div class="flex flex-col justify-end items-center gap-2 ">

                <button class="bg-[#663300] hover:shadow-lg w-full  text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Log in
                </button>
                <a href=""><span class="text-sm hover:text-[#144e93] italic text-neutral-500 ">Forget password</span></a>
            </div>

   
        </form>

    </section>
</main>