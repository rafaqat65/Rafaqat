/*
$(document).ready(function () {
   var oEditor = FCKeditorAPI.GetInstance('FCKeditor_1') ;
   oEditor.ToolbarSet.Load( 'Basic' ) ;
});
*/
function abc()
{
	var oEditor = FCKeditorAPI.GetInstance('FCKeditor_1') ;
   oEditor.ToolbarSet.Load( 'MyToolbar' ) ;
   alert(oEditor);
}
