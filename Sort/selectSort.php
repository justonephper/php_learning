//选择排序
方法描述：首先创建一个空数组，然后从数组中取出最小的数据，依次放入新数组，直到旧数组数据被全部取出

function findMin($arr)
{
    $len = count($arr);
    if($len <= 1){
        return 0;
    }
    $min = 0;
    for($i = 0; $i < $len; $i++){
        if($arr[$min] > $arr[$i]){
            $min = $i;
        }
    }
    return $min;
}

function selectSort($arr)
{
    $len = count($arr);
    $new_arr = [];
    for($i = 0; $i < $len; $i++){
        $key = findMin($arr);
        $new_arr[] = $arr[$key];
        unset($arr[$key]);
        $arr = array_merge($arr, array());
    }
    return $new_arr;
}

$arr = [2, 3, 6, 5, 4, 1, 9, 7, 8];
print_r(selectSort($arr));

//output
1,2,3,4,5,6,7,8,9

