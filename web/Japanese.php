<?php

namespace IEcho;

class Japanese
{
    private const JAPANESE_ARRAY = [
        'a' => [
            'あ' => 'a', 'い' => 'i', 'う' => 'u', 'え' => 'e', 'お' => 'o',
            'ア' => 'a', 'イ' => 'i', 'ウ' => 'u', 'エ' => 'e', 'オ' => 'o',
        ],
        'ka' => [
            'か' => 'ka', 'き' => 'ki', 'く' => 'ku', 'け' => 'ke', 'こ' => 'ko',
            'カ' => 'ka', 'キ' => 'ki', 'ク' => 'ku', 'ケ' => 'ke', 'コ' => 'ko',
        ],
        'sa' => [
            'さ' => 'sa', 'し' => 'shi', 'す' => 'su', 'せ' => 'se', 'そ' => 'so',
            'サ' => 'sa', 'シ' => 'shi', 'ス' => 'su', 'セ' => 'se', 'ソ' => 'so',
        ],
        'ta' => [
            'た' => 'ta', 'ち' => 'chi', 'つ' => 'tsu', 'て' => 'te', 'と' => 'to',
            'タ' => 'ta', 'チ' => 'chi', 'ツ' => 'tsu', 'テ' => 'te', 'ト' => 'to',
        ],
        'na' => [
            'な' => 'na', 'に' => 'ni', 'ぬ' => 'nu', 'ね' => 'ne', 'の' => 'no',
            'ナ' => 'na', 'ニ' => 'ni', 'ヌ' => 'nu', 'ネ' => 'ne', 'ノ' => 'no',
        ],
    ];

    private $mData = [];
    private $mList = [];

    public function makeArray($index)
    {
        $l = [];
        foreach ($index as $row) {
            $l = array_merge($l, self::JAPANESE_ARRAY[$row]);
        }
        $this->mList = $l;
        return $l;
    }

    public function makeByGroup($num = 5, $groups = 3, $array = [])
    {
        if (empty($array)) {
            $array = &$this->mList;
        }

        $r = [];
        for ($i = 0; $i < $groups; $i++) {
            $t = array_rand($array, $num);
            $a = [];
            foreach ($t as &$word) {
                $a[$word] = $array[$word];
            }
            $r[] = $a;
        }

        $this->mData = array_merge($this->mData, $r);
        return $this;
    }

    public function get()
    {
        return $this->mData;
    }
}