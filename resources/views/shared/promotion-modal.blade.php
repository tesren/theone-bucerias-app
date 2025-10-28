
<!-- Modal -->
<div class="modal fade" id="promoModal" tabindex="-1" aria-labelledby="promoModalLabel" aria-hidden="true" style="z-index: 1090;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content text-white" style="background-color: #0C3C60;">

            <div class="modal-header">
                <div class="modal-title fs-5 fw-light" id="promoModalLabel">{{__('Promoción por tiempo limitado')}}</div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-0">

                <div class="row py-3">

                    <div class="col-12 text-center">
                       
                        <div id="carouselPromosModal" class="carousel slide">

                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <picture>
                                        <source media="(max-width: 768px)" srcset="{{asset('img/promos/promo-1-'.app()->getLocale().'.jpg')}}" type="image/webp">

                                        <img src="{{asset('img/promos/promo-1-'.app()->getLocale().'-oct.jpg')}}" class="d-block w-100" alt="{{__('Promoción por tiempo limitado')}}">
                                    </picture>
                                </div>

                                <div class="carousel-item">
                                    <picture>
                                        <source media="(max-width: 768px)" srcset="{{asset('img/promos/promo-2-'.app()->getLocale().'.jpg')}}" type="image/webp">

                                        <img src="{{asset('img/promos/promo-2-'.app()->getLocale().'-oct.jpg')}}" class="d-block w-100" alt="{{__('Promoción por tiempo limitado')}}">
                                    </picture>
                                </div>

                                <div class="carousel-item">
                                    <picture>
                                        <source media="(max-width: 768px)" srcset="{{asset('img/promos/promo-3-'.app()->getLocale().'.jpg')}}" type="image/webp">

                                        <img src="{{asset('img/promos/promo-3-'.app()->getLocale().'-oct.jpg')}}" class="d-block w-100" alt="{{__('Promoción por tiempo limitado')}}">
                                    </picture>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromosModal" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselPromosModal" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>

                    {{-- <div class="col-6 col-lg-5 align-self-center">
                        <div class="shadow rounded-4 bg-white text-orange text-center p-3">
                            <strong class="fs-3">{{__('Promoción')}}</strong>
                            <div>{{__('Julio 2025')}}</div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-5 align-self-center">
                        <strong class="fs-4">{{__('Descuento del 10%')}}</strong>
                        <div>{{__('En todas nuestras unidades, y te incluimos los electrodomésticos')}}</div>
                    </div>

                    <div class="col-3 col-lg-5 mt-4"></div> --}}

                </div>

                {{-- <img src="{{asset('/img/exteriors/rooftop-pool.jpg')}}" alt="{{__('Promoción por tiempo limitado')}}" class="w-100"> --}}
            </div>

            <div class="modal-footer">
                <a href="{{route('inventory')}}" class="btn btn-orange">{{__('Ver Inventario')}}</a>
            </div>

        </div>
    </div>
</div>