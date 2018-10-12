<?php
/**
 * User: fangshuoxuan
 * Date: 2018/9/13
 * Time: 下午2:01
 */
namespace Bot\Framework\lib\ES\query;
abstract class QueryBuilder {
    protected $data;

    /**
     * QueryBuilderTemp constructor.
     */
    protected function __construct() {
        $this->data = [];
    }

    /**
     * @return array
     */
    public function getQuery() {
        return $this->data;
    }
}