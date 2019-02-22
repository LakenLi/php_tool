<?php

class SortAlgo{


	/**
	 * 冒泡排序算法
	 * @param  [type] $arr [description]
	 * @return [type]      [description]
	 */
	public function bubbleSort($arr)
	{
		$len = count($arr);

		for($i = 0; $i < $len; $i++){
			
			for($j = 0; $j < $len-1; $j++){
				
				if($arr[$j] > $arr[$j+1]){
					$temp = $arr[$j+1];
					$arr[$j+1] = $arr[$j];
					$arr[$j] = $temp;
				}
			}
		}

		return $arr;

	}


	/**
	 * 插入排序
	 * @param  [type] $arr [description]
	 * @return [type]      [description]
	 */
	public function insertSort($arr)
	{
		$len = count($arr);

		for($i = 1; $i < $len; $i++){
			$value = $arr[$i];
			$j = $i - 1;
			for( ; $j >= 0; $j--){
				if($arr[$j] > $value){
					$arr[$j+1] = $arr[$j];
				}else{
					break;
				}
			}


			$arr[$j+1] = $value;

		}

		return $arr;

	}

}


$sortAlgo = new SortAlgo();
$arr = [20, 10, 5, 30, 25, 50, 34, 44, 29];
var_dump(implode($sortAlgo->bubbleSort($arr), ','));

var_dump(implode($sortAlgo->insertSort($arr), ','));