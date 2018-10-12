<?php
/**
 * User: fangshuoxuan
 * Date: 2018/9/13
 * Time: 下午2:06
 */
namespace Bot\Framework\lib\ES\query;
class MatchQueryBuilder extends QueryBuilder {
    /**
     * @return MatchQueryBuilder
     */
    public static function getInstance() {
        return new MatchQueryBuilder();
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function match($columnName, $value) {
        if (empty($columnName) || empty($value)) {
            throw new RuntimeException("params must not empty");
        }

        $this->data['match'][$columnName] = $value;
        return $this;
    }
}