<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\Product; // Asegúrate de que el namespace del modelo Product esté bien

class ProductController extends AdminController
{
    /**
     * Título para el recurso actual.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Crear un constructor de grid.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('description', __('Description'));
        $grid->column('price', __('Price'));
        $grid->column('stock', __('Stock'));
        $grid->column('image')->image();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Crear un constructor de show.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('description', __('Description'));
        $show->field('price', __('Price'));
        $show->field('stock', __('Stock'));
        $show->field('image', __('Image'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Crear un constructor de formulario.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->text('description', __('Description'));
        $form->decimal('price', __('Price'));
        $form->number('stock', __('Stock'));
        $form->image('image', __('Image'));

        return $form;
    }
}
