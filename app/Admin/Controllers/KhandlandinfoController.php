<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Khandlandinfo;

class KhandlandinfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Khandlandinfo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Khandlandinfo());

        $grid->column('vid', __('Vid'));
        $grid->column('kid', __('Kid'));
        $grid->column('village', __('Village'));
        $grid->column('area', __('Area'));
        $grid->column('Chauhaddi', __('Chauhaddi'));
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
        $show = new Show(Khandlandinfo::findOrFail($id));

        $show->field('vid', __('Vid'));
        $show->field('kid', __('Kid'));
        $show->field('village', __('Village'));
        $show->field('area', __('Area'));
        $show->field('Chauhaddi', __('Chauhaddi'));
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
        $form = new Form(new Khandlandinfo());

        $form->number('kid', __('Kid'));
        $form->text('village', __('Village'));
        $form->text('area', __('Area'));
        $form->text('Chauhaddi', __('Chauhaddi'));
        $form->text('ownername', __('Ownername'));

        return $form;
    }
}
