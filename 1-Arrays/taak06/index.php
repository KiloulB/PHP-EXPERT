<?php

$provincies = [
    'provinciez' =>[
    'provincie1' => 'Noord-Holland',
    'provincie2' => 'Utrecht'
],
[
    'hoofdstad' =>[
    'hoofstad1' => 'Haarlem',
    'hoofdstad2' => 'Utrecht'    
    
],
[
    'bevolking' =>[
    'bevolking1' => '2.8 miljoen',
    'bevolking2' => '352.866 duizend'
    
],
[
    'inwoners_gemeente' =>[
    'gemeente1' => 'nvt',
    'gemeente2' => 'nvt'
    ],

]
]
]
];

foreach($provincies as $provincie ){
    echo '<h2>' . $provincie["provincie1"]. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad1']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking1']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['gemeente1']. '</li>';
    echo '</ul>';

}

?>