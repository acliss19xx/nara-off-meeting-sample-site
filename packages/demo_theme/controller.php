<?php 
namespace Concrete\Package\DemoTheme;

use Package;
use BlockType;
use SinglePage;
use PageTheme;
use BlockTypeSet;
use Loader;
use FileImporter;

use \Concrete\Core\Tree\Type\Topic;
use \Concrete\Core\Attribute\Key\CollectionKey as CollectionAttributeKey;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{

	protected $pkgHandle = 'demo_theme';
	protected $appVersionRequired = '5.7.3';
	protected $pkgVersion = '1.0.0';
	protected $pkgAllowsFullContentSwap = true;

	public function getPackageDescription()
	{
    	return t("Oh, simple demo theme");
	}

	public function getPackageName()
	{
    	return t("demo theme");
	}

/*
    public function import_files()
    {
            // now we add in any files that this package has
            if (is_dir($this->getPackagePath() . '/content_files'))
             {

                $fh = new FileImporter();
                $contents = Loader::helper('file')->getDirectoryContents($this->getPackagePath() . '/content_files');

                foreach ($contents as $filename)
                {
                    $f = $fh->import($this->getPackagePath() . '/content_files/' . $filename, $filename);
                }
            }
    }
*/
	public function install()
	{
    	$pkg = parent::install();
		PageTheme::add('demo_theme', $pkg);

	}

}
?>