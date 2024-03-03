<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Khandland;

class KhandlandController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Khandland';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Khandland());

        $grid->column('id', __('Id'));
        $grid->column('village', __('Village'));
        $grid->column('area', __('Area'));
        $grid->column('chauhaddi', __('Chauhaddi'));
        $grid->column('ownername', __('Ownername'));
        $grid->column('kid', __('Kid'));
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
        $show = new Show(Khandland::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('village', __('Village'));
        $show->field('area', __('Area'));
        $show->field('chauhaddi', __('Chauhaddi'));
        $show->field('ownername', __('Ownername'));
        $show->field('kid', __('Kid'));
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
        $form = new Form(new Khandland());

        $form->text('village', __('Village'));
        $form->text('area', __('Area'));
        $form->text('chauhaddi', __('Chauhaddi'));
        $form->text('ownername', __('Ownername'));
        $form->number('kid', __('Kid'));

        return $form;
    }
}
