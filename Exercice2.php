<?php
function escalier(int $nombreMarches, array $deplacements): ?array {
   // Etape 1 : cas simples
   // Vérifier si le nombre de marches est divisible par un déplacement
   foreach($deplacements as $deplacement){
       if($nombreMarches % $deplacement == 0){
           // Retourner [2, 2, 2, 2, 2]
           $reponse = [];
           $nombreDeplacements = $nombreMarches / $deplacement;
           for($i = 0; $i < $nombreDeplacements ; $i++){
               $reponse[] = $deplacement;
           }
           return $reponse;
       }
   }
   // Etape 2 : cas compliqués
   // On prépare le tableau de solutions potentielles
   $solutions = [];
   foreach($deplacements as $deplacement){
       $solutions[] = [ $deplacement ];
   }
   // $solutions = [[3], [4]];
   // $solutions = [[3, 3], [3,4], [4, 3], [4,4]];
   do {
       // 1 : Extraire le premier élément du tableau
       // 2 : Le dupliquer et ajouter un déplacement (autant de fois que de déplacement possible)
       // 3 : Tester la somme des éléments de chaque nouveau tableau (array_sum)
       // 4 : Si total > nb de marches, ignorer et passer au suivant
       //     Si total == nb de marches, solution toruvée => fin
       //     Si total < nb de marches, ajouter à la fin du tableau de solutions et passer au suivant
   } while(!empty($solutions));
}