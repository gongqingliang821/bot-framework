<?php
/**
 * User: fangshuoxuan
 * Date: 2018/9/13
 * Time: 下午2:08
 */
namespace Bot\Framework\lib\ES\query;
class RangeQueryBuilder extends QueryBuilder {
    /**
     * @return RangeQueryBuilder
     */
    public static function getInstance() {
        return new RangeQueryBuilder();
    }

    /**
     * @param $columnName
     * @param $left
     * @param $right
     * @return $this
     */
    public function between($columnName, $left, $right) {
        $this->data['range'] =  [
            $columnName => [
                'gt' => $left,
                'lt' => $right
            ]
        ];
        return $this;
    }

    /**
     * @param $columnName
     * @param $left
     * @param $right
     * @return $this
     */
    public function gteBetween($columnName, $left, $right) {
        $this->data['range'] =  [
            $columnName => [
                'gte' => $left,
                'lt' => $right
            ]
        ];
        return $this;
    }

    /**
     * @param $columnName
     * @param $left
     * @param $right
     * @return $this
     */
    public function betweenLte($columnName, $left, $right) {
        $this->data['range'] =  [
            $columnName => [
                'gt' => $left,
                'lte' => $right
            ]
        ];
        return $this;
    }

    /**
     * @param $columnName
     * @param $left
     * @param $right
     * @return $this
     */
    public function gteBetweenLte($columnName, $left, $right) {
        $this->data['range'] =  [
            $columnName => [
                'gte' => $left,
                'lte' => $right
            ]
        ];
        return $this;
    }

    /**
     * @param $columnName
     * @param $right
     * @return $this
     */
    public function lt($columnName, $right) {
        $this->data['range'] = [
            $columnName => [
                'lt' => $right
            ]
        ];
        return $this;
    }

    /**
     * @param $columnName
     * @param $right
     * @return $this
     */
    public function lte($columnName, $right) {
        $this->data['range'] = [
            $columnName => [
                'lte' => $right
            ]
        ];
        return $this;
    }

    /**
     * @param $columnName
     * @param $left
     * @return $this
     */
    public function gt($columnName, $left) {
        $this->data['range'] = [
            $columnName => [
                'gt' => $left
            ]
        ];
        return $this;
    }

    /**
     * @param $columnName
     * @param $left
     * @return $this
     */
    public function gte($columnName, $left) {
        $this->data['range'] = [
            $columnName => [
                'gte' => $left
            ]
        ];
        return $this;
    }
}