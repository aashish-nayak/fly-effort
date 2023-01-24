@extends('layouts.frontend.master')
@section('title','FAQ')

@section('content')
<section class="same-section-spacing bg-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-box">
                    <h2>FAQ's</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ws-section-spacing ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h3 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <span>Est dolor diam justo et duo nonumy, et consetetur et. </span>
                                    <i class="more-less fas fa-angle-down"></i>
                                </a>
                            </h3>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                    et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente
                                    ea proident.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Voluptua dolore tempor takimata dolor kasd. Sadipscing lorem sit clita
                                        dolor.</span>
                                    <i class="more-less fas fa-angle-down"></i>
                                </a>
                            </h3>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                    et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente
                                    ea proident.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>Kasd at takimata tempor accusam et tempor sadipscing elitr sit.</span>
                                    <i class="more-less fas fa-angle-down"></i>
                                </a>
                            </h3>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                    et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente
                                    ea proident.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfour">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>Sanctus gubergren ut consetetur eos est est nonumy dolores lorem.</span>
                                    <i class="more-less fas fa-angle-down"></i>
                                </a>
                            </h3>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                    et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente
                                    ea proident.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span>Ea erat lorem dolor nonumy sit rebum accusam sed amet.</span>
                                    <i class="more-less fas fa-angle-down"></i>
                                </a>
                            </h3>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFive">
                            <div class="panel-body">
                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                    et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente
                                    ea proident.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- panel-group -->
            </div>
        </div>
    </div>
</section>
@endsection