<?php
$bread = '';

if($get_datas || $get_datas['name1']){
	ksort($get_datas);
	foreach($get_datas as $key => $v){
		if     (0 === strncmp($key, 'item', 4)){$item[] = $v;}
		else if(0 === strncmp($key, 'name', 4)){$name[] = $v;}
	}

	$bread = '
<ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://www.dm110.jp/" itemprop="item"><span itemprop="name">DM発送代行センター TOP</span></a><meta itemprop="position" content="1" /></li>';

	$i=1;
	foreach($name as $v){
		++$i;
		if(isset($item[($i-2)])){
			if(0 === strncmp($item[($i-2)],'/', 1)) $item[($i-2)] = mb_substr($item[($i-2)], 1);
			$bread .= '
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="https://www.dm110.jp/'.$item[($i-2)].'" itemprop="item"><span itemprop="name">'.$v.'</span></a><meta itemprop="position" content="'.$i.'" /></li>';
		}else{
			$bread .= '
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">'.$v.'</span><meta itemprop="position" content="'.$i.'" /></li>';
		}
	}
	$bread .= '
</ul>
';
}
echo $bread;
