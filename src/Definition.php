<?php

namespace Shiren\Yao;

class Definition
{
    /**
     * 八卦(根据爻位单则为1，拆则为0，坤为三个拆则为0，乾为三个1则为7)
     */
    const Gua = ['坤', '震', '坎', '兑', '艮', '离', '巽', '乾'];

    /**
     * 64卦对应的名字
     * 规律：对角线为八纯卦，每行都包含同一个八宫的专有名词
     */
    const GuaName = [
        '坤为地', '地雷复', '地水师', '地泽临', '地山谦', '地火明夷', '地风升', '地天泰',
        '雷地豫', '震为雷', '雷水解', '雷泽归妹', '雷山小过', '雷火丰', '雷风恒', '雷天大壮',
        '水地比', '水雷屯', '坎为水', '水泽节', '水山蹇', '水火既济', '水风井', '水天需',
        '泽地萃', '泽雷随', '泽水困', '兑为泽', '泽山咸', '泽火革', '泽风大过', '泽天夬',
        '山地剥', '山雷颐', '山水蒙', '山泽损', '艮为山', '山火贲', '山风蛊', '山天大畜',
        '火地晋', '火雷噬嗑', '火水未济', '火泽睽', '火山旅', '离为火', '火风鼎', '火天大有',
        '风地观', '风雷益', '风水涣', '风泽中孚', '风山渐', '风火家人', '巽为风', '风天小畜',
        '天地否', '天雷无妄', '天水讼', '天泽履', '天山遁', '天火同人', '天风姤', '乾为天',
    ];

    const GuaGong = [0,0,2,0,3,2,1,0,1,1,1,3,3,2,1,0,0,2,2,2,3,2,1,0,3,1,3,3,3,2,1,0,7,6,5,4,4,4,6,4,7,6,5,4,5,5,5,7,7,6,5,4,4,6,6,6,7,6,5,4,5,7,7,7];
    const GuaXiang = [0,1,7,2,5,6,4,3,1,0,2,7,6,5,3,4,7,2,0,1,4,3,5,6,2,7,1,0,3,4,6,5,5,6,4,3,0,1,7,2,6,5,3,4,1,0,2,7,4,3,5,6,7,2,0,1,3,4,6,5,7,0,1,2];

    /**
     * 先天八卦对应的五行索引
     */
    const Gong2Element = [3, 1, 0, 4, 3, 2, 1, 4];

    /**
     * 卦象
     */
    const Xiang = ['八纯卦', '初爻卦', '二爻变', '三爻变', '四爻变', '五爻变', '游魂卦', '归魂卦'];

    /**
     * 象中的世爻位置(应爻位置在[世爻位置 + 3] % 6)
     */
    const Xiang4Yao = [5, 0, 1, 2, 3, 4, 3, 2];

    /**
     * 卦的地支
     */
    const GuaZ = [
        // 为内卦地支  // 为外挂地支
        [[7,  5,  3], [1, 11,   9]], // 坤
        [[0,  2,  4], [6,  8,  10]], // 震
        [[2,  4,  6], [8, 10,   0]], // 坎
        [[5,  3,  1], [11, 9,   7]], // 兑
        [[4,  6,  8], [10, 0,   2]], // 艮
        [[3,  1, 11], [9,  7,   5]], // 离
        [[1, 11,  9], [7,  5,   3]], // 巽
        [[0,  2,  4], [6,  8,  10]], // 乾
    ];

    /**
     * 卦的六亲(依次对应印比伤才杀)
     */
    const Relations = ['父', '兄', '子', '才', '官'];


    /**
     * 六兽起点，分别从甲乙丙丁...依次对应
     */
    const AnimalStart = [0,0,1,1,2,3,4,4,5,5];

    /**
     * 六兽
     */
    const Animals = ['青', '朱', '勾', '蛇', '白', '玄'];
}