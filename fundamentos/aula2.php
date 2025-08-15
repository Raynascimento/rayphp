<?php 
$pontuacao = 0;

echo "Jogo de Perguntas";

echo "<br>1. Qual era o nome do 'descobridor'do Brasil?
      <br> a. Cabral
      <br> b. Cabril
      <br> c. Cabrol
";
$resposta1 = "a";
echo "<br>Resposta:".$resposta1;
if($resposta1 == "a"){
    echo "Resposta Correta!";
    $pontuacao++; // É o mesmo $pontuacao = $pontuacao + 1;

}else {
     echo "<br>Você Errou!";

}
//2º QUESTÃO 
echo"<br>Qual era a cor do cavalo branco de Napoleão?;
<br>a. Branco 
<br>b. Marrom
<br>c. Preto 
";
$resposta2 = "b";
echo "Resposta; " . $resposta2;
if ($resposta2 == "a"){
    echo "Errou! Branco era o nome do cavalo de Napoleão,mas a cor era, Marrom";


}else if ($resposta2 == "b"){
    echo"Acertou! Parabéns!";
    $pontuacao++;

}else if ($resposta2== "c"){
    echo "Missericódia! vai estudar!";

}else{
    echo"Você escolheu uma opçao inválida.";
}
// 3º Questão 
echo "<br>3. Qual é a capital do brasil?
      <br>a. Pavuna
      <br>b. Maricá
      <br>c. Brasilia
      ";
      $resposta3 = "c";
      switch ($resposta3){
        case "a":
            echo "<br>Pavuna é um bairro do Rio de Janeiro";
            break;
            case "b":
                echo "<br>Maricá é um municío do Estado da Rio";
                break;
                case "c";
                echo "<br>Parabéns, você acertou!";
                $pontuacao++;
                break;
                default;
                echo "<br>Opção invalida";
                break;


      }
      echo "<br>Você tirou $pontuacao pontos!";

      echo "<br>Você tirou, deixe- me ver... ";
      $x = 1;
      while($x <= $pontuacao){
        echo "<br>$x";
        $x++;
      }
      
?>
