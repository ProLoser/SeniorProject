<?php
class IsvHelper extends AppHelper {

    function swapUrls($content) {
		/*$pattern = '/(\w+) (\d+), (\d+)/i';
		$replacement = '${1}1,$3';
		preg_replace($pattern, $replacement, $content);*/

		//$content = str_replace(array('href="', 'src="'), array('href="' . $this->webroot, 'src="' . $this->webroot), $content);
		
		/*$pattern = array('/(href=")(?!http)/', '/(src=")(?!http)/');
		$replace = array('href="/', 'src="/');
		$content = preg_replace($pattern, $replace, $content);*/
		
		$pattern = '@((?:href|src)=["\'])(?!http://)/?@i';
		$content = preg_replace($pattern, '$1'.$this->webroot,$content);

        return $this->output($content);
    }
}
?>