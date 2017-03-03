<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Modelos;

/**
 * ModelosSearch represents the model behind the search form about `app\models\Modelos`.
 */
class ModelosSearch extends Modelos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_modelos'], 'integer'],
            [['nombre', 'foto', 'descripcion', 'adicional', 'video'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Modelos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_modelos' => $this->id_modelos,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'adicional', $this->adicional])
            ->andFilterWhere(['like', 'video', $this->video]);

        return $dataProvider;
    }
}
