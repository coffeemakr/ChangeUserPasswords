<?php
/**
 * Hooks for ChangeUserPasswords extension
 *
 * @file
 * @ingroup Extensions
 */

class ChangeUserPasswordsHooks {

	public static function addToAdminLinks( ALTree &$adminLinksTree ) {
		$generalSection = $adminLinksTree->getSection( wfMessage( 'adminlinks_general' )->text() );
		$extensionsRow = $generalSection->getRow( 'extensions' );

		if ( is_null( $extensionsRow ) ) {
			$extensionsRow = new ALRow( 'extensions' );
			$generalSection->addRow( $extensionsRow );
		}

		$extensionsRow->addItem( ALItem::newFromSpecialPage( 'ChangeUserPasswords' ) );
	}

}
