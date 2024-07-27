<?php
use MediaWiki\ResourceLoader\WikiModule;

/**
 * Custom ResourceLoader module that loads a Geshi.css per-wiki.
 */
class HighlightGeSHilocal extends WikiModule {
	/**
	 * @param $context ResourceLoaderContext
	 * @return array
	 */
	protected function getPages(MediaWiki\ResourceLoader\Context $context) {
		return array(
			'MediaWiki:Geshi.css'      => array( 'type' => 'style' ),
		);
	}
}
