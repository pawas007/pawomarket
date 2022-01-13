@extends('layouts.app')
@section('pages')
    @include('pages.partials.banner',[
    'currentPage' => 'Faq'

  ])
@section('title', 'Faq')
    <section id="faqs_arae" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faqs_area_wrapper">
                        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                            <!-- Accordion card -->
                            <div class="card_items_area">
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingOne1">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                        <h5 class="mb-0">
                                            This Designer Bronzer Has Even Buyers Splurging!<i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon tempor.
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                            <!-- Accordion card -->
                            <div class="card_items_area">
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingTwo2">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                        <h5 class="mb-0">
                                            4 Tips for A Colorful Easter Tablescape<i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                        wolf moon officia aute.
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                            <!-- Accordion card -->
                            <div class="card_items_area">
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree3">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                        <h5 class="mb-0">
                                            Hawaii Couples Trip Guide and Spring Break Faves<i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                                    <div class="card-body">
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic.
                                    </div>
                                </div>

                            </div>
                            <!-- Accordion card -->

                            <!-- Accordion card -->
                            <div class="card_items_area">
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingFour4">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                                        <h5 class="mb-0">
                                            If You Struggle To Hit Your Goals, Try This Instead<i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4" data-parent="#accordionEx">
                                    <div class="card-body">
                                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card -->

                            <!-- Accordion card -->
                            <div class="card_items_area">
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingFive5">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                                        <h5 class="mb-0">
                                            4 Tips for A Colorful Easter Tablescape<i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5" data-parent="#accordionEx">
                                    <div class="card-body">
                                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
