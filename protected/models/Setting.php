<?php

/**
 * This is the model class for table "tbl_setting".
 *
 * The followings are the available columns in table 'tbl_setting':
 * @property integer $id_setting
 * @property string $tipe
 * @property string $title
 * @property string $content_setting
 */
class Setting extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Setting the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_setting';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipe, title, content_setting', 'required'),
			array('tipe', 'length', 'max'=>50),
			array('title', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_setting, tipe, title, content_setting', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_setting' => 'Id Setting',
			'tipe' => 'Tipe',
			'title' => 'Title',
			'content_setting' => 'Content Setting',
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

		$criteria->compare('id_setting',$this->id_setting);
		$criteria->compare('tipe',$this->tipe,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content_setting',$this->content_setting,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}