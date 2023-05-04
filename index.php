<?php
include 'splAutoloader.php';
$truck1 = new Truck('Suzuki', 250, 6, 5, 250);
$automobile1 = new Automobile('BMW', 450, 4, 'X6', 2020);
$bus1 = new Bus('Mersedez', 260, 4, 46);
$transportPark = new TransportPark([]);
$transportPark->addVehicle($truck1);
$transportPark->addVehicle($automobile1);
$transportPark->addVehicle($bus1);

foreach ($transportPark->getListVehicle() as $item)
{
    echo 'Модель: '. $item->getModel() . '<br>';
    echo 'Максимальная скорость: '. $item->getMaxSpeed() . '<br>';
    echo 'Количество колес: '. $item->getQuantityWheels() . '<br>';
    echo '------------------------<br>';
}

$transportPark->removeVehicle('Suzuki');

foreach ($transportPark->getListVehicle() as $item)
{
    echo 'Модель: '. $item->getModel() . '<br>';
    echo 'Максимальная скорость: '. $item->getMaxSpeed() . '<br>';
    echo 'Количество колес: '. $item->getQuantityWheels() . '<br>';
    echo '------------------------<br>';
}
