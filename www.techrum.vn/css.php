@charset "UTF-8";

/* --- EWRporta2.css --- */

.xenForm .textHeading .selectAll { float: right; }
.xenForm .categoryUnit li { display: inline-block; width: 185px; }
.xenForm .categoryUnit dd { padding-right: 0px; }

.authorUnit
{
	
}
.authorUnit .authorImage .img
{
	display: block;
float: left;
width: 150px;
height: 200px;

}
.authorUnit .secondaryContent
{
	margin-left: 160px;

}
.authorUnit .secondaryContent .name
{
	font-size: 28px;

}
.authorUnit .secondaryContent .muted
{
	margin-bottom: 15px;

}
.authorUnit .secondaryContent .controls { float: right; margin-right: 10px; }
.authorUnit .secondaryContent .avatar { float: right; }
/* clearfix */ .authorUnit { zoom: 1; } .authorUnit:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.keyIcon
{
	background-image: url('styles/default/xenforo/xenforo-ui-sprite.png');
background-repeat: no-repeat;
margin: 0 4px 0 0;
float: left;
width: 16px;
height: 16px;

}
.keyIcon.category
{
	background-position: 0px 1px;
margin-top: 3px;
width: 14px;

}
.keyIcon.comments
{
	background-position: -65px -16px;
width: 14px;

}
.keyIcon.redirect
{
	background-position: -48px -16px;
margin-top: 3px;

}
.keyIcon.sticky
{
	background-position: 0px -16px;

}
.keyIcon.views
{
	background-position: -144px -17px;
width: 18px;

}

.xenForm .date
{
	background-image: url("styles/8wayrun/calendar.png");
	background-position: right center;
	background-repeat: no-repeat;
}

.copyright { text-align: center; font-size: 11px; margin: 10px; clear: both; }

/* --- EWRporta2_ArticleList.css --- */

.articleItem
{
	
}
.articleItem .subHeading
{
	font-size: 18px;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;

}
.articleItem .metaData
{
	padding-bottom: 5px;
margin-bottom: 10px;
border-bottom: 1px dashed rgb(227, 242, 253);
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;

}
.articleItem .metaData .statData { margin-left: 10px; float: right; }
.articleItem .excerptContent
{
	
}
.articleItem .sectionFooter
{
	
}
.articleItem .sectionFooter .continue
{
	float: right;

}
.articleItem .sectionFooter .categories
{
	margin-right: 90px;
overflow: hidden;

}
.articleItem .sectionFooter .categories li
{
	display: inline-block;

}
.articleItem .subHeading { font-size: 23px; padding: 10px;}
.articleItem .sectionFooter .iconKey { margin-top: 3px; }
.articleItem .sectionFooter .continue { float: right; }
.articleItem .sectionFooter .categories { margin-right: 90px; overflow: hidden; }
.articleItem .sectionFooter .categories li { display: inline-block; }
/* clearfix */ .articleItem .primaryContent { zoom: 1; } .articleItem .primaryContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }
/* clearfix */ .articleItem .sectionFooter { zoom: 1; } .articleItem .sectionFooter:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.articleItem .dateBlock
{
	margin: 10px 10px 0px -20px;
text-align: center;
float: left;
position: relative;
z-index: 100;

}
.articleItem .dateBlock .heading
{
	padding-bottom: 5px;
margin: 0;
text-transform: uppercase;

}
.articleItem .dateBlock .secondaryContent
{
	font-weight: bold;
font-size: 24px;
padding: 5px;

}
.articleItem .dateBlock { 
	float: left; 
	//margin: 10px 10px 0px -20px; 
	margin-bottom: -74px;
	text-align: center; 
	position: relative; 
	z-index: 100; 
}
.articleItem .dateBlock .heading { 
	margin: 0; padding-bottom: 5px; text-transform: uppercase; 
	background: rgb(89, 133, 255);
	border-bottom: none;
}
.articleItem .dateBlock .secondaryContent { 
	padding: 5px; font-weight: bold; font-size: 24px;
	color: rgb(87, 87, 87); 
}
.articleItem .excerptOffset { margin-left: 34px; }
.articleItem .excerptOffset { margin-left: 32px; }
.articleItem .headerBlock a { display: block; background-size: 100%; line-height: 0; }
.articleItem .headerBlock a img { max-width: 100%; }

.articleItem .messageUserBlock
{
	margin-left: 10px;
float: right;

}
.articleItem .messageUserBlock a
{
	background-size: 100%;
display: block;
line-height: 0;

}
.articleItem .messageUserBlock a img
{
	max-width: 200px;
height: auto;

}
.ArticlesMason.articlesGrid
.articleItem .metaData { margin-bottom: 5px; padding-bottom: 5px; border-bottom: 1px dotted rgb(227, 242, 253); }
.articleItem .statData { float: right; margin-left: 10px; }

#infscr-loading
{
	margin: 5px
		-5px
		-5px;
}
.ArticlesMason.articlesGrid .articleItem
{
	display: inline-block;
vertical-align: top;
width: 50%;

}
.ArticlesMason.articlesGrid .articleItem .sectionMain
{
	margin: 5px;
}

/* Louis Tang | Hide Title Bar & Breadcrum from Home */
.breadBoxBottom, .breadBoxTop{
	display: none;
}
.titleBar{
	display: none;
}
.k_message_spliter_div{
	display: none;
}
.mainContent {
    background: none;
}

@media (max-width:800px)
{
	.Responsive .ArticlesMason.articlesGrid .articleItem
	{
		
	}
}
@media (max-width:610px)
{
	.Responsive .ArticlesMason.articlesGrid .articleItem
	{
		width: 100%;

	}
}
@media (max-width:480px)
{
	.Responsive .ArticlesMason.articlesGrid .articleItem
	{
		
	}
}

.articleControl
{
	display: none;
	font-size: 10px;
text-align: center;
position: fixed;
right: 10px;
bottom: 0;
z-index: 1000;

}
.articleControl .resume { display: none; }
.articleControl .resume .muted { margin-bottom: 5px; }

#infscr-loading
{
	background-color: rgb(255, 255, 255);
padding: 10px;
margin: 10px auto;
border: 1px solid rgb(255, 255, 255);
border-radius: 10px;
position: fixed;
right: 10px;
bottom: 0;
z-index: 1001;
text-align: center;

}


@media (max-width:480px)
{
	.Responsive .articlesGrid .articleItem .messageUserBlock
	{
		display: none; 
		float: none;
		margin-bottom: 10px;
		white-space: nowrap;
	}
}


/* --- EWRporta2_Global.css --- */

.leftContainer { float: right; margin-left: -260px; width: 100%; }
.leftContent { margin-left: 260px; }
.leftSidebar { float: left; width: 250px; }

.splitWidgets .section:first-child,
.splitWidgets .sectionMain:first-child { margin-top: 0; }

.sidebar.noFloats { float: none; width: auto !important; margin-bottom: 10px; }
.sidebar.a-leftWidgets { float: left; width: 350px; }
.sidebar.a-rightWidgets { margin-left: 360px; }
.sidebar.b-leftWidgets { float: left; width: 350px; }
.sidebar.b-rightWidgets { margin-left: 360px; }
.sidebar.footerWidgets { clear: both; }
/* clearfix */ .splitWidgets { zoom: 1; } .splitWidgets:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.copyright { text-align: center; font-size: 11px; margin: 10px; }


	@media (max-width:800px)
	{
		.Responsive .leftContainer { float: none; margin: 0 auto; }
		.Responsive .leftContent { margin-left: 0; }
	}
	@media (max-width:610px)
	{
		.Responsive .sidebar.b-leftWidgets { float: none; margin: 0 auto; }
		.Responsive .sidebar.b-rightWidgets { margin-left: 0px; }
	}


/* --- facebook.css --- */

a.fbLogin,
#loginBar a.fbLogin
{
	display: inline-block;
	width: 180px;
	height: 22px;
	box-sizing: border-box;
	cursor: pointer;
	

	background-repeat: no-repeat;
	border-radius: 3px;
	padding: 0px 0px 0px 1px;
	outline: none;
	
	text-decoration: none;
	color: white;
	font-weight: bold;
	font-size: 11px;
	line-height: 14px;
}

	.fbLogin .fa
{
	float: left;
	padding: 3px 0 0 5px;
	font-size: 15px;
	margin-right: 5px;
}
a.fbLogin:hover,
#loginBar a.fbLogin:hover
{
	text-decoration: none;
}

	a.fbLogin span
	{
		background: #5f78ab url('http://b.s-static.ak.facebook.com/images/connect_sprite.png');
		line-height: 21px;
		border-top: solid 1px #879ac0;
		border-bottom: solid 1px #1a356e;
		display: block;
		padding: 2px 4px 3px;
		margin: 1px 1px 0px 0px;
		text-shadow: none;
		white-space: nowrap;
		overflow: hidden;
	}

	a.fbLogin:active span
	{
		border-bottom: solid 1px #29447e;
		border-top: solid 1px #45619d;
		background: #4f6aa3;
		text-shadow: none;
	}

/* --- login_bar.css --- */

/** Login bar basics **/

#loginBar
{
	display: none;
	color: rgb(255, 255, 255);
background-color: rgb(45, 45, 45);
border-bottom: 1px solid rgb(88, 88, 88);
position: relative;
z-index: 1000;

}

	#loginBar .ctrlWrapper
	{
		margin: 0 10px;
	}

	#loginBar .pageContent
	{
		padding-top: 5px;
		position: relative;
		_height: 0px;
	}

	#loginBar a
	{
		color: rgb(192, 192, 192);

	}

	#loginBar form
	{
		padding: 5px 0;
margin: 0 auto;
display: none;
line-height: 20px;
position: relative;

	}
	
		#loginBar .xenForm .ctrlUnit,		
		#loginBar .xenForm .ctrlUnit > dt label
		{
			margin: 0;
			border: none;
		}
	
		#loginBar .xenForm .ctrlUnit > dd
		{
			position: relative;
		}
	
	#loginBar .lostPassword,
	#loginBar .lostPasswordLogin
	{
		font-size: 11px;
	}
	
	#loginBar .rememberPassword
	{
		font-size: 11px;
	}

	#loginBar .textCtrl
	{
		color: rgb(227, 242, 253);
background-color: rgb(50, 50, 50);
border-color: rgb(88, 88, 88);

	}
	
	#loginBar .textCtrl[type=text]
	{
		font-weight: bold;
font-size: 18px;

	}

	#loginBar .textCtrl:-webkit-autofill /* http://code.google.com/p/chromium/issues/detail?id=1334#c35 */
	{
		background: rgb(50, 50, 50) !important;
		color: rgb(227, 242, 253);
	}

	#loginBar .textCtrl:focus
	{
		background: black none;

	}
	
	#loginBar input.textCtrl.disabled
	{
		color: rgb(255, 255, 255);
background-color: rgb(45, 45, 45);
border-style: dashed;

	}
	
	#loginBar .button
	{
		min-width: 85px;
		*width: 85px;
	}
	
		#loginBar .button.primary
		{
			font-weight: bold;
		}
		
/** changes when eAuth is present **/

#loginBar form.eAuth
{
	-x-max-width: 700px; /* normal width + 170px */
}

	#loginBar form.eAuth .ctrlWrapper
	{
		border-right: 1px dotted rgb(71, 71, 71);
		margin-right: 200px;
		box-sizing: border-box;
	}

	#loginBar form.eAuth #eAuthUnit
	{
		position: absolute;
		top: 0px;
		right: 10px;
	}

		#eAuthUnit li
		{
			margin-top: 10px;
			line-height: 0;
		}
	
/** handle **/

#loginBar #loginBarHandle
{
	font-size: 15px;
color: rgb(255, 255, 255);
background-color: rgb(87, 87, 87);
padding: 10px 15px;
border-bottom-right-radius: 0px;
border-bottom-left-radius: 0px;
//margin-right: 20px;
	//bottom: -20px;
	//box-shadow: 0px 2px 5px rgb(45, 45, 45);
display: none;
box-shadow: none;
position: absolute;
right: 0px;
top: 8px;
text-align: center;
z-index: 1;
line-height: 13px;

}


@media (max-width:800px)
{
	.Responsive #loginBar form.eAuth .ctrlWrapper
	{
		border-right: none;
		margin-right: 10px;
	}

	.Responsive #loginBar form.eAuth #eAuthUnit
	{
		position: static;
		width: 180px;
		margin: 0 auto 10px;
	}
}


/* --- message_user_info.css --- */

.messageUserInfo
{
	padding-left: 5px;
//float: left;
	//width: 154px;

}

	.messageUserBlock
	{
		background-color: rgb(255, 255, 255);
border-radius: 0px;
/*border: 1px solid rgb(255, 255, 255);*/

		
		position: relative;
	}
		
		.messageUserBlock div.avatarHolder
		{
			background-color: rgb(255, 255, 255);
margin-bottom: 10px;
border-radius: 0px;

			
			position: relative;	
		}
		
			.messageUserBlock div.avatarHolder .avatar
			{
				display: block;
				font-size: 0;
				border: solid 1px #e3e3e3;
				border-radius: 50%;
			}
			
			.messageUserBlock div.avatarHolder .onlineMarker
			{
				position: absolute;
				top: 8px;
				left: 5px;
				
				border: 7px solid transparent;
border-top-color: rgb(127, 185, 0);
border-left-color: rgb(127, 185, 0);
border-top-left-radius: 0px;
border-top-right-radius: 0px;
border-bottom-left-radius: 0px;
//left: 24px;

			}
			
		.messageUserBlock h3.userText
		{
			padding: 6px;
//border-top: 1px solid rgb(245, 245, 241);
			//border-bottom: 1px solid rgb(245, 245, 241);

		}
		
		.messageUserBlock .userBanner
		{
			//display: block;
			//margin-bottom: 5px;
			//margin-left: -12px;
			//margin-right: -12px;
		}
		
		.messageUserBlock .userBanner:last-child
		{
			margin-bottom: 0;
		}
	
		.messageUserBlock a.username
		{
			font-weight: bold;
font-size: 15px;
font-family: 'Roboto Condensed', 'Helvetica Neue', sans-serif;
color: #3a3a3a;
//color: rgb(89, 133, 255);
display: block;
overflow: hidden;
line-height: 20px;

			
		}
		
		.messageUserBlock .userTitle
		{
			font-style: italic;
font-size: 12px;
color: #7f8c90;
padding-top: 2px;
padding-bottom: 3px;
display: block;

		}
		
		.messageUserBlock .extraUserInfo
		{
			font-size: 12px;
background-color: rgb(255, 255, 255);
padding: 4px 6px;
border-radius: 0px;

		}
		
			.messageUserBlock .extraUserInfo dl
			{
				margin: 2px 0 0;
			}
							
			.messageUserBlock .extraUserInfo img
			{
				max-width: 100%;
			}
		
		.messageUserBlock .arrow
		{
			position: absolute;
			top: 10px;
			right: -10px;
			
			display: block;
			width: 0px;
			height: 0px;
			line-height: 0px;
			
			border: 10px solid transparent;
			border-left-color: ;
			-moz-border-left-colors: ;
			border-right: none;
			
			/* Hide from IE6 */
			_display: none;
		}
		
			.messageUserBlock .arrow span
			{
				position: absolute;
				top: -10px;
				left: -11px;
				
				display: block;
				width: 0px;
				height: 0px;
				line-height: 0px;
				
				border: 10px solid transparent;
				border-left-color: rgb(255, 255, 255);
				-moz-border-left-colors: rgb(255, 255, 255);
				border-right: none;
			}


@media (max-width:480px)
{
	.Responsive .messageUserInfo
	{
		float: none;
		width: auto; 
	}

	.Responsive .messageUserBlock
	{
		overflow: hidden;
		margin-bottom: 5px;
		position: relative;
	}

	.Responsive .messageUserBlock div.avatarHolder
	{
		float: left;
		padding: 5px;
		width: 100%;
	}

		.Responsive .messageUserBlock div.avatarHolder .avatar img
		{
			width: 48px;
			height: 48px;
		}
		
		.Responsive .messageUserBlock div.avatarHolder .onlineMarker
		{
			top: 4px;
			left: 4px;
			border-width: 6px;
		}

	.Responsive .messageUserBlock h3.userText
	{
		/*margin-left: 64px;*/
	}
	
	.Responsive .messageUserBlock .userBanner
	{
		max-width: 150px;
		margin-left: 0;
		margin-right: 0;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
		position: static;
		display: inline-block;
	}
	
		.Responsive .messageUserBlock .userBanner span
		{
			display: none;
		}

	.Responsive .messageUserBlock .extraUserInfo
	{
		display: none;
	}

	.Responsive .messageUserBlock .arrow
	{
		display: none;
	}
}


/* --- wf_default.css --- */



.widget-container.sidebar.act-as-sidebar
{
	padding: 0;
margin: 0;
float: none;
font-size: inherit;
width: auto;

}

.sidebar-widget
{
	
}

.hook-widget
{
	
}

.widget-rows > div
{
	margin-top: 5px;
}

.widget-tabs
{
	border: 0 none black;

}
	.widget-tabs .tabs
	{
		white-space: nowrap;

	}

	.widget-tabs .tabs > li
	{
		display: inline;
		float: none;
	}

	.widget-tabs .widget-panes
	{
		padding: 10px;
border-right: 1px solid rgb(255, 255, 255);
border-bottom: 1px solid rgb(255, 255, 255);
border-left: 1px solid rgb(255, 255, 255);
border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px;

	}

.widget-columns
{
}
.columns-table
{
	display: table;
	table-layout: fixed;
	width: 100% !important;
}
.columns-row
{
	display: table-row;
}
.widget-column
{
	display: table-cell;
}


.widget-columns > .columns-container > .widget-column > div
{
	margin-left: 5px;
}
.widget-columns > .columns-container > .widget-column.column-1 > div
{
	margin-left: 0;
}
.widget-columns > .columns-container > .widget-column
{
	border-left: 1px solid rgb(255, 255, 255);
	margin-left: -1px !important;
}
.widget-columns > .columns-container > .widget-column.column-1
{
	border-left: 0;
	margin-left: 0 !important;
}

.widget-rows > div
{
	border-top: 1px solid rgb(255, 255, 255);
	margin-top: 5px;
	padding-top: 5px;
}
.widget-rows > div.row-1
{
	border-top: 0;
	margin-top: 0;
	padding-top: 0;
}


.hook-widget > h3
{
	color: rgb(71, 71, 71);
	font-size: 1.1em;
	font-weight: bold;
}

.widget .avatarHeap
{
	margin-right: -10px;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem
{
	overflow: hidden; zoom: 1;

	margin: 5px 0;
	padding-top: 5px;
	border-top: 1px solid rgb(227, 242, 253);
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem:first-child
{
	border-top: none;
	padding-top: 0;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .avatar
{
	float: left;
	font-size: 0;
}

	.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .avatar img
	{
		width: 24px;
		height: 24px;
	}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageInfo
{
	margin-left: 34px;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageContent article,
.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageContent blockquote
{
	display: inline;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .poster
{
	font-weight: bold;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageMeta
{
	overflow: hidden; zoom: 1;
	font-size: 11px;
	line-height: 14px;
	padding-top: 4px;
}

.widget .statusPoster textarea {
	box-sizing: border-box;
	width: 100%;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}
.WidgetFramework_WidgetRenderer_Threads_Sidebar .unread > a
{
	font-weight: bold;
}
.WidgetFramework_WidgetRenderer_Threads_Sidebar.avatarList .username
{
	display: inline;
	font-size: inherit;
	margin: 0;
}

.WidgetFramework_WidgetRenderer_Threads_List.discussionList
{
	overflow: hidden;
	width: 100%;
}
.WidgetFramework_WidgetRenderer_Threads_List .DiscussionList
{
	min-width: 450px;
	width: 100%;
}

.WidgetFramework_WidgetRenderer_Threads_ListCompact
{
}
	.WidgetFramework_WidgetRenderer_Threads_ListCompact > ol { display: table; width: 100%; }
	.WidgetFramework_WidgetRenderer_Threads_ListCompact > ol > li { display: table-row; }
	.WidgetFramework_WidgetRenderer_Threads_ListCompact > ol > li > div { display: table-cell; vertical-align: middle; }

	.WidgetFramework_WidgetRenderer_Threads_ListCompact .unread { font-weight: bold; }
	.WidgetFramework_WidgetRenderer_Threads_ListCompact div.avatar { width: 20px; }
	.WidgetFramework_WidgetRenderer_Threads_ListCompact .avatar img
	{
		border: 0;
		height: 16px;
		width: 16px;
	}

	.WidgetFramework_WidgetRenderer_Threads_ListCompact div.count { text-align: right; width: 50px; }

	.WidgetFramework_WidgetRenderer_Threads_ListCompactMore
	{
		display: none;
		font-size: .9em;
		margin-bottom: -.5em;
		text-align: center;
	}


.Responsive .WidgetFramework_WidgetRenderer_Threads_ListCompact .responsive--aware { display: none; }
@media screen and (min-width: 480px) {
	.Responsive .WidgetFramework_WidgetRenderer_Threads_ListCompact .responsive--from-narrow { display: table-cell; }
}
@media screen and (min-width: 610px) {
	.Responsive .WidgetFramework_WidgetRenderer_Threads_ListCompact .responsive--from-medium { display: table-cell; }
}
@media screen and (min-width: 800px) {
	.Responsive .WidgetFramework_WidgetRenderer_Threads_ListCompact .responsive--from-wide { display: table-cell; }
}


.WidgetFramework_WidgetRenderer_Threads_FullThreadList
{
}
	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .subHeading
	{
		font-size: 1.3em;
	}
	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .info
	{
		padding: 5px 10px;
	}
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .info.info-top
		{
			border-bottom: 1px dashed rgb(227, 242, 253);
		}
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .info.info-bottom
		{
			border-top: 1px dashed rgb(227, 242, 253);
		}
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .counters
		{
			float: right;
		}
	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .message
	{
		margin-bottom: 10px;
	}
	/* clearfix */ .WidgetFramework_WidgetRenderer_Threads_FullThreadList .message { zoom: 1; } .WidgetFramework_WidgetRenderer_Threads_FullThreadList .message:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .messageInfo
		{
			margin: 0;
			padding: 5px 10px;
		}
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .message .newIndicator
		{
			font-size: 12px;
color: rgb(170, 0, 255);
background-color: rgb(89, 133, 255);
padding: 1px 5px;
margin: -5px -5px 5px 5px;
border: 1px solid rgb(89, 133, 255);
border-radius: 3px;
border-top-right-radius: 0px;
display: block;
float: right;
position: relative;
box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);


			margin-right: -5px;
		}
			.WidgetFramework_WidgetRenderer_Threads_FullThreadList .message .newIndicator span
			{
				background-color: rgb(89, 133, 255);
border-top-right-radius: 3px;
position: absolute;
top: -4px;
right: -1px;
width: 5px;
height: 4px;

			}

	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .messageText .readMoreLink
	{
		display: block;
		text-align: right;
	}

.widget-poll .pollBlock .pollContent
{
	padding-left: 0;
	width: auto;
}

.widget-poll .pollBlock .pollOptions,
.widget-poll .pollBlock .pollResults
{
	border: 0;
}

.widget-poll .pollBlock .pollResult h3.optionText
{
	border: 0;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}

.widget-poll .pollBlock .pollResult .count
{
	padding: 0;
}
.WidgetFramework_WidgetRenderer_ShareThisPage .sharePage .shareControl
{
    float: none;
}

.WidgetFramework_WidgetRenderer_FeedReader_Entries
{
}
	.WidgetFramework_WidgetRenderer_FeedReader_Entries .limitedHeight
	{
		max-height: 59px; 
	}

	.WidgetFramework_WidgetRenderer_FeedReader_Entries .WidgetFramework_WidgetRenderer_FeedReader_Entry
	{
		text-align: justify;
		display: block;
		overflow: hidden;
		margin-bottom: 3px;
	}

	.WidgetFramework_WidgetRenderer_FeedReader_Entries img.WidgetFramework_WidgetRenderer_FeedReader_Thumbnail
	{
		width: auto;
		float: right;
		margin-left: 3px;
	}
		.WidgetFramework_WidgetRenderer_FeedReader_Entries .WidgetFramework_WidgetRenderer_FeedReader_Entry:nth-child(2n) img.WidgetFramework_WidgetRenderer_FeedReader_Thumbnail
		{
			float: left;
			margin-right: 3px;
		}

.widget-tabs .WidgetFramework_WidgetRenderer_XFMG_Media .sectionMain
{
	background: none;
	border: 0;
	margin: 0;
	padding: 0;
}
	.widget-tabs .WidgetFramework_WidgetRenderer_XFMG_Media .sectionMain .titleStrip { display: none; }

.WidgetFramework_WidgetRenderer_XFRM_Resources .Hint
{
	float: right;
}

/* clearfix */ .WidgetFramework_WidgetRenderer_UserFollow h3 { zoom: 1; } .WidgetFramework_WidgetRenderer_UserFollow h3:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }
.widget.WidgetFramework_WidgetRenderer_UserFollow h3 > a.count
{
	background-color: rgb(227, 242, 253);
	border: 1px solid rgb(255, 255, 255);
	border-radius: 5px;
	color: rgb(45, 45, 45);
	float: right;
	font-size: 0.8em;
	margin: -3px 0;
	padding: 2px 6px;
}


.sidebar .userList{
	padding: 10px;
}
.pairsJustified{
	padding: 10px;
}
.tagCloud{
	padding: 5px;
}
.sidebar_ads_img{
	width: 275px;
}
.cat_sidebar_div{
	height: 113px;
	width: 100%;
	text-align: center;
}
.cat_sidebar_img_div{
	padding-bottom: 10px;
}
.cat_sidebar_div p{
	color: white;
}
#cat_ads{
	background-color: #5890ff;
}


