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
}