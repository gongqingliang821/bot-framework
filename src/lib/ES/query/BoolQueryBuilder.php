<?php
/**
 * User: fangshuoxuan
 * Date: 2018/9/13
 * Time: 下午2:06
 */
namespace Bot\Framework\lib\ES\query;
class BoolQueryBuilder extends QueryBuilder {

    /**
     * @return BoolQueryBuilder
     */
    public static function getInstance() {
        return new BoolQueryBuilder();
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @return $this
     */
    public function must(QueryBuilder $queryBuilder) {
        $this->data['bool']['must'][] = $queryBuilder->getQuery();

        return $this;
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @return $this
     */
    public function mustNot(QueryBuilder $queryBuilder) {
        $this->data['bool']['must_not'][] = $queryBuilder->getQuery();
        return $this;
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @return $this
     */
    public function should(QueryBuilder $queryBuilder) {
        $this->data['bool']['should'][] = $queryBuilder->getQuery();
        return $this;
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @return $this
     */
    public function filter(QueryBuilder $queryBuilder) {
        $this->data['bool']['filter'][] = $queryBuilder->getQuery();
        return $this;
    }
}