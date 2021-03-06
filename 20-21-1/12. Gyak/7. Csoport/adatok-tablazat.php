<?php 

$diakok = [
    [
        'nev' => 'Danka Dénes Ausztrália',
        'ora' => 45,
        'feladatkor' => 'általános ügyek',
        'besorolas' => 'adminisztratív'
    ],
    [
        'nev' => 'Broncó Lajos Palindrom',
        'ora' => 30,
        'feladatkor' => 'logisztikai feladatok',
        'besorolas' => 'operatív'
    ],
    [
        'nev' => 'Gereblyés Vilmos Agathachristie',
        'ora' => 35,
        'feladatkor' => 'általános ügyek',
        'besorolas' => 'adminisztratív'
    ],
    [
        'nev' => 'Agancsos Milán',
        'ora' => 25,
        'feladatkor' => 'vidékfejlesztés',
        'besorolas' => 'operatív'
    ],
    [
        'nev' => 'Ingecelős Orella',
        'ora' => 40,
        'feladatkor' => 'általános ügyek',
        'besorolas' => 'adminisztratív'
    ],
    [
        'nev' => 'Szuncsernyák Iván Mordekaiser',
        'ora' => 35,
        'feladatkor' => 'vidékfejlesztés',
        'besorolas' => 'operatív'
    ],
    [
        'nev' => 'Hentes Gabriella',
        'ora' => 30,
        'feladatkor' => 'fordítás',
        'besorolas' => 'adminisztratív'
    ],
    [
        'nev' => 'Foltos Zalán',
        'ora' => 35,
        'feladatkor' => 'logisztikai feladatok',
        'besorolas' => 'operatív'
    ],
    [
        'nev' => 'Felegés Erika',
        'ora' => 60,
        'feladatkor' => 'ügyfélregisztráció',
        'besorolas' => 'adminisztratív'
    ]
];

?>

<table>
    <?php foreach($diakok as $diak): ?>
        <tr>
            <td><?=$diak['nev']?></td>
            <td><?=$diak['ora']?></td>
            <td><?=$diak['feladatkor']?></td>
            <td><?=$diak['besorolas']?></td>
        </tr>
    <?php endforeach ?>
</table>