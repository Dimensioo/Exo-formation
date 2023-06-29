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

function toCamelCase(string $sentence): string
{
    $newSentence = $sentence[0];

    if ($sentence[0] >= 'A' && $sentence[0] <= 'Z') {
        $newSentence = chr(ord($sentence[0]) + 32);
    }

    for ($i = 1; isset($sentence[$i]); $i++) {
        if ($sentence[$i] !== ' ') {
            $newSentence .= $sentence[$i];
            continue;
        }

        if ($sentence[$i + 1] >= 'a' && $sentence[$i + 1] <= 'z') {
            $sentence[$i + 1] = chr(ord($sentence[$i + 1]) - 32);
        }
    }

    return $newSentence;
}

echo(toCamelCase('Le     GROS chat est mort'));
echo('<br><br>');

//Exercice 8 : Ecrire une fonction arrayFlip() faisant la même chose que array_flip

function arrayFlip(array $array){
    $reverseArray = [];
    $length = count($array)-1;
    for($i = 0; $i <= count($array)-1; $i++){
        $reverseArray[$i] = $array[$length];
        $length--;
    }
    return $reverseArray;
}

var_dump(arrayFlip([1,2,3,8,4,6,7]));

//Exercice 9 : Ecrire une fonction encryptSentence(string $sentence, int $salt) qui crypte une phrase $sentence
// pour la rendre incompréhensible en décallant chaque lettre de l'alphabet d'un nombre $salt et en inversant l'ordre de toutes les lettres.
// ex : encrypteSentence('le chat', 2) retourne 'vcje gn'
//
// Ecrire une fonction decryptSentence permettant de déchiffrer un code envoyé à condition de connaitre le sel de cryptage $salt.
// ex : decryptSentence('vcje gn') retourne 'le chat'.
//
// Pour les plus courageux, écrire une fonction hackSentence, permettant de déchiffrer le message codé sans connaitre le sel.

function encryptSentence(string $sentence, int $salt){
    $encryptSentence = '';
    for($i = 0; $i < strlen($sentence); $i++){
        $encryptSentence[$i] = chr(ord($sentence[$i]) + $salt);
    }
    $reverseSentence = '';
    $length = strlen($sentence)-1;
    for($i = 0; $i <= strlen($sentence)-1; $i++){
        $reverseSentence .= $encryptSentence[$length];
        $length--;
    }
    return $reverseSentence;
}

echo(encryptSentence('Le chat', 2));
echo(encryptSentence('Ceci est une phrase de test', 7));
echo('<br>');

function decryptSentence(string $sentence, int $salt){
    $reverseSentence = '';
    $length = strlen($sentence)-1;
    for($i = 0; $i <= strlen($sentence)-1; $i++){
        $reverseSentence .= $sentence[$length];
        $length--;
    }
    $decryptSentence = '';
    for($i = 0; $i < strlen($sentence); $i++){
        $decryptSentence[$i] = chr(ord($reverseSentence[$i]) - $salt);
    }
    return $decryptSentence;
}

echo(decryptSentence('vcje"gN', 2));
echo(decryptSentence("{zl{'lk'lzhyow'lu|'{zl'pjlJ", 7));
echo('<br><br>');

// Exercice 3 : En mathématiques, la suite de Fibonacci est une suite de nombres entiers dont chaque terme
// successif représente la somme des deux termes précédents, et qui commence par 0 puis 1.
// Ainsi, les dix premiers termes qui la composent sont 0, 1, 1, 2, 3, 5, 8, 13, 21 et 34, etc.
// Ecrire un script permmetant d'afficher les n premiers rangs de la suite de Fibonaci.

function fibonacci($n){
    $suite = [0,1];
    $a = 0;
    $b = 1;
    for($i = 2; $i < $n; $i++){
        $suite[$i] = $suite[$a] + $suite[$b];
        $a++;
        $b++;
    }
    return $suite;
}

var_dump(fibonacci(10));