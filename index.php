<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="/assent/css/style.css">


     <title>Marmitaria Dona Rita</title>

     <?php
         $produto = [
             ['id' => 1, 'nome' => 'Feijoada','subDiscri' => 'Serve 2 pessoas', 'valor' => "59,99", 'tipo' => 'Pesado', 'peso' => '1 kg', 'descricao' => "1kg de Feijão preto/n880g de Pertences para Feijoada Perdigão (Linguiça calabresa, Costela salgada, Carne suína salgada, Pé salgado, Bacon, Pele suína)/n500g de Lombo suíno cortado em cubos grandes/n250g de Paio Perdigão em rodelas/n250g de Rabo salgado/n300g de Cebola em cubos/n50g de Banha suína/n5 dentes de Alho picados/n2 folhas de Louro",'imagem' => 'assent/img/feijoada.jpg'],

             ['id' => 2, 'nome' => 'Estrogonofe','subDiscri' => 'Serve 2 pessoas', 'valor' => "38,99", 'tipo' => 'Leve', 'peso' => '1,2 kg', 'descricao' => "1 colher (sopa) de Azeite de Oliva Extra Virgem TERRANO®/n1 dente de alho espremido/n1 cebola pequena picada (100 g)/n1 peito de frango pequeno, cortado em iscas (400 g)/n1 sachê de Tempero SAZÓN® Verde/n1 pitada de sal/n1 colher (sopa) de ketchup/n1 colher (sopa) de mostarda/n1 xícara (chá) de polpa de tomate (200 g)/n1 lata de creme de leite (300 g)", 'imagem' => 'assent/img/estrogonofre.jpg'],

             ['id' => 3, 'nome' => 'Combo Dona Rita feijão tropeiro','subDiscri' => 'Serve 2 pessoas', 'valor' => "59,99", 'tipo' => 'Pesado', 'peso' => '1 kg', 'descricao' => "1 kg de feijão carioca cozido al dente/n250 gr de lombo de porco cozido/n250 gr de linguiça calabresa defumada/n3 dentes de alho picadinho/n1 unidade de cebola picadinha/nSal a gosto/nAzeite de oliva a gosto/n200 gr de bacon picadinho/n100 gr de farinha de mandioca torrada", 'imagem' => 'assent/img/Feijão_tropeiro_vulgo_Combo_dona_Rita.jpg'],

             ['id' => 4, 'nome' => 'Marmitex fitness', 'subDiscri' => 'Serve 2 pessoas','valor' => "25,00", 'tipo' => 'Fit', 'peso' => '1 kg', 'descricao' => "1 laranja espremida/n1 limão espremido/n1 colher de sopa de sal/n1 colher de sopa de molho inglês/n3 colheres de sopa de mostarda/n1/3 de xícara de chá de azeite de oliva/n5 dentes de alho espremidos/n1 pitada de pimenta-do-reino/nAlecrim a gosto/n1 colher de café de páprica picante/n1 peça de lombo suíno de (cerca de 1 kg)/n1 kg de batata bolinha/n1 cenoura picada em bastões/n1 xícara de chá de vagens picadas", 'imagem' => 'assent/img/PratoFitness.jpg']
         ];
     ?>
</head>
<body>
     <div class="main">
          <header>
               <span class="logo"> <a href="#" target="_blank" rel="noopener noreferrer">
                    <img src="assent/img/Marmitaria dona rita 3.png" alt="Logo dona Rita" width="120px">
               </a></span>
               <img  class="socialMidia" src="assent/img/Redes social.svg" alt="redes  social">
          </header>



          <div class="catalogo">
            <?php 
                    foreach($produto as $produtos){
                         echo '<div class="produtos">
                              <div class="secao">
                                
                                   <img src='.$produtos["imagem"].'>
                                   <div class="text">
                                        <a href="#">
                                   
                                             <p>'.$produtos["nome"].' - '.$produtos["subDiscri"].'</p>
                                             <p> Valor: R$ '.$produtos["valor"].'</p>
                                        </a>
                                   </div>
                               

                              </div>
                         </div>';
                    }
                    
               ?>
               

          <footer>
               <div class="assinatura">© Dev - Paulo Santos - BACK END I - 53/2022 || RA: 21001860-5</div>
          </footer>
     </div>


</body>
</html>