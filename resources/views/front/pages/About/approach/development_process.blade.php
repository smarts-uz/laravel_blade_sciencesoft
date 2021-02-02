@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="lg:mx-24 md:mx-16 mx-6">
    <p class="text-gray-400 text-xs">Home &#62; About Company</p>
    <h1 class="uppercase font-bold mt-10 text-2xl">
        About ScienceSoft – Global IT Company
    </h1>
    <hr class="w-12 mt-5 text-yellow-400 h-4" />
    <img src="https://www.scnsoft.com/about/company-new/about-company-sciencesoft.svg" />
    <p class="my-5 text-lg">
        Founded in 1989, ScienceSoft is a provider of IT consulting and software
        development services. Having started as a small AI product company, we
        switched to IT services in 2002 and ever since we have helped non-IT
        organizations and software product companies improve business
        performance and quickly win new customers.
    </p>
    <p class="my-5 text-lg">
        With over 31 years in Information Technology, we have built up expertise
        in CRM, ERP, Ecommerce, Data Analytics, Information Security, DMS, and
        other areas and conquered such innovative fields as Artificial
        Intelligence and Machine Learning, Big Data, Internet of Things,
        Computer Vision, and Augmented and Virtual Reality.
    </p>
    <p class="my-5 text-lg">
        We headquarter in McKinney, TX, US, have a European office in Vantaa,
        Finland and a delivery center in Minsk, Belarus. Having gained trust
        among companies operating in the Gulf region, we opened our Middle East
        office in the UAE in 2020.
    </p>


<div class=" min-h-screen  mx-auto">
<!-- Servise -- develompent -- TopLink  -->
<div class="min-w-min  flex items-center py-2">
<a href="#" class="text-gray-500 text-xs px-4">Home</a> <i
    class="fas fa-chevron-right text-gray-500 font-xs"></i><a href="#"
    class="text-gray-500 text-xs px-3">Development Process</a>
</div>
<!-- Servise -- develompent -- SubTitle -->
<p class="lg:text-5xl text-3xl px-4 font-bold">Overview of Software Development Process at ScienceSoft
</p>
<!-- Servise -- develompent -- SubTitles's LINE -->
<div class="h-0.5 w-10 mb-5 pl-4 mx-3 bg-yellow-500 my-3"></div>
<p class="mb-5 px-4 text-xl text-gray-600 font-normal">At ScienceSoft, we tailor the software development
process to your specific business needs to deliver high-quality software on time and within budget.
</p>
<h1 class="uppercase lg:text-5xl px-4 font-bold mt-10 text-3xl">
DEVELOPMENT APPROACHES WE FOLLOW
</h1>
<hr class="w-12 border-b-2 border-yellow-600 p4  m-4" />
<!-- Development Approaches card -->
<div
class="w-full hover:shadow-2xl  lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
<div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
    <img class="w-4/5 " src="https://www.scnsoft.com/about/development-process/dev-approache_agile.svg"
        alt="">
</div>
<div class="lg:w-3/4  mx-auto w-11/12 mb-8">
    <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
        Agile
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600   m-4" /><br>
    <p class="px-4 text-base sm:text-lg text-sm">The <a href="#"
            class="underline hover:text-blue-800 ">Agile methodology</a> allows us to release reliable
        software fast and introduce changes easily. The development process consists of <b> 1-4 week
            iterations </b>resulting in an evolved version of software shipped each time. After each
        iteration, we get <b> real user feedback </b> that drives informed decisions on the next development
        steps.</p>
    <br>
    <br>
    <p class="px-4 text-base sm:text-lg text-sm">
        <i>
            Note: Although the Agile approach is viable in many cases, we can also adopt Waterfall and other
            approaches depending on a customer’s objectives. Check out our <a href="#"
                class="underline hover:text-blue-800 "> overview </a>of all possible software
            development life cycle (SDLC) models.
        </i>
    </p>
</div>
</div>
<!-- ============================= -->
<div
class="w-full hover:shadow-2xl  lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
<div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
    <img class="w-4/5 " src="https://www.scnsoft.com/about/development-process/dev-approache_devops.svg"
        alt="">
</div>
<div class="lg:w-3/4  mx-auto w-11/12 mb-8">
    <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
        DevOps
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600   m-4" /><br>
    <p class="px-4 text-base sm:text-lg text-sm">With an established <a href="#"
            class="underline hover:text-blue-800 ">DevOps </a> culture at ScienceSoft, we streamline
        software delivery and improve its quality with the following DevOps best practices:</p>
    <br>
    <div class="w-full  px-4 flex flex-row mb-5">
        <span class="w-5 h-2 bg-blue-500 mt-3"></span>
        <p class="px-4 text-base sm:text-lg text-sm"><b> Infrastructure as Code (IaC):</b> automating the
            creation of new infrastructures and keeping them consistent with each other to ensure smooth
            software deployment.</p>
    </div>
    <!-- ========================= -->
    <div class="w-full  px-4 flex flex-row mb-5">
        <span class="w-5 h-2 bg-blue-500 mt-3"></span>
        <p class="px-4 text-base sm:text-lg text-sm"><b> Continuous Integration/Continuous Delivery or
                Continious Deployment (CI/CD): </b> automating integration and deployment of code changes.
        </p>
    </div>
    <!-- ========================= -->
    <div class="w-full  px-4 flex flex-row mb-5">
        <span class="w-5 h-2 bg-blue-500 mt-3"></span>
        <p class="px-4 text-base sm:text-lg text-sm"><b> Automated testing: </b> automating regression,
            performance, and other types of testing that are continuously carried out within the CI/CD
            pipeline.</p>
    </div>
    <!-- ========================= -->
    <div class="w-full  px-4 flex flex-row mb-5">
        <span class="w-5 h-2 bg-blue-500 mt-3"></span>
        <p class="px-4 text-base sm:text-lg text-sm"><b>Application performance monitoring: </b>configuring
            application performance monitoring tools to detect post-release bugs quickly.</p>
    </div>
</div>
</div>
<!-- ============================= -->
<div
class="w-full hover:shadow-2xl  lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
<div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
    <img class="w-4/5 "
        src="https://www.scnsoft.com/about/development-process/dev-approache-cloud-native.svg" alt="">
</div>
<div class="lg:w-3/4  mx-auto w-11/12 mb-8">
    <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
        Cloud-native development
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600   m-4" /><br>
    <p class="px-4 text-base sm:text-lg text-sm">When building applications<a href="#"
            class="underline hover:text-blue-800 "> in the cloud, </a>we take advantage of reduced software
        development and operation costs, easy scalability and access to advanced cloud services that enable
        implementation of cutting-edge techs (AI, IoT, data science, and more).</p>
</div>
</div>
<!-- ============================= -->
<div
class="w-full hover:shadow-2xl  lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
<div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
    <img class="w-4/5 "
        src="https://www.scnsoft.com/about/development-process/dev-approache_modular-architecture.svg"
        alt="">
</div>
<div class="lg:w-3/4  mx-auto w-11/12 mb-8">
    <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
        Modular architecture
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600   m-4" /><br>
    <p class="px-4 text-base sm:text-lg text-sm">We use modular architecture patterns, such as <b>
            microservices, </b> in combination with <b> containers </b> to develop applications as a suite
        of independent functional components that can be effortlessly ported to any environment. Such an
        approach ensures higher application reliability, better maintainability and expandability, as well
        as shorter development time.</p>
</div>
</div>

<!-- //////////////////////////////////////// -->


<div class="mt-10">
<p class="lg:text-4xl text-3xl px-4 font-bold">HIGHLIGHTS OF SOFTWARE DEVELOPMENT WITH SCIENCESOFT
</p>
<!-- Servise -- develompent -- SubTitles's LINE -->
<div class="h-0.5 w-10 mb-5 pl-4 mx-3 bg-yellow-500 my-3"></div>
<div class="mt-5">
    <div class="mb-10 flex flex-row items-center">
        <div
            class="rounded-sm border-2 text-center font-bold text-lg transition-shadow w-12 h-10 hover:border-blue-500">
            1
        </div>
        <p class="ml-5 text-lg">
            Quality management and process optimization
        </p>
    </div>
    <div class="mb-10 flex flex-row items-center">
        <div
            class="rounded-sm border-2 text-center font-bold text-lg transition-shadow w-12 h-10 hover:border-blue-500">
            2
        </div>
        <p class="ml-5 text-lg">Adoption of new technologies</p>
    </div>
    <div class="mb-10 flex flex-row items-center">
        <div
            class="rounded-sm border-2 text-center font-bold text-lg transition-shadow w-12 h-10 hover:border-blue-500">
            3
        </div>
        <p class="ml-5 text-lg">
            Employee training and further education
        </p>
    </div>
</div>
</div>
<br>
<br>
<!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<div
class="w-full hover:shadow-2xl  lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
<div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
    <img class="w-1/3 "
        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
</div>
<div class="lg:w-3/4  mx-auto w-11/12 mb-8">
    <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
        Modular architecture
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600   m-4" /><br>
    <p class="px-4 text-base sm:text-lg text-sm">We plan our work in a way to deliver the specified scope on
        time and are capable of working with tight schedules.</p>
</div>
</div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div
class="w-full hover:shadow-2xl  lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
<div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
    <img class="w-1/3 "
        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
</div>
<div class="lg:w-3/4  mx-auto w-11/12 mb-8">
    <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
        Modular architecture
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600   m-4" /><br>
    <p class="px-4 text-base sm:text-lg text-sm">We plan our work in a way to deliver the specified scope on
        time and are capable of working with tight schedules.</p>
</div>
</div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div
class="w-full hover:shadow-2xl  lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
<div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
    <img class="w-1/3 "
        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
</div>
<div class="lg:w-3/4  mx-auto w-11/12 mb-8">
    <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
        Modular architecture
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600   m-4" /><br>
    <p class="px-4 text-base sm:text-lg text-sm">We plan our work in a way to deliver the specified scope on
        time and are capable of working with tight schedules.</p>
</div>
</div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div
class="w-full hover:shadow-2xl  lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
<div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
    <img class="w-1/3 "
        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
</div>
<div class="lg:w-3/4  mx-auto w-11/12 mb-8">
    <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
        Modular architecture
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600   m-4" /><br>
    <p class="px-4 text-base sm:text-lg text-sm">We plan our work in a way to deliver the specified scope on
        time and are capable of working with tight schedules.</p>
</div>
</div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div
class="w-full hover:shadow-2xl  lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
<div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
    <img class="w-1/3 "
        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
</div>
<div class="lg:w-3/4  mx-auto w-11/12 mb-8">
    <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
        Modular architecture
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600   m-4" /><br>
    <p class="px-4 text-base sm:text-lg text-sm">We plan our work in a way to deliver the specified scope on
        time and are capable of working with tight schedules.</p>
</div>
</div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div
class="w-full hover:shadow-2xl  lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
<div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
    <img class="w-5/6 "
        src="https://www.scnsoft.com/application-development/web-dev-services/opt-for-fast-and-stable-web-app.svg"
        alt="">
</div>
<div class="lg:w-3/4  mx-auto w-11/12 mb-8">
    <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
        Modular architecture
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600   m-4" /><br>
    <p class="px-4 text-base sm:text-lg text-sm">We plan our work in a way to deliver the specified scope on
        time and are capable of working with tight schedules.
    </p>
    <br>
    <button class="bg-blue-700 px-8 text-white py-2 mx-4 hover:bg-blue-900 font-semibold">START A
        DIALOG</button>
</div>
</div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
</div>

</div>


@endsection


@section('js')

@endsection