<?php
// - Uso:
// - Atribua diferentes valores no formato array numéricos por exemplo: [1, 2, 3, 4, 7, 7], [2, 1, 3, 5, 3, 2], para a função solution($parâmetro)

// - Regras:
// - Retornar o n° x que se repete na ocorrencia (for) e parar essa ocorrência assim que encontrar o mesmo número na ocorrencia atual, caso contrário retorne -1. 

// - Por exemplo:
// - Para a = [2, 1, 3, 5, 3, 2], a saída deverá ser solution(a) = 3
// - Para [8, 4, 6, 2, 6, 4, 7, 9, 5, 8], a saída deverá ser solution(a) = 6
    
function solution ($a) {
  $resultado = -1;
  $primeiroindice = 0;
  for ($x=0; $x < count($a); $x++) {
    $primeiroindice = array_search($a[$x], $a);
    if ($primeiroindice < $x) {
      $resultado = $a[$x];
      break;
    }
  }
  return $resultado;
}
echo solution([8, 4, 1, 2, 10, 14, 7, 9, 5, 18]);
?>
