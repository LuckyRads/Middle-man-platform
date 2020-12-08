@extends('layouts.app')

@section('content')
    {{--    <main>--}}

    {{--        <section class="py-5 text-center container">--}}
    {{--            <div class="row py-lg-5">--}}
    {{--                <div class="col-lg-6 col-md-8 mx-auto">--}}
    {{--                    <h1 class="fw-light">Middleman Service</h1>--}}
    {{--                    <p class="lead text-muted">It’s no secret that there are so many scammers in the online world who--}}
    {{--                        want to profit by deception. The project should help the person to quickly find a broker who--}}
    {{--                        will help evaluate the purchase and execute the transaction safely.</p>--}}
    {{--                    <p>--}}
    {{--                        <a href="{{ route('login') }}" class="btn btn-primary my-2">Start using</a>--}}
    {{--                    </p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}

    {{--    </main>--}}

    <main class="container">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Middleman Service</h1>
            <p class="lead">It’s no secret that there are so many scammers in the online world who
                want to profit by deception. The project should help the person to quickly find a broker who
                will help evaluate the purchase and execute the transaction safely.</p>
        </div>

        <div class="container marketing">
            <hr>

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">The Main goal. <span class="text-muted">Never seen before.</span>
                    </h2>
                    <p class="lead">The main goal of the Middleman program is to help the consumer protect himself
                        from scams. The project should help the person to quickly find a broker who will help evaluate
                        the purchase and execute the transaction safely.</p>
                </div>
                <div class="col-md-5">
                    <svg width="30em" height="30em" viewBox="0 0 16 16" class="bi bi-bag-check" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
                        <path fill-rule="evenodd"
                              d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                </div>
            </div>

            <hr>

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it’s that safe. <span
                            class="text-muted">See for yourself.</span></h2>
                    <p class="lead">The main step of the purchase is to inform and agree on the use of mediation
                        services. The money and the purchased item will be sent to the broker. The broker will
                        acknowledge receipt and send item descriptions with photos to the buyer.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg width="30em" height="30em" viewBox="0 0 16 16" class="bi bi-shield-plus" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
                        <path fill-rule="evenodd"
                              d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                    </svg>

                </div>
            </div>

            <hr>

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">If everything is right for the buyer, then the broker sends the money to the seller
                        and the item to the buyer. If the buyer did not like something, the money will be refunded and
                        the item will be sent back.</p>
                </div>
                <div class="col-md-5">
                    <svg width="30em" height="30em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path
                            d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                        <circle cx="8" cy="4.5" r="1"/>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">
        </div>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Pricing options</h1>
        </div>

        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Standard</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">0<small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>5 requests included</li>
                            <li>Self-Pickup service</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                        </ul>

                        <a href="{{ route('login') }}">
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                                {{ __('Login') }}
                            </button>
                        </a>


                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">€50 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>10 requests included</li>
                            <li>Express Shipping</li>
                            <li>Phone & Mail support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$500 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Unlimited requests</li>
                            <li>Custom Shipping</li>
                            <li>Phone and email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                    </div>
                </div>
            </div>
        </div>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
                    <small class="d-block mb-3 text-muted">&copy; 2019-2020</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Cool stuff</a></li>
                        <li><a class="link-secondary" href="#">Random feature</a></li>
                        <li><a class="link-secondary" href="#">Team feature</a></li>
                        <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                        <li><a class="link-secondary" href="#">Another one</a></li>
                        <li><a class="link-secondary" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Resource</a></li>
                        <li><a class="link-secondary" href="#">Resource name</a></li>
                        <li><a class="link-secondary" href="#">Another resource</a></li>
                        <li><a class="link-secondary" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Team</a></li>
                        <li><a class="link-secondary" href="#">Locations</a></li>
                        <li><a class="link-secondary" href="#">Privacy</a></li>
                        <li><a class="link-secondary" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </main>
@endsection
