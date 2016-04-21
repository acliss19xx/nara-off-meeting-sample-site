<?php defined('C5_EXECUTE') or die("Access Denied.");?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/bootstrap-modified.css">
    <?php echo $html->css($view->getStylesheet('main.less'))?>
	<?php Loader::element('header_required');?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto!important}'
                )
            )
            document.querySelector('head').appendChild(msViewportStyle)
        }
    </script>
</head>

<body>
<div class="<?php echo $c->getPageWrapperClass()?>">
	<div class="container">
		<header>
			<?php
				$a = new GlobalArea("Header Navigation");
				$a->display();
			?>
		</header>
		<main style="background-color:#e4d9ff">
			<?php
				$a = new Area("Main");
				$a->enableGridContainer();
				$a->display($c);
			?>
		</main>
		<footer>
			<?php
				$a = new Area("Footer");
				$a->display($c);
			?>
			<span class="label label-info">ページタイプ名：<?php echo h($c->getPageTypeName())?></span>
			<span class="label label-info">ページテンプレート名：<?php echo t(PageTemplate::getByID($c->getPageTemplateID())->getPageTemplateDisplayName())?></span>
		</footer>
	</div>
</div>
<?php Loader::element('footer_required');?>
</body>
</html>
