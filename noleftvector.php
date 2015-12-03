<?php
/**
 * Vector skin for MediaWiki with removed left panel
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @ingroup Skins
 */

if (!defined('MEDIAWIKI'))
	die(-1);

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 * @todo document
 * @ingroup Skins
 */
class SkinNoLeftVector extends SkinVector
{
	function initPage(OutputPage $out)
	{
		parent::initPage($out);
		$this->skinname  = 'noleftvector';
		$this->stylename = 'noleftvector';
		$this->template  = 'NoLeftVectorTemplate';
	}

	function setupSkinUserCss(OutputPage $out)
	{
		parent::setupSkinUserCss($out);
		$out->addModuleStyles(array(
			'skins.noleftvector'
		));
	}
}

class NoLeftVectorTemplate extends VectorTemplate
{
	function makeSearchInput($attrs = array())
	{
		return parent::makeSearchInput($attrs) . '<input type="hidden" name="useskin" value="noleftvector" />';
	}
	protected function renderPortals($portals)
	{
	}
}
