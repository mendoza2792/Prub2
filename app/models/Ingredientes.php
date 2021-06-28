<?php

class Ingredientes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_Ingrediente;

    /**
     *
     * @var string
     */
    public $ingrediente;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("crud_recetas");
        $this->setSource("ingredientes");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ingredientes[]|Ingredientes|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ingredientes|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
