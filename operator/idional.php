<?php
$member = "tidak";
$totalBelanja = 50000;
$disc = 0;
$totalharga = 0;
 
if ($member == "iya") {
    if ($totalBelanja >= 25000) {
        $disc = 0.1 * $totalBelanja;
    }
}else {
    if ($totalBelanja >= 10000) {
        $disc = 0.025 * $totalBelanja;
    }
} 
$totalharga = $totalBelanja . $disc;
echo "kartu member : $member<b>";
echo
echo "diskon : $disc<br>";
echo "total yang harus dibayar : $totalharga<br>";
?>















}
}
    }
}
    }
}