<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity
 *
 * @property int $id
 * @property int|null $article_id
 * @property string|null $comment
 * @property string|null $name
 * @property string|null $email
 *
 * @property \App\Model\Entity\Article $article
 */
class Comment extends Entity
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
        'article_id' => true,
        'comment' => true,
        'name' => true,
        'email' => true,
        'article' => true,
        'created' => true,
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
