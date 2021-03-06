<?
require_once('_config.php');

$page = new page();
$page->organization = new organization();
$page->disaster = new disaster();
if (is_numeric($_GET['organization_id'])) {
	$page->organization = organization::load_by_id($_GET['organization_id']);
}
if (is_numeric($_GET['organization_id'])) {
	$page->disaster = disaster::load_by_id($_GET['disaster_id']);
}
if (is_numeric($page->organization->id) && is_numeric($page->disaster->id)) {
	$page->render('tpl.disaster-organization.php');
}

die('unhandled fatal error in '.__FILE__.'@'.__LINE__.': invalid disaster_id or organization_id');
