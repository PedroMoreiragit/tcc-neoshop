<!DOCTYPE html>
    <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Recuperação de Senha</title>
            <link rel="stylesheet" href="tailwind.css">
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body class="bg-[#1e293b] flex h-screen justify-center items-center">
            <div class="font-semibold"> 
                <div>
                    <img class="m-auto" src="neoshoplogo.png" alt="Logo escrito 'NeoShop'">
                </div>
                <div class="content-center">
                    <div class="bg-[#162235] w-[20%] text-center mx-auto rounded-2xl">
                        <br>
                        <div class="font-bold text-white text-2xl">
                            <h6>Cadastre-se</h6>
                        </div>
                        <br>
                        <div class="text-gray-400 text-xs">
                            <p>Preencha com os dados abaixo para continuar</p>
                        </div>
                        <br>
                        <div>
                            <div class="grid grid-cols-7">
                                <img class="ml-5" src="res/icons/user.png" alt="">
                                <input class="placeholder-white text-white w-[300px]" type="text" placeholder="Nome Completo" id="txtEmail">
                            </div>
                            <br>
                            <hr class="w-[90%] mx-auto">
                            <br>
                            <div class="grid grid-cols-7">
                                <img class="ml-5" src="res/icons/mail.png" alt="">
                                <input class="placeholder-white text-white w-[300px]" type="text" placeholder="Email" id="txtSenha">
                            </div>
                            <br>
                            <hr class="w-[90%] mx-auto">
                            <br>
                            <div class="grid grid-cols-7">
                                <img class="ml-5" src="res/icons/lock.png" alt="">
                                <input class="placeholder-white text-white w-[300px]" type="password" placeholder="Senha" id="txtSenha">
                            </div>
                            <br>
                            <hr class="w-[90%] mx-auto">
                            <br>
                            <div class="grid grid-cols-7">
                                <img class="ml-5" src="res/icons/lock.png" alt="">
                                <input class="placeholder-white text-white w-[300px]" type="password" placeholder="Confirme sua senha" id="txtSenha">
                            </div>
                            <br>
                            <hr class="w-[90%] mx-auto">
                            <br>
                        </div>
                        <br><br>
                        <div class="border-[#38bdf8] rounded-lg bg-[#38bdf8] w-[90%] h-[50px] content-center mx-auto">
                            <button class="text-white text-xl" type="button" id="btnLogin">Cadastre-se</button>
                        </div>
                        <br>
                        <div class="text-white text-xs"> 
                            <p>Já tem uma conta? <a  href="login.html" class="text-blue-500">Entre</a></p>
                        </div>
                        <br>
                    </div>
                    <br>    
                    <div class="text-center">
                        <p class="text-gray-400">Ao continuar, você aceita nossos <br> Termos de Uso e Politica de Privacidade</p>
                    </div>
                </div>    
            </div>
        </body>
    </html>