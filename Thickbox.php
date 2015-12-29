<?php
/**
 * @link https://github.com/chandrantwins/yii2-thickbox
 * @copyright Copyright (c) 2015 Chandran Nepolean
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace chandran\widgets;

use yii\base\Widget;

/**
 * Widget renders an thickbox jQuery widget.
 *
 * For example:
 *
 * In View
 * ==================
 * use chandran\widgets\Thickbox;
 * 
 * echo Thickbox::widget([
 * ]);
 *
 *
 * @author Chandran Nepolean
 * @see http://codylindley.com/thickbox/
 * @package chandran\widgets\thickbox
 */
class Thickbox extends Widget
{
    public function init()
    {
        parent::init();

        $view = $this->getView();

        ThickboxAsset::register($view);

    }
}