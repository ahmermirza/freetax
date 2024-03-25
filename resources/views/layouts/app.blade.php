<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .fa-chevron-down {
            font-size: smaller;
        }

        *:not(i) {
            color: #222f45;
        }

        .form-control.is-invalid {
            background-image: none;
        }

        .custom-index-card {
            border: 1px solid #e2e5e9;
            box-shadow: 1px 2px 3px -2px rgba(33, 47, 69, .25);
        }

        .content-shadow {
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;
        }

        .state-img {
            width: 50%;
        }

        .index-custom-table-width {
            width: 70%;
        }

        @media (max-width: 1000px) {
            .radio-label-custom-width {
                width: 50%;
            }

            .hr-custom-width {
                width: 100% !important;
            }

            .justify-content-start-mobile {
                display: flex;
                justify-content: start !important;
            }

            .button-custom-width {
                width: 100% !important;
            }

            .shadow-none {
                box-shadow: none !important;
            }

            .state-img {
                width: 100%;
            }

            .index-custom-table-width {
                width: 100%;
            }
        }

        @media (max-width: 1200px) {
            .bg-light-custom {
                background-color: rgba(248, 249, 250, 1)
            }
        }

        @media (min-width: 1200px) {
            .dropdown-menu {
                border: 2px solid white;
                border-radius: 12px;
            }

            .nav-custom-item {
                background-color: #ffffff !important;
                border-radius: 50rem !important;
                box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
                border-color: #212529;
                display: inline-block;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                text-align: center;
                text-decoration: none;
                vertical-align: middle;
                user-select: none;
                background-color: transparent;
                border: 1px solid transparent;
                padding: .375rem .75rem;
                font-size: 1rem;
                border-radius: .25rem;
                transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }

            .nav-custom-item:hover {
                background-color: #222f45 !important;
            }

            .nav-custom-item:hover .nav-link {
                color: white !important;
            }

            .dropdown-item:hover {
                background-color: #222f45;
                border: none;
                color: white;
                text-decoration: none;
                display: inline-block;
                border-radius: 10px;
                /* font-weight: 600; */
            }

            /* ul .dropdown-menu-custom-width {
                width: 740px;
            } */
        }
    </style>
    {{-- @stack('custom-styling') --}}
    <title>
        @yield('title') | {{ env('APP_NAME') }}
    </title>
</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand font-weight-bold text-dark h1 ps-5 pe-3" href="{{ route('home') }}"><b>FreeTax</b></a>

            <div class="collapse show navbar-collapse d-xl-flex justify-content-end" id="navbar_main">
                {{-- <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-dark p-2" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark p-2" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                </ul> --}}

                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link text-dark font-weight-bold p-xl-3 p-1 pe-xl-5 text-uppercase"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->username }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <form action="{{ route('logout') }}" method="post" class="d-flex inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item font-weight-bold">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                    {{-- @guest
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold p-3 pe-1" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold p-3 pe-5"
                                href="{{ route('register') }}">Register</a>
                        </li>
                    @endguest --}}
                </ul>
            </div>
        </div>
    </nav>

    @auth
    @php
        $personal = auth()->user()->personals()->first();
    @endphp
        <nav class="navbar navbar-expand-xl navbar-light bg-light-custom">
            <div class="container-fluid">
                {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar_secondary" aria-controls="navbar_secondary" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                {{-- <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main"
                    aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                <div class="collapse navbar-collapse d-xl-flex justify-content-center" id="navbar_secondary">
                    <div class="col-xl-9">
                        <ul class="navbar-nav d-xl-flex justify-content-between">
                            <li class="nav-item dropdown nav-custom-item px-lg-1 px-xl-1" role="button">
                                <a class="nav-link text-dark h6 py-1 my-0 ps-2" href="#"
                                    id="navbarDarkDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-check text-success"
                                        aria-hidden="true"></i>&nbsp;&nbsp;Personal&nbsp;&nbsp;<i
                                        class="fa-solid fa-chevron-down"></i></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-white dropdown-menu-custom-width round-3 mt-3 shadow bg-white"
                                    aria-labelledby="navbarDarkDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('personal.create', ['info' => 'basic']) }}"><i
                                            class="fa fa-check text-success" aria-hidden="true"></i>&nbsp;&nbsp;Taxpayer
                                        Information</a>
                                    <a class="dropdown-item @if(!$personal) disabled @endif"
                                        href="{{ route('personal.create', ['info' => 'filing-status']) }}"><i
                                            class="fa fa-check text-success" aria-hidden="true"></i>&nbsp;&nbsp;Filing
                                        Status</a>
                                    @if (auth()->user()->personals &&
                                            auth()->user()->personals->count() &&
                                            in_array(auth()->user()->personals()->first()->filing_status, [2, 3]))
                                        <a class="dropdown-item"
                                            href="{{ route('personal.create', ['info' => 'spouse']) }}"><i
                                                class="fa fa-check text-success" aria-hidden="true"></i>&nbsp;&nbsp;Spouse
                                            Information</a>
                                    @endif
                                    <a class="dropdown-item @if(!$personal) disabled @endif" href="{{ route('dependents.index') }}"><i
                                            class="fa fa-check text-success"
                                            aria-hidden="true"></i>&nbsp;&nbsp;Dependents</a>
                                </ul>
                            </li>
                            <li class="nav-item dropdown nav-custom-item px-lg-1 px-xl-1" role="button">
                                <a class="nav-link text-dark h6 py-1 my-0 ps-2" href="#"
                                    id="navbarDarkDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-check text-success"
                                        aria-hidden="true"></i>&nbsp;&nbsp;Income&nbsp;&nbsp;<i
                                        class="fa-solid fa-chevron-down"></i></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-white dropdown-menu-custom-width round-3 mt-3 shadow bg-white"
                                    aria-labelledby="navbarDarkDropdownMenuLink">
                                    <h6 class="dropdown-header">Common Income</h6>
                                    <li><a class="dropdown-item @if(!$personal) disabled @endif" href="{{ route('w-2.index') }}"><i
                                                class="fa fa-check text-success" aria-hidden="true"></i>&nbsp;&nbsp;Wages
                                            (W-2)</a></li>
                                    <li><a class="dropdown-item @if(!$personal) disabled @endif" href="{{ route('income.unemployment.create') }}"><i
                                                class="fa fa-check text-success"
                                                aria-hidden="true"></i>&nbsp;&nbsp;Unemployment Compensation (1099-G)</a>
                                    </li>
                                    <li><a class="dropdown-item @if(!$personal) disabled @endif" href="{{ route('income.ssb.create') }}"><i
                                                class="fa fa-check text-success" aria-hidden="true"></i>&nbsp;&nbsp;Social
                                            Security Benefits (SSA-1099)</a></li>
                                    <li><a class="dropdown-item @if(!$personal) disabled @endif" href="{{ route('income.crypto.create') }}"><i
                                                class="fa fa-check text-success"
                                                aria-hidden="true"></i>&nbsp;&nbsp;Cryptocurrency</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown nav-custom-item px-lg-1 px-xl-1" role="button">
                                <a class="nav-link text-dark h6 py-1 my-0 ps-2" href="#"
                                    id="navbarDarkDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>&nbsp;&nbsp;Deductions /
                                    Credits&nbsp;&nbsp;<i class="fa-solid fa-chevron-down"></i></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-white dropdown-menu-custom-width round-3 mt-3 shadow bg-white"
                                    aria-labelledby="navbarDarkDropdownMenuLink">
                                    <h6 class="dropdown-header">Itemized Deductions</h6>
                                    <li><a class="dropdown-item @if(!$personal) disabled @endif" href="{{ route('itemized.deductions') }}">Itemized Deductions Selection</a></li>
                                    <li><a class="dropdown-item @if(!$personal) disabled @endif" href="{{ route('mortgage-interest.index') }}"><i
                                                class="fa fa-check text-success"
                                                aria-hidden="true"></i>&nbsp;&nbsp;Homeowner Expenses (1098)</a></li>
                                    <li><a class="dropdown-item @if(!$personal) disabled @endif" href="{{ route('charities-donations.create') }}"><i
                                                class="fa fa-check text-success"
                                                aria-hidden="true"></i>&nbsp;&nbsp;Donations</a></li>
                                    <li><a class="dropdown-item @if(!$personal) disabled @endif" href="{{ route('medical-expenses.create') }}"><i
                                                class="fa fa-check text-success"
                                                aria-hidden="true"></i>&nbsp;&nbsp;Medical Expenses</a></li>
                                    <li><a class="dropdown-item @if(!$personal) disabled @endif" href="{{ route('taxes.create') }}"><i
                                                class="fa fa-check text-success" aria-hidden="true"></i>&nbsp;&nbsp;Taxes
                                            Paid</a></li>
                                </ul>
                            </li>
                            {{-- <li class="nav-item dropdown nav-custom-item px-lg-1 px-xl-1" role="button">
                                <a class="nav-link text-dark h6 py-1 my-0 ps-2" href="#"
                                    id="navbarDarkDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-check text-success"
                                        aria-hidden="true"></i>&nbsp;&nbsp;Misc&nbsp;&nbsp;<i
                                        class="fa-solid fa-chevron-down"></i></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-white dropdown-menu-custom-width dropdown-menu-end round-3 mt-3 shadow bg-white"
                                    aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-check text-success"
                                                aria-hidden="true"></i>&nbsp;&nbsp;Action</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-check text-success"
                                                aria-hidden="true"></i>&nbsp;&nbsp;Another action</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-check text-success"
                                                aria-hidden="true"></i>&nbsp;&nbsp;Something else here</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item dropdown nav-custom-item px-lg-1 px-xl-1" role="button">
                                <a class="nav-link text-dark h6 py-1 my-0 ps-2" href="#"
                                    id="navbarDarkDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-check text-success"
                                        aria-hidden="true"></i>&nbsp;&nbsp;Summary&nbsp;&nbsp;<i
                                        class="fa-solid fa-chevron-down"></i></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-white dropdown-menu-custom-width dropdown-menu-end round-3 mt-3 shadow bg-white"
                                    aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-check text-success"
                                                aria-hidden="true"></i>&nbsp;&nbsp;Action</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-check text-success"
                                                aria-hidden="true"></i>&nbsp;&nbsp;Another action</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-check text-success"
                                                aria-hidden="true"></i>&nbsp;&nbsp;Something else here</a></li>
                                </ul>
                            </li> --}}
                            <li class="nav-item dropdown nav-custom-item px-lg-1 px-xl-1" role="button">
                                <a class="nav-link text-dark h6 py-1 my-0 ps-2" href="#"
                                    id="navbarDarkDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-check text-success"
                                        aria-hidden="true"></i>&nbsp;&nbsp;State&nbsp;&nbsp;<i
                                        class="fa-solid fa-chevron-down"></i></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-white dropdown-menu-custom-width dropdown-menu-end round-3 mt-3 shadow bg-white"
                                    aria-labelledby="navbarDarkDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('state.index') }}"><i class="fa fa-check text-success"
                                            aria-hidden="true"></i>&nbsp;&nbsp;Your State Tax Returns</a>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    @endauth

    <main class="app-content">
        @yield('content')
        <!-- privacy Modal -->
        <div class="modal fade" id="privacy_modal" tabindex="-1" aria-labelledby="privacy_modal_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="privacy_modal_label">Privacy Statement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="w-100 mb-4"><a
                                    href="//privacy.truste.com/privacy-seal/validation?rid=c42c3969-4ba9-45a8-a024-d06b6af0032e"
                                    title="TRUSTe Privacy Certification" target="_blank"><img
                                        src="//privacy-policy.truste.com/privacy-seal/seal?rid=c42c3969-4ba9-45a8-a024-d06b6af0032e"
                                        alt="TRUSTe Privacy Certification" style="border: none;"></a></div>
                            <p class="mb-1"><i>Updated 11/8/2023</i></p>
                            <p>This privacy statement applies to www.FreeTaxUSA.com which is owned and operated by
                                TaxHawk,
                                Inc. This privacy statement describes how TaxHawk, Inc. collects and uses the personally
                                identifiable information you provide on our web site: <a
                                    href="http://www.FreeTaxUSA.com/">www.FreeTaxUSA.com</a> ("FreeTaxUSA.com"). It
                                also
                                describes the choices available to you regarding our use of your personally identifiable
                                information and how you can access and update this information. FreeTaxUSA.com treats
                                your
                                financial and personally identifiable information as confidential and will not sell or
                                rent
                                any information.</p>
                            <h2 class="t4 pt-3">Information Collection and Use</h2>
                            <p>TaxHawk, Inc. is the sole owner of the information collected on www.FreeTaxUSA.com.
                                Information is collected in order for taxpayers to prepare and electronically file their
                                tax
                                returns. Tax return information is disclosed to appropriate government and financial
                                institutions to file tax returns and comply with Internal Revenue Service requirements.
                                The
                                data collected includes everything that is needed to prepare a tax return, such as
                                names,
                                Social Security numbers, birth dates, mailing address, email address, bank account
                                information, and any tax-related information (e.g., W-2s and 1099 forms). If a purchase
                                is
                                made, credit card information for a credit card payment will be collected. Information
                                may
                                also be collected from customers who contact us for support. The information collected,
                                such
                                as a phone number, will be used to research and resolve customer questions.</p>
                            <p>To comply with European Union (EU) and European Economic Area (EEA) regulatory
                                requirements,
                                we do not provide service or intentionally collect data from EU or EEA residents. By
                                using
                                our service, customers represent that they are not EU or EEA residents.</p>
                            <p>All personally identifiable information collected during account creation and use of the
                                application to prepare taxes is encrypted using Secure Socket Layer (SSL) technology.
                            </p>
                            <p>We may provide a referral service, allowing you to inform a friend about our products. We
                                will ask you for your friend's name and email address. We will automatically send your
                                friend a one-time email inviting them to visit the site. FreeTaxUSA.com stores this
                                information for the sole purpose of sending this one-time email and tracking the success
                                of
                                our referral program. Your friend may contact us at <a
                                    href="mailto:webmaster@FreeTaxUSA.com">webmaster@FreeTaxUSA.com</a> to request that
                                we
                                remove this information from our database. Referral email addresses are automatically
                                deleted according to our data retention policy.</p>
                            <h2 class="t4 pt-3">Data Retention Policy</h2>
                            <p>All data collected by us will be retained for a maximum period of eight (8) years
                                calculated
                                from October 31st of the IRS tax filing deadline year in which the return is due. Data
                                will
                                be deleted after October 31st of the 8th year following the IRS tax filing deadline
                                year,
                                regardless of the year the return is actually filed.</p>
                            <p>For example:</p>
                            <ul>
                                <li>Data collected for a 2023 tax return (which has an IRS tax filing deadline in 2024)
                                    will
                                    be retained until October 31, 2032.</li>
                                <li>Data collected for a 2016 tax return (which has an IRS tax filing deadline in 2017)
                                    will
                                    be retained until October 31, 2025. Even if the return was filed in a later year,
                                    such
                                    as 2024.</li>
                            </ul>
                            <p>This retention policy applies to all data collected for a given tax year regardless of
                                whether an account is active or inactive. All data collected by a third-party service
                                provider is subject to the service provider’s data retention policy.</p>
                            <h2 class="t4 pt-3">Usage Information</h2>
                            <p>Like most websites, FreeTaxUSA.com uses log files and analytical software to track
                                website
                                usage. The information collected may include IP addresses, browser types, browser
                                configuration, internet service providers (ISP), referring/exit pages, platform types,
                                and
                                number of clicks to analyze trends for use in administering and improving the site. </p>
                            <h2 class="t4 pt-3">Tracking Technologies / Cookies</h2>
                            <p>Technologies such as cookies or similar technology are used by FreeTaxUSA.com in order to
                                manage the site, see trends, and to improve the user experience. If your browser rejects
                                cookies, you may still use our site, but your ability to use some features or areas of
                                our
                                site may be limited. The types of cookies or tracking technologies we may use are
                                defined
                                below: </p>
                            <p>Essential cookies are necessary for FreeTaxUSA.com to function properly. </p>
                            <p>Performance and Functionality cookies are used to enhance the performance and
                                functionality
                                of FreeTaxUSA.com but are not essential to its use. Examples of these cookies include:
                                A/B
                                testing version control, page load speed, etc. </p>
                            <p>Advertising cookies and tracking technologies are used to make advertising FreeTaxUSA.com
                                more relevant to users and to stop ads from reappearing on the advertisers’ networks or
                                properties. We use advertising platforms to provide personalized advertising on their
                                properties and ad networks. Advertisers may use third-party cookies to provide
                                personalized
                                FreeTaxUSA.com advertising. </p>
                            <p>Analytics cookies and tracking technologies are used to help understand how the website
                                is
                                being used. Information gathered by analytics is anonymous and viewed in aggregate to
                                see
                                broader traffic trends. </p>
                            <h2 class="t4 pt-3">hCaptcha</h2>
                            <p>We use the hCaptcha anti-bot service (hereinafter "hCaptcha") on our website. This
                                service is
                                provided by Intuition Machines, Inc., a Delaware US Corporation ("IMI"). hCaptcha is
                                used to
                                check whether the data entered on our website (such as on a login page or contact form)
                                has
                                been entered by a human or by an automated program. To do this, hCaptcha analyzes the
                                behavior of the website or mobile app visitor based on various characteristics. This
                                analysis starts automatically as soon as the website or mobile app visitor enters a part
                                of
                                the website or app with hCaptcha enabled. For the analysis, hCaptcha evaluates various
                                information (e.g. IP address, how long the visitor has been on the website or app, or
                                mouse
                                movements made by the user). The data collected during the analysis will be forwarded to
                                IMI. hCaptcha analysis in the "invisible mode" may take place completely in the
                                background.
                                Website or app visitors are not advised that such an analysis is taking place if the
                                user is
                                not shown a challenge. IMI acts as a "service provider" for the purposes of State
                                Privacy
                                Acts. For more information about hCaptcha and IMI's privacy policy and terms of use,
                                please
                                visit the following links: <a href="https://www.hcaptcha.com/privacy"
                                    target="_blank">https://www.hcaptcha.com/privacy</a> and <a
                                    href="https://www.hcaptcha.com/terms"
                                    target="_blank">https://www.hcaptcha.com/terms</a>. </p>
                            <h2 class="t4 pt-3">Contests and Giveaways</h2>
                            <p>Contests and giveaways have their own terms and conditions and should be referenced
                                before
                                entering. </p>
                            <h2 class="t4 pt-3">Communications from FreeTaxUSA.com</h2>
                            <p>Your contact information (email address and/or SMS information) may be used to keep you
                                updated on the status of your return, remind you of important dates on the tax calendar,
                                resolve any problems with transmission of your tax return, request customer feedback,
                                provide product and fulfillment information, and confirmation of credit card or
                                direct-debit
                                payments. If you e-file your tax return, an email and/or SMS text will be sent to you
                                stating whether the IRS has accepted or rejected your e-filed tax return. If problems
                                occur
                                with the transmission of your tax return, a customer support email may be sent out to
                                explain the problem. We'll also send you a confirmation email as a receipt when you pay
                                for
                                any FreeTaxUSA.com services. </p>
                            <p>Occasionally, FreeTaxUSA.com will send out tax information or promotional material
                                dealing
                                with our products. These are considered optional communications and you, as the
                                recipient,
                                can specify whether or not you wish to receive this type of communication. This can be
                                done
                                while creating your account, by using the Edit User Profile portion of the application
                                after
                                signing in, by clicking on the "Unsubscribe" link in the footer of every optional email
                                or
                                by following the instructions found at the following link: <a target="_blank"
                                    href="http://www.FreeTaxUSA.com/unsubscribe">https://www.FreeTaxUSA.com/unsubscribe</a>
                            </p>
                            <h2 class="t4 pt-3">Service Announcements</h2>
                            <p>On rare occasions, it is necessary to send out a strictly service-related announcement.
                                For
                                instance, if service is temporarily suspended for maintenance, FreeTaxUSA.com might send
                                users a notification via email. </p>
                            <h2 class="t4 pt-3">Customer Support</h2>
                            <p>Customer support for FreeTaxUSA.com is provided through our tax application, email, or
                                phone.
                                When a customer support request is received, we will reply via the customer support
                                portion
                                of the application, email, or phone. Before you finish filing your tax return, if your
                                personally identifiable information changes, or if you no longer desire to use our
                                service,
                                you may correct, update or delete it by signing in to your account and making any
                                changes.
                                If you have any questions regarding this process, you may contact us at <a
                                    href="mailto:support@support.FreeTaxUSA.com">support@support.FreeTaxUSA.com</a>; we
                                will respond within a reasonable timeframe. Upon request and verification of your
                                identity,
                                FreeTaxUSA.com will provide you with information about whether we hold any of your
                                personal
                                information. Once the IRS accepts your e-filed tax return, no changes can be made to
                                your
                                account that would change any of the information on the tax return. </p>
                            <p>We may use artificial intelligence (AI) to answer customer support inquiries. If AI is
                                used
                                any information submitted by the customer through the customer support tool will be
                                processed using automated (AI) and manual (human) methods. The information given is
                                solely
                                used for processing the questions submitted and improving the answers provided, and not
                                for
                                any other purpose. </p>
                            <p>Subject to our Data Retention Policy, we will retain your information for as long as
                                needed
                                to provide you services. We will retain and use your information outside of that policy
                                only
                                as necessary to comply with our legal obligations, resolve disputes, and enforce our
                                agreements. </p>
                            <h2 class="t4 pt-3">Legal Disclosures</h2>
                            <p>Though every effort is made to preserve user privacy, in certain situations,
                                FreeTaxUSA.com
                                may be required to disclose personal data in response to lawful requests by public
                                authorities, including to meet national security or law enforcement requirements. We may
                                also disclose your personally identifiable information when required by law wherein we
                                have
                                a good-faith belief that such action is necessary to protect our rights, protect your
                                safety
                                or the safety of others, to investigate fraud to comply with a current judicial
                                proceeding,
                                a court order, respond to a government request, bankruptcy proceedings or similar legal
                                process served on our website. </p>
                            <h2 class="t4 pt-3">Information Sharing</h2>
                            <p>We do not, and will not, sell your personally identifiable information to third parties.
                                We
                                only share your personally identifiable information with third parties in ways that are
                                described in this privacy statement. </p>
                            <h2 class="t4 pt-3">Service Providers</h2>
                            <p>We may provide necessary personally identifiable information to companies that provide
                                services, such as shipping your order, SMS authentication, customer support inquiries,
                                fraud
                                detection, credit card processing, and sending emails. These companies are only
                                authorized
                                to use this information to provide these services. </p>
                            <p>Customer reviews and information provided as part of the review are collected, stored,
                                and
                                managed using a service provider. The review and some details provided by you may be
                                shared
                                with the public. Account verification codes sent through text messaging or voice calls
                                are
                                provided by third-party services. A customer's phone number will be forwarded to the
                                service
                                in order to send the account verification code. </p>
                            <h2 class="t4 pt-3">Credit Card Processing</h2>
                            <p>If during the use of our application you order a product that requires payment, your
                                credit
                                card or direct-debit payment will be processed by a payment processing company. The
                                payment
                                processing companies that we use do not retain, share, store or use personally
                                identifiable
                                information for any secondary purposes. No credit card information will be collected
                                unless
                                there is a payment due. Your credit card data is only used to process your payment. </p>
                            <p>If you choose to pay any federal or state taxes owed amount by credit card, that
                                transaction
                                will be handled by a third-party service and is subject to the service's terms of use
                                and
                                privacy statement. </p>
                            <h2 class="t4 pt-3">Business Transitions</h2>
                            <p>In the event FreeTaxUSA.com goes through a business transition, such as a merger, being
                                acquired by another company, or selling a portion of its assets, the personally
                                identifiable
                                information of users will, in most instances, be part of the assets transferred. Users
                                will
                                be notified, via email and/or through a prominent notice on the FreeTaxUSA.com website,
                                30
                                days prior to a change of ownership or control of their personally identifiable
                                information.
                                If as a result of the business transition, the personally identifiable information will
                                be
                                used in a manner different from that stated at the time of collection, users will be
                                given a
                                choice consistent with our notification of changes section. </p>
                            <h2 class="t4 pt-3">Security</h2>
                            <p>FreeTaxUSA.com maintains physical, electronic, and procedural safeguards that comply with
                                applicable law and federal standards. When users submit sensitive information via the
                                website, it is protected both online and offline. FreeTaxUSA.com uses Secure Socket
                                Layer
                                (SSL) encryption technology to protect all sensitive information. SSL technology is the
                                most
                                commonly used method on the Internet to safely transmit data. Access to your personally
                                identifiable information is protected by a password, of your choosing, in order to
                                maintain
                                security for your account. Only you, or someone with whom you share your password, can
                                access your account to make changes to your return or account information. </p>
                            <p>Along with using SSL encryption to protect sensitive information online, we also take
                                great
                                care to protect user information offline. The FreeTaxUSA.com servers are located in
                                secure
                                data storage facilities with strict security measures and procedures in place. All user
                                information, not just the sensitive information mentioned above, is restricted to only
                                key
                                employees who need the information to perform a specific job function (Example: the
                                customer
                                support manager). Furthermore, all employees are kept up to date on company security and
                                privacy best practices. Before every tax season, as well as any time new policies are
                                added,
                                employees of FreeTaxUSA.com are notified and/or reminded about the importance placed on
                                privacy, and what they can do to ensure the security of user information. However, no
                                method
                                of transmission over the Internet, or method of electronic storage, is 100% secure. If
                                you
                                have any further questions about the security at FreeTaxUSA.com, you can send an email
                                to <a href="mailto:support@support.FreeTaxUSA.com">support@support.FreeTaxUSA.com</a>.
                            </p>
                            <h2 class="t4 pt-3">Community Forums</h2>
                            <p>FreeTaxUSA.com may provide a community forum as a separate service that requires you to
                                create a user account and login information separate from your account for tax
                                preparation
                                products and services. Your account and user information for the community forum may be
                                deleted at your request by emailing your request for deletion to <a
                                    href="mailto:community@FreeTaxUSA.com">community@FreeTaxUSA.com</a>. If you are a
                                resident of California, please refer to the California Privacy Rights section below for
                                any
                                additional information about your rights. All of your account information will be
                                deleted
                                and will not be recoverable. In the event your account is deleted, whether at your
                                request
                                or by termination at the election of FreeTaxUSA.com, the content you have posted may
                                remain
                                on the forum but will no longer be linked to or identified by your account information.
                            </p>
                            <h2 class="t4 pt-3">Links to 3rd Party Sites</h2>
                            <p>Our Site includes links to other websites whose privacy practices may differ from those
                                of
                                FreeTaxUSA.com. If you submit personally identifiable information to any of those sites,
                                your information is governed by their privacy statements. We encourage you to carefully
                                read
                                the privacy statement of any website you visit. </p>
                            <h2 class="t4 pt-3">Notification of Changes</h2>
                            <p>If the privacy statement is changed, we will notify you here, by email, or by means of a
                                notice on the footer of our homepage and sign in screens. We reserve the right to modify
                                this privacy statement at any time. </p>
                            <h2 class="t4">State Privacy Acts</h2>
                            <p>Please visit <a aria-label="click to go to state privacy page"
                                    href="http://www.FreeTaxUSA.com/state-privacy">this page</a> for more information
                                on
                                California Consumer Privacy Act (CCPA). </p>
                            <p>Other state privacy acts defer to Gramm-Leach-Bliley Act (GLBA) for consumer privacy
                                protections. We comply with GLBA and this privacy statement explains your privacy rights
                                as
                                our customer. </p>
                            <h2 class="t4 pt-3">Contact Information</h2>
                            <p>If you have additional questions regarding FreeTaxUSA.com's privacy or security policies,
                                please send your question to <a
                                    href="mailto:webmaster@FreeTaxUSA.com">webmaster@FreeTaxUSA.com</a>.</p>
                            <p>Or, address your written question to:</p>
                            <p><span class=">FreeTaxUSA - Privacy</span><br> 1366 East 1120 South<br> Provo, UT
                                84606 </p>
                            <p>If you have an unresolved privacy or data use concern that we have not addressed
                                satisfactorily, please contact our U.S.-based third-party dispute resolution provider
                                (free
                                of charge) at <a href="https://feedback-form.truste.com/watchdog/request"
                                    target="_blank">https://feedback-form.truste.com/watchdog/request</a>.</p>
                            </section>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- security Modal -->
        <div class="modal fade" id="security_modal" tabindex="-1" aria-labelledby="security_modal_label" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="font-size: 24px;" id="security_modal_label"><b>Your Information is Safe</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row text-center text-sm-start pb-4" data-v-9558f88c="">
                            <div class="col-12 col-sm-4 order-1 order-sm-2 text-center" data-v-9558f88c=""><img
                                    style="max-width:152px;" src="/img/authorized-efile-provider-trans.e5fcf769.png" alt=""
                                    data-v-9558f88c=""></div>
                            <div class="col-12 col-sm-8 order-2 order-sm-1" data-v-9558f88c="">
                                <h2 class="tp" style="font-size: 16px;" data-v-9558f88c=""><b>Trusted Company</b></h2>
                                <p data-v-9558f88c="">As an authorized IRS e-file provider, we meet or exceed the security
                                    requirements outlined by the IRS.</p>
                            </div>
                        </div>
                        <div class="row text-center text-sm-start pb-4" data-v-9558f88c="">
                            <div class="col-12 col-sm-4 order-1 order-sm-2 text-center" data-v-9558f88c="">
                                <div data-v-9558f88c="">
                                    <div id="DigiCertClickID_7EPyCYl-" data-language="en" data-v-9558f88c="">
                                        <div id="DigiCertClickID_7EPyCYl-Seal"
                                            style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: default;">
                                            <img src="//seal.digicert.com/seals/cascade/?tag=7EPyCYl-&amp;referer=auth.freetaxusa.com&amp;format=png&amp;lang=en&amp;an=min"
                                                alt="DigiCert Secured Site Seal" tabindex="0" role="link"
                                                style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: pointer;">
                                        </div>
                                    </div>
                                    <script
                                        data-v-9558f88c=""> var __dcid = __dcid || []; __dcid.push({ "cid": "DigiCertClickID_7EPyCYl-", "tag": "7EPyCYl-" }); (function () { var cid = document.createElement("script"); cid.async = true; cid.src = "//seal.digicert.com/seals/cascade/seal.min.js"; var s = document.getElementsByTagName("script"); var ls = s[(s.length - 1)]; ls.parentNode.insertBefore(cid, ls.nextSibling); }()); </script>
                                </div>
                            </div>
                            <div class="col-12 col-sm-8 order-2 order-sm-1" data-v-9558f88c="">
                                <h2 class="tp" style="font-size: 16px;" data-v-9558f88c=""><b>We Keep Your Information Private</b></h2>
                                <p data-v-9558f88c="">Since we use SSL certificates, your connection is encrypted and sensitive
                                    information is safe with us.</p>
                            </div>
                        </div>
                        <div class="row text-center text-sm-start pb-4" data-v-9558f88c="">
                            <div class="col-12 col-sm-4 order-1 order-sm-2 text-center" data-v-9558f88c=""><img
                                    src="data:image/gif;base64,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"
                                    alt="" data-v-9558f88c=""></div>
                            <div class="col-12 col-sm-8 order-2 order-sm-1" data-v-9558f88c="">
                                <h2 class="tp" style="font-size: 16px;" data-v-9558f88c=""><b>Your Payment Cards are Secure</b></h2>
                                <p data-v-9558f88c="">We comply with rigorous data security standards to protect against theft
                                    of your payment information.</p>
                            </div>
                        </div>
                        <div class="row text-center text-sm-start pb-4" data-v-9558f88c="">
                            <div class="col-12 col-sm-4 order-1 order-sm-2 text-center" data-v-9558f88c=""><a
                                    href="//privacy.truste.com/privacy-seal/validation?rid=c42c3969-4ba9-45a8-a024-d06b6af0032e"
                                    title="TRUSTe Privacy Certification" target="_blank" data-v-9558f88c=""><img
                                        src="//privacy-policy.truste.com/privacy-seal/seal?rid=c42c3969-4ba9-45a8-a024-d06b6af0032e"
                                        alt="TRUSTe Privacy Certification" data-v-9558f88c="" style="border: none;"></a></div>
                            <div class="col-12 col-sm-8 order-2 order-sm-1" data-v-9558f88c="">
                                <h2 class="tp" style="font-size: 16px;" data-v-9558f88c="">Privacy is Our Priority</h2>
                                <p data-v-9558f88c="">Compliance to industry standards ensures adherence to privacy best
                                    practices. <button type="button" data-v-9558f88c="">Read privacy policy</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- accessibility Modal -->
        <div class="modal fade" id="accessibility_modal" tabindex="-1" aria-labelledby="accessibility_modal_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="font-size: 24px;" id="accessibility_modal_label"><b>Accessibility</b>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex flex-column flex-md-row" data-v-7ca7878e="">
                            <div class="order-2 order-md-1" data-v-7ca7878e="">
                                <p data-v-7ca7878e="">TaxHawk, Inc. is committed to ensuring digital accessibility for people
                                    with disabilities. We are continually improving the user experience for everyone and
                                    applying the relevant accessibility standards. We engage in efforts necessary to meet online
                                    usability and web page design requirements recommended by the World Wide Web Consortium
                                    (W3C) in its Web Content Accessibility Guidelines 2.1.</p>
                            </div>
                            <div class="order-1 order-md-1 text-center" data-v-7ca7878e=""><img class="p-2" style="width:7rem;"
                                    src="/img/ncg-logo.afca3ea5.png" alt="Accessibility" data-v-7ca7878e=""></div>
                        </div>
                        <h2 class="tp fw-bold" style="font-size: 16px;" data-v-7ca7878e="">Accessibility Standards</h2>
                        <p data-v-7ca7878e="">For the purposes of this policy, TaxHawk, Inc. conforms the Worldwide Web
                            Consortium's Web Content Accessibility Guidelines version 2.1, Level AA Conformance (WCAG 2.1 Level
                            AA). We use software tools to regularly test and evaluate the accessibility of our website and to
                            make improvements by partnering with National Compliance Group.</p>
                        <p data-v-7ca7878e="">Recognizing the ongoing evolution of current web content and technologies,
                            National Compliance Group will continue to test TaxHawk, Inc. on an ongoing basis for accessibility
                            and report accessibility issues for this website. Any features found to be inaccessible will be
                            addressed in a timely manner.</p>
                        <h2 class="tp fw-bold" style="font-size: 16px;" data-v-7ca7878e="">Third Party Sites</h2>
                        <p data-v-7ca7878e="">Throughout this website, we make use of different third-party applications and
                            websites. These applications and websites, which are not controlled by TaxHawk, Inc., may present
                            challenges for individuals with disabilities that we are not able to control or remedy.</p>
                        <h2 class="tp fw-bold" style="font-size: 16px;" data-v-7ca7878e="">Accommodation</h2>
                        <p data-v-7ca7878e="">If you encounter any page on our site that presents a challenge for individuals
                            with disabilities, please submit your feedback. TaxHawk, Inc. accepts calls from relay services. You
                            may also request any modifications to our policies, practices and procedures. Please contact us at
                            <a href="mailto:support@support.freetaxusa.com"
                                data-v-7ca7878e="">support@support.freetaxusa.com</a>.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <div id="footer" class="d-flex box mb-5 position-relative">
        <div class="box flex-fill page-footer">
            <div class="box d-flex flex-column justify-content-center align-items-center">
                <div id="privacy" class="mt-5" style="font-size: 12px;">
                    <a class="mx-4" href="#" style="text-decoration: none;" data-bs-toggle="modal"
                        data-bs-target="#privacy_modal"><b>Privacy</b></a>
                    <a class="mx-4" href="#" style="text-decoration: none;" data-bs-toggle="modal"
                    data-bs-target="#security_modal"><b>Security</b></a>
                    <a class="mx-4" href="#" style="text-decoration: none;" data-bs-toggle="modal"
                    data-bs-target="#accessibility_modal" aria-label="Click here to open accessibility options"><b>Accessibility</b></a>
                </div>
                <div id="copywrite" style="font-size: small;">© 2002-2024 FreeTax - All Rights Reserved
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    @stack('custom-scripts')
</body>

</html>
