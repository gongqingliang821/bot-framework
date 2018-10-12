<?php
/**
 * User: fangshuoxuan
 * Date: 2018/9/13
 * Time: 下午4:03
 */
namespace Bot\Framework\lib\ES\query;
class SearchBody {
    private $data;

    /**
     * SearchBody constructor.
     */
    private function __construct() {
        $this->data = [];
    }

    /**
     * @return SearchBody
     */
    public static function getInstance() {
        return new SearchBody();
    }

    /**
     * @param $index
     * @return $this
     */
    public function withIndex($index) {
        $this->data['index'] = $index;

        return $this;
    }

    /**
     * @param $type
     * @return $this
     */
    public function withType($type) {
        $this->data['type'] = $type;

        return $this;
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @return $this
     */
    public function withQuery(QueryBuilder $queryBuilder) {
        $this->data['body']['query'] = $queryBuilder->getQuery();

        return $this;
    }

    /**
     * @param $offset
     * @return $this
     */
    public function withFrom($offset) {
        if ($offset < 0) {
            throw new RuntimeException("invalid offset:$offset");
        }
        $this->data['from'] = $offset;

        return $this;
    }

    /**
     * @param $limit
     * @return $this
     */
    public function withSize($limit) {
        if ($limit < 1) {
            throw new RuntimeException("invalid limit:$limit");
        }
        $this->data['body']['size'] = $limit;

        return $this;
    }

    /**
     * @param $columnName
     * @param string $rule
     * @return $this
     */
    public function withSort($columnName, $rule = 'asc') {
        if (empty($columnName) || $rule) {
            throw new RuntimeException('params must not empty');
        }
        $this->data['body']['sort'][] = [
            $columnName => $rule
        ];

        return $this;
    }

    /**
     * @return array
     */
    public function getData() {
        return $this->data;
    }
}