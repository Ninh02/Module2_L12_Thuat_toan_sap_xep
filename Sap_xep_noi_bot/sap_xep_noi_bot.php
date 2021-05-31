<?php
function bubbleSort($list){
    for($i=0;$i<count($list)-1;$i++){
        for($j=$i+1;$j<count($list);$j++){
            if($list[$i]>$list[$j]){
                $temp=$list[$i];
                $list[$i]=$list[$j];
                $list[$j]=$temp;
            }
        }
    }
    return $list;
}
$arr=[2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
echo "<pre>";
print_r(bubbleSort($arr));