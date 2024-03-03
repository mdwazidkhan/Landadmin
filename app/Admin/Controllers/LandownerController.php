<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Landowner;

class LandownerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Landowner';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Landowner());

        $grid->column('id', __('Id'));
        $grid->column('ownername', __('Ownername'));
        $grid->column('village', __('Village'));
        $grid->column('mauja', __('Mauja'));
        $grid->column('chauhaddi', __('Chauhaddi'));
        $grid->column('khand_id', __('Khand id'));
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
        $show = new Show(Landowner::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('ownername', __('Ownername'));
        $show->field('village', __('Village'));
        $show->field('mauja', __('Mauja'));
        $show->field('chauhaddi', __('Chauhaddi'));
        $show->field('khand_id', __('Khand id'));
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
        $form = new Form(new Landowner());

        $form->text('ownername', __('Ownername'));
        $form->text('village', __('Village'));
        $form->text('mauja', __('Mauja'));
        $form->text('chauhaddi', __('Chauhaddi'));
        $form->text('khand_id', __('Khand id'));

        return $form;
    }
}
