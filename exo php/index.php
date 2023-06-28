<?php

// Exercice 1 : afficher la table de 9 (opération + résultat)

for ($i = 1; $i < 11; $i++){
    echo($i.' * 9 = '.$i * 9 .'<br>');
}

// Exercice 2 : compter à rebours

for ($i = 10; $i >= 0; $i--){
    echo($i.'<br>');
}

// Exercice 3 : Ecrire une boucle qui produit une ligne horizontale de 8 étoiles

for ($i = 0; $i < 8; $i++){
    echo('*');
}

echo('<br><br>');

// Exercice 4 : Afficher un figure de 8 étoiles sur 8

for($j=0; $j < 8; $j++){
    for ($i = 0; $i < 8; $i++){
        echo('*');
    }
    echo('<br>');
}

// Exercice 5 : Ecrire une fonction (utilisant une boucle) qui remplace tout les espaces d'une phrase par un underscore

function replace($search, $replace,string $sentence){
    for ($i = 0; $i < strlen($sentence); $i++){
        if($sentence[$i] === $search){
            $sentence[$i] = $replace;
        }
    }
    return $sentence;
}

echo ($result = replace(' ','_','Ceci est une phrase'));

echo('<br><br>');

//Exercice 6 : Ecrire une fonction (utilisant une boucle) qui inverse et affiche l'ordre des lettres d'un mot

function inverse(string $sentence){
    $result = '';
    for ($i = strlen($sentence)-1; $i >= 0; $i--){
        $result .= $sentence[$i];
    }
    return $result;
}

echo ($result = inverse('Ceci est une phrase'));
echo ($result = inverse('Ceci est une autre phrase de test'));

echo('<br><br>');

//Exercice 7 : Ecrire une fonction qui supprime les espaces et met la phrase en camelCase. Interdit d'utiliser les fonctions suivantes : ucwords() et str_replace().

function toCamelCase(string $sentence): string{
    $result = '';
    for($i = 0; $i < strlen($sentence); $i++){
        if($i === 0 && $sentence[$i+1] >= 'A' && $sentence[$i+1] <= 'Z'){
            $sentence[$i] = chr(ord($sentence[$i])+32);
        }
        if($sentence[$i] === ' '){
            if($sentence[$i+1] >= 'a' && $sentence[$i+1] <= 'z'){
                $sentence[$i+1] = chr(ord($sentence[$i+1])-32);
            }
            continue;
        }
        $result .= $sentence[$i];
    }
    return $result;
}

echo(toCamelCase('Le     GROS chat est mort'));