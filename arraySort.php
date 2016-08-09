<?php
	$sort=array(
		'direction'=>'SORT_ASC',
		'field'=>'time',
	);
	$arrSort=array();
	foreach($sealData as $uniqid=>$rows){
		foreach($rows as $a=>$b){
			$arrSort[$a][$uniqid]=$b;
		}
	}

	if($sort['direction']){
		array_multisort($arrSort[$sort['field']],constant($sort['direction']),$sealData);
	}
