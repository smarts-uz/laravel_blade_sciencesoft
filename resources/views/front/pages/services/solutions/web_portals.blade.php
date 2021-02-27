@extends('front.layout')

@section('css')

@endsection

@section('main')
    <div>
        <h1 class="uppercase font-bold mt-10 text-3xl">Web Portal Development</h1>
        <hr class="w-12 border-b-3 border-yellow-500  my-4" />
        <img src="https://www.scnsoft.com/cover-pictures/web-portals-development-01.svg" alt="">
        <p class="my-5 text-xl mb-16 text-gray-600">
            <strong>Web portal development</strong> implies engineering access to a variety of data and
            services via a single web<br> interface. Since <strong>2006</strong>, TeamPRO has covered end-to-end
            portal implementation services for<br> different purposes
            (B2C, B2B, B2E, and community communications) and industries.
        </p>


        <div class="border rounded hover:shadow-2xl	mb-5">
            <div class="flex justify-between mt-6">

                <div>
                    <h1 class="fond-thin font-bold ml-5 mb-4 pt-2 text-2xl">Create Your Portal from A to Z under One Roof
                    </h1>
                    <hr class="w-12 border-b-3 border-yellow-500 pl-4 ml-4 my-4" />
                    <ul class="pl-12 text-xl text-gray-600 pr-12 ">
                        <li class="flex res-text-siz">
                            <div class="h-2 w-2 bg-blue-700 mr-2 relative top-2.5"></div> All services covered: consulting,
                            branding and UX/UI design,<br> web and mobile development, integrations, data analytics,<br>
                            testing, security, continuous support and evolution.
                        </li>
                        <li class="flex res-text-siz">
                            <div class=" h-2 w-2 bg-blue-700 mr-2 relative top-2.5"></div>2 – 8 weeks for the prototype.
                        </li>
                        <li class="flex res-text-siz">
                            <div class="h-2 w-2 bg-blue-700 mr-2 relative top-2.5"></div>3 - 4 months for the first working
                            portal version.
                        </li>

                        <button class="mt-12 mb-24 rounded bg-blue-700">
                            <p class="p-2 text-lg text-white">DISCUSS MY WEB PORTAL</p>
                        </button>

                    </ul>
                </div>

                <div class="flex items-center pr-28 ">
                    <img class="w-72 h-72 justify-center res-img-ml"
                        src="https://www.scnsoft.com/application-development/web-dev-services/opt-for-fast-and-stable-web-app.svg">
                </div>




            </div>


        </div>
        <div class="mt-10 mb-7 fond-thin text-3xl">
            <h1><strong>OUR CUSTOMERS SAY</strong></h1>
            <hr class="w-12 border-b-3 border-yellow-500 pl-2 ml-1 my-4" />
        </div>
        <p class="leading-8 pl-5 text-2xl text-gray-600 -pr-5">
            {{ trans('Harding and Carbone has been very pleased with selecting
            TeamPRO as our vendor for developing a client portal for our customers.') }}<br>

            <br>
            {{ trans('Their professionalism, expertise, guidance, organization, and timing has been wonderful. They were also very
            patient with explaining their process and the next steps if we ran into any issues that we did not
            understand.') }}
            <br>
            <br>
            <strong>{{ trans('Amber Amescua, Director of Operations, Harding and Carbone') }}</strong>

        </p>
        <div class="imagine ml-7">
            <img class=" position:relative left:80px top:2px w-28 mt-5 h-28 float:right"
                src="https://www.scnsoft.com/testimonials-logos/harding-and-carbone-inc-logo.png">

        </div>
        <div class="mt-8 fond-thin font-bold  text-3xl">
            <h1>{{ trans('OUR WEB PORTAL PORTFOLIO') }}</h1>
            <hr class="w-12 border-b-3 border-yellow-500 my-4" />
        </div>


        <div class="swiper-container big-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-16 pb-4">
                            <div class="p-6 border md:flex hover:shadow-lg my-6">
                                <div class="md:w-6/12 mr-3">
                                    <img class="m-auto" src="https://www.scnsoft.com/blog-pictures/ecommerce/b2c-demo.png"
                                        alt="">
                                </div>
                                <div class="mt-6 md:w-6/12 ml-3">
                                    <h1 class="text-xl font-bold">
                                        A B2C ecommerce portal demo
                                    </h1>
                                    <p class="text-lg text-gray-600 mt-6 md:text-xl">
                                        In B2C ecommerce portals, customers value personalized and frictionless experience
                                        across
                                        the digital channels.
                                    </p>
                                    <p class="text-center mt-4 md:text-right lg:pt-16">
                                        <a href="#" class="text-blue-700 font-semibold items-end">
                                            WATCH THE DEMO <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-16 pb-4">
                            <div class="p-6 border md:flex hover:shadow-lg my-6">
                                <div class="md:w-6/12 mr-3">
                                    <img class="m-auto"
                                        src="https://www.scnsoft.com/blog-pictures/ecommerce/b2b-ecommerce-demo.png" alt="">
                                </div>
                                <div class="mt-6 md:w-6/12 ml-3">
                                    <h1 class="text-xl font-bold">
                                        A B2B ecommerce portal demo
                                    </h1>
                                    <p class="text-lg text-gray-600 mt-6 md:text-xl">
                                        In B2B ecommerce portals, buyers value convenient self-service tools to place and
                                        manage
                                        their bulk orders.
                                    </p>

                                    <p class="text-center mt-4 md:text-right lg:pt-16">
                                        <a href="#" class="text-blue-700 font-semibold items-end">
                                            WATCH THE DEMO <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </p>

                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="swiper-button-next text-gray-400"></div>
                    <div class="swiper-button-prev text-gray-400"></div>
                </div>


        <div class="mt-8 fond-thin font-bold  text-3xl">
            <h1>{{ trans('WEB PORTALS WE DELIVER') }}</h1>
            <hr class="w-12 border-b-3 border-yellow-500 my-4" />
        </div>
        <div class="border hover:shadow-2xl 	">

            <div class="flex mt-3.5">
                <div class="ml-6 mt-2">
                    <img class="h-26 w-26" src="https://www.scnsoft.com/blue-icons-on-grey-background/crm.svg" alt="">
                </div>
                <div class="ml-6">
                    <div class="text-3xl">
                        <strong>
                            B2C customer portal
                        </strong>
                    </div>
                    <div class="w-12 h-0.5 bg-yellow-400 mt-3"></div>
                    <div class="flex flex-wrap mt-3">

                        <div class="text-xl">
                            Either for selling consumer goods or providing services, a self-service portal<br> comes as just
                            the right tool for establishing <strong>long-term relations with<br> customers</strong>. Taking
                            usability parameters (navigation, response time, credibility, <br> reliability, and content) as
                            a minimum requirement, we ensure your portal’s<br> convenience in a range of functions:
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-3">
                        <div>
                            <div class="h-2 w-2 bg-blue-700 mr-2 relative top-3"></div>
                        </div>
                        <div class="text-xl">
                            advanced order placement (e.g. custom services created with user<br> participation)
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-3">
                        <div>
                            <div class="h-2 w-2 bg-blue-700 mr-2 relative top-3"></div>
                        </div>
                        <div class="text-xl">
                            order and service management (e.g. (de)activating a service)
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-3">
                        <div>
                            <div class="h-2 w-2 bg-blue-700 mr-2 relative top-3"></div>
                        </div>
                        <div class="text-xl">
                            announcements about service provision changes

                        </div>
                    </div>
                    <div class="flex flex-wrap mt-3">
                        <div>
                            <div class="h-2 w-2 bg-blue-700 mr-2 relative top-3"></div>
                        </div>
                        <div class="text-xl">
                            personalized recommendations
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-3">
                        <div>
                            <div class="h-2 w-2 bg-blue-700 mr-2 relative top-3"></div>
                        </div>
                        <div class="text-xl">
                            account, purchase and payment history review
                        </div>
                    </div>
                    <br>
                    <div class=" mb-7 text-xl">
                        We offer the tandem of a rich industry experience and cutting-edge<br> technologies resulting in the
                        combination of a convenient and appealing <br> interface with strong B2C portal capabilities.

                    </div>



                </div>
            </div>
        </div>
        <div class="border hover:shadow-2xl mt-12	">

            <div class="flex mt-3.5 py-8">
                <div class="ml-6 mt-2">
                    <img class="h-26 w-26" src="https://www.scnsoft.com/blue-icons-on-grey-background/b2b.svg" alt="">
                </div>
                <div class="ml-6">
                    <div class="text-3xl">
                        <strong>
                            B2B customer portal
                        </strong>
                    </div>
                    <div class="w-12 h-0.5 bg-yellow-400 mt-3"></div>
                    <div class="flex flex-wrap mt-3">

                        <div class="text-xl">
                            Only by providing comprehensive customer self-service, a B2B customer<br> portal will fuel
                            customer satisfaction, streamline online sales and save costs.<br> Therefore, our B2B portals
                            include powerful tools for every member of a<br> customer’s buying center (allowing multiple
                            logins for each company), in order<br> for
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-3">
                        <div>
                            <div class="h-2 w-2 bg-blue-700 mr-2 relative top-3"></div>
                        </div>
                        <div class="text-xl">
                            End customers’ purchasing managers to place, track orders, manage services, <br>report
                            satisfaction
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-3">
                        <div>
                            <div class="h-2 w-2 bg-blue-700 mr-2 relative top-3"></div>
                        </div>
                        <div class="text-xl">
                            End customers’ technical specialists to access your guides and other technical<br> resources,
                            report problems and get help

                        </div>
                    </div>


                    <div class="flex flex-wrap mt-3">
                        <div>
                            <div class="h-2 w-2 bg-blue-700 mr-2 relative top-3"></div>
                        </div>
                        <div class="text-xl">
                            End customers’ financial managers to check balance, statuses of invoices and payments, etc.
                        </div>
                    </div>

                    <br>
                    <div class="text-xl">
                        Besides, aimed at tight cooperation, a B2B portal will provide extensive <br> functionality to help
                        you beat the competition:
                    </div>
                    <div class="flex flex-wrap mt-3">
                        <div class="flex">
                            <div class="h-2 w-2 bg-blue-700 mr-2 relative top-3"></div>
                            <div class="text-xl">
                                Automated price calculation depending on volume, promotions and delivery deadline

                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap mt-3">
                        <div class="flex">
                            <div class="h-2 w-2 bg-blue-700 mr-2 relative top-3"></div>
                            <div class="text-xl">
                                Easy (re)ordering tools, customized product descriptions and product comparisons
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>







        <div class="flex mt-8 mb-4 p-4 border hover:shadow-2xl ">

            <div>
                <div class="ml-6 mt-2">
                    <img class="h-96 w-96 pb-72 pl-26"
                        src="https://www.scnsoft.com/blue-icons-on-grey-background/partners.svg" alt="">
                </div>
            </div>
            <div>

                <h1 class=" pl-8 text-3xl font-bold">Partner portal</h1><br>
                <hr class="w-12 h-0.5 ml-6 mb-14 bg-yellow-400" />
                <p class=" leading-8 text-xl text-gray-600 pl-12 pr-6">Created to empower partners, achieve competitive
                    advantages and boost sales, 80% of partner portals end up unpopular with the channel partners. We know
                    how to reverse this trend and are ready to nurture the partner portal till it starts <strong>engaging
                        users</strong>. </p>
                <br>
                <br>
                <p class="text-xl text-gray-600 pl-12 pr-6">We believe, a partner portal should become a daily tool for the
                    partner’s entire staff, not just for a single vendor manager. This way, a vendor gains from direct
                    information exchange with the partner’s personnel, no need for the constant involvement of a vendor
                    manager. What is more, the circle of positively biased partner’s employees becomes wider.</p>
                <br>
                <br>
                <p class="text-xl text-gray-600 pl-12 pr-6 pb-5">
                    When done right, your partner portal can win those who influence the end customer’s buying decision
                    (e.g. a partner’s salespeople), just providing tools and informative resources to easily offer your
                    products. Configurators, calculators, inventory, order status checking, customization tools and metrics
                    - let our experts take care of all the partner portal’s functionality for you to enhance partnership
                    with two-way e-communication.
                </p>
            </div>




        </div>
        <div class=" flex mt-8 mb-4 p-4 border hover:shadow-2xl">
            <div>
                <div class="ml-6 mt-2">
                    <img class="h-96 w-96 pb-72 pr-8"
                        src="https://www.scnsoft.com/blue-icons-on-grey-background/supply_chain_management.svg" alt="">
                </div>
            </div>
            <div>
                <h1 class="text-2xl font-bold">Vendor portal</h1><br>
                <hr class="w-10 border-b-3 border-yellow-500  mb-10 " />

                <p class=" leading-8  text-2xl text-gray-600">A vendor portal is a collaborative platform for direct
                    information exchange with your vendors (including in real time). To encourage vendor self-service and
                    hence reduce your vendor management overload and operating costs, our portals support:<br></p>
                <br>
                <ul class=" leading-8 pl-4 text-2xl text-gray-600 ">
                    <li class="flex">
                        <div class="h-2 w-2 bg-blue-700 mr-3 pb-2 relative top-3.5"></div>role-based access control
                    </li>
                    <li class="flex">
                        <div class="h-2 w-2 bg-blue-700 mr-3 pb-2 relative top-3.5"></div>information and verifications’
                        submission, as well as profile details’ updates by vendors
                    </li>
                    <li class="flex">
                        <div class="h-2 w-2 bg-blue-700 mr-3 pb-2 relative top-3.5"></div>search for and on-portal
                        acceptance of open purchase orders (POs)
                    </li>
                    <li class="flex">
                        <div class="h-2 w-2 bg-blue-700 mr-3 pb-2 relative top-3.5"></div>delivery dates setup and updates
                    </li>
                    <li class="flex">
                        <div class="h-2 w-2 bg-blue-700 mr-3 pb-2 relative top-3.5"></div>claims settlement
                    </li>
                    <li class="flex">
                        <div class="h-2 w-2 bg-blue-700 mr-3 pb-2 relative top-3.5"></div>direct electronic invoice
                        submission
                    </li>
                    <li class="flex">
                        <div class="h-2 w-2 bg-blue-700 mr-3 pb-2 relative top-3.5"></div>inquiries about payments and
                        invoice statuses
                    </li>
                    <li class="flex">
                        <div class="h-2 w-2 bg-blue-700 mr-3 pb-2 relative top-3.5"></div>statistics about previous
                        purchases and supplies, etc.
                    </li>
                    <br>
                </ul>
                <p class=" leading-8 pl-6 text-2xl text-gray-600 pr-6 pb-8">With a vendor portal, all the necessary vendor
                    information is quickly available for all departments involved. As the company and the vendors together
                    gain from saving time and effort, a vendor portal is a win-win collaboration solution for both of you.
                </p>
            </div>

        </div>
        <div class=" flex mt-8 mb-4 p-4 border hover:shadow-2xl">
            <div>
                <div class="ml-6 mt-2">
                    <img class="h-28 w-28 mr-6"
                        src="https://www.scnsoft.com/blue-icons-on-grey-background/common_language.svg" alt="">
                </div>
            </div>
            <div>
                <h1 class="text-2xl font-bold">Community portal</h1><br>
                <hr class="w-10 border-b-3 border-yellow-500  mb-10 " />
                <p class="leading-8 text-2xl text-gray-600 pb-8 pr-6">We can help you build a gateway in the e-world of your
                    community. With the <br> user-friendly interface and strong capabilities, including chat, forums, blogs,
                    <br>events, media files support and more, our portals connect community<br> members to <strong>encourage
                        collaboration</strong> and build relationships, as well as fuel <br>experience and idea exchange.
                </p>
            </div>
        </div>
        <div class="flex mb-4 mt-8 p-4 border hover:shadow-2xl">
            <div>
                <div class="ml-6">
                    <img class="h-96 w-96 mr-6 "
                        src="https://www.scnsoft.com/blue-icons-on-grey-background/knowledge_management.svg" alt="">
                </div>
            </div>
            <div>
                <h1 class=" pl-4 pt-3 font-bold text-2xl">Learning portal</h1><br>
                <hr class="w-10 border-b-3 border-yellow-500  mb-10 ml-4" />
                <p class="pl-6 text-2xl text-gray-600">Our learning portals already benefit governmental and private
                    educational organizations around the globe. We know how to design a learning portal in the best interest
                    of training providers and customers, be they businesses or individual learners. The portals delivered by
                    our team allow:</p><br>
                <ul class="text-2xl  text-gray-600 ">
                    <li class="flex">
                        <div class="h-2 w-3  bg-blue-700 mr-3 pb-2 relative top-3.5"></div>Training providers to facilitate
                        the administration of trainings, manage the client base and efficiently deliver the learning
                        materials
                    </li>
                    <li class="flex">
                        <div class="h-2 w-3 bg-blue-700 mr-3 pb-2 relative top-3.5"></div>Business customers to connect with
                        training providers, get access to courses, allocate individualized training plans to employees and
                        monitor their progress
                    </li>
                    <li class="flex">
                        <div class="h-2 w-3 bg-blue-700 mr-3 pb-2 relative top-3.5"></div>Tutees to select and follow an
                        educational path, avoiding double learning by completing a tailored program based on their previous
                        knowledge and specific requirements<br>
                    </li>


                </ul>
                <br>
                <p class=" leading-8 pl-6 text-2xl text-gray-600 pr-6 pb-8">These are just a few examples out of an
                    extensive functionality that is packed in <br>a responsive design to let our educational portals
                    <strong>provide the true learning experience</strong>.
                </p>

            </div>


        </div>
        <div class=" mb-4 mt-8  p-4 border hover:shadow-2xl">
            <h1 class=" pl-4 pt-3 font-bold text-2xl">Build a Web Portal that is Easy for Users and<br> Effective for
                Business</h1><br>
            <hr class="w-10 border-b-3 border-yellow-500  mb-10 ml-4" />

            <p class="leading-8 pl-6 text-2xl text-gray-600 pr-6 pb-8">TeamPRO’s team is ready to deliver the most
                challenging portal<br> projects to help your leverage streamlined, transparent and consistent<br> web
                communication with your clients, partners, employees, or<br> community.
            </p>
            <button class="mt-4 ml-6 bg-blue-700">
                <p class="p-3 text-lg text-white">DISCUSS MY WEB PORTAL</p>
            </button>

        </div>



    </div>

@endsection


@section('js')


@endsection
