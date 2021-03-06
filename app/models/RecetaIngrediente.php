<?php

class RecetaIngrediente extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_Receta;

    /**
     *
     * @var integer
     */
    public $id_Ingrediente;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("crud_recetas");
        $this->setSource("receta_ingrediente");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RecetaIngrediente[]|RecetaIngrediente|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RecetaIngrediente|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
