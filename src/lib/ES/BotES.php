<?php
/**
 * User: fangshuoxuan
 * Date: 2018/9/28
 * Time: 下午12:19
 */
namespace Bot\Framework\lib;
use Bot\Framework\lib\ES\query\BoolQueryBuilder;
use Bot\Framework\lib\ES\query\MatchQueryBuilder;
use Bot\Framework\lib\ES\query\MultiMatchQueryBuilder;
use Bot\Framework\lib\ES\query\RangeQueryBuilder;
use Bot\Framework\lib\ES\query\SearchBody;
use Bot\Framework\lib\ES\query\TermQueryBuilder;
use Bot\Framework\lib\ES\query\TermsQueryBuilder;

use Elasticsearch\ClientBuilder;

function __autoload($className) {
    require_once "./query/$className.php";
}

class BotES {
    private static $instance;
    private $client;
    private $searchBody;
    private $boolqueryBuilder;

    private function __construct() {
        $this->client = ClientBuilder::create()
            ->setHosts(ES_CONFIG['hosts'])
            ->build();

        $this->searchBody = SearchBody::getInstance();
        $this->boolqueryBuilder = BoolQueryBuilder::getInstance();
    }

    /**
     * @return static
     */
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    /**
     * @param SearchBody $searchBody
     * @return mixed
     */
    public function search(SearchBody $searchBody = null) {
        if (!isset($searchBody)) {
            return $this->client->search($searchBody->getData());
        }
        $boolQuery = $this->boolqueryBuilder->getQuery();
        if (!empty($boolQuery)) {
            $this->searchBody->withQuery($this->boolqueryBuilder);
        }
        $index = $searchBody->getData()['index'];
        $type = $searchBody->getData()['type'];
        if (!isset($index)) {
            $searchBody->withIndex(ES_INDEX);
        }
        if (!isset($type)) {
            $searchBody->withIndex(ES_TYPE);
        }
        return $this->client->search($this->searchBody);
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type) {
        $this->searchBody->withType($type);
        return $this;
    }

    /**
     * @param $index
     * @return $this
     */
    public function setIndex($index) {
        $this->searchBody->withIndex($index);
        return $this;
    }

    /**
     * @param $size
     * @return $this
     */
    public function limit($size) {
        $this->searchBody->withSize($size);
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustTerm($columnName, $value) {
        $this->boolqueryBuilder->must(TermQueryBuilder::getInstance()->term($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustTerms($columnName, $value) {
        $this->boolqueryBuilder->must(TermsQueryBuilder::getInstance()->terms($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustMatch($columnName, $value) {
        $this->boolqueryBuilder->must(MatchQueryBuilder::getInstance()->match($columnName, $value));
        return $this;
    }

    /**
     * @param $columnNames
     * @param $value
     * @return $this
     */
    public function mustMultiMatch($columnNames, $value) {
        $this->boolqueryBuilder->must(MultiMatchQueryBuilder::getInstance()->multiMatch($columnNames, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustLt($columnName, $value) {
        $this->boolqueryBuilder->must(RangeQueryBuilder::getInstance()->lt($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustLte($columnName, $value) {
        $this->boolqueryBuilder->must(RangeQueryBuilder::getInstance()->lte($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustGt($columnName, $value) {
        $this->boolqueryBuilder->must(RangeQueryBuilder::getInstance()->gt($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustGte($columnName, $value) {
        $this->boolqueryBuilder->must(RangeQueryBuilder::getInstance()->gte($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustNotTerm($columnName, $value) {
        $this->boolqueryBuilder->mustNot(TermQueryBuilder::getInstance()->term($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustNotTerms($columnName, $value) {
        $this->boolqueryBuilder->mustNot(TermsQueryBuilder::getInstance()->terms($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustNotMatch($columnName, $value) {
        $this->boolqueryBuilder->mustNot(MatchQueryBuilder::getInstance()->match($columnName, $value));
        return $this;
    }

    /**
     * @param $columnNames
     * @param $value
     * @return $this
     */
    public function mustNotMultiMatch($columnNames, $value) {
        $this->boolqueryBuilder->mustNot(MultiMatchQueryBuilder::getInstance()->multiMatch($columnNames, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustNotLt($columnName, $value) {
        $this->boolqueryBuilder->mustNot(RangeQueryBuilder::getInstance()->lt($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustNotLte($columnName, $value) {
        $this->boolqueryBuilder->mustNot(RangeQueryBuilder::getInstance()->lte($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustNotGt($columnName, $value) {
        $this->boolqueryBuilder->mustNot(RangeQueryBuilder::getInstance()->gt($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function mustNotGte($columnName, $value) {
        $this->boolqueryBuilder->mustNot(RangeQueryBuilder::getInstance()->gte($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function shouldTerm($columnName, $value) {
        $this->boolqueryBuilder->should(TermQueryBuilder::getInstance()->term($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function shouldTerms($columnName, $value) {
        $this->boolqueryBuilder->should(TermsQueryBuilder::getInstance()->terms($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function shouldMatch($columnName, $value) {
        $this->boolqueryBuilder->should(MatchQueryBuilder::getInstance()->match($columnName, $value));
        return $this;
    }

    /**
     * @param $columnNames
     * @param $value
     * @return $this
     */
    public function shouldMultiMatch($columnNames, $value) {
        $this->boolqueryBuilder->should(MultiMatchQueryBuilder::getInstance()->multiMatch($columnNames, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function shouldLt($columnName, $value) {
        $this->boolqueryBuilder->should(RangeQueryBuilder::getInstance()->lt($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function shouldLte($columnName, $value) {
        $this->boolqueryBuilder->should(RangeQueryBuilder::getInstance()->lte($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function shouldGt($columnName, $value) {
        $this->boolqueryBuilder->should(RangeQueryBuilder::getInstance()->gt($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function shouldGte($columnName, $value) {
        $this->boolqueryBuilder->should(RangeQueryBuilder::getInstance()->gte($columnName, $value));
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustTerm($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->must(
                TermQueryBuilder::getInstance()->term($columnName, $value)
            )
        );
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustTerms($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->must(
                TermsQueryBuilder::getInstance()->terms($columnName, $value)
            )
        );
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustMatch($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->must(
                MatchQueryBuilder::getInstance()->match($columnName, $value)
            )
        );
        return $this;
    }

    /**
     * @param $columnNames
     * @param $value
     * @return $this
     */
    public function filterMustMultiMatch($columnNames, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->must(
                MultiMatchQueryBuilder::getInstance()->multiMatch($columnNames, $value)
            )
        );
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustLt($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->must(
                RangeQueryBuilder::getInstance()->lt($columnName, $value)
            )
        );
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustLte($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->must(
                RangeQueryBuilder::getInstance()->lte($columnName, $value)
            )
        );
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustGt($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->must(
                RangeQueryBuilder::getInstance()->gt($columnName, $value)
            )
        );
        return $this;
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustGte($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->must(
                RangeQueryBuilder::getInstance()->gte($columnName, $value)
            )
        );
        return $this;
   }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustNotTerm($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->mustNot(
                TermQueryBuilder::getInstance()->term($columnName, $value)
            )
        );
        return $this;

    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustNotTerms($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->mustNot(
                TermsQueryBuilder::getInstance()->terms($columnName, $value)
            )
        );
        return $this;

    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustNotMatch($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->mustNot(
                MatchQueryBuilder::getInstance()->match($columnName, $value)
            )
        );
        return $this;

    }

    /**
     * @param $columnNames
     * @param $value
     * @return $this
     */
    public function filterMustNotMultiMatch($columnNames, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->mustNot(
                MultiMatchQueryBuilder::getInstance()->multiMatch($columnNames, $value)
            )
        );
        return $this;

    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustNotLt($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->mustNot(
                TermQueryBuilder::getInstance()->lt($columnName, $value)
            )
        );
        return $this;

    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustNotLte($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->must(
                TermQueryBuilder::getInstance()->lte($columnName, $value)
            )
        );
        return $this;

    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustNotGt($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->mustNot(
                RangeQueryBuilder::getInstance()->gt($columnName, $value)
            )
        );
        return $this;

    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function filterMustNotGte($columnName, $value) {
        $this->boolqueryBuilder->filter(
            BoolQueryBuilder::getInstance()->mustNot(
                RangeQueryBuilder::getInstance()->gte($columnName, $value)
            )
        );
        return $this;

    }

}
