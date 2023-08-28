<?php

namespace SussexCoder\Poll\DashboardWidgets;

use Admin\Classes\BaseDashboardWidget;
use SussexCoder\Poll\Models\VoteModel as VoteModel;
use Igniter\Frontend\Models\Menus_model as MenuItemsModel;

/**
 * Charts dashboard widget.
 */
class Widget extends BaseDashboardWidget
{
    /**
     * @var string A unique alias to identify this widget.
     */
    protected $defaultAlias = 'poll-widget';

    public function defineProperties()
    {
        return [
            'pollId' => [
                'label' => 'Poll ID',
                'comment' => 'The ID of the Poll of which to display results',
                'default' => 'pollBlock',
                'validationRule' => 'required',
            ],
        ];
    }

    /**
     * Renders the widget.
     */
    public function render()
    {   
        $this->prepareVars();
        return $this->makePartial('widget/widget');
    }

    protected function prepareVars()
    {   
        $results = [];
        $items = VoteModel::where('poll_name', 'pollBlock')->groupBy('menu_item_id')->get();

        foreach ($items as $item){
            $results[$item->menu_item_id] = [
                'voteCount'         => VoteModel::where(['poll_name' => 'pollBlock', 'menu_item_id' => $item->menu_item_id])->count(),
                'menuItem'          => MenuItemsModel::where('menu_id', $item->menu_item_id)->first()
            ];
        }

        $this->vars['results'] = $results;
        $this->vars['pollId'] = $this->property('pollId', 'pollBlock');
    }
}
