
<!-- Modal -->
<div class="modal fade" id="promoModal" tabindex="-1" aria-labelledby="promoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark text-white">

            <div class="modal-header">
                <div class="modal-title fs-5 fw-light" id="promoModalLabel">{{__('Promoción Noviembre y Diciembre 2024')}}</div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-0" style="background: linear-gradient(to right, white 20%, #cb9a23 20%);">

                <div class="row py-3">

                    <div class="col-12 text-end mb-4 mb-lg-0">
                        <img width="100px" src="{{asset('img/the-one-logo-white.webp')}}" alt="Logo The One Bucerías">
                    </div>

                    <div class="col-6 col-lg-5 align-self-center">
                        <div class="shadow rounded-4 bg-white text-orange text-center p-3">
                            <strong class="fs-3">{{__('Promoción')}}</strong>
                            <div>{{__('Noviembre y Diciembre 2024')}}</div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-5 align-self-center">
                        <strong class="fs-4">{{__('Descuento del 10%')}}</strong>
                        <div>{{__('En todas nuestras unidades, y te incluimos los electrodomésticos')}}</div>
                    </div>

                    <div class="col-3 col-lg-5 mt-4"></div>

                    <div class="col-9 col-lg-7 fw-light mt-5" style="font-size: 12px;">
                        {{__('Valido del 1 de Noviembre al 31 de Diciembre de 2024')}}
                    </div>

                </div>

                <img src="{{asset('/img/exteriors/rooftop-pool.webp')}}" alt="{{__('Promoción Noviembre y Diciembre 2024')}}" class="w-100">
            </div>

            <div class="modal-footer">
                <a href="{{route('inventory')}}" class="btn btn-orange">{{__('Ver Inventario')}}</a>
            </div>

        </div>
    </div>
</div>