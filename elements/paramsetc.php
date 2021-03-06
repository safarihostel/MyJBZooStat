<?php
/** @var $this MyjbzoostatViewAutors */
defined( '_JEXEC' ) or die; // No direct access
?>
<?php

// check installed Zoo

jimport( 'joomla.filesystem.folder' );
if (JFolder::exists(JPATH_ROOT . '/components/com_zoo')) {

require_once JPATH_ADMINISTRATOR . '/components/com_zoo/config.php';
require_once JPATH_ROOT . '/media/zoo/applications/jbuniversal/framework/jbzoo.php';
$app = App::getInstance('zoo');

}

$document = JFactory::getDocument();
$input = JFactory::getApplication()->input;
$db     = JFactory::getDBO();
$domainhttp = JURI::root();
$user   = JFactory::getUser();
$component = JComponentHelper::getComponent('com_myjbzoostat');
$mainframe = JFactory::getApplication();
$namecomponent = $mainframe->scope;
$params = json_decode($component->params);
$comcontent = $params->comcontent;
$more100social = $params->more100social;
$enablecommerce = $params->enablecommerce;
$csshack = $params->csshack;
$bd_nice = $params->bd_nice_number;
$fb_app_token = $params->fb_app_token;
$georegions = $params->georegions;
$rus = $params->rus;
$sng = $params->sng;
$ukr = $params->ukr;
$ElementName = $params->element_name;
$ElementTel = $params->element_tel;
$ElementNameUser = $params->element_name_user;
$ElementTelUser = $params->element_tel_user;
$ElementMail = $params->element_tel_mail;
$Min_Zakazov = $params->min_zakazov;
$Min_Money = $params->min_money;
$filterpopular = $params->filterpopular;
$perpagepopular = $params->perpagepopular;
$threshold = $params->threshold;
$AppidZoo = $params->appidzoo;
$appId  = $AppidZoo;
$app_id = $AppidZoo;
$TypeAuthors = $params->typeauthors;
$TypeArticleorProduct = $params->typearticleorproduct;
$StatOrProduct = $params->statorproduct;
$method = $params->method;
$taghorizont = $params->taghorizont;
$app_password =  $params->app_password;
$app_token =  $params->app_token;
$counter_id =  $params->counter_id;
$fillbad =  $params->countpageviewyambad;
$fillgood =  $params->countpageviewyamgood;
$fillnorm =  $params->countpageviewyamnorm;
$vksocialname =  $params->vksocialname;
$vk_ID_uids =  $params->vk_ID_uids;
$fbsocialname =  $params->fbsocialname;
$gplussocialname =  $params->gplussocialname;
$oksocialname =  $params->oksocialname;
$twittersocialname =  $params->twittersocialname;
$youtubesocialname =  $params->youtubesocialname;

$httpClientj = JHttpFactory::getHttp();


if (empty($fb_app_token)) { $fb_app_token = ''; }
if (empty($fillbad)) { $fillbad = '100'; }
if (empty($fillgood)) { $fillgood = '200'; }
if (empty($fillnorm)) { $fillnorm = '300'; }

if ($StatOrProduct == 'stat') { $StatOrProduct = 'статей';}
if ($StatOrProduct == 'product') { $StatOrProduct = 'товаров';}

$bootstrap_size = '0';
$date_diapazon = '1';
$date_group = 'day';
$header_class = '';
$header_tag = 'h3';
$height = '300';
$module_tag = 'div';
$show_new_visitors = '0';
$show_page_views = '1';
$show_visitors = '1';
$show_visits = '1';
$style = '0';

$disqusApiPublic = $params->disqus_api_key;
$disqusApiSecret = $params->disqus_api_secret;
$disqusApiToken = $params->disqus_access_token;
$disqusApiShort = $params->disqus_api_short_name;
$disqusApplication = $params->disqus_api_app;

$site_shortname = $params->site_shortname;

if (empty($site_shortname)) {

  $site_shortname = JURI::root();
  $site_shortname = str_replace('/','',$site_shortname);
  $site_shortname = str_replace(':','',$site_shortname);
  $site_shortname = str_replace('https','',$site_shortname);
  $site_shortname = str_replace('http','',$site_shortname);

}

$site_domain = $params->site_domain;
$site_pagevievfilter = $params->site_pagevievfilter;
// $replaceone = $params->replaceone;
// $replacetwo = $params->replacetwo;
// $replacefree = $params->replacefree;
$regexpforurl = $params->regexpforurl;

$authoridmy = $user->get('id');
$authorid = $input->get('authorids', $authoridmy, 'string');
$monthdate = $input->get('monthdate', date('Y-m'), 'string');

define('DISQUS_API_SHORT_NAME', $disqusApiShort);
define('DISQUS_API_KEY', $disqusApiPublic);
define('DISQUS_API_SECRET', $disqusApiSecret);
define('DISQUS_API_APP', $disqusApplication);
define('DISQUS_ACCESS_TOKEN', $disqusApiToken);
define('DISQUS_TTL', 60);
define('DEBUG_URL', 0);
define('ZOO_TABLE_MY_ORDERS', '#__zoo_jbzoo_orders');

define('URL_LIST_USAGE', 'https://disqus.com/api/3.0/applications/listUsage.json');
define('URL_FORUMS_LISTTHREADS', 'https://disqus.com/api/3.0/forums/listThreads.json');
define('URL_POSTS_LIST', 'https://disqus.com/api/3.0/posts/list.json');
define('URL_USERS_DETAILS', 'https://disqus.com/api/3.0/users/details.json');
define('URL_BLACKLISTS_LIST', 'https://disqus.com/api/3.0/blacklists/list.json?type=user&type=email&type=ip&type=domain');
define('URL_USERS_LISTPOSTS', 'https://disqus.com/api/3.0/users/listPosts.json');




?>
