<?php

class Receta extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_Receta;

    /**
     *
     * @var string
     */
    public $nombre;

    /**
     *
     * @var string
     */
    public $descripcion;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("crud_recetas");
        $this->setSource("receta");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Receta[]|Receta|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Receta|\Phalcon\Mvc\Model\ResultInterface
     */
    /**jjjjjjjjjjjjjj */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
