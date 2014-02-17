<?php

if(!defined('TYPO3_MODE')){
    die('Access denied.');
}


/**
 * FluidTemplate
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:t3crr_fluidtemplate','t3crr_fluidtemplate'),'CType');
$TCA['tt_content']['types']['t3crr_fluidtemplate']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header;LLL:EXT:cms/locallang_ttc.xml:header.ALT.html_formlabel,
    bodytext;FluidTemplate,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";


/**
 * ImageTextLeft
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:t3crr_imagetextleft','t3crr_imagetextleft'),'CType');
$TCA['tt_content']['types']['t3crr_imagetextleft']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header;LLL:EXT:cms/locallang_ttc.xml:header.ALT.html_formlabel,
    bodytext;Text;;richtext:rte_transform[flag=rte_enabled|mode=ts_css], rte_enabled;LLL:EXT:cms/locallang_ttc.xml:rte_enabled_formlabel,
    image,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";


/**
 * Gallery
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:t3crr_gallery','t3crr_gallery'),'CType');
$TCA['tt_content']['types']['t3crr_gallery']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header,
    image,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";


/**
 * Team
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:t3crr_team','t3crr_team'),'CType');
$team_columns = array(
    'tx_t3crrcontentelements_team_item' => array(
        'label' => 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_team_item',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_t3crrcontentelements_team_item',
            'foreign_field' => 'content_element',
            'appearance' => array(
                'collapseAll' => 1,
                'expandSingle' => 1,
                'levelLinksPosition' => 'bottom'
            ),
        ),
    ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$team_columns);
unset($team_columns);
$TCA['tx_t3crrcontentelements_team_item'] = array(
    'ctrl' => array(
        'title'	=> 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_team_item',
        'rootLevel' => 1,
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'sortby' => 'sorting',
        'hideTable' => TRUE,
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/TeamItem.php',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ),
);
$TCA['tt_content']['types']['t3crr_team']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header;LLL:EXT:cms/locallang_ttc.xml:header.ALT.html_formlabel,
    tx_t3crrcontentelements_team_item,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";


/**
 * Teaser
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:t3crr_teaser','t3crr_teaser'),'CType');
$teaser_columns = array(
    'tx_t3crrcontentelements_teaser_item' => array(
        'label' => 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_teaser_item',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_t3crrcontentelements_teaser_item',
            'foreign_field' => 'content_element',
            'appearance' => array(
                'collapseAll' => 1,
                'expandSingle' => 1,
                'levelLinksPosition' => 'bottom'
            ),
        ),
    ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$teaser_columns);
unset($teaser_columns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3crrcontentelements_teaser_item','EXT:'.$_EXTKEY.'/Resources/Private/Language/CshTeaser.xml');
$TCA['tx_t3crrcontentelements_teaser_item'] = array(
    'ctrl' => array(
        'title'	=> 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_teaser_item',
        'rootLevel' => 1,
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'sortby' => 'sorting',
        'hideTable' => TRUE,
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/TeaserItem.php',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ),
);
$TCA['tt_content']['types']['t3crr_teaser']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header;LLL:EXT:cms/locallang_ttc.xml:header.ALT.html_formlabel,
    tx_t3crrcontentelements_teaser_item,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";


/**
 * Sponsors
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:t3crr_sponsorfeature','t3crr_sponsorfeature'),'CType');
$sponsors_column = array(
    'tx_t3crrcontentelements_sponsorfeature_item' => array(
        'label' => 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:sponsors.premium',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_t3crrcontentelements_sponsorfeature_item',
            'foreign_field' => 'content_element',
            'appearance' => array(
                'useSortable' => 1,
                'collapseAll' => 1,
                'expandSingle' => 1,
                'levelLinksPosition' => 'bottom'
            ),
        ),
    ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$sponsors_column);
unset($sponsors_column);
$TCA['tx_t3crrcontentelements_sponsorfeature_item'] = array(
    'ctrl' => array(
        'title'	=> 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_sponsorfeature_item',
        'rootLevel' => 1,
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'sortby' => 'sorting',
        'hideTable' => TRUE,
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicons' => array(
            '1' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/sponsor_premium.gif',
            '2' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/sponsor_value.gif',
            '3' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/sponsor_media.gif',
        ),
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/SponsorFeatureItem.php',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ),
);
$TCA['tt_content']['types']['t3crr_sponsorfeature']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header;LLL:EXT:cms/locallang_ttc.xml:header.ALT.html_formlabel,
    header_link;LLL:EXT:".$_EXTKEY."/Resources/Private/Language/Language.xml:t3crr_sponsorfeature.link,
    tx_t3crrcontentelements_sponsorfeature_item,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";