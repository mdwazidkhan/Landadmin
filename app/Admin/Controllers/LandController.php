<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Land;

class LandController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Land';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Land());

        $grid->column('id', __('Id'));
        $grid->column('block', __('Block'));
        $grid->column('village', __('Village'));
        $grid->column('area', __('Area'));
        $grid->column('chauhaddi', __('Chauhaddi'));
        $grid->column('ownername', __('Ownername'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Land::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('block', __('Block'));
        $show->field('village', __('Village'));
        $show->field('area', __('Area'));
        $show->field('chauhaddi', __('Chauhaddi'));
        $show->field('ownername', __('Ownername'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Land());

        $form->text('block', __('Block'));
        $form->text('village', __('Village'));
        $form->text('area', __('Area'));
        $form->text('chauhaddi', __('Chauhaddi'));
        $form->text('ownername', __('Ownername'));

        return $form;
    }
}
