<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetalleCuentaRequest;
use App\Http\Requests\UpdateDetalleCuentaRequest;
use App\Repositories\DetalleCuentaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class DetalleCuentaController extends AppBaseController
{
    /** @var  DetalleCuentaRepository */
    private $detalleCuentaRepository;

    public function __construct(DetalleCuentaRepository $detalleCuentaRepo)
    {
        $this->detalleCuentaRepository = $detalleCuentaRepo;
    }

    /**
     * Display a listing of the DetalleCuenta.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $detalleCuentas = $this->detalleCuentaRepository->all();

        return view('detalle_cuentas.index')
            ->with('detalleCuentas', $detalleCuentas);
    }

    /**
     * Show the form for creating a new DetalleCuenta.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        return view('detalle_cuentas.create');
    }

    /**
     * Store a newly created DetalleCuenta in storage.
     *
     * @param CreateDetalleCuentaRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateDetalleCuentaRequest $request)
    {
        $input = $request->all();

        $detalleCuenta = $this->detalleCuentaRepository->create($input);

        Flash::success('Detalle Cuenta saved successfully.');

        return redirect(route('detalleCuentas.index'));
    }

    /**
     * Display the specified DetalleCuenta.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $detalleCuenta = $this->detalleCuentaRepository->find($id);

        if (empty($detalleCuenta)) {
            Flash::error('Detalle Cuenta not found');

            return redirect(route('detalleCuentas.index'));
        }

        return view('detalle_cuentas.show')->with('detalleCuenta', $detalleCuenta);
    }

    /**
     * Show the form for editing the specified DetalleCuenta.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $detalleCuenta = $this->detalleCuentaRepository->find($id);

        if (empty($detalleCuenta)) {
            Flash::error('Detalle Cuenta not found');

            return redirect(route('detalleCuentas.index'));
        }

        return view('detalle_cuentas.edit')->with('detalleCuenta', $detalleCuenta);
    }

    /**
     * Update the specified DetalleCuenta in storage.
     *
     * @param int $id
     * @param UpdateDetalleCuentaRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateDetalleCuentaRequest $request)
    {
        $detalleCuenta = $this->detalleCuentaRepository->find($id);

        if (empty($detalleCuenta)) {
            Flash::error('Detalle Cuenta not found');

            return redirect(route('detalleCuentas.index'));
        }

        $detalleCuenta = $this->detalleCuentaRepository->update($request->all(), $id);

        Flash::success('Detalle Cuenta updated successfully.');

        return redirect(route('detalleCuentas.index'));
    }

    /**
     * Remove the specified DetalleCuenta from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $detalleCuenta = $this->detalleCuentaRepository->find($id);

        if (empty($detalleCuenta)) {
            Flash::error('Detalle Cuenta not found');

            return redirect(route('detalleCuentas.index'));
        }

        $this->detalleCuentaRepository->delete($id);

        Flash::success('Detalle Cuenta deleted successfully.');

        return redirect(route('detalleCuentas.index'));
    }
}
