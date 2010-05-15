<?php
class IsvHelper extends AppHelper {

    function swapUrls($content) {
		$content = str_replace(array('href="', 'src="'), array('href="' . $this->webroot, 'src="' . $this->webroot), $content);
        return $this->output($content);
    }
}
?>