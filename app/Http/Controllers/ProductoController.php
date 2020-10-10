<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Repositories\ProductoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class ProductoController extends AppBaseController
{
    /** @var  ProductoRepository */
    private $productoRepository;

    public function __construct(ProductoRepository $productoRepo)
    {
        $this->middleware('auth');
        $this->productoRepository = $productoRepo;
    }

    /**
     * Display a listing of the Producto.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $productos = $this->productoRepository->all();

        return view('productos.index')
            ->with('productos', $productos);
    }

    /**
     * Show the form for creating a new Producto.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created Producto in storage.
     *
     * @param CreateProductoRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateProductoRequest $request)
    {
        $input = $request->all();

        $producto = $this->productoRepository->create($input);

        Flash::success('Producto saved successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Display the specified Producto.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        return view('productos.show')->with('producto', $producto);
    }

    /**
     * Show the form for editing the specified Producto.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        return view('productos.edit')->with('producto', $producto);
    }

    /**
     * Update the specified Producto in storage.
     *
     * @param int $id
     * @param UpdateProductoRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateProductoRequest $request)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        $producto = $this->productoRepository->update($request->all(), $id);

        Flash::success('Producto updated successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified Producto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        $this->productoRepository->delete($id);

        Flash::success('Producto deleted successfully.');

        return redirect(route('productos.index'));
    }
}
