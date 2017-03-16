<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fotos;

/**
 * FotosSearch represents the model behind the search form about `app\models\Fotos`.
 */
class FotosSearch extends Fotos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_fotos', 'id', 'id_tipo', 'orden'], 'integer'],
            [['foto', 'link'], 'safe'],
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
        $query = Fotos::find();

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
            'id_fotos' => $this->id_fotos,
            'id' => $this->id,
            'id_tipo' => $this->id_tipo,
            'orden' => $this->orden,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'link', $this->link]);

        return $dataProvider;
    }

    public function search2($params)
    {
        $query = Fotos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params,'');

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_fotos' => $this->id_fotos,
            'id' => $this->id,
            'id_tipo' => $this->id_tipo,
            'orden' => $this->orden,
        ]);

        $query->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'link', $this->link])
            ->orderBy(['id' => SORT_ASC],['orden' => SORT_ASC]);

        return $dataProvider;
    }
}
