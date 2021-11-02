<?php
print '<h1> Estoque da loja </h1>';

print '<h2>Sandálias</h2>';
    foreach ($sandalia as $k=>$t)
    {

        switch($k){

            case 'quantidade':
                echo 'Quantidades: '. $t. '<br>'; 
            break;

            case 'preco':
                echo 'Preço: '. $t. '<br>'; 
            break;

            case 'tamanho':
                print 'Tamanhos: ';
                print '<ul>';
                foreach($t as $ta){
                       echo  '<li>'. $ta. '</li>'; 
                }
                print '</ul>';
            break;
        }

    }
?> 
<hr>
<?php

    foreach ($tenis as $k=>$t)
    {
        switch($k){
            
            case 'quantidade':
                   echo 'Quantidades: '. $t. '<br>'; 
            break;

            case 'preco':
                echo 'Preço: '. $t. '<br>';
            break;
            
            case 'tamanho': 
                print 'Tamanhos: ';
                print '<ul>';
                foreach($t as $ta){
                    echo '<li>'. $ta. '</li>';
                }
                print '</ul>';
            break;
        }
    }
?> 
<hr>
<?php
    foreach ($chinelo as $k=>$t)
    {
        switch($k){
            
            case 'quantidade':
                   echo 'Quantidades: '. $t.'<br>';
            break; 

            case 'preco':
                echo 'Preço: ' . $t.'<br>';    
            break;

            case 'tamanho':
                print 'Tamanhos: ';
                print '<ul>';
                foreach($t as $ta){
                    echo '<li>'. $ta. '</li>';
                }
                print '</ul>';
            break;
        }
    }
?>