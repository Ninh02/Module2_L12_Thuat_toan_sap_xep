<?php
function selectionSort($list){
    for($i=0;$i<count($list);$i++){
        $max=$i;
        for($j=$i+1;$j<count($list);$j++){
            if($list[$max]<$list[$j]){
                $max=$j;
            }
        }
        if($max!=$i){
            $temp=$list[$max];
            $list[$max]=$list[$i];
            $list[$i]=$temp;
        }
    }
    return $list;
}
$arr=[1, 9, 4.5, 6.6, 5.7, -4.5];
echo "<pre>";
print_r(selectionSort($arr));
