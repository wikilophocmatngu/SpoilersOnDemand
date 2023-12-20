<?php
/**
 * spoilersManager SpecialPage for SOD extension
 *
 * @file
 * @ingroup Extensions
 */
class SpecialSpoilersManager extends SpecialPage {
	public function __construct() {
		parent::__construct( 'spoilersManager' );
	}

	/**
	 * Show the page to the user
	 *
	 * @param string $sub The subpage string argument (if any).
	 */
	public function execute( $sub ) {
		$out = $this->getOutput();
		$out->setPageTitle( $this->msg( 'special-spoilersManager-title' ) );
		$out->addHelpLink( 'How to become a MediaWiki hacker' );
		$out->addWikiMsg( 'special-spoilersManager-intro' );
	}

	protected function getGroupName() {
		return 'other';
	}
}
