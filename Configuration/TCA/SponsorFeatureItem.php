<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$TCA['tx_t3crrcontentelements_sponsorfeature_item'] = array(
    'ctrl' => $TCA['tx_t3crrcontentelements_sponsorfeature_item']['ctrl'],
    'interface' => array(
        'showRecordFieldList' => '
            hidden,
            content_element,
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
            content_element,
            type,
            color,
            title,
            link,
            image,
        '),
        '2' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            link,
            image,
        '),
        '3' => array('showitem' => '
            hidden;;1,
            content_element,
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
        'content_element' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_sponsorfeature_item.content_element',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="t3crr_sponsorfeature"',
                'maxitems' => 1,
            ),
        ),
        'type' => array(
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 1,
                'items' => array(
                    array('LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:sponsors.premium',1),
                    array('LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:sponsors.value',2),
                    array('LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:sponsors.media',3),
                ),
                'maxitems' => 1,
                'size' => 1,
                'exclude' => 1

            ),
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_sponsorfeature_item.type',
        ),
        'color' => array(
            'label' => 'Farbe',
            'exclude' => 1,
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
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
                    array(
                        'green',
                        'green'
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
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                array(
                'appearance' => array(
                    'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference',
                ),
                'minitems' => 0,
                'maxitems' => 1,
                ),
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
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
                        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                        'module' => array(
                            'name' => 'wizard_link',
                        ),
                        'JSopenParams' => 'width=800,height=600,status=0,menubar=0,scrollbars=1'
                    ),
                ),
            ),
        ),
    ),
);
