<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Employees;

class EmployeesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Employees';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Employees());

        $grid->column('EmployeeID', __('EmployeeID'));
        $grid->column('FirstName', __('FirstName'));
        $grid->column('LastName', __('LastName'));
        $grid->column('Email', __('Email'));
        $grid->column('HireDate', __('HireDate'));

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
        $show = new Show(Employees::findOrFail($id));

        $show->field('EmployeeID', __('EmployeeID'));
        $show->field('FirstName', __('FirstName'));
        $show->field('LastName', __('LastName'));
        $show->field('Email', __('Email'));
        $show->field('HireDate', __('HireDate'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Employees());

        $form->number('EmployeeID', __('EmployeeID'));
        $form->text('FirstName', __('FirstName'));
        $form->text('LastName', __('LastName'));
        $form->email('Email', __('Email'));
        $form->date('HireDate', __('HireDate'))->default(date('Y-m-d'));

        return $form;
    }
}
