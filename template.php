<?php

function phptemplate_comment_wrapper($content, $node) {
  if (!$content || $node->type == 'forum') {
    return '<div id="comments">'. $content .'</div>';
  }
  else {
    return '<div id="comments"><h2 class="commentsarea">'. t('Comments') .'</h2>'. $content .'</div>';
  }
}

function getSidebarInfo($mission, $search_box, $left, $right, $big_right){
	if($search_box){
		return ' search_box ';
	}
	
	if(!$left && !$right && $big_right){
		return ' bigBlockOnly ';
	}
	
	if(($left && $right) && !$big_right){
		return ' smallBlocksOnly ';
	}
	
	if(($left || $right) && $big_right){
		return ' bigAndSmall ';
	}
	
	if(((!$left && $right) || ($left && !$right) ) && !$big_right){
		return ' onlyOneSmall ';
	}
}
