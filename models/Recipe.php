<?php
// models/Recipe.php

class Recipe
{
    private $recipes = [
        [
            'name' => '卵焼き',
            'ingredients' => ['卵', '砂糖', '塩'],
            'instructions' => '卵と調味料を混ぜて焼くだけ。'
        ],
        [
            'name' => '味噌汁',
            'ingredients' => ['味噌', '豆腐', 'わかめ'],
            'instructions' => '具材を煮て味噌を溶かす。'
        ],
        [
            'name' => 'ツナマヨおにぎり',
            'ingredients' => ['ごはん', 'ツナ', 'マヨネーズ'],
            'instructions' => '混ぜてにぎるだけ。'
        ],
    ];

    public function getAll() {
        return $this->recipes;
    }

    public function suggestBy($myIngredients) {
        $result = [];

        foreach ($this->recipes as $recipe) {
            $matches = array_intersect($recipe['ingredients'], $myIngredients);
            if (count($matches) >= 2) { // 2つ以上一致で提案
                $result[] = $recipe;
            }
        }

        return $result;
    }
}
