<?php

$carMake = isset($_GET['make']) ? $_GET['make'] : '';

$carModels = array();
if ($carMake == 'toyota') {
    $carModels = array('Camry', 'Corolla', 'Rav4');
} elseif ($carMake == 'honda') {
    $carModels = array('Civic', 'Accord', 'CR-V');
}

header('Content-Type: application/json');
echo json_encode($carModels);
?>
