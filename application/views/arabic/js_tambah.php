<script>
	
  // alert(1);
  const myBaseURL = '<?php echo base_url(); ?>';

  //-----------------------------------------------------------
  //-------- Membuat/Meremove Textarea ke CKEditor
  //-----------------------------------------------------------

  //Convert Textarea (by 'id') into CKEditor

  CKEDITOR.replace( 'pageContent', {
    height: '400px',
    filebrowserUploadUrl: myBaseURL + 'artikel/ck_upload',
    filebrowserBrowseUrl: myBaseURL + 'artikel/ck_browse',
    bodyId: 'post_pageContent',
    entities: false,
    uiColor: '#fafafa', 
    // forcePasteAsPlainText : true,
    toolbar: [
      '/',
      { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
      { name: 'tools', items: [ 'Maximize' ] },
      { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Strike', '-' ] },
      { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
      { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: ['Undo', 'Redo' ] },
      { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
      { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'SpecialChar' ] },
      { name: 'styles', items: [ 'Styles', 'Format' ] }
      
    ]
	});

	function createeditor(content){
    if ( editor ) return;
    editor = CKEDITOR.appendTo( 'wrap_editor', 
    {
      bodyId: 'post_content',
      entities: false,
      uiColor: '#fafafa', 
      height: '800px',
      toolbar: [
        '/',
        { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
        { name: 'tools', items: [ 'Maximize' ] },
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Strike', '-' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
        { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: ['Undo', 'Redo' ] },
        { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
        { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'SpecialChar' ] },
        { name: 'styles', items: [ 'Styles', 'Format' ] }
        
      ]
    
    }, content );
  };

  function removeeditor() {
    if ( !editor )
      return;

    // Destroy the editor.
    editor.destroy();
    editor = null;
  };

</script>