/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	config.filebrowserBrowseUrl = '../assets/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
   	config.filebrowserImageBrowseUrl = '../assets/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
   	config.filebrowserFlashBrowseUrl = '../assets/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
   	config.filebrowserUploadUrl = '../assets/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
   	config.filebrowserImageUploadUrl = '../assets/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
   	config.filebrowserFlashUploadUrl = '../assets/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';
   	
	config.toolbarGroups = [
		{ name: 'document', groups: [ 'doctools', 'document', 'mode' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		'/',
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	config.removeButtons = 'Underline,Subscript,Superscript,Save,NewPage,Preview,Print,Templates,Flash,HorizontalRule,Smiley,Find,Replace,SelectAll,Form,Radio,TextField,Textarea,Button,ImageButton,HiddenField,Checkbox,ShowBlocks,EasyImageUpload';
};
