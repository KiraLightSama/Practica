<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCuentaRequest;
use App\Http\Requests\UpdateCuentaRequest;
use App\Models\Producto;
use App\Repositories\CuentaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class CuentaController extends AppBaseController
{
    /** @var  CuentaRepository */
    private $cuentaRepository;

    public function __construct(CuentaRepository $cuentaRepo)
    {
        $this->cuentaRepository = $cuentaRepo;
    }

    /**
     * Display a listing of the Cuenta.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $cuentas = $this->cuentaRepository->all();

        return view('cuentas.index')
            ->with('cuentas', $cuentas);
    }

    /**
     * Show the form for creating a new Cuenta.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        $productos = Producto::all();
        return view('cuentas.create', compact('productos'));
    }

    /**
     * Store a newly created Cuenta in storage.
     *
     * @param CreateCuentaRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateCuentaRequest $request)
    {
        $input = $request->all();

        $cuenta = $this->cuentaRepository->create($input);

        $cuenta->productos()->attach($request->productos_id, $request->cantidad);

        Flash::success('Cuenta saved successfully.');

        return redirect(route('cuentas.index'));
    }

    /**
     * Display the specified Cuenta.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $cuenta = $this->cuentaRepository->find($id);

        if (empty($cuenta)) {
            Flash::error('Cuenta not found');

            return redirect(route('cuentas.index'));
        }

        return view('cuentas.show')->with('cuenta', $cuenta);
    }

    /**
     * Show the form for editing the specified Cuenta.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $cuenta = $this->cuentaRepository->find($id);
        $productos = Producto::all();
        if (empty($cuenta)) {
            Flash::error('Cuenta not found');

            return redirect(route('cuentas.index'));
        }

        return view('cuentas.edit', compact('cuenta', 'productos'));
    }

    /**
     * Update the specified Cuenta in storage.
     *
     * @param int $id
     * @param UpdateCuentaRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateCuentaRequest $request)
    {
        $cuenta = $this->cuentaRepository->find($id);

        if (empty($cuenta)) {
            Flash::error('Cuenta not found');

            return redirect(route('cuentas.index'));
        }

        $cuenta = $this->cuentaRepository->update($request->all(), $id);

        Flash::success('Cuenta updated successfully.');

        return redirect(route('cuentas.index'));
    }

    /**
     * Remove the specified Cuenta from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $cuenta = $this->cuentaRepository->find($id);

        if (empty($cuenta)) {
            Flash::error('Cuenta not found');

            return redirect(route('cuentas.index'));
        }

        $this->cuentaRepository->delete($id);

        Flash::success('Cuenta deleted successfully.');

        return redirect(route('cuentas.index'));
    }
}
