public function extraheadTail($lastValue , $headselected, $tailselected){

    $selectedhead = explode(",", $headselected);
    $selectedtail = explode(",", $tailselected);
    
    $headResult   = in_array($lastValue[0], $selectedhead);
    $tailResult   = in_array($lastValue[1], $selectedtail);
    
    if ($headResult && $tailResult) {
        echo "Both head and tail win";
    } elseif ($headResult) {
        echo "Only head wins. Tail lost";
    } elseif ($tailResult) {
        echo "Only tail wins. Head lost";
    } else {
        echo "Both head and tail lost";
    }

    }