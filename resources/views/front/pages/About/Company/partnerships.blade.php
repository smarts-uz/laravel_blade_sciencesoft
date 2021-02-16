@extends('front.layout')

@section('css')

@endsection

@section('main')

        <div class=" mx-6 md:mx-16 lg:mx-24">

            <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ _trans("Strategic Partnerships")  }}
            </h1>
            <hr class="w-12 mt-5 bg-yellow-500 h-1" />

            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center">
                <div class="md:w-3/12  flex items-center justify-center">
                    <img src="https://www.scnsoft.com/partners/ms_gold_partner-01.svg" alt="">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">{{ _trans("ScienceSoft has been a member of the Microsoft Partner Network since November 2008. The company is a Microsoft Gold Competency Partner and holds eight competencies recognizing technical expertise in consulting and selling Microsoft products and technologies worldwide: Gold Application Development, Gold Application Integration, Gold Collaboration and Content, Gold Data Analytics, Gold Data Platform, Gold Datacenter, Gold Cloud Platform and Gold Messaging. ScienceSoft’s particular focus is Microsoft Dynamics 365 (formerly Dynamics CRM) with 10 experts on board and 15 projects delivered for corporations in Healthcare, Retail, Telecom, Banking, Oil & Gas and other industries.")  }}</p>
                </div>
            </div>
            <!-- ============================= -->
            <div class="w-full sm:flex my-5 py-5 xl:flex-row flex-col justify-center">
                <div class="md:w-3/12 justify-center flex items-center">
                    <img src="https://www.scnsoft.com/partners/sw-development/aws-apn-select-consulting-partner.svg" alt="">
                </div>
                <div class="md:w-8/12 text-xl leading-relaxed text-gray-500 p-3">
                    <p class="">{{ _trans("ScienceSoft is an")  }} <a href="#" class="underline">{{ _trans(" AWS Consulting Partner ")  }}</a>{{ _trans(" since 2017 and is included in the <b>AWS Select</b> tier. With AWS-accredited solutions architects, technical professionals and SysOps administrators on-board, we carry out comprehensive AWS managed services. ScienceSoft has implemented an array of AWS-based projects, delivering business applications, databases and data warehouses, digital marketing solutions, IoT infrastructures, big data processing and analytics solutions.")  }}</p>
                </div>
            </div>
            <!-- ============================= -->
            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center">
                <div class="md:w-3/12  flex items-center justify-center">
                    <img src="https://www.scnsoft.com/partners/oracle.svg" alt="">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">
                        {{ _trans("An Oracle Partner since 2007, ScienceSoft provides end-to-end business intelligence solutions, including data warehouse implementation, predictive analytics, reporting, OLAP and visualization.")  }}</p>
                </div>
            </div>
            <!-- ============================= -->
            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center">
                <div class="md:w-3/12  flex items-center justify-center">
                    <img src="https://www.scnsoft.com/partners/ibm-silver-business-partner.svg" alt="">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">
                    <p class="">{{ _trans("ScienceSoft, ")  }}<a href="#" class="underline">{{ _trans("IBM Silver Business Partner ")  }}</a> ,{{ _trans(" has been working in Security Intelligence together with IBM for 16 years. We have been creating IBM TSIEM/TCIM and TSOM products and co-developed IBM’s official TSIEM to QRadar migration guide. Since 2011 ScienceSoft has been working on SIEM projects in North America, Europe, the Middle East and Africa. In addition to that, we launched a QRadar anti-fraud solution for banking and released a QLEAN (aka Health Check Framework) for IBM QRadar SIEM.")  }}</p>
                </div>
            </div>
            <!-- ============================= -->
            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center items-center">
                <div class="md:w-3/12  flex items-center justify-center">
                    <img src="https://www.scnsoft.com/partners/servicenow/servicenow-premier-partner.svg" alt="">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">
                    <p class="">{{ _trans("ScienceSoft has been running ServiceNow consulting and implementation services since 2009. As a")  }}<a href="#" class="underline">{{ _trans("Premier ServiceNow Partner")  }} </a>{{ _trans(" we deliver efficient ITSM solutions that bring visibility into our clients’ IT processes and infrastructure, allow timely reaction to incidents, problems and events, minimize negative impact of infrastructural changes, and help to optimize IT support costs.")  }}</p>
                </div>
            </div>
            <!-- ============================= -->
            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center items-center">
                <div class="md:w-3/12  flex items-center justify-center">
                    <img src="https://www.scnsoft.com/partners/magento_solution_partner.svg" alt="">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">
                    <p class="">{{ _trans("A")  }} <a href="#" class="underline">{{ _trans("Magento Solution Partner,")  }}</a>{{ _trans("ScienceSoft serves businesses that need complex e-commerce solutions with extensive functionality and user-friendly design. For 9 years, we’ve been creating high-performance and secure online stores powered by the latest Magento technologies.to optimize IT support costs.")  }} </p>
                </div>
            </div>
            <!-- ============================= -->
            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center items-center">
                <div class="md:w-3/12  flex items-center justify-center">
                    <img src="https://www.scnsoft.com/partners/ecommerce/adobe-bronze-solution-partner.svg" alt="">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">
                    <p class="">
                        {{ _trans("An Adobe Commerce Cloud partner, ScienceSoft helps businesses secure the viability of their business model in the digital age and shift their operations online to serve customers globally. Since 2003, our team has been designing ecommerce solutions and web portals for businesses in retail, manufacturing, healthcare, education, and other industries. Powered by Adobe technologies, we build highly automated and effective digital solutions.")  }}</p>
                </div>
            </div>
            <!-- ============================= -->
            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center items-center">
                <div class="md:w-3/12  flex items-center justify-center">
                    <img src="https://www.scnsoft.com/partners/pimcore_partner_silver.svg" alt="">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">
                        {{ _trans("With a proven track record of implementing Pimcore website solutions, ScienceSoft was the 4th company in the US to obtain Pimcore partnership. To satisfy the ever-growing need for modern and responsive websites, ScienceSoft team of 7 Pimcore experts offers turnkey website, including mobile apps with Pimcore backend, migration to Pimcore as well as maintenance and support.")  }}</p>
                </div>
            </div>
            <!-- ============================= -->
            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center items-center">
                <div class="md:w-3/12 flex items-center justify-center">
                    <img src="https://www.scnsoft.com/partners/sw-development/salesforce-partner---2019.svg" alt="">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">
                        {{ _trans("Since 2008, ScienceSoft has been successfully delivering industry-specific CRM and CXM solutions to customers in Healthcare, Retail, Telecommunications, Banking, and Manufacturing. As a ")  }}<a href="#" class="underline">{{ _trans("Salesforce Registered Consulting Partner,")  }}</a>{{ _trans("ScienceSoft provides its customers with tailor-made solutions based on the best-in-class platform")  }}</p>
                </div>
            </div>
            <!-- ============================= -->
            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center items-center">
                <div class="md:w-3/12  flex items-center justify-center">
                    <img src="https://www.scnsoft.com/partners/managed-services/citrix-silver-partner-logo.svg" alt="">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">
                        {{ _trans("ScienceSoft is a member of the")  }} <b> {{ _trans("Citrix Partner")  }}</b> {{ _trans("network as a")  }}<b> {{ _trans("Silver Solution Advisor")  }}</b>{{ _trans(" since 2018 with Citrix-accredited in-house professionals. ScienceSoft’s team holds a total of")  }} <b> {{ _trans("16 Citrix certificates,")  }}</b> {{ _trans("including Citrix Consulting Methodology and Project Management, Citrix Certified Sales Professional (CCSP-019), Leveraging Citrix Sales Tools, Important Revenue Recognition and Legal Considerations, Think Like a Support Engineer, etc.")  }}</p>
                </div>
            </div>
            <!-- ============================= -->
            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center items-center">
                <div class="md:w-3/12  flex items-center justify-center">
                    <img src="https://www.scnsoft.com/partners/image-thumb__4721__auto_4ce7c06f1fc9cde03644b7c38405444d/kyubit_logo.png" alt="">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">
                        {{ _trans("Kyubit Business Intelligence partner
                        In cooperation with Kyubit Business Intelligence, ScienceSoft delivers comprehensive OLAP analytic solutions tailored to customers’ specific needs and requirements. Bringing in over 31 years in BI & Data Science, ScienceSoft is able to incorporate Kyubit’s products into elaborate BI solutions for customers in Healthcare, Telecom, Retail, Financial and Manufacturing industries.")  }}</p>
                </div>
            </div>
            <!-- ============================= -->
            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center items-center">
                <div class="md:w-3/12  flex items-center justify-center">
                    <img src="https://www.scnsoft.com/partners/opentext.svg" alt="">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">
                        {{ _trans("As Services Partner of OpenText, ScienceSoft has been using StreamServe to help companies in Telecommunications, Retail, Banking and other industries benefit from powerful document management capabilities.")  }}
                    </p>
                </div>
            </div>
            <!-- ============================= -->
            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center items-center">
                <div class="md:w-3/12  flex items-center justify-center">
                    <img src="https://www.scnsoft.com/testimonials-logos/ispirer.svg" alt="">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">
                        {{ _trans("A long-term partner of ScienceSoft, Ispirer offers cross-platform database migration, embedded SQL/Database API Migration and application conversion. The company focuses on custom and automated conversion of SQL languages.")  }}
                    </p>
                </div>
            </div>
            <!-- ============================= -->
        </div>

@endsection

@section('js')

@endsection
