<?php

/**
 * This is the model class for table "carrinho_compra".
 *
 * The followings are the available columns in table 'carrinho_compra':
 * @property string $id
 * @property string $sid
 * @property string $quantidade
 * @property string $id_produtos
 * @property string $usuarios_id
 */
class CarrinhoCompra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return CarrinhoCompra the static model class
	 */
        public $pesquisar;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'carrinho_compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sid, quantidade, id_produtos', 'required'),
			array('sid', 'length', 'max'=>100),
			array('quantidade, id_produtos, usuarios_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sid, quantidade, id_produtos, usuarios_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idProdutos0' => array(self::BELONGS_TO, 'Produtos', 'id_produtos'),
			'usuarios' => array(self::BELONGS_TO, 'Usuarios', 'usuarios_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sid' => 'Sid',
			'quantidade' => 'Quantidade',
			'id_produtos' => 'Id Produtos',
			'usuarios_id' => 'Usuarios',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */


	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
                if($this->pesquisar == ''){
                        		$criteria->compare('id',$this->id,true);

		$criteria->compare('sid',$this->sid,true);

		$criteria->compare('quantidade',$this->quantidade,true);

		$criteria->compare('id_produtos',$this->id_produtos,true);

		$criteria->compare('usuarios_id',$this->usuarios_id,true);

                }else{
            
                       		$criteria->compare('id',$this->pesquisar,true,'OR');

		$criteria->compare('sid',$this->pesquisar,true,'OR');

		$criteria->compare('quantidade',$this->pesquisar,true,'OR');

		$criteria->compare('id_produtos',$this->pesquisar,true,'OR');

		$criteria->compare('usuarios_id',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}