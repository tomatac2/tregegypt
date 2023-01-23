<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $title
 * @property string|null $short_desc
 * @property string|null $long_desc
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $comments_count
 * @property string|null $tags
 *
 * @property \App\Model\Entity\Category $category
 */
class Article extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'category_id' => true,
        'title' => true,
        'short_desc' => true,
        'long_desc' => true,
        'created' => true,
        'modified' => true,
        'comments_count' => true,
        'tags' => true,
        'category' => true,
        'photo' => true,
    ];

    protected $_virtual = [
        'created_at'
    ];


    function _getCreatedAt()
    {
        $m = date("M",strtotime("".$this->created."") ) ; 
        $year = date("Y",strtotime("".$this->created."") ) ; 

        $month =$this->getArabicMonth($m);
        return $month.'-'.$year ;
    }
    
    function getArabicMonth($m){
        $month = [
            "Jan"=>"يناير",
            "Feb"=>"فبراير",
            "Mar"=>"مارس",
            "Apr"=>"ابريل",
            "May"=>"مايو",
            "Jun"=>"يونيو",
            "Jul"=>"يوليو",
            "Aug"=>"اغسطس",
            "Sep"=>"سبتمبر",
            "Oct"=>"اكتوبر",
            "Nov"=>"نوفمبر",
            "Dec"=>"ديسمبر",
        ];

        return $month[$m];
    }
}
