<?php 
    $req2 = $bdd->query('SELECT CONCAT(modele) FROM modele'); 
    $data = array(); 
    $data = $req2->fetchAll(PDO::FETCH_COLUMN,0); 
?>
<script language="javascript"> 
    <?php 
        $js_array = json_encode($data); 
        echo "var liste = ". $js_array . ";\n"; 
    ?> 
    $('#recherche').autocomplete({ 
        source : liste, 
        minLength : 1
    }); 
</script> 