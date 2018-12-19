<?php

namespace IEcho;

class Japanese
{
    private const JAPANESE_ARRAY = [
        'a' => ['あ', 'い', 'う', 'え', 'お', 'ｱ', 'ｲ', 'ｳ', 'ｴ', 'ｵ'],
        'ka' => ['か', 'き', 'く', 'け', 'こ', 'カ', 'キ', 'ク', 'ケ', 'コ'],
        'sa' => ['さ', 'し', 'す', 'せ', 'そ', 'サ', 'シ', 'ス', 'セ', 'ソ'],
        'ta' => ['た', 'ち', 'つ', 'て', 'と', 'タ', 'チ', 'ツ', 'テ', 'ト'],
        'na' => ['な', 'に', 'ぬ', 'ね', 'の', 'ナ', 'ニ', 'ヌ', 'ネ', 'ノ'],
    ];

    private $mData = [];
    private $mList = [];

    public function makeArray($index)
    {
        $l = [];
        foreach ($index as $row) {
            $l = array_merge($l, self::JAPANESE_ARRAY[$row]);
        }
        $this->mList = array_flip($l);
        return $l;
    }

    public function makeByGroup($num = 5, $groups = 3, $array = [])
    {
        if (empty($array)) {
            $array = &$this->mList;
        }

        $r = [];
        for ($i = 0; $i < $groups; $i++) {
            $r[] = array_rand($array, $num);
        }

        $this->mData = array_merge($this->mData, $r);
        return $this;
    }

    public function get()
    {
        return $this->mData;
    }
}