<?php
$nilai = 90;
switch ($nilai)
{
    case 90:
    case 100:
    echo "tidak remidi";
    break;
    case 80:
    echo "remidi";
    break;

    default:
    echo "Pilihan bukan 80, 90, 100";
    break;
}
?>