<?php

namespace FileD\ParamBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ParameterRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ParameterRepository extends EntityRepository
{

	/**
	 * Find parameters
	 * @return the array of entities
	 */
	public function findActives()
	{
		$result = $this->_em->createQuery('
		        SELECT
		            p
		        FROM
		            FileDParamBundle:Parameter p
		    ')
				->getResult();
		return $result;
	}
	
	/**
	 * Find parameter by its key
	 * @param string $key 
	 * @return the parameter
	 */
	public function findByKey($key)
	{
		$result = $this->_em->createQuery('
		        SELECT
		            p
		        FROM
		            FileDParamBundle:Parameter p
				WHERE p.key = :key
		    ')->setParameter(":key", $key)
				->getResult();
		return $result;
	}
}