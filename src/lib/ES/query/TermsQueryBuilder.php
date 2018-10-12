<?php
/**
 * User: fangshuoxuan
 * Date: 2018/9/13
 * Time: 下午2:07
 */
namespace Bot\Framework\lib\ES\query;
class TermsQueryBuilder extends QueryBuilder {
    /**
     * @return TermsQueryBuilder
     */
    public static function getInstance() {
        return new TermsQueryBuilder();
    }

    /**
     * @param $columnName
     * @param $value
     * @return $this
     */
    public function terms($columnName, $value) {
        if (empty($columnName) || empty($value)) {
            throw new RuntimeException("params must not empty");
        }
        if (!is_array($value)) {
            throw new RuntimeException('value should be array, but not');
        }
        $this->data['terms'][$columnName] = $value;

        return $this;
    }
}