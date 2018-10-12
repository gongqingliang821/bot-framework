<?php
/**
 * User: fangshuoxuan
 * Date: 2018/9/13
 * Time: 下午2:07
 */
namespace Bot\Framework\lib\ES\query;
class TermQueryBuilder extends QueryBuilder {
    /**
     * @return TermQueryBuilder
     */
    public static function getInstance() {
        return new TermQueryBuilder();
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function term($columnName, $value) {
        if (empty($columnName) || empty($value)) {
            throw new RuntimeException("params must not empty");
        }

        $this->data['term'][$columnName] = $value;

        return $this;
    }
}