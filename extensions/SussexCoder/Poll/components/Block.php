<?php

namespace SussexCoder\Poll\Components;

use System\Classes\BaseComponent;
use Igniter\Frontend\Models\Menus_model as MenuItemsModel;
use SussexCoder\Poll\Models\VoteModel as VoteModel;

class Block extends BaseComponent
{
    public function defineProperties()
    {
        return [
            'title' => [
                'label'      	=> 'Title',
                'type'          => 'text',
                'validationRule'=> 'required',
                'placeholder'   => 'lang:sussexcoder.poll::default.text_poll_title'
            ], 
            'buttonText' => [
                'label'      	=> 'CTA Button Text',
                'type'          => 'text',
                'validationRule'=> 'required',
                'placeholder'   => 'lang:sussexcoder.poll::default.text_vote_now'
            ],
            'items' => [
                'label' => 'lang:sussexcoder.poll::default.text_menu_items_label',
                'type' => 'selectlist',
                'mode' => 'checkbox',
                'validationRule' => 'required|array',
            ]
        ];
    }

    public function onVote()
    {
        $menuItemId = post('menuItemId');
        $vote = new VoteModel;
        $vote->menu_item_id = $menuItemId;
        $vote->poll_name = $this->name;
        $vote->save();
    }

    public static function getItemsOptions()
    {
        return MenuItemsModel::dropdown('menu_name');
    }

    public function onRun() {
        $this->page['title'] = $this->property('title', 'lang:sussexcoder.poll::default.text_poll_title');
        $this->page['buttonText'] = $this->property('buttonText', 'lang:sussexcoder.poll::default.text_vote_now');
        $this->page['menuItems'] = $this->loadItems();
    }

    protected function loadItems()
    {
        return MenuItemsModel::getByIds([
            'page' => '1',
            'pageLimit' => $this->property('limit'),
            'menuIds' => $this->property('items', []),
        ]);
    }
}
