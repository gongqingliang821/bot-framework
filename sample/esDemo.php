<?php
/**
 * User: fangshuoxuan
 * Date: 2018/9/13
 * Time: 下午3:51
 */
require_once '../src/lib/ES/query/QueryBuilder.php';
require_once '../src/lib/ES/query/SearchBody.php';
use Elasticsearch\ClientBuilder;

function __autoload($className) {
    require_once "../src/lib/ES/$className.php";
}

$queryBuilder = MatchQueryBuilder::getInstance()->match('title', '白龙马');
$queryBuilder1 = RangeQueryBuilder::getInstance()->gteBetween('episode_index', 12, 70);
$queryBuilder3 = TermQueryBuilder::getInstance()->term('episode_index', 68);
$queryBuilder4 = TermsQueryBuilder::getInstance()->terms('episode_index', [69, 76]);

$queryBuilder2 = BoolQueryBuilder::getInstance()
    ->must($queryBuilder)
    ->must($queryBuilder1)
    ->must($queryBuilder3)
    ->mustNot($queryBuilder4);

$searchBody = SearchBody::getInstance()
    ->withIndex('xiaobanlong')
    ->withType('data')
    ->withQuery($queryBuilder2)
    ->withSize(3)
    ->withFrom(0);
var_dump(json_encode($searchBody->getData()));


$hosts = [
    'host'
];

$client = ClientBuilder::create()
    ->setHosts($hosts)
    ->build();
var_dump(json_encode($client->search($searchBody->getData())));

//----------------------------------------------
$ret = \Bot\Framework\lib\BotES::getInstance()
    ->filterMustMatch('title', '白龙马')
    ->filterMustGte('episode_index', 70)
    ->search();
