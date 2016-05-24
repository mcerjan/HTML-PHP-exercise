<?php

include 'data.php';

function ispis_tablice($polje) {
    echo '<table border=1>'
    . '<tr bgcolor="#eee">
        <th>Rbr.</th>
        <th>Prezime</th>
        <th>Ime</th>
        <th>Datum prijave</th>
        <th>Placeno</th>
        </tr>';

    foreach ($polje as $key => $value) 
    {
    
        echo '
                <tr>
                    <td>' . $key . '.</td>
                    <td>' . $value["prezime"] . '</td>
                    <td>' . $value["ime"] . '</td>
                    <td>' . date_trans($value["datum"]) . '</td>
                    <td>
                    <select name="placeno">';
        if ($value['placeno'] == "Ne") {
            echo' <option value="N" selected>Ne</option>';
            echo ' <option value="D">Da</option>';
        } else {
            echo' <option value="D" selected>Da</option>';
            echo' <option value="N" >Ne</option>';
        }
        echo'</select>
            
            </td>
                </tr>';
    }
    echo'</table><br/>';
}

#date_trans();
ispis_tablice($data);
 
function date_trans($datum) 
{
     
$datum_polja = explode("-", $datum);
$novi_datum = $datum_polja[2].".".$datum_polja[1].".".$datum_polja[0].'.';
return $novi_datum;
}
