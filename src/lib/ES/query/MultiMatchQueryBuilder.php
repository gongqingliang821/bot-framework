<?php
/**
 * User: fangshuoxuan
 * Date: 2018/10/9
 * Time: 下午3:11
 */
namespace Bot\Framework\lib\ES\query;
class MultiMatchQueryBuilder extends QueryBuilder {
    public static function getInstance() {
        return new MultiMatchQueryBuilder();
    }

    public function multiMatch($columnNames, $value) {
        $this->data['multi_match'] = [
            "fields" => $columnNames,
            "query" => $value
        ];

        return $this;
    }
}