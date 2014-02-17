<?php

if(!defined('TYPO3_MODE')){
    die('Access denied.');
}

$TCA['tx_t3crrcontentelements_sponsorfeature_item'] = array(
    'ctrl' => $TCA['tx_t3crrcontentelements_sponsorfeature_item']['ctrl'],
    'interface' => array(
        'showRecordFieldList' => '
            hidden,
            type,
            color,
            title,
            link,
            image,
        ',
    ),
    'types' => array(
        '1' => array('showitem' => '
            hidden;;1,
            type,
            color,
            title,
            link,
            image,
        '),
        '2' => array('showitem' => '
            hidden;;1,
            type,
            title,
            link,
            image,
        '),
        '3' => array('showitem' => '
            hidden;;1,
            type,
            title,
            link,
            image,
        '),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'type' => array(
            'config' => array(
                'default' => 1,
                'items' => array(
                    array('LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:sponsors.premium',1),
                    array('LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:sponsors.value',2),
                    array('LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:sponsors.media',3),
                ),
                'maxitems' => 1,
                'size' => 1,
                'type' => 'select',
                'exclude' => 1

            ),
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_sponsorfeature_item.type',
        ),
        'color' => array(
            'label' => 'Farbe',
            'exclude' => 1,
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array(
                        'white',
                        'white'
                    ),
                    array(
                        'grey',
                        'grey'
                    ),
                    array(
                        'black',
                        'black'
                    ),
                    array(
                        'blue',
                        'blue'
                    ),
               ),
            'default' => 'white'
            )
        ),
        'title' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_sponsorfeature_item.title',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim,required'
            ),
        ),
        'image' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_sponsorfeature_item.image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', array(
                'appearance' => array(
                    'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference',
                ),
                'minitems' => 0,
                'maxitems' => 1,
            ), 
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']),
        ),
        'link' => array(
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_sponsorfeature_item.link',
            'config' => array(
                'type' => 'input',
                'max' => 256,
                'size' => 50,
                'softref' => 'typolink',
                'wizards' => array(
                    'link' => array(
                        'type' => 'popup',
                        'icon' => 'link_popup.gif',
                        'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
                        'script' => 'browse_links.php?mode=wizard',
                        'title' => 'LLL:EXT:cms/locallang_ttc.xml:header_link_formlabel',
                    ),
                    '_PADDING' => 2,
                ),
            ),
        ),
    ),
);