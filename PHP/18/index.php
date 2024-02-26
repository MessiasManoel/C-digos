<?php
    $number1 = array(100, 101, 102);
    $number1[] = 103;
    $number2[] = 104;

    print_r ($number1);
    echo '<br/>';
    print_r ($number2);
    echo '<br/>';

    $cert = array('EAD' => 'você terá um certificado', 'PHP' => 'Linux');
    
    $cert['PHP'] = 'Zend';
    print_r($cert);
?>