@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="my-10">
        <h1 class="lg:text-5xl font-semibold pb-5 text-gray-800 md:text-3xl sm:text-3xl">
            {{ _trans('Cybersecurity Services – Protect Your Applications and Network') }}</h1>
        <hr class="w-12 border-yellow-600 text-gray-800 mt-2">
        <img src="{{ asset('/images/services/service_types/cyber_security/cybersecurity-services.svg') }}" alt="">
        <p class="py-5 text-lg text-gray-500 mx-10">
            {{ _trans('TeamPRO offers a variety of services from information security consulting to assessing, testing and improving the protection of applications and networks for companies operating in healthcare, manufacturing, banking, retail, telecommunications, and other industries.') }}
        </p>
        <p class="py-5 text-lg text-gray-500 mx-10">
            {{ _trans('Our security experts develop a personal approach to each customer based on best practices and enriched with our own experience. We are ready to support our clients at all project stages.') }}
        <p>
        <h1 class="lg:text-4xl font-semibold mx-10 pb-10 text-gray-800 md:text-3xl sm:text-3xl">
            {{ _trans('Why TeamPRO:') }}</h1>
        <div class="lg:grid lg:grid-cols-2 lg:gap-2 md:flex md:flex-col">
            <img class="w-72 h-62 mx-5"
                src="{{ asset('/images/services/service_types/cyber_security/ibm-silver-business-partner.svg') }}" alt="">
            <ul class="list-disc pl-5 mx-10">
                <li class="py-2 text-xl text-gray-500 mx-5">16 {{ _trans('years in cybersecurity services.') }}</li>
                <li class="py-2 text-xl text-gray-500 mx-5">
                    {{ _trans('More than 150 implemented projects in security consulting.') }}</li>
                <li class="py-2 text-xl text-gray-500 mx-5">
                    {{ _trans('Certified ethical hackers equipped with a wide set of skills in the area.') }}</li>
                <li class="py-2 text-xl text-gray-500 mx-5">{{ _trans('IBM Silver Business Partner.') }}</li>
            </ul>
        </div>
        <div class="button relative my-32 mx-10">
            <button
                class="btn w-48 h-12 bg-blue-800 hover:bg-blue-900 font-medium absolute mt-10 mx-3 lg:right-0 lg:bottom-5 md:right-0 md:bottom-5 md:w:36 sm:right-28 sm:bottom-12 sm:w-96 text-white text-lg uppercase">{{ _trans('Get A Quote') }}</button>
        </div>
        <h1 class="text-4xl font-semibold pt-10 pb-5 text-gray-800">
            {{ _trans('CYBERSECURITY SERVICES BY TEAMPRO') }}</h1>
        <hr class="w-12 border-yellow-600 text-gray-800 mt-2">
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('We offer our customers a variety of cybersecurity services to:') }}</p>
        <ul class="list-disc pl-5 mx-10">
            <li class="py-2 text-xl text-gray-500">
                {{ _trans('Significantly reduce the number of security weaknesses in web, mobile, and desktop applications, as well as in our clients’ networks.') }}
            </li>
            <li class="py-2 text-xl text-gray-500">
                {{ _trans('Ensure their constant compliance with appropriate regulations and standards (PCI DSS, GDPR, HIPAA).') }}
            </li>
        </ul>

        <div class="box-border ">
            <div class="lg:grid lg:grid-cols-3 lg:gap-3 lg:mr-5 sm:my-5 sm:mr-5 md:my-5 md:mr-5">
                <div class="rounded-sm border-2 transition-shadow w-full p-8 sm:my-5 md:my-5">
                    <div class="lg:flex lg:flex-col md:flex md:flex-row sm:flex sm:flex-row mr-5">
                        <img class="w-44 h-36 lg:my-10 md:my-10 sm:ml-10"
                            src="{{ asset('/images/services/service_types/cyber_security/security-planning.svg') }}"
                            alt="">
                        <div>
                            <h1 class="text-xl font-bold">{{ _trans('Security assessment and planning') }}</h1>
                            <ul class="list-disc pl-5">
                                <li class="text-gray-500 text-xl py-3">{{ _trans('Information security consulting') }}
                                </li>
                                <li class="text-gray-500 text-xl py-3">
                                    {{ _trans('Security testing of IT infrastructures and components') }}</li>
                                <li class="text-gray-500 text-xl py-3">
                                    {{ _trans('Stress testing: emulation of DDoS / DoS attacks') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="rounded-sm border-2 transition-shadow w-full p-8 sm:my-5 md:my-5">
                    <div class="flex flex-col mr5">
                        <img class="w-44 h-36 lg:my-10 md:my-10 sm:ml-10"
                            src="{{ asset('/images/services/service_types/cyber_security/application-security_1.svg') }}"
                            alt="">
                        <h1 class="text-xl font-bold">{{ _trans('Application security') }}</h1>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">{{ _trans('Security code review') }}</li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Mobile device management and mobile management') }}</li>
                            <li class="text-gray-500 text-xl py-3">{{ _trans('Cloud security') }}</li>
                            <li class="text-gray-500 text-xl py-3">{{ _trans('Web application security') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="rounded-sm border-2 transition-shadow w-full mr-20 p-8 sm:my-5 md:my-5">
                    <div class="flex flex-col mr-5">
                        <img class="w-44 h-36 lg:my-10 md:my-10 sm:ml-10"
                            src="{{ asset('/images/services/service_types/cyber_security/network-security.svg') }}"
                            alt="">
                        <h1 class="text-xl font-bold pt-3 pb-3">{{ _trans('Network protection') }}</h1>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">{{ _trans('SIEM') }}</li>
                            <li class="text-gray-500 text-xl py-3">{{ _trans('DDoS protection') }}</li>
                            <li class="text-gray-500 text-xl py-3">{{ _trans('Email security') }}</li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Firewalls, IDS / IPS, DLP implementation and setting') }}</li>
                            <li class="text-gray-500 text-xl py-3">{{ _trans('Antivirus protection') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-4xl font-semibold pt-10 pb-5 text-gray-800">{{ _trans('SECURITY ASSESSMENT AND PLANNING') }}
        </h1>
        <hr class="w-12 border-yellow-600 text-gray-800 mt-2">
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('TeamPRO delivers full-scale security assessment and planning services for the components of IT infrastructures:') }}
        </p>

        <div class="lg:grid lg:grid-cols-3 lg:gap-3">
            <div
                class="w-60 h-48 bg-white-900 shadow-2xl p-12 mt-10 md:w-full md:m-auto sm:w-full sm:m-auto md:shadow-md sm:shadow-md">
                <h1 class="text-xl font-semibold pt-3 pb-5 text-gray-800 m-auto">
                    {{ _trans('Web, mobile, desktop applications') }}</h1>
            </div>
            <div
                class="w-60 h-48 bg-white-900 shadow-2xl p-12 mt-10 md:w-full md:m-auto sm:w-full sm:m-auto md:shadow-md sm:shadow-md">
                <h1 class="text-xl font-semibold pt-3 pb-5 text-gray-800 m-auto">{{ _trans('Network services') }}</h1>
            </div>
            <div
                class="w-60 h-48 bg-white-900 shadow-2xl p-12 mt-10 md:w-full md:m-auto sm:w-full sm:m-automd:shadow-md sm:shadow-md">
                <h1 class="text-xl font-semibold pt-3 pb-5 text-gray-800 m-auto">{{ _trans('Remote access software') }}
                </h1>
            </div>
            <div
                class="w-60 h-48 bg-white-900 shadow-2xl p-12 mt-10 md:w-full md:m-auto sm:w-full sm:m-auto md:shadow-md sm:shadow-md">
                <h1 class="text-xl font-semibold pt-3 pb-5 text-gray-800 m-auto">{{ _trans('IoT devices') }}</h1>
            </div>
            <div
                class="w-60 h-48 bg-white-900 shadow-2xl p-12 mt-10 md:w-full md:m-auto sm:w-full sm:m-auto md:shadow-md sm:shadow-md">
                <h1 class="text-xl font-semibold pt-5 pb-5 text-gray-800 m-auto">{{ _trans('Employee behavior') }}</h1>
            </div>
            <div
                class="w-60 h-48 bg-white-900 shadow-2xl p-12 mt-10 md:w-full md:m-auto sm:w-full sm:m-auto md:shadow-md sm:shadow-md">
                <h1 class="text-xl font-semibold pt-5 pb-5 text-gray-800 m-auto">{{ _trans('Client side') }}</h1>
            </div>
        </div>

        <p class="py-5 text-lg text-gray-500">
            {{ _trans('We help our customers to identify their security risks and define the measures to mitigate the risks by offering our competencies in the areas listed below.') }}
        </p>

        <div class="infos flex flex-row mt-5">
            <img class="w-32 h-28"
                src="{{ asset('/images/services/service_types/cyber_security/security_consulting.svg') }}" alt="">
            <div class="wrapped mx-16">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800">{{ _trans('Information security consulting') }}
                </h1>
                <p class="py-5 text-lg text-gray-500">
                    {{ _trans('Our security experts will offer the ways of monitoring the robustness of your cyberenvironment against security threats, detecting vulnerabilities in your network or apps, improving the performance of your information security solutions, and ensuring the protection of your sensitive data.') }}
                </p>
            </div>
        </div>

        <div class="infos flex flex-row mt-5">
            <img class="w-32 h-28" src="{{ asset('/images/services/service_types/cyber_security/security-check.svg') }}"
                alt="">
            <div class="mx-16">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800">
                    {{ _trans('Security testing of IT infrastructures and its components') }}</h1>
                <p class="py-5 text-lg text-gray-500">
                    {{ _trans('We uncover security loopholes in the components of our customers’ IT environments. TeamPRO’s security team carefully checks the protection level of your IT infrastructure and defines measures to reduce the number of security weaknesses inside your network and apps.') }}
                </p>
                <p class="py-5 text-lg text-gray-500">{{ _trans('The complex of security testing services includes:') }}
                </p>
                <h1 class="text-3xl font-bold pt-3 pb-10 text-gray-800">{{ _trans('Infrastructure security audit') }}
                </h1>
                <p class="py-5 text-lg text-gray-500">
                    {{ _trans('Our security team assesses your IT infrastructure to identify vulnerabilities in the following areas:') }}
                <p>
                <ul class="list-disc pl-5">
                    <li class="text-gray-500 text-xl py-3">{{ _trans('Security policies and procedures.') }}</li>
                    <li class="text-gray-500 text-xl py-3">{{ _trans('Security monitoring tools.') }}</li>
                    <li class="text-gray-500 text-xl py-3">{{ _trans('Physical access control.') }}</li>
                    <li class="text-gray-500 text-xl py-3">{{ _trans('Configuration management.') }}</li>
                    <li class="text-gray-500 text-xl py-3">{{ _trans('Version control.') }}</li>
                </ul>
                <h1 class="text-3xl font-bold pt-3 pb-10 text-gray-800">{{ _trans('Compliance testing') }}</h1>
                <p class="py-5 text-lg text-gray-500">
                    {{ _trans('Our security engineers perform automated and manual scanning of your IT environment and its elements to ensure your compliance with PCI DSS, HIPAA, and other regulations and standards. On the basis of the testing results, the security team provides you with a detailed attestation letter.') }}
                </p>
                <h1 class="text-3xl font-bold pt-3 pb-10 text-gray-800">{{ _trans('Vulnerability assessment') }}</h1>
                <p class="py-5 text-lg text-gray-500">
                    {{ _trans('TeamPRO performs automated and manual security evaluation to detect vulnerabilities in their customers’ IT infrastructures. Our security testing team identifies, quantifies, and ranks network security weaknesses. Based on the assessment results, we give our customers recommendations to help them to eliminate security risks.') }}
                </p>
                <h1 class="text-3xl font-bold pt-3 pb-10 text-gray-800">{{ _trans('Penetration testing') }}</h1>
                <p class="py-5 text-lg text-gray-500">
                    {{ _trans('TeamPRO’s security testing team pinpoints system vulnerabilities, validates existing security measures, and provides a detailed remediation roadmap. Equipped with the special tools and industry-specific test scenarios, the team performs penetration testing according to one of the three approaches:') }}
                </p>
                <ul class="list-disc pl-5">
                    <li class="text-gray-500 text-xl py-3"><strong>{{ _trans('Black box testing.') }}</strong>
                        {{ _trans('We work in life-like conditions having strictly limited knowledge on your network and no information on the security policies, network structure, software and network protection used.') }}
                    </li>
                    <li class="text-gray-500 text-xl py-3">
                        <strong>{{ _trans('Grey box testing.') }}</strong>{{ _trans('We examine your system having some information on your network, such as user login details, architecture diagrams or the network’s overview.') }}
                    </li>
                    <li class="text-gray-500 text-xl py-3">
                        <strong>{{ _trans('White box testing.') }}</strong>{{ _trans('We identify potential weak points by using admin rights and access to server configuration files, database encryption principles, source code or architecture documentation.') }}
                    </li>
                </ul>
            </div>
        </div>
        <div class="infos flex flex-row mt-5">
            <img class="w-32 h-28" src="{{ asset('/images/services/service_types/cyber_security/performance.svg') }}"
                alt="">
            <div class="mx-16">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800">
                    {{ _trans('Stress testing: Emulation of DDoS / DoS attacks') }}<h1>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('TeamPRO’s security testing team evaluates the stability of your infrastructure and its components by testing it beyond normal operational capacity with the use of special tools such as Siege and Apache JMeter. We apply our expertise to emulate denial of service (DoS) or distributed denial of service (DDoS) attacks against your network or applications to:') }}
                        </p>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Determine whether the robustness of software or hardware is satisfactory under stress conditions (e.g., heavy network traffic, process loading).') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Identify potential errors that can occur in case of system overloading.') }}
                            </li>
                        </ul>
            </div>
        </div>

        <h1 class="text-4xl font-semibold pt-10 pb-5 text-gray-800">{{ _trans('APPLICATION SECURITY') }}</h1>
        <hr class="w-12 border-yellow-600 text-gray-800 mt-2">
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('Poorly coded and insufficiently protected applications can put a company at risk and result in data breaches. TeamPRO offers their skills and knowledge in assessing and testing the security of applications (web, mobile, desktop), as well as finding ways to help their customers to achieve the effective protection of the corporate data stored locally or remotely.') }}
        </p>
        <div class="infos flex flex-row mt-5">
            <img class="w-32 h-28" src="{{ asset('/images/services/service_types/cyber_security/code_review.svg') }}"
                alt="">
            <div class="mx-16">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800">{{ _trans('Security code review') }}<h1>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('Each programming language has its quirks that may cause security flaws during the development phase. TeamPRO’s security experts detect existing loopholes before your applications ‘go live.’') }}
                        </p>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('Our security engineers conduct automated and manual security code review and engage senior developers and architects (if needed) to help you to:') }}
                        </p>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Detect mistakes introduced into an application during its development to improve software quality and increase its protection level.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Highlight weak points in the source code of your app where vulnerabilities may potentially occur.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Find the most cost-efficient ways to eliminate security weaknesses identified in applications.') }}
                            </li>
                        </ul>
            </div>
        </div>

        <div class="infos flex flex-row mt-5">
            <img class="w-32 h-28" src="{{ asset('/images/services/service_types/cyber_security/mobile_devices.svg') }}"
                alt="">
            <div class="mx-16">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800">
                    {{ _trans('Mobile device management and mobile application management') }}<h1>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('With the proliferation of mobile devices, mobile applications and programs used within corporate networks, enterprises face the need to manage and secure their usage. TeamPRO offers their expertise in applying the appropriate device management policies and implementing control measures to the installation of new mobile apps.') }}
                        </p>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('Our security testing team has a wide experience in correctly installing and tuning mobile device management (MDM) and mobile application management (MAM) solutions like Microsoft Intune to ensure mobile security. We can fine-tune mobile security services you choose to apply and set the necessary policies properly for you to:') }}
                        </p>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Ensure the compliance of devices (both corporate and personal) and applications with your internal security policies and requirements.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Control how your employees exploit and share corporate information via their mobile devices and the apps they use.') }}
                            </li>
                        </ul>
            </div>
        </div>

        <div class="infos flex flex-row mt-5">
            <img class="w-32 h-28" src="{{ asset('/images/services/service_types/cyber_security/cloud_solution.svg') }}"
                alt="">
            <div class="mx-16">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800">{{ _trans('Cloud security') }}<h1>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('TeamPRO helps their customers to secure their cloud solutions. Being a Gold Microsoft Business Partner, we have the necessary experience to tune special security components, such as Azure Security Center, allowing security management and threat protection across cloud workloads.') }}
                        </p>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('TeamPRO’s security engineers can apply appropriate cloud security measures and configure cloud protection solutions to ensure:') }}
                        </p>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Constant and efficient monitoring of the security of your cloud applications.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Analysis of the event logs from your cloud solutions and prompt detection of suspicious activities.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Remediation of security weaknesses potentially existing in your cloud environment.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Application of the necessary security policies to make your cloud solutions meet the appropriate security standards.') }}
                            </li>
                        </ul>
            </div>
        </div>

        <div class="infos flex flex-row mt-5">
            <img class="w-32 h-28"
                src="{{ asset('/images/services/service_types/cyber_security/website_development.svg') }}" alt="">
            <div class="mx-16">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800">{{ _trans('Web application security') }}<h1>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('TeamPRO’s security experts ensure proper protection of a website, a web app, or web services.') }}
                        </p>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Our security testing team carries out vulnerability assessment to check whether the proper encryption, authentication and other security measures are applied in a web app, a web service or a website.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Upon the evaluation results, our security engineers provide customers with valuable recommendations on how to improve the protection level of their web solutions') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('We offer penetration testing services (as a one-time or a regular service) to provide customers with the detailed information on real security threats they may face and identify the most critical security weaknesses to let our customers prioritize remediation measures and apply necessary security patches.') }}
                            </li>
                        </ul>
            </div>
        </div>

        <h1 class="text-4xl font-semibold pt-10 pb-5 text-gray-800">{{ _trans('NETWORK PROTECTION') }}</h1>
        <hr class="w-12 border-yellow-600 text-gray-800 mt-2">
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('By increasing corporate network security specifically, you may decrease the risk of becoming the victim of privacy spoofing, identity or company’s proprietary information theft, Man-in-the-Middle and DDoS attacks.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('We apply multiple defense layers to protect your corporate network and the sensitive data stored within it. TeamPRO’s security engineers know various ways to keep your proprietary information safe and reduce the probability that you will have to experience successful attack attempts against your network.') }}
        </p>

        <div class="infos flex flex-row mt-5">
            <img class="w-32 h-28" src="{{ asset('/images/services/service_types/cyber_security/siem.svg') }}" alt="">
            <div class="mx-16">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800">{{ _trans('Web application security') }}<h1>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('TeamPRO’s security experts ensure proper protection of a website, a web app, or web services.') }}
                        </p>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('We deliver a full range of QRadar-related services.') }}</p>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">
                                <strong>{{ _trans('QRadar consulting services.') }}</strong>{{ _trans('We help you to develop a relevant strategy to integrate QRadar smoothly into your corporate IT landscape.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                <strong>{{ _trans('QRadar deployment architecture design.') }}</strong>{{ _trans('We draw up your QRadar’s technical design in accordance with collaboratively pre-set system requirements and make QRadar an integral part of your security network.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                <strong>{{ _trans('QRadar deployment.') }}</strong>{{ _trans('We deploy QRadar to enable proper functioning of its modules and the platform’s high performance and scalability.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                <strong>{{ _trans('QRadar fine-tuning.') }}</strong>{{ _trans('We connect log sources to QRadar, normalize data flowing to it, configure its modules to process events from multiple network objects, develop custom correlation rules to let QRadar reveal complex attacks and detect security offenses properly.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                <strong>{{ _trans('Migration to QRadar.') }}</strong>{{ _trans('We shift your SIEM solution that fails to meet the security requirements to QRadar so that the platform helps you to identify occurring threats and respond to them properly.') }}
                            </li>
                        </ul>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('For an advanced health check of a QRadar solution, our SIEM consultants developed a standalone tool') }}
                            <a class="underline" href="#">{{ _trans('QLEAN') }}</a>
                            {{ _trans('for IBM Security QRadar SIEM.') }}
                        </p>
                        <h1 class="text-3xl font-bold pt-3 pb-10 text-gray-800">{{ _trans('What QLEAN does:') }}</h1>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Provides automated monitoring of QRadar performance.') }}</li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Checks up a variety of essential QRadar performance parameters, such as EPS and FPI statistics, incoming log data quality, events and flows timelines.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Assesses the received data with over 50 operational metrics and 25 health markers and reports it to QRadar administrators to let them investigate the platform’s performance issues one by one.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Pinpoints possible deviations in QRadar performance that can impede security specialists to see the true security state.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Recommends further improvements in QRadar configuration to eliminate the revealed downfalls.') }}
                            </li>
                        </ul>
            </div>
        </div>

        <div class="infos flex flex-row mt-5">
            <img class="w-32 h-28"
                src="{{ asset('/images/services/service_types/cyber_security/ddos-protection.svg') }}" alt="">
            <div class="mx-16">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800">{{ _trans('DDoS protection') }}<h1>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('In case a company decides on applying a special online solution, such as CloudFlare, to protect their network against DDoS attacks, TeamPRO has the security experts with the skills in implementing and configuring such solutions properly. Our security engineers set them up to:') }}
                        </p>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Prevent disruptions inside your network occurring due to anomalous amounts of malicious traffic.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Keep the components of your IT environment in a high availability state.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Analyze cyberattacks quickly in case they occur and let you adjust the security policies applied inside the corporate network to avoid such cyberattacks in the future.') }}
                            </li>
                        </ul>
            </div>
        </div>

        <div class="infos flex flex-row mt-5">
            <img class="w-32 h-28"
                src="{{ asset('/images/services/service_types/cyber_security/email_automation.svg') }}" alt="">
            <div class="mx-16">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800">{{ _trans('Email security') }}<h1>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('We can help our customers to keep their corporate information safe in email communication and secure from unauthorized access, loss, etc. TeamPRO’s security experts will protect your network from phishing, spamming, malware, and other attacks against email services. Having worked with the solutions offered by major vendors, such as FortiGate and Cisco, we’ve gained the required experience to:') }}
                        </p>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Integrate an email security solution you choose into your company’s infrastructure to ensure its smooth operation.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Perform the tuning of the chosen email security service to prevent your sensitive corporate data from being lost or (un)intentionally shared via email by your employees.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Configure your email security solution properly to reduce the probability your company will face email security threats.') }}
                            </li>
                        </ul>
            </div>
        </div>

        <div class="infos flex flex-row mt-5">
            <img class="w-32 h-28" src="{{ asset('/images/services/service_types/cyber_security/firewall.svg') }}"
                alt="">
            <div class="mx-16">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800">
                    {{ _trans('Firewalls, IDS / IPS, DLP implementation and setting') }}<h1>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('TeamPRO’s security team implements and sets the security rules of special solutions to control incoming network traffic, scan it to detect and block potential attacks. We offer you the following cybersecurity measures to apply:') }}
                        </p>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Hardware or software firewall protection to avoid identity theft, malware, online fraud, and other common cyberthreats that may come from the internet.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('An intrusion detection system (IDS) to promptly warn your system administrators on suspicious activities inside your network, and an intrusion prevention system (IPS) to block the attacks before they turn into serious security issues.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('A data loss prevention (DLP) system to prevent critical corporate information from coming outside your network due to the users’ reckless behavior.') }}
                            </li>
                        </ul>
            </div>
        </div>

        <div class="infos flex flex-row mt-5">
            <img class="w-32 h-28"
                src="{{ asset('/images/services/service_types/cyber_security/antivirus-protection.svg') }}" alt="">
            <div class="mx-16">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800">{{ _trans('Antivirus protection') }}<h1>
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('TeamPRO’s security engineers configure antivirus protection to:') }}</p>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Improve the security of the network from viruses, spyware, and other types of malicious software coming from the internet or external drives.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Increase the protection of your network against phishing and spoofing internet attacks that aim at stealing your sensitive data.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Provide your system administrators with advanced control over any web activities happening across your network to prevent various types of cyberthreats from affecting the security of your corporate data.') }}
                            </li>
                            <li class="text-gray-500 text-xl py-3">
                                {{ _trans('Remove potentially harmful software and threats, thus blocking their way further inside your network.') }}
                            </li>
                        </ul>
            </div>
        </div>

        <h1 class="text-4xl font-semibold pt-10 pb-5 text-gray-800">{{ _trans('COOPERATION MODELS') }}</h1>
        <hr class="w-12 border-yellow-600 text-gray-800 mt-2">

        <div class="infos mt-5 rounded-sm border-2 transition-shadow w-full p-8 shadow-xl">
            <div class="flex flex-row">
                <div class="infos">
                    <img class="w-44 h-36"
                        src="{{ asset('/images/services/service_types/cyber_security/one-time-security-services.svg') }}"
                        alt="">
                    <div class="pl-10">
                        <h1 class="text-2xl font-bold text-gray-800">{{ _trans('One-time services') }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 mt-2">
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('TeamPRO delivers one-time services to assess, test and improve the protection level of your network, application or another component of the IT environment. This cooperation model may help you to form an opinion on the vendor and decide whether to cooperate with them afterwards. When getting acquainted with the part of IT environment the customer wants to protect, our security testing team thoroughly studies the details, e.g., gathers and understands the information on software installed on the devices in the network. After that, our security engineers carry out the appropriate cybersecurity services and draw up a report of the achieved results.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 rounded-sm border-2 transition-shadow w-full p-8 ">
            <div class="flex flex-row">
                <div class="infos">
                    <img class="w-44 h-36"
                        src="{{ asset('/images/services/service_types/cyber_security/managed-security-services.svg') }}"
                        alt="">
                    <div class="pl-10">
                        <h1 class="text-2xl font-bold text-gray-800">{{ _trans('Managed services') }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 mt-2">
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('Opting for specialized managed services (managed vulnerability assessment, managed email security, managed cloud security) means building long-term relationships with one vendor. Once we gather the information on your IT infrastructure in the course of the first project, we can subsequently assess, test or improve your security level spending less time on the project and reducing the costs for you. To prevent a decrease in the protection of your IT infrastructure elements, TeamPRO suggests putting the appropriate services in your list of regular tasks. We have the necessary resources to ensure the compliance with your company’s security needs and regulatory requirements.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="infos mt-5 rounded-sm border-2 transition-shadow w-full p-8">
            <div class="flex flex-row">
                <div class="infos">
                    <img class="w-44 h-36"
                        src="{{ asset('/images/services/service_types/cyber_security/managed-it-services.svg') }}"
                        alt="">
                    <div class="pl-15">
                        <h1 class="text-2xl font-bold text-gray-800">{{ _trans('Managed IT services') }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 mt-2">
                        <p class="py-5 text-lg text-gray-500">
                            {{ _trans('Opting for specialized managed services (managed vulnerability assessment, managed email security, managed cloud security) means building long-term relationships with one vendor. Once we gather the information on your IT infrastructure in the course of the first project, we can subsequently assess, test or improve your security level spending less time on the project and reducing the costs for you. To prevent a decrease in the protection of your IT infrastructure elements, TeamPRO suggests putting the appropriate services in your list of regular tasks. We have the necessary resources to ensure the compliance with your company’s security needs and regulatory requirements.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=" mt-5 rounded-sm border-2 transition-shadow  p-8 shadow-xl">
            <div class="infos">
                <div class="pl-10">
                    <h1 class="text-3xl font-bold text-gray-800">{{ _trans('Bring Your Cybersecurity to the Front') }}
                    </h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 mt-2">
                    <div class="flex  flex-wrap ">
                        <p class=" w-8/12 py-5 text-lg text-gray-500">
                            {{ _trans('TeamPRO’s security team is ready to help you to apply the most relevant defense measures for your IT environment. Don’t hesitate to get in touch with us for a free consultation on any security issue you have, and we’ll define and implement an optimal way to address it.') }}
                        </p>
                        <div class="bottom-16 md:my-32">
                            <button
                                class="w-48 h-12 bg-blue-800 hover:bg-blue-900 font-medium   mx-3  text-white text-lg uppercase">{{ _trans('Get A Quote') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-4xl font-semibold pt-10 pb-5 text-gray-800">{{ _trans('SELECTED PROJECTS') }}</h1>
        <hr class="w-12 border-yellow-600 text-gray-800 mt-2">
        <div class=" mt-5 rounded-sm border-2 transition-shadow w-full p-8 bg-gray-100">
            <div class="flex flex-row">
                <img class="w-44 h-36" src="{{ asset('/images/services/service_types/cyber_security/IBM.jpg') }}"
                    alt="">
                <div class="pl-10">
                    <h1 class="text-2xl font-bold text-gray-800">
                        {{ _trans('IBM Security QRadar SIEM Implementation for 70+ US State Agencies') }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 mt-2">
                    <p class="py-5 text-lg text-gray-500">
                        {{ _trans("TeamPRO implemented and customized IBM Security QRadar SIEM for one of the US states' government. The solution enabled permanent collection and analysis of events coming from log sources of more than 70 state agencies.") }}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>

@endsection
