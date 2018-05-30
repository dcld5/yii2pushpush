<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table Member".
 *
 * @property int $id
 * @property string $nama_lengkap
 * @property string $telpon
 * @property string $institusi
 * @property string $gender
 * @property int $user_id
 * @property int $kategori_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 *
 * @property Locker[] $lockers
 * @property KategoriMember $kategori
 */
class member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'kategori_id'], 'integer'],
            [['kategori_id'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['nama_lengkap', 'institusi'], 'string', 'max' => 45],
            [['telpon'], 'string', 'max' => 20],
            [['gender'], 'string', 'max' => 1],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriMember::className(), 'targetAttribute' => ['kategori_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_lengkap' => 'Nama Lengkap',
            'telpon' => 'Telpon',
            'institusi' => 'Institusi',
            'gender' => 'Gender',
            'user_id' => 'User ID',
            'kategori_id' => 'Kategori ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLockers()
    {
        return $this->hasMany(Locker::className(), ['member_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(KategoriMember::className(), ['id' => 'kategori_id']);
    }
}
