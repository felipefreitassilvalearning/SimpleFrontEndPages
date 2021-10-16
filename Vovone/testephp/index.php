<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um site recheado de delícias para você aproveitar.">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Ivone Gros PHP</title>
</head>
<body>


    <nav>

        <ul class="logo">
            <a href="https://www.instagram.com/ivonegros/" target="_blank">
                <img src="img/logo.jpeg" alt="Logo Ivone Gros">
            </a>
        </ul>

        <ul class="navegacao">
            <li><a href="#inicio">Início</a></li>
            <li>
                <a href="#cardapio">Cardápio </a><span class="menuFechado">></span>
                <ul class="cardapioMenu">
                    <li><a href="#aperitivos">Aperitivos</a></li>
                    <li><a href="#salgados">Salgados</a></li>
                    <li><a href="#sobremesas">Sobremesas</a></li>
                </ul>
            </li>
            <li><a href="#pedido">Pedido</a></li>
            <li><a href="#contato">Contato</a></li>
            <li><a href="#sobre">Sobre</a></li>
        </ul>

        <ul class="hamburger"><span>&#9776;</span></ul>

        <ul class="navegacaoMobile">
            <li><a href="#inicio">Início</a></li>
            <li><a href="#cardapio">Cardápio v</a></li>
            <ul class="cardapioMenuMobile">
                <li><a href="#aperitivos">Aperitivos</a></li>
                <li><a href="#salgados">Salgados</a></li>
                <li><a href="#sobremesas">Sobremesas</a></li>
            </ul>
            <li><a href="#pedido">Pedido</a></li>
            <li><a href="#contato">Contato</a></li>
            <li><a href="#sobre">Sobre</a></li>
        </ul>
        
    </nav>


    <section id="inicio">
        <div class="produtos-wrapper">

            <div class="produtos-destaque-wrapper">
                <div class="produtos-destaque">

                    <div class="destaque">
                        <a href="#sobremesas">
                            <img src="img/spekulatius.jpeg" alt="Spekulatius">
                            <div><h4>Spekulatius</h4></div>
                        </a>
                    </div>

                    <div class="destaque">
                        <a href="#sobremesas">
                            <img src="img/biscoitosecafe.jpeg" alt="Biscoitos e café">
                            <div><h4>Biscoitos e café</h4></div>
                        </a>
                    </div>

                    <div class="destaque">
                        <a href="#sobremesas">
                            <img src="img/bolosforadacaixa.jpeg" alt="Bolos">
                            <div><h4>Bolos</h4></div>
                        </a>
                    </div>
                
                </div><!--produtos-destaque-->
            </div><!--produtos-destaque-wrapper-->
            
            <div class="cardapio-wrapper">

                <div id="cardapio"></div>
                <h2>Cardápio</h2>

                <div id="aperitivos"></div>
                <div class="aperitivos">
                    <h4>Aperitivos</h4>
                    <p>Caponata<br>(pimentão, beringela, azeitona, cebola) – 250gr<br>R$30,00</p>
                    <p>Patê com geléia de laranja<br>R$90,00 (21cm) e R$70,00 (14cm)</p>
                    <p>Patê com geléia de pimenta<br>R$90,00 (21cm) e R$70,00 (14cm)</p>
                </div><!--aperitivos-->

                <div id="salgados"></div>
                <div class="salgados">
                    <h4>Salgados</h4>
                    <p>Pastelão de bacalhau*<br>R$160,00</p>
                    <p>Pastelão de camarão*<br>R$160,00</p>
                    <p>Pastelão de carne*<br>R$120,00</p>
                    <p>Pastelão de frango*<br>R$90,00</p>
                    <p>Quiche de alho poró<br>R$90,00</p>
                    <p>Quiche de cebolas<br>R$90,00</p>
                    <p>Quiche Lorraine<br>R$100,00</p>
                    <p>Crepes de pêra com gorgonzola<br>R$50,00 (bandeja 6un) e R$40,00 (bandeja 4un)</p>
                    <p>Croquetes<br>R$50,00 (bandeja 12un)</p>
                    <p>Goulash (sob encomenda)<br>R$100,00 e R$55,00</p>
                    <p>Spatzle (sob encomenda)<br>R$50,00 (500gr) e R$25,00 (250gr)</p>
                    <p>* quiches e pastelões tem 26cm de diâmetro e os pastelões são de massa folheada</p>
                </div><!--salgados-->

                <div id="sobremesas"></div>
                <div class="sobremesas">
                    <h4>Sobremesas</h4>
                    <p>Rocambole de laranjas<br>R$80,00 (30cm)</p>
                    <p>Rocambole de laranjas com castanhas<br>R$85,00 (30cm)</p>
                    <p>Terrine de chocolate crocante com molho de bergamotas<br>R$95,00 (27cm)</p>
                    <p>Toucinho do céu<br>R$110,00 (20cm)</p>
                    <p>Spekulatius (sob encomenda)<br>R$50,00 (500gr) e R$25,00 (250gr)</p>
                    <p>Bolo alemão com especiarias (sob encomenda)<br>R$120,00 e R$160,00</p>
                </div><!--sobremesas-->

            </div><!--cardapio-wrapper-->

        </div><!--produtos-wrapper-->
    </section>

    <div id="pedido"></div>
    <section>
        <div class="pedido">

            <div class="form">

                <form action="teste.php" method="post">
                    <h3>Faça aqui mesmo o seu pedido!</h3>
                    <div class="form-wrapper">

                        <div class="nomeetelefone">
                            <div>
                                <label for="telefone">Seu Telefone*</label>
                                <input type="text" name="telefone" placeholder="Ex: (51) 98765-4321" required>
                            </div>
                            <div>
                                <label for="nome">Seu nome*</label>
                                <input type="text" name="nome" placeholder="Nome Sobrenome" required>
                            </div>
                        </div>

                        <div class="novoproduto">
                            <div>
                                <div><label for="produto">Seu Produto*</label></div>
                                <select name="produtos" class="produtos" required id="produtos">
                                    <option value="0" disabled></option>
                                    <option disabled>Aperitivos</option>
                                        <option value="Caponata_30">Caponata</option>
                                        <option value="Patê com geleia de laranja (14cm)_70">Patê com geleia de laranja (14cm)</option>
                                        <option value="Patê com geleia de laranja (21cm)_90">Patê com geleia de laranja (21cm)</option>
                                        <option value="Patê com geléia de pimenta (14cm)_70">Patê com geléia de pimenta (14cm)</option>
                                        <option value="Patê com geléia de pimenta (21cm)_90">Patê com geléia de pimenta (21cm)</option>
                                    <option value="0" disabled></option>
                                    <option disabled>Salgados</option>
                                        <option value="Pastelão de bacalhau_160">Pastelão de bacalhau</option>
                                        <option value="Pastelão de camarão_160">Pastelão de camarão</option>
                                        <option value="Pastelão de carne_120">Pastelão de carne</option>
                                        <option value="Pastelão de frango_90">Pastelão de frango</option>
                                        <option value="Quiche de alho poró_90">Quiche de alho poró</option>
                                        <option value="Quiche de cebolas_90">Quiche de cebolas</option>
                                        <option value="Quiche Lorraine_100">Quiche Lorraine</option>
                                        <option value="Crepes de pêra com gorgonzola (4un)_40">Crepes de pêra com gorgonzola (4un)</option>
                                        <option value="Crepes de pêra com gorgonzola (6un)_50">Crepes de pêra com gorgonzola (6un)</option>
                                        <option value="Croquetes_50">Croquetes</option>
                                        <option value="Goulash_55">Goulash</option>
                                        <option value="Spatzle (250g)_25">Spatzle (250g)</option>
                                        <option value="Spatzle (500g)_50">Spatzle (500g)</option>
                                    <option value="0" disabled></option>
                                    <option disabled>Sobremesas</option>
                                        <option value="Rocambole de laranjas_80">Rocambole de laranjas</option>
                                        <option value="Rocambole de laranjas com castanhas_85">Rocambole de laranjas com castanhas</option>
                                        <option value="Terrine de chocolate crocante com molho de bergamotas_95">Terrine de chocolate crocante com molho de bergamotas</option>
                                        <option value="Toucinho do céu_110">Toucinho do céu</option>
                                        <option value="Spekulatius (250g)_25">Spekulatius (250g)</option>
                                        <option value="Spekulatius (500g)_50">Spekulatius (500g)</option>
                                        <option value="Bolo alemão com especiarias_120">Bolo alemão com especiarias</option>
                                    <!--</optgroup>-->
                                </select>
                            </div>
                            <div>
                                <div><label for="quantidade">Qtd</label></div>
                                <input type="number" name="quantidade" required min="1" max="10" value="1" id="quantidade">
                            </div>
                            <div>
                                <div></div>
                                <button form="form_id">Adicionar ao carrinho</button>
                            </div>
                        </div>

                        <div class="obseconfirm">
                            <div>
                                <div><label for="textarea">Observações</label></div>
                                <textarea name="observacao" placeholder="Alguma observação?"></textarea>
                            </div>
                            <div>
                                <div></div>
                                <input class="button" type="submit" value="Confirmar Pedido">
                            </div>
                        </div>

                    </div><!--form-wrapper-->
                </form>

                <div class="sumup-wrapper">
                    <div class="sumup" id="sumup">
                        <h3>Seu pedido</h3>
                        <div class="pedido-wrapper">
                            <div class="subtotal-produtos">
                                Produtos: <span class="pdt"></span>
                                <h4>Total: <span></span></h4>
                            </div>
                            <div class="vermais">
                                <a href="#pedido">
                                    <img src="img/lupa.png" alt="Ver mais" width="50%" height="80%">
                                </a>
                            </div>
                        </div><!--pedido-wrapper-->
                    </div><!--sumup-->
                </div><!--sumup-wrapper-->
                
            </div><!--form-->

            <div class="meuspedidos-wrapper">
                <table class="meuspedidos" id="meuspedidos">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>

                        </tr>
                    </tfoot>
                </table>
            </div>

        </div><!--pedido-->
    </section>


    <div id="contato"></div>
    <section>
        <div class="contatenos">
            <h3>Alguma dúvida? Contate-nos!</h3>
            <div class="smwrapper">
                <div class="wpp"><h4>WhatsApp: 51 98765-4321</h4><img src="img/whatsapp.png" alt="WhatsApp" width="50px"></div>
                <div class="ig"><h4>Instagram: <a href="https://www.instagram.com/ivonegros/" target="_blank">@ivonegros</a></h4><img src="img/instagram.png" alt="Instagram" width="50px"></div>
            </div><!--smwrapper-->
            <!--
                <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->
        </div><!--contatenos-->
    </section>


    <section id="sobre">
        <div class="sobre">
            <h3>Sobre</h3>
            <p>Iniciamos as atividade culinárias como um hobby de final de ano, fazendo bolos de natal e biscoitos para vender aos amigos. O negócio tomou corpo e passamos a fazer comidas congeladas, tanto doces quanto salgados. Nossas comidas são reconhecidas pelo sabor caseiro e o tempero de família.</p>
            <div class="img-wrapper">
                <a href="https://www.instagram.com/ivonegros/" target="_blank">
                    <img src="img/logo.jpeg" alt="Logo Ivone Gros" width="100%" height="100%">
                </a>
            </div><!--img-wrapper-->
        </div><!--sobre-->
    </section>
    

    <script src="js/jquery.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/jquery.mask.js"></script>


</body>
</html>