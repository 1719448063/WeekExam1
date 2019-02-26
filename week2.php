<?php
    //第一道题
    function one($n,$m,$arr=[]){
        if ($arr==[]){
            for ($i=0;$i<$n;$i++){
                $arr[$i] = $i+1;
            }
        }
        $a = $m%$n;
        //print_r($a);
        $n--;
//print_r($arr);die;

//        array_pop($arr);
//        unset($arr[$n]);
//        return $arr;
        if ($a==1&&count($arr)>1){
            array_shift($arr);
            //array_pop($arr);
            //print_r($arr);
            //echo "c";
            return one($n,$m,$arr);
        }elseif ($a==0&&count($arr)>1){
            array_pop($arr);
            //print_r($arr);
            //echo "b";
            return one($n,$m,$arr);
        }elseif($a>1&&count($arr)>1){
            unset($arr[$a-1]);
            //print_r($arr);
            //array_pop($arr);
            //echo "a";
            return one($n,$m,$arr);
        }else{
            print_r("最后一个数字为".array_values($arr)[0]);
        }

    }
    //$one = one(3,6);
    //print_r($one);die;

    //第三道题
    function three($arr){
        $str = "";
        for($i=0;$i<count($arr);$i++){
            for ($j=$i+1;$j<count($arr);$j++){
                $a = intval($arr[$i].$arr[$j]);
                $b = intval($arr[$j].$arr[$i]);

                if ($a<$b){
                    $n = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $n;
                }
                //var_dump($arr);die;
            }
        }
        for($c=0;$c<count($arr);$c++){
            $str.=$arr[$c];
        }
        print_r($str);
    }
    $three = three([233,2,234]);
    print_r($three);