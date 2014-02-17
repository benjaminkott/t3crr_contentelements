<?php

if(!defined('TYPO3_MODE')){
    die('Access denied.');
}


/**
 * Default TsConfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:'.$_EXTKEY.'/Configuration/PageTS/modWizards.ts">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:'.$_EXTKEY.'/Configuration/PageTS/TCAdefaults.ts">');


/**
 * Default Constants
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY,
    'constants',trim('
        plugin.t3crr_contentelements {
            view {
                templateRootPath = EXT:t3crr_contentelements/Resources/Private/Templates/
                partialRootPath = EXT:t3crr_contentelements/Resources/Private/Partials/
                layoutRootPath = EXT:t3crr_contentelements/Resources/Private/Layouts/
            }
        }
    ')
);


/**
 * FluidTemplate
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY,
    'setup',trim('
        tt_content.t3crr_fluidtemplate = COA
        tt_content.t3crr_fluidtemplate {
            10 = FLUIDTEMPLATE
            10 {
                file.stdWrap.cObject = TEXT
                file.stdWrap.cObject.field = bodytext
                file.stdWrap.cObject.ifEmpty {
                    cObject = TEXT
                    cObject.value = {$plugin.t3crr_contentelements.view.templateRootPath}FluidTemplate.html
                    cObject.insertData = 1
                }
            }
        },
    '),
    43
);


/**
 * ImageTextLeft
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY,
    'setup',trim('
        tt_content.t3crr_imagetextleft = COA
        tt_content.t3crr_imagetextleft {
            10 = FLUIDTEMPLATE
            10 {
                file = {$plugin.t3crr_contentelements.view.templateRootPath}ImageTextLeft.html
                partialRootPath = {$plugin.t3crr_contentelements.view.partialRootPath}
                layoutRootPath = {$plugin.t3crr_contentelements.view.layoutRootPath}
            }
        },
    '),
    43
);


/**
 * Gallery
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY,
    'setup',trim('
        tt_content.t3crr_gallery = COA
        tt_content.t3crr_gallery {
            10 = FLUIDTEMPLATE
            10 {
                file = {$plugin.t3crr_contentelements.view.templateRootPath}Gallery.html
                partialRootPath = {$plugin.t3crr_contentelements.view.partialRootPath}
                layoutRootPath = {$plugin.t3crr_contentelements.view.layoutRootPath}
            }
        },
    '),
    43
);


/**
 * Team
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY,
    'setup',trim('
        tt_content.t3crr_team = COA
        tt_content.t3crr_team {
            10 = FLUIDTEMPLATE
            10 {
                file = {$plugin.t3crr_contentelements.view.templateRootPath}Team.html
                partialRootPath = {$plugin.t3crr_contentelements.view.partialRootPath}
                layoutRootPath = {$plugin.t3crr_contentelements.view.layoutRootPath}
            }
        },
    '),
    43
);


/**
 * Teaser
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY,
    'setup',trim('
        tt_content.t3crr_teaser = COA
        tt_content.t3crr_teaser {
            10 = FLUIDTEMPLATE
            10 {
                file = {$plugin.t3crr_contentelements.view.templateRootPath}Teaser.html
                partialRootPath = {$plugin.t3crr_contentelements.view.partialRootPath}
                layoutRootPath = {$plugin.t3crr_contentelements.view.layoutRootPath}
            }
        },
    '),
    43
);


/**
 * Sponsors
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY,
    'setup',trim('
        tt_content.t3crr_sponsorfeature = COA
        tt_content.t3crr_sponsorfeature {
            10 = FLUIDTEMPLATE
            10 {
                file = {$plugin.t3crr_contentelements.view.templateRootPath}SponsorFeature.html
                partialRootPath = {$plugin.t3crr_contentelements.view.partialRootPath}
                layoutRootPath = {$plugin.t3crr_contentelements.view.layoutRootPath}
            }
        },
    '),
    43
);