<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$TCA['tx_t3crrcontentelements_team_item'] = array(
    'ctrl' => $TCA['tx_t3crrcontentelements_team_item']['ctrl'],
    'interface' => array(
        'showRecordFieldList' => '
            hidden,
            content_element,
            name,
            excerpt,
            image,
            url,
            twitter,
            facebook,
            xing,
            googleplus            
        ',
    ),
    'types' => array(
        '1' => array('showitem' => '
            hidden;;1,
            content_element,
            name,
            excerpt,
            image,
            url,
            twitter,
            facebook,
            xing,
            googleplus
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
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_team_item.content_element',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="t3crr_team"',
                'maxitems' => 1,
            ),
        ),
        'name' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_team_item.name',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim,required'
            ),
        ),
        'excerpt' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_team_item.excerpt',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 3,
                'eval' => 'trim'
            ),
        ),
        'image' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_team_item.image',
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
        'url' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_team_item.url',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ),
        ),
        'facebook' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_team_item.facebook',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ),
        ),
        'twitter' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_team_item.twitter',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ),
        ),
        'xing' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_team_item.xing',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ),
        ),
        'googleplus' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:t3crr_contentelements/Resources/Private/Language/Language.xml:tx_t3crrcontentelements_team_item.googleplus',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ),
        ),
    ),
);
