<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "locker".
 *
 * @property int $id
 * @property string $short_deskripsi
 * @property string $deskripsi
 * @property string $tags
 * @property string $tgl_mulai
 * @property string $tgl_akhir
 * @property int $member_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 *
 * @property Member $member
 */
class Locker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'locker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deskripsi'], 'string'],
            [['tgl_mulai', 'tgl_akhir', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['member_id'], 'required'],
            [['member_id'], 'integer'],
            [['short_deskripsi', 'tags'], 'string', 'max' => 100],
            [['member_id'], 'exist', 'skipOnError' => true, 'targetClass' => Member::className(), 'targetAttribute' => ['member_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'short_deskripsi' => 'Short Deskripsi',
            'deskripsi' => 'Deskripsi',
            'tags' => 'Tags',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_akhir' => 'Tgl Akhir',
            'member_id' => 'Member ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMember()
    {
        return $this->hasOne(Member::className(), ['id' => 'member_id']);
    }
}
