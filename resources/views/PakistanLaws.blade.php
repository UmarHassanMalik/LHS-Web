<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="{{url('/css/PakistanLaws/PakistanLaws.css')}}" />
    <link rel="stylesheet" href="{{url('/css/home.css')}}" />
    <style>
        div[type="pakistan_laws"]{
        margin-top: 20px;
        margin-bottom: 20px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        </style>


</head>

<body>

    
    <div class="col-md-12 py-0 navbar navbar-expand-sm navbar-dark cyan sticky-top" type="navmain">
        <a class=" text-success ms-2 font-bold" href="#">Welcome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSuapportedContent-4">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img width="30" height="30" class="rounded-circle" src="../images/profile.jpg" alt="..."> {{Auth::user()->displayName}}</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-cyan"
                        aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item " href="{{url('/Profile/dashboard')}}"><i class="fa fa-user"></i> &nbsp; &nbsp;  My Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> &nbsp; &nbsp; {{ __('Logout') }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>


   

    <!-- HEADER -->
    <nav class="navbar navbar-expand-md  navbar-dark">

        <div class="container">

            <a href="{{route('home')}}" class="navbar-brand font-weight-bold" type="button"> Lawyer Hiring System</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsenavbar">

                <ul class="active navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ url('/index') }}" class="nav-link text-white">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/PostLegalCase') }}" class="nav-link text-white ">POST YOUR LEGAL CASE</a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ url('/PakistanLaws') }}" class="nav-link text-white">PAKISTAN LAWS</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/Articles') }}" class="nav-link text-white ">ARTICLES</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/Feedback') }}" class="nav-link text-white">FEEDBACK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <div class="container jumbotron" type="pakistan_laws">
        <div  >
            
                <h4> Acts & Ordinances</h4>
            
        </div>
        <br>
       
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="./PDFs/ACCESS-TO-JUSTICE-DEVELOPMENT-FUND-RULES.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        ACCESS-TO-JUSTICE-DEVELOPMENT-FUND-RULES
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Accommodation-Allocation-Rules-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Accommodation-Allocation-Rules-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Administrator-Generals-Act.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Administrator-Generals-Act
                    </a></li>

                <li class="list-group-item"><a
                        href="./PDFs/Agreement-On-The-Network-Of-Aquaculture-Centers-In-Asia-And-the-Pacific.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Agreement-On-The-Network-Of-Aquaculture-Centers-In-Asia-And-the-Pacific
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/ANTI-TERRORISM-_AMENDMENT_-ACT-1998.pdf" noopener
                        noreferrer target="_blank">
                        ANTI-TERRORISM-_AMENDMENT_-ACT-1998
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/ANTI-TERRORISM-_AMENDMENT_-ACT-1998.pdf.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        ANTI-TERRORISM-_AMENDMENT_-ACT-1998
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Arbitration-Act-1940.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        Arbitration-Act-1940
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Balochistan-Prevention-of-Gambling.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Balochistan-Prevention-of-Gambling
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Banking_Ordinance_62-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Banking_Ordinance_62-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/CODE-OF-CIVIL-PROCEDURE-1908.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        CODE-OF-CIVIL-PROCEDURE-1908
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Code-of-Civil-Procedure.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Code-of-Civil-Procedure
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Companies-Asset-Backed-Securitization-Rules-1999.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Companies-Asset-Backed-Securitization-Rules-1999
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/constitution.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        constitution
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/CONTEMPT-OF-COURT-ACT.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        CONTEMPT-OF-COURT-ACT
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Contract-Act-1872.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        Contract-Act-1872
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Customs-Act-1969.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        Customs-Act-1969
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Electricity-_Emergency-Provisions_-Ordinance-1998.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Electricity-_Emergency-Provisions_-Ordinance-1998
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Emigration-ord1979.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        Emigration-ord1979
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/EMPLOYEES-SOCIAL-SECURITY-ORDINANCE-1965.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        EMPLOYEES-SOCIAL-SECURITY-ORDINANCE-1965
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/FEDERAL-INVESTIGATION-AGENCY1975.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        FEDERAL-INVESTIGATION-AGENCY1975
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/fiarules2002.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        fiarules2002
                    </a></li>
                <li class="list-group-item"><a
                        href="./PDFs/Financial-Institutions-_Recovery-of-Finances_-Ordinance-2001.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Financial-Institutions-_Recovery-of-Finances_-Ordinance-2001
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/General-Clauses-Act-1897-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        General-Clauses-Act-1897-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/General-Clauses-Act-1897.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        General-Clauses-Act-1897
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Guidelines-for-Infrastructure-Project-Financing-1.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Guidelines-for-Infrastructure-Project-Financing-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Guidelines-for-Infrastructure-Project-Financing.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Guidelines-for-Infrastructure-Project-Financing
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Income-Tax-Ordinance-2001.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Income-Tax-Ordinance-2001
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Income-Tax-Ordincance-2001-update-2010.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Income-Tax-Ordincance-2001-update-2010
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Industrial-Relations-Ordinance-2002.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Industrial-Relations-Ordinance-2002
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/ITO-2001.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        ITO-2001
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Limitation-Act-1908-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Limitation-Act-1908-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Limitation-Act-1908-2.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Limitation-Act-1908-2
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Limitation-Act-1908.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        Limitation-Act-1908
                    </a></li>
                <li class="list-group-item"><a
                        href="./PDFs/Listed-Companies-Substantial-Acquisition-of-Voting-Shares-and-Takeovers-Ordinance-2002-1.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Listed-Companies-Substantial-Acquisition-of-Voting-Shares-and-Takeovers-Ordinance-2002-1
                    </a></li>
                <li class="list-group-item"><a
                        href="./PDFs/Listed-Companies-Substantial-Acquisition-of-Voting-Shares-and-Takeovers-Ordinance-2002.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Listed-Companies-Substantial-Acquisition-of-Voting-Shares-and-Takeovers-Ordinance-2002
                    </a></li>
                <li class="list-group-item"><a
                        href="./PDFs/Modaraba-Companies-and-Modaraba-Floatation-Control-Ordinance-1980-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Modaraba-Companies-and-Modaraba-Floatation-Control-Ordinance-1980-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Negotiable-Instruments-Act-1881-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Negotiable-Instruments-Act-1881-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Negotiable-Instruments-Act-1881.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Negotiable-Instruments-Act-1881
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/offence_of_qazf_ordinance_1979-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        offence_of_qazf_ordinance_1979-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/offence_of_zina_ordinance_1979-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        offence_of_zina_ordinance_1979-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/offence_of_zina_ordinance_1979.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        offence_of_zina_ordinance_1979
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/offences_against_property_ordinance_1979-1-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        offences_against_property_ordinance_1979-1-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/offences_against_property_ordinance_1979-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        offences_against_property_ordinance_1979-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/offences_against_property_ordinance_1979.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        offences_against_property_ordinance_1979
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/PAKISTAN-CRIMINAL-LAW-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        PAKISTAN-CRIMINAL-LAW-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/PAKISTAN-CRIMINAL-LAW.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        PAKISTAN-CRIMINAL-LAW
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/PAKISTAN-PENAL-CODE.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        PAKISTAN-PENAL-CODE
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/pakistan_arms_ordinance_1965-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        pakistan_arms_ordinance_1965-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Patents-Ordinance-2000.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Patents-Ordinance-2000
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/PAYMENT-OF-WAGES-ACT.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        PAYMENT-OF-WAGES-ACT
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/qanun_e_shahadat_order_1984.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        qanun_e_shahadat_order_1984
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/registration_act08.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        registration_act08
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Sale-of-Goods-Act-1930.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Sale-of-Goods-Act-1930
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Securities-and-Exch-Commission-of-Pakistan-Act-1997-1.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Securities-and-Exch-Commission-of-Pakistan-Act-1997-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Securities-and-Exchange-Ordinance-1969-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Securities-and-Exchange-Ordinance-1969-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Securities-and-Exchange-Ordinance-1969.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Securities-and-Exchange-Ordinance-1969
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/SindhHighO.S-Rules.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        SindhHighO.S-Rules
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Stamp-Act-1899-1.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        Stamp-Act-1899-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Stamp-Act-1899.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        Stamp-Act-1899
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/STAMP-DUTIES.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        STAMP-DUTIES
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/State-Bank-of-Pakistan-Act-1956-2.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        State-Bank-of-Pakistan-Act-1956-2
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/State-Bank-of-Pakistan-Act-1956.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        State-Bank-of-Pakistan-Act-1956
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/SUPPRESSION-OF-TERRORIST-ACTIVITIES-1-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        SUPPRESSION-OF-TERRORIST-ACTIVITIES-1-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/SUPPRESSION-OF-TERRORIST-ACTIVITIES-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        SUPPRESSION-OF-TERRORIST-ACTIVITIES-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/SUPPRESSION-OF-TERRORIST-ACTIVITIES.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        SUPPRESSION-OF-TERRORIST-ACTIVITIES
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/surrender_of_illicit_arms_act_1991-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        surrender_of_illicit_arms_act_1991-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/surrender_of_illicit_arms_act_1991.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        surrender_of_illicit_arms_act_1991
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Telegraph-Act-1.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        Telegraph-Act-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/Telegraph-Act.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        Telegraph-Act
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/TERRORIST-AFFECTED-AREAS-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        TERRORIST-AFFECTED-AREAS-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/TERRORIST-AFFECTED-AREAS.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        TERRORIST-AFFECTED-AREAS
                    </a></li>
                <li class="list-group-item"><a
                        href="./PDFs/The-Accounting-Procedures-of-the-Access-to-Justice-Development-Fund-2005-1.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        The-Accounting-Procedures-of-the-Access-to-Justice-Development-Fund-2005-1
                    </a></li>
                <li class="list-group-item"><a
                        href="./PDFs/The-Accounting-Procedures-of-the-Access-to-Justice-Development-Fund-2005-2.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        The-Accounting-Procedures-of-the-Access-to-Justice-Development-Fund-2005-2
                    </a></li>
                <li class="list-group-item"><a
                        href="./PDFs/The-Accounting-Procedures-of-the-Access-to-Justice-Development-Fund-2005.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        The-Accounting-Procedures-of-the-Access-to-Justice-Development-Fund-2005
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-ADULTERATION-OFFENCES-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-ADULTERATION-OFFENCES-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/The-Alternate-Dispute-Resolution-Rules-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        The-Alternate-Dispute-Resolution-Rules-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/The-Alternate-Dispute-Resolution-Rules.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        The-Alternate-Dispute-Resolution-Rules
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-Anti-Narcotic-Force-Ac1997.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-Anti-Narcotic-Force-Ac1997
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-Anti-Narcotic-Force-Act.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-Anti-Narcotic-Force-Act
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-ANTI-TERRORISM-ACT-1997.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-ANTI-TERRORISM-ACT-1997
                    </a></li>
                <li class="list-group-item"><a
                        href="./PDFs/The-Appointment-of-National-Security-Council-and-Oath-of-Office-Order.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        The-Appointment-of-National-Security-Council-and-Oath-of-Office-Order
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-APPRENTICESHIP-ORDINANCE-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-APPRENTICESHIP-ORDINANCE-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-APPRENTICESHIP-ORDINANCE.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-APPRENTICESHIP-ORDINANCE
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/The-Arbitration-_Protocol-and-Convention_-Act-1937.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        The-Arbitration-_Protocol-and-Convention_-Act-1937
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-ARMS-ACT.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        THE-ARMS-ACT
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-BAHAWALPUR-COTTON-CONTROL.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-BAHAWALPUR-COTTON-CONTROL
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/The-Co-operative-Societies-Act-1925.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        The-Co-operative-Societies-Act-1925
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/The-Constitution-of-Pakistan-1973.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        The-Constitution-of-Pakistan-1973
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-COURT-FEES-ACT-1870.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-COURT-FEES-ACT-1870
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-CRIMINAL-LAW1968.pdf" download rel="noopener noreferrer"
                        target="_blank">
                        THE-CRIMINAL-LAW1968
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/The-Dissolution-of-Muslim-Marriages-Act.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        The-Dissolution-of-Muslim-Marriages-Act
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-EMPLOYEES-OLD-AGE-BENEFIT-ACT.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-EMPLOYEES-OLD-AGE-BENEFIT-ACT
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/The-Establishment-of-the-Office-of-Wafaqi-Mohtasib.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        The-Establishment-of-the-Office-of-Wafaqi-Mohtasib
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-EXPLOSIVE-SUBSTANCES-ACT-1908.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-EXPLOSIVE-SUBSTANCES-ACT-1908
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-FEDERAL-INVESTIGATION-AGENCY-ACT.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-FEDERAL-INVESTIGATION-AGENCY-ACT
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/the-foreign-currency-Accounts-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        the-foreign-currency-Accounts-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/the-foreign-currency-Accounts.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        the-foreign-currency-Accounts
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-FOREIGN-EXCHANGE-REGULATIN-ACT-1.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-FOREIGN-EXCHANGE-REGULATIN-ACT-1
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-FOREIGN-EXCHANGE-REGULATIN-ACT.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-FOREIGN-EXCHANGE-REGULATIN-ACT
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/The-Guardian-and-Wards-Act.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        The-Guardian-and-Wards-Act
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-LAND-ACQUISITION-ACT-1894.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-LAND-ACQUISITION-ACT-1894
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-MOTION-PICTURES-ORDINANCE.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-MOTION-PICTURES-ORDINANCE
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-NOTARIES-Ordiannce-1969.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-NOTARIES-Ordiannce-1969
                    </a></li>
                <li class="list-group-item"><a href="./PDFs/THE-OFFENCES-IN-RESPECT-OF-BANKS.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        THE-OFFENCES-IN-RESPECT-OF-BANKS
                    </a></li>

            </ul>
            <br>
           
            <div  >
            
                <h4> Rules & Regulations</h4>
            
            </div>
           
            <br>

            <ul class=" list-group list-group-flush list_margin">
                <li class="list-group-item"><a href="./Regulation/Companies-Asset-Backed-Securitization-Rules-1999.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Companies-Asset-Backed-Securitization-Rules-1999
                    </a></li>
                <li class="list-group-item"><a href="./Regulation/Guidelines-for-Infrastructure-Project-Financing-1.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Guidelines-for-Infrastructure-Project-Financing-1
                    </a>
                </li>
                <li class="list-group-item"><a href="./Regulation/Guidelines-for-Infrastructure-Project-Financing.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Guidelines-for-Infrastructure-Project-Financing
                    </a></li>

                <li class="list-group-item"><a href="./Regulation/Guidelines-For-Issue-of-Commercial-Paper.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Guidelines-For-Issue-of-Commercial-Paper
                    </a></li>
                <li class="list-group-item"><a
                        href="./Regulation/Guidelines-for-the-issue-of-Term-Finance-Certificates-TFCs-to-General-Public.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Guidelines-for-the-issue-of-Term-Finance-Certificates-TFCs-to-General-Public
                    </a></li>
                <li class="list-group-item"><a
                        href="./Regulation/Leasing-Companies-Establishment-and-Regulation-Rules-2000.pdf" download
                        rel="noopener noreferrer" target="_blank">
                        Leasing-Companies-Establishment-and-Regulation-Rules-2000
                    </a></li>
                <li class="list-group-item"><a href="./Regulation/Listing-Regulations-of-Karachi-Stock-Exchange.pdf"
                        download rel="noopener noreferrer" target="_blank">
                        Listing-Regulations-of-Karachi-Stock-Exchange
                    </a>
                </li>

            </ul>
        </div>
        




        <!-- ************************************ FOOTER *****************************************-->

        <footer class="footer">
            <div class="container_footer">
                <div class="row">
                    <div class="footer-col " >
                        <img type="foot_logo" src="{{url('images/logo.png')}}" >
                                <h6 type="footer_logo"> Lawyer Hiring </h6>
                    </div>
                    <div class="footer-col">
                        <h4>Get Help</h4>
                        <ul type="footer_ul">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Email</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Information</h4>
                        <ul type="footer_ul">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-quora"></i></a>
                        </div>
                    </div>
                </div>
            </div>
       </footer>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>