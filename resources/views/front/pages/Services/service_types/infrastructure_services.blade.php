@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="my-10">
        <div class="text-2xl md:text-4xl font-bold mt-6">
            {{ _trans("IT Infrastructure Services – Consulting, Implementation, Management – to Increase Your Business
             Sustainability")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            <img src="https://www.scnsoft.com/it-infrastructure/it-infrastructure-services_1.svg">
            <div>
                <p class="font-normal text-lg leading-loose mt-10">
                    {{ _trans("ScienceSoft’s IT team delivers a full set of services to keep your IT infrastructure reliable
                     with on-going infrastructure administration, continuous monitoring and prompt troubleshooting.
                     We are also ready to plan, implement and manage changes in your IT environment to support the
                     uninterrupted flow of your business operations.")  }}
                </p>

                <div class="flex justify-end my-10">
                    <button
                        class="text-base bg-blue-700 font-bold text-white px-16 py-4 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                        {{ _trans("Contact us")  }}
                    </button>
                </div>
            </div>
        </div>
        <div class="text-2xl md:text-3xl font-bold uppercase">
            {{ _trans("Why Collaborate with ScienceSoft")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <ul class="list-outside list-disc bg-rose-200 text-xl leading-relaxed">
            <li class="mb-4"><strong>31 {{ _trans("years")  }} </strong>{{ _trans("in the IT industry.")  }}
            </li>
            <li>
                <strong>12 {{ _trans("years")  }}</strong> {{ _trans("of experience in ITSM.")  }}
            </li>
            <li>
                {{ _trans("Recognized Microsoft Partner granted with")  }} <strong>8 {{ _trans("Gold Competencies,")  }}</strong> {{ _trans("including such
                 infrastructure-specific competencies as Cloud Platform, Datacenter, Data Platform, and Messaging.")  }}
            </li>
            <li>
                <strong>{{ _trans("AWS Select-Tier Consulting Partner")  }}</strong> {{ _trans("in IoT and big data.")  }}
            </li>
            <li>
                {{ _trans("An expert IT team holding a range of certificates, among which are")  }} <strong>{{ _trans("AWS Certified Solution
                 Architect,
                 Red Hat Certified System Administrator (RHCSA), Microsoft Certified Professional (MCP), AWS
                 Certified SysOps Administrator (SOA).")  }}</strong>
            </li>
            <li>
                {{ _trans("Personal approach to each customer with consideration to their industry specificity.")  }}
            </li>
            <li>
                {{ _trans("Ensuring pricing transparency and SLA flexibility.")  }}
            </li>

        </ul>

        <div class="text-2xl md:text-3xl font-bold mt-10">
            {{ _trans("IT Infrastructure Services ScienceSoft Delivers")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div>
            <img class="h-72 mt-8"
                src="https://www.scnsoft.com/it-infrastructure/it-infrastructure-services-we-deliver.svg" alt="">
        </div>

        <p class="uppercase text-3xl font-bold mt-10">
            {{ _trans("Enterprise-wide infrastructure services")  }}
        </p>

        <p class="my-8 text-xl">
            {{ _trans("We relieve you from the necessity to cope with various IT infrastructure issues with our consulting and
             management services covering your cloud solutions, data centers, virtual desktop infrastructures, and
             the application of DevOps practices.")  }}
        </p>

        <div class="rounded-sm p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-60 md:h-60"
                        src="https://www.scnsoft.com/colorful-icons/it-infrastructure-consulting_1.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-3xl md:text-4xl font-bold">{{ _trans("Tailored pricing plan")  }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-xl md:text-2xl">
                        {{ _trans("Our team can assist you in determining your current IT infrastructure state, and further
                         help you build and realize an IT strategy aimed at improving your IT infrastructure
                         efficiency.")  }}
                    </p>
                    <p class=" text-xl md:text-2xl my-6">
                        {{ _trans("ScienceSoft offers the following services in terms of IT infrastructure consulting:")  }}
                    </p>
                    <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                        <li class="mb-4">{{ _trans("Audit of the entire IT infrastructure according to the industry standards
                         if applicable (e.g., HIPAA, PCI DSS, GDPR).")  }} </li>
                        <li class="mb-4">{{ _trans("Analysis of the IT infrastructure management processes based on ITIL
                         principles and their further optimization.")  }} </li>
                        <li class="mb-4">{{ _trans("Designing a detailed plan to improve your IT infrastructure performance.")  }}
                        </li>
                        <li class="mb-4">{{ _trans("Identifying operational issues and data protection risks and defining a way
                         to eliminate them.")  }} </li>
                        <li>
                            {{ _trans("Providing consultations and trainings for your employees to improve their infrastructure
                             management skills.")  }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rounded-sm p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-60 md:h-60"
                        src="https://www.scnsoft.com/colorful-icons/it-infrastructure-management.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-3xl md:text-4xl font-bold">{{ _trans("IT infrastructure management")  }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-xl md:text-2xl">
                        {{ _trans("Our offering in terms of IT infrastructure management includes the following services:")  }}
                    </p>
                    <p class=" text-xl md:text-2xl my-6">
                        {{ _trans("ScienceSoft offers the following services in terms of IT infrastructure consulting:")  }}
                    </p>
                    <div class="ml-6">
                        <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                            <li class="mb-4 text-2xl font-bold">{{ _trans("IT infrastructure administration")  }} </li>
                            <p class="text-lg">
                                {{ _trans("We apply our long-term experience in ITSM to maintain the performance of your
                                 network,
                                 Windows and Linux servers, databases, hardware and software operability to help you
                                 keep
                                 a high level of your business productivity and minimize systems downtime")  }}
                            </p>
                            <li class="mb-4 text-2xl font-bold">{{ _trans("IT infrastructure monitoring")  }}</li>
                            <p class="text-lg">
                                {{ _trans("With the help of such tools as System Center Configuration Manager (for Windows
                                 servers) and Ansible (both for Windows and Linux) our team is well versed in,
                                 ScienceSoft can detect and mitigate performance or security issues before your
                                 employees or external users find them. Thus, we’ll help you maintain a high level of
                                 user satisfaction")  }}
                            </p>
                            <li class="mb-4 text-2xl font-bold">{{ _trans("IT infrastructure troubleshooting")  }} </li>
                            <p class="text-lg">
                                {{ _trans("ScienceSoft’s IT team offers you their 24/7 availability and readiness to mitigate
                                 the issues related to your IT infrastructure scalability, its uptime, resource
                                 utilization, storage use, and many more")  }}
                            </p>
                            <li class="mb-4 text-2xl font-bold">{{ _trans("IT infrastructure evolution")  }}</li>
                            <p class="text-lg">
                                {{ _trans("We are ready to take the overall responsibility for managing minor and critical
                                 changes you need to make in your IT environment, e.g., improve the data protection
                                 within your IT infrastructure by proper implementation of security measures like
                                 IDS/IPS, DLP, SIEM, or perform a smooth movement of your workloads to the cloud with
                                 the minimal downtime")  }}
                            </p>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-3xl font-bold">
            {{ _trans("Cloud infrastructure services")  }}
        </h1>
        <p class="text-lg">
            {{ _trans("Taking into consideration your current business needs and requirements and applying the extensive
             expertise in cloud computing platforms, i.e. AWS, Azure, Google Cloud (GCP), and more, ScienceSoft’s IT
             team is ready to provide you with a range of cloud-specific services.")  }}
        </p>
        <div class="rounded-sm p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-60 md:h-60"
                        src="https://www.scnsoft.com/colorful-icons/it-infrastructure-consulting_1.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-3xl md:text-2xl font-bold">{{ _trans("Cloud infrastructure consulting")  }}</h1>

                    <p class=" text-xl md:text-2xl mt-6">
                         {{ _trans("ScienceSoft’s team of certified cloud architects will help you to find a suitable approach
                          to integrate a cloud strategy into your general business strategy. We offer professional
                          consulting services on migrating your business to the cloud faultlessly and increasing the
                          number of cloud services used across your organization to accelerate your business
                          operations..")  }}
                    </p>
                </div>
            </div>
        </div>
        <div class="rounded-sm p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-60 md:h-60"
                        src="https://www.scnsoft.com/colorful-icons/cloud-infrastructure-management.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-1xl md:text-2xl font-bold">{{ _trans("Cloud infrastructure management")  }}</h1>
                    <p class=" text-xl md:text-2xl mt-4">
                        {{ _trans("ScienceSoft’s cloud administrators can set up and maintain your cloud-based IT
                         infrastructure. Our experts provide cloud management services focusing on:")  }}
                    </p>
                    <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                        <li class="mb-4">{{ _trans("Properly setting up your cloud-based IT infrastructure.")  }} </li>
                        <li class="mb-4">{{ _trans("Configuring and optimizing AWS, Azure, and other cloud services usage.")  }}
                        </li>
                        <li class="mb-4">{{ _trans("Constantly monitoring your cloud-based IT infrastructure to detect problems
                         before your users do.")  }}
                        </li>
                        <li class="mb-4">{{ _trans("Planning and further implementing changes and expansions meeting your needs
                         and requests.")  }} </li>
                        <li>
                            {{ _trans("In case the applications managed by another vendor are concerned, cooperating with the
                             vendor, possibly applying the DevOps approach.")  }}
                        </li>
                        <li>
                            {{ _trans("Providing you with consolidated billing (one bill for AWS services and our cloud
                             services).")  }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rounded-sm p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-60 md:h-60"
                        src="https://www.scnsoft.com/colorful-icons/cloud-infrastructure-monitoring.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-3xl md:text-2xl font-bold">{{ _trans("Cloud infrastructure monitoring")  }}</h1>

                    <p class=" text-xl md:text-2xl mt-6">
                        {{ _trans("n case you do not need to outsource all the cloud infrastructure management activities, our
                         team is ready to deliver ongoing monitoring services to ensure the prompt detection and
                         prioritization of operational issues occurring within your cloud infrastructure and relating
                         to resource utilization, network performance, etc. To deliver high-level monitoring services
                         while avoiding downtimes within your cloud IT environment, we properly configure Zabbix,
                         Nagios and similar tools.")  }}
                    </p>
                </div>
            </div>
        </div>
        <div class="rounded-sm p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-60 md:h-60"
                        src="https://www.scnsoft.com/colorful-icons/cloud-infrastructure-security.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-1xl md:text-2xl font-bold">{{ _trans("Cloud infrastructure security")  }}</h1>
                    <p class=" text-xl md:text-2xl mt-4">
                        {{ _trans("As a Gold Microsoft Business Partner equipped with the competencies in Cloud Platform, Data
                         Platform, Datacenter, and Messaging, and an IBM Business Partner in Security Operations &
                         Response, ScienceSoft is ready to ensure the security management and threat protection
                         across your cloud infrastructure by:")  }}
                    </p>
                    <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                        <li class="mb-4">{{ _trans("Properly setting up your cloud-based IT infrastructure.")  }} </li>
                        <li class="mb-4">{{ _trans("Configuring and optimizing AWS, Azure, and other cloud services usage.")  }}
                        </li>
                        <li class="mb-4">{{ _trans("Constantly monitoring your cloud-based IT infrastructure to detect problems
                         before your users do.")  }}
                        </li>
                        <li class="mb-4">{{ _trans("Planning and further implementing changes and expansions meeting your needs
                         and requests.")  }} </li>
                        <li>
                            {{ _trans("In case the applications managed by another vendor are concerned, cooperating with the
                             vendor, possibly applying the DevOps approach.")  }}
                        </li>
                        <li>
                            {{ _trans("Providing you with consolidated billing (one bill for AWS services and our cloud
                             services).")  }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rounded-sm p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-60 md:h-60"
                        src="https://www.scnsoft.com/colorful-icons/cloud-infrastructure-migration.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-3xl md:text-2xl font-bold">{{ _trans("Cloud migration")  }}</h1>

                    <p class=" text-xl md:text-2xl mt-6">
                        {{ _trans("ScienceSoft’s team can perform a full-scale migration of your on-premises IT infrastructure
                         to the cloud with the minimal downtime during the migration process. We can seamlessly put
                         your IT infrastructure in the virtual environment to increase its flexibility and
                         scalability with the reduced operational costs. Having the experience with a number of cloud
                         computing platforms, we can help you create an agile cloud-based IT infrastructure.")  }}
                    </p>
                </div>
            </div>
        </div>

        <h1 class="text-3xl font-bold">
            {{ _trans("Data center services")  }}
        </h1>
        <p class="text-lg">
            {{ _trans("ScienceSoft’s IT infrastructure team is experienced in a wide range of data center services – we cover
             management, maintenance, and monitoring of on-premises, cloud-based, and hybrid data centers.")  }}
        </p>

        <div class="rounded-sm p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-60 md:h-60"
                        src="https://www.scnsoft.com/colorful-icons/cloud-infrastructure-security.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-1xl md:text-2xl font-bold">{{ _trans("Data center management")  }}</h1>
                    <p class=" text-xl md:text-2xl mt-4">
                        {{ _trans("Our data center experts are ready to make your data center operational capabilities meet
                         with your business needs, close any data center operational gaps, improve your data center
                         efficiency by automating various routine processes in your data center, such as data center
                         scheduling and monitoring, application delivery.")  }}
                    </p>
                    <p class="text-xl my-4">
                        {{ _trans("ScienceSoft’s data center management services include:")  }}
                    </p>
                    <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                        <li class="my-4">{{ _trans("Installing and properly configuring servers, storage and network
                         appliances, and other data center components.")  }} </li>
                        <li class="mb-4">{{ _trans("Managing data center workflows.")  }}
                        </li>
                        <li class="mb-4">{{ _trans("Retiring or adding data center components if needed.")  }}
                        </li>
                        <li class="mb-4">{{ _trans("Carrying out the migration of an on-premises data center to the cloud with
                         the minimal downtime.")  }} </li>
                        <li>
                            {{ _trans("Managing regular enhancements of data center components (servers, storage, networking
                             equipment, software) according to your requests.")  }}
                        </li>
                        <li>
                            {{ _trans("Managing optimal load balancing and data distribution across your data center.")  }}
                        </li>
                        <li>
                            {{ _trans("Providing the security of your data center and regularly performing backups to ensure
                             data safety with the help of System Center Data Protection Manager (DPM), Veeam Backup &
                             Replication.")  }}
                        </li>
                        <li>
                            {{ _trans("Designing a disaster recovery plan to avoid data loss.")  }}
                        </li>
                        <li>
                            {{ _trans("Ensuring a complete transparency over the data center components, e.g., computers,
                             storages, networking hardware, software.")  }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rounded-sm p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-60 md:h-60"
                        src="https://www.scnsoft.com/colorful-icons/data-center-monitoring.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-1xl md:text-2xl font-bold">{{ _trans("Data center monitoring")  }}</h1>
                    <p class=" text-xl md:text-2xl mt-4">
                        {{ _trans("If you do not feel like outsourcing all the set of data center management activities,
                         ScienceSoft offers their data center monitoring services separately. Our team supervises the
                         entire data center infrastructure, be it on-premises, cloud-based or hybrid. To ensure
                         constant monitoring within your data center infrastructure and deliver you detailed insights
                         into your data center state, we use such automated monitoring tools as Zabbix and Nagios.
                         ScienceSoft provides:")  }}
                    </p>
                    <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                        <li class="my-4">{{ _trans("Ongoing monitoring of Windows, Linux servers and computer systems to ensure
                         they perform properly and avoid unplanned downtimes.")  }} </li>
                        <li class="mb-4">{{ _trans("Monitoring of data center operations and predicting or quickly addressing
                         any arising issues to avoid business interruptions due to unexpected downtimes.")  }}
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <h1 class="text-3xl font-bold">
            {{ _trans("DevOps services")  }}
        </h1>
        <p class="text-lg my-4">
            {{ _trans("By applying DevOps practices and techniques, such as continuous integration and continuous delivery
             (CI/CD), infrastructure as code (IaC), as well as unifying the efforts of your development and
             operations teams, ScienceSoft’s technical team experienced in ITSM and DevOps practices can accelerate
             your overall infrastructure management, modernization and maintenance.")  }}
        </p>

        <div class="rounded-sm p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-60 md:h-60"
                        src="https://www.scnsoft.com/colorful-icons/devops-consulting.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-1xl md:text-2xl font-bold"><a href="#">{{ _trans("DevOps consulting")  }}</a></h1>
                    <p class=" text-xl md:text-2xl mt-4">
                        {{ _trans("ScienceSoft’s team helps apply the DevOps approach to:")  }}
                    </p>
                    <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                        <li class="my-4">{{ _trans("Automate and accelerate the provision of a new infrastructure for a new
                         software development project due to the use of IaC approach")  }}.</li>
                        <li class="mb-4">{{ _trans("Align the development and testing environments with the production to avoid
                         the differences between their configurations and software failures on production.")  }}
                        </li>
                        <li>
                            {{ _trans("Speed up infrastructure modifications, software updates and bug fixing due to the
                             application of CI/CD and application release automation (ARA) approaches.")  }}
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="rounded-sm p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-60 md:h-60"
                        src="https://www.scnsoft.com/colorful-icons/devops-implementation.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-1xl md:text-2xl font-bold">{{ _trans("DevOps implementation")  }}</h1>
                    <p class=" text-xl md:text-2xl mt-4">
                        {{ _trans("ScienceSoft’s team provides you with the end-to-end service aimed at the faultless
                         implementation of the DevOps approach. Taking into account your business needs and
                         requirements, we:")  }}
                    </p>
                    <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                        <li class="my-4">{{ _trans("Develop a comprehensive strategy for the implementation of the DevOps
                         approach.")  }}</li>
                        <li class="mb-4">{{ _trans("Set up and configure DevOps tools for containerization (Kubernetes,
                         Ansible), CI/CD (GoCD, Jenkins), IT automation (Terraform, Chef), application monitoring
                         (Prometheus, Zabbix).")  }}
                        </li>
                        <li>
                            {{ _trans("Launch your DevOps initiative avoiding downtimes and provide you with after-launch
                             support until your goals are achieved.")  }}
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <h1 class="text-3xl font-bold">
            {{ _trans("Virtual desktop infrastructure (VDI) services: consulting, implementation and support")  }}
        </h1>
        <p class="text-lg my-4">
            {{ _trans("ScienceSoft’s experts are ready to offer you their experience in desktop virtualization consulting,
             implementation and support to significantly increase your corporate data protection (since it’s stored
             in the data center, not on the endpoints your employees use) and your employees’ productivity (due to
             their ability to work remotely, comfortably and securely from any device). Our specialists can help you:")  }}
        </p>
        <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
            <li class="my-4">{{ _trans("Get a comprehensive evaluation of your company’s organizational and operational needs
             and determine the suitable approach for desktop infrastructure virtualization.")  }}</li>
            <li class="mb-4">{{ _trans("Ensure centralized and thus simplified management of the data, applications within the
             virtual desktops.")  }}
            </li>
            <li>
                {{ _trans("Increase your users’ performance.")  }}
            </li>
            <li>
                {{ _trans("Deliver portable, centrally managed desktops to your internal or external users.")  }}
            </li>
            <li>
                {{ _trans("Enhance the security of the virtual desktops due to centralization.")  }}
            </li>
            <li>
                {{ _trans("Achieve your corporate data integrity due to its regular backups.")  }}
            </li>
            <li>
                {{ _trans("Promptly eliminate any issue related to the performance of your VDI, regardless of the desktop
                 virtualization software platform you use, be it Microsoft Virtual Desktop, Citrix XenDesktop, VMware
                 Horizon View, or any other.")  }}
            </li>

        </ul>

        <div class='flex justify-between items-center p-10 shadow-2xl mt-20'>
            <div class='w-2/3'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-2xl font-bold'>{{ _trans("Start Building Your Software in a Couple of Weeks!")  }}</p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>{{ _trans("We will develop a scalable solution with neat UX design that
                 answers your business needs.")  }}</p>
            </div>
            <div class='w-1/3 m-0 flex justify-center items-center'>
                <a href="#" class='px-8 py-3 bg-blue-700 text-white uppercase hover:bg-blue-900'>{{ _trans("Get a Free
                 Consulation")  }}</a>
            </div>
        </div>
        <div>
            <h1 class="uppercase font-bold mt-10 text-3xl">
                {{ _trans("Selected Projects")  }}
            </h1>
            <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
            <div class="rounded-sm bg-gray-50 relative mt-10 transition-shadow p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-center ">
                    <div class="flex text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-52"
                            src="https://www.scnsoft.com/boss/images/948b4f5b-9046-4f88-a8a1-ea5f1095f6cfinvention_machine_with_semantic_search_small.jpg"
                            alt="">
                    </div>
                    <div class=" flex flex-col w-5/6 mb-10">
                        <h1 class="text-xl md:text-2xl font-bold">{{ _trans("Development of Invention Machine Software with
                         Semantic Search")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <p class=" text-gray-500 text-lg md:text-xl">
                            {{ _trans("ScienceSoft successfully introduced the DevOps approach and implemented CI/CD pipeline
                             to manage the IT infrastructure of a US multi-industry enterprise with a core business
                             in retail.")  }}
                        </p>

                    </div>
                </div>
                <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">{{ _trans("Learn More")  }}<i
                        class="fas fa-arrow-right ml-4"></i></a>
            </div>
        </div>
        <div>

            <div class="rounded-sm bg-gray-50 relative mt-10 transition-shadow p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-center ">
                    <div class="flex text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-52"
                            src="https://www.scnsoft.com/boss/images/948b4f5b-9046-4f88-a8a1-ea5f1095f6cfinvention_machine_with_semantic_search_small.jpg"
                            alt="">
                    </div>
                    <div class=" flex flex-col w-5/6 mb-10">
                        <h1 class="text-xl md:text-2xl font-bold">{{ _trans("Development of Invention Machine Software with
                         Semantic Search")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <p class=" text-gray-500 text-lg md:text-xl">
                            {{ _trans("ScienceSoft successfully introduced the DevOps approach and implemented CI/CD pipeline
                             to manage the IT infrastructure of a US multi-industry enterprise with a core business
                             in retail.")  }}
                        </p>

                    </div>
                </div>
                <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">{{ _trans("Learn More")  }}<i
                        class="fas fa-arrow-right ml-4"></i></a>
            </div>
        </div>
        <div>

            <div class="rounded-sm bg-gray-50 relative mt-10 transition-shadow p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-center ">
                    <div class="flex text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-52"
                            src="https://www.scnsoft.com/boss/images/948b4f5b-9046-4f88-a8a1-ea5f1095f6cfinvention_machine_with_semantic_search_small.jpg"
                            alt="">
                    </div>
                    <div class=" flex flex-col w-5/6 mb-10">
                        <h1 class="text-xl md:text-2xl font-bold">{{ _trans("Development of Invention Machine Software with
                         Semantic Search")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <p class=" text-gray-500 text-lg md:text-xl">
                            {{ _trans("ScienceSoft successfully introduced the DevOps approach and implemented CI/CD pipeline
                             to manage the IT infrastructure of a US multi-industry enterprise with a core business
                             in retail.")  }}
                        </p>

                    </div>
                </div>
                <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">{{ _trans("Learn More")  }}<i
                        class="fas fa-arrow-right ml-4"></i></a>
            </div>
        </div>
        <div>

            <div class="rounded-sm bg-gray-50 relative mt-10 transition-shadow p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-center ">
                    <div class="flex text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-52"
                            src="https://www.scnsoft.com/boss/images/948b4f5b-9046-4f88-a8a1-ea5f1095f6cfinvention_machine_with_semantic_search_small.jpg"
                            alt="">
                    </div>
                    <div class=" flex flex-col w-5/6 mb-10">
                        <h1 class="text-xl md:text-2xl font-bold">{{ _trans("Development of Invention Machine Software with
                         Semantic Search")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <p class=" text-gray-500 text-lg md:text-xl">
                            {{ _trans("ScienceSoft successfully introduced the DevOps approach and implemented CI/CD pipeline
                             to manage the IT infrastructure of a US multi-industry enterprise with a core business
                             in retail.")  }}
                        </p>

                    </div>
                </div>
                <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">{{ _trans("Learn More")  }}<i
                        class="fas fa-arrow-right ml-4"></i></a>
            </div>
        </div>
        <div>
            <div class="rounded-sm bg-gray-50 relative mt-10 transition-shadow p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-center ">
                    <div class="flex text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-52"
                            src="https://www.scnsoft.com/boss/images/948b4f5b-9046-4f88-a8a1-ea5f1095f6cfinvention_machine_with_semantic_search_small.jpg"
                            alt="">
                    </div>
                    <div class=" flex flex-col w-5/6 mb-10">
                        <h1 class="text-xl md:text-2xl font-bold">{{ _trans("Development of Invention Machine Software with
                         Semantic Search")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <p class=" text-gray-500 text-lg md:text-xl">
                            {{ _trans("ScienceSoft successfully introduced the DevOps approach and implemented CI/CD pipeline
                             to manage the IT infrastructure of a US multi-industry enterprise with a core business
                             in retail.")  }}
                        </p>

                    </div>
                </div>
                <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">{{ _trans("Learn More")  }}<i
                        class="fas fa-arrow-right ml-4"></i></a>
            </div>
        </div>

    </div>

@endsection

@section('js')

@endsection
