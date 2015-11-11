<?php
namespace T3CRR\T3crrContentelements\ViewHelpers;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Benjamin Kott <info@bk2k.info>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * @author Benjamin Kott <info@bk2k.info>
 */
class DataRelationViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * @param integer $uid
     * @param string $table
     * @param string $foreignField
     * @param string $selectFields
     * @param string $as
     * @param string $sortby
     * @param string $additionalWhere
     *
     * @return string
     */
    public function render($uid, $table, $foreignField = "content_element", $selectFields = "*", $as = "items", $sortby = "sorting ASC", $additionalWhere = "")
    {

        if ($uid && $table && $foreignField) {
            $selectFields = $selectFields;
            $fromTable    = $table;
            $whereClause  = '1 AND `'.$foreignField.'` = \''.$uid.'\' AND deleted = 0 AND hidden = 0 '.$additionalWhere;
            $groupBy      = '';
            $orderBy      = $sortby;
            $limit        = '';
            $GLOBALS['TYPO3_DB']->store_lastBuiltQuery = 1;
            $items = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows($selectFields, $fromTable, $whereClause, $groupBy, $orderBy, $limit);
        } else {
            $items = null;
        }

        $this->templateVariableContainer->add($as, $items);
        $content = $this->renderChildren();
        $this->templateVariableContainer->remove($as);

        return $content;

    }
}
