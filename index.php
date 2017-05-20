<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WordPaster For tinymce-3.5.10</title>
    <link type="text/css" rel="Stylesheet" href="WordPaster/css/WordPaster.css"/>
    <link type="text/css" rel="Stylesheet" href="WordPaster/js/skygqbox.css" />
    <script type="text/javascript" src="WordPaster/js/json2.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="WordPaster/js/jquery-1.4.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="WordPaster/js/w.edge.js" charset="utf-8"></script>
    <script type="text/javascript" src="WordPaster/js/w.app.js" charset="utf-8"></script>
    <script type="text/javascript" src="WordPaster/js/w.file.js" charset="utf-8"></script>
	<script type="text/javascript" src="WordPaster/js/WordPaster.js" charset="utf-8"></script>
    <script type="text/javascript" src="WordPaster/js/skygqbox.js" charset="utf-8"></script>
	<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
</head>
<body>
	<div style=" font-size:medium; line-height:130%;">
		<p>演示方法：</p>
		<ul style="list-style-type:decimal;">
			<li>打开Word文档，复制多张图片，然后在编辑器中按 Ctrl+V 粘贴，编辑器将自动上传所有图片。</li>
			<li>复制电脑中任意图片文件，然后点击编辑器中的图片粘贴按钮。</li>
			<li>通过QQ或其它软件截屏，复制图片，然后点击编辑器中的图片粘贴按钮。</li>
		</ul>
		<p>相关问题：</p>
		<ul style="list-style-type:decimal;">
			<li>下载exe安装包手动安装后可支持IE/Firefox/Chrome。<a target="_blank" href="http://yunpan.cn/QX4tdHFfHbmV5">exe安装包</a></li>
			<li>如果无法安装控件请下载进行安装<a target="_blank" href="http://www.microsoft.com/downloads/details.aspx?FamilyID=9b2da534-3e03-4391-8a4d-074b9f2bc1bf%20">Microsoft Visual C++ 2008 Redistributable Package (x86)</a></li>
			<li>如果有任何问题或建议请向我们<a target="_blank" href="http://www.ncmem.com/blog/guestbook.asp">反馈</a></li>
        	<li><a target="_blank" href="http://www.ncmem.com/webplug/wordpaster/index.asp">产品介绍</a></li>
		</ul>
		<textarea>WordPaster与tinymce 3.x整合示例。</textarea>
	</div>
	<!--创建FCKEditor控件-->
	<script language="javascript" type="text/javascript">
        var pasterMgr = new WordPasterManager();
		pasterMgr.Fields["UserName"] = "test";
		pasterMgr.Config["PostUrl"] = "http://localhost:81/WordPaster2/WordPasterTinyMCE3x/upload.php";
		pasterMgr.Config["Cookie"] = 'PHPSESSID=<?php echo session_id() ?>';
		//pasterMgr.Config["PostUrl"] = "http://www.ncmem.com/products/upload_ori.aspx";
		pasterMgr.Load();//加载控件

		//		tinymce.init({ plugins:'wordpaster',selector: 'textarea' });
tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "wordpaster,netpaster,autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,wordpaster,netpaster,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
	});

	pasterMgr.SetEditor(tinymce.activeEditor);

	</script>
</body>
</html>