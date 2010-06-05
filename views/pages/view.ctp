<?php 
	$this->set('title_for_layout', $page['Page']['title']);
	$this->set('description_for_layout', $page['Page']['meta_description']);
	$this->set('keywords_for_layout', $page['Page']['meta_keywords']);
	if (!empty($page['Page']['sidebar_contents'])) $this->set('sidebar', $page['Page']['sidebar_contents']);
	echo $this->Isv->swapUrls($page['Page']['contents']); 
?>