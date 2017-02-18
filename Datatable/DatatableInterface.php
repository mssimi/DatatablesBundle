<?php

/**
 * This file is part of the SgDatatablesBundle package.
 *
 * (c) stwe <https://github.com/stwe/DatatablesBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sg\DatatablesBundle\Datatable;

use Sg\DatatablesBundle\Datatable\Column\ColumnInterface;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Interface DatatableInterface
 *
 * @package Sg\DatatablesBundle\Datatable
 */
interface DatatableInterface
{
    const NAME_REGEX = '/[a-zA-Z0-9\-\_]+/';

    /**
     * Builds the datatable.
     *
     * @param array $options
     */
    public function buildDatatable(array $options = array());

    /**
     * Get response.
     *
     * @param bool $buildQuery
     * @param bool $outputWalkers
     *
     * @return Response
     * @throws Exception
     */
    public function createResponse($buildQuery = true, $outputWalkers = false);

    /**
     * Returns a callable that modify the data row.
     *
     * @return callable
     */
    public function getLineFormatter();

    /**
     * Get all generated Columns.
     *
     * @return array
     */
    public function getColumns();

    /**
     * Get an array of Column names as keys and Column ids as values.
     *
     * @return array
     */
    public function getColumnNames();

    /**
     * Returns a MultiselectColumn if it exists.
     *
     * @return null|ColumnInterface
     */
    public function getMultiselectColumn();

    /**
     * Get Ajax instance.
     *
     * @return Ajax
     */
    public function getAjax();

    /**
     * Get Options instance.
     *
     * @return Options
     */
    public function getOptions();

    /**
     * Get Features instance.
     *
     * @return Features
     */
    public function getFeatures();

    /**
     * Get Language instance.
     *
     * @return Language
     */
    public function getLanguage();

    /**
     * Get the EntityManager.
     *
     * @return EntityManagerInterface
     */
    public function getEntityManager();

    /**
     * Help function to create an option array for filtering.
     *
     * @param array  $entities
     * @param string $keyFrom
     * @param string $valueFrom
     *
     * @return array
     */
    public function getOptionsArrayFromEntities($entities, $keyFrom = 'id', $valueFrom = 'name');

    /**
     * Returns the name of the entity.
     *
     * @return string
     */
    public function getEntity();

    /**
     * Returns the name of this datatable view.
     *
     * @return string
     */
    public function getName();
}
