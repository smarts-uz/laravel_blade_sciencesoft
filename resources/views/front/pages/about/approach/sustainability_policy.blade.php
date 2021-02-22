@extends('front.layout')

@section('css')

@endsection

@section('main')


    <div class="my-10">
        <h1 class="text-5xl font-semibold pb-10">
            {{ _trans('ScienceSoft Policy on Sustainability and Corporate Responsibility') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <img src="https://www.scnsoft.com/cover-pictures/sustainability-policy.svg" alt="">
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('As an international company, we hold it our duty to build our business with respect for human rights and care to the environment. We believe that sustainable development is the foundation of an effective business strategy.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3">{{ _trans('Human Rights') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('We respect and promote human rights and treat people equally regardless of their nationality, age, and sex. We don’t allow human rights abuses and prevent forced labor and discrimination in employment.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3">{{ _trans('Health and Safety') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('We aim to create safe and healthy working conditions for our employees. Every employee is instructed on safe work practices and can get first aid in the office. Our employees get medical insurance and reimbursement of fitness expenses.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('We aim to create safe and healthy working conditions for our employees. Every employee is instructed on safe work practices and can get first aid in the office. Our employees get medical insurance and reimbursement of fitness expenses.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3">{{ _trans('Environmental Responsibility') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('We are committed to the protection of the environment and addressing environmental challenges, such as climate change. We adhere to and encourage our business partners and vendors to follow a number of rules, such as:') }}
        </p>
        <ul class="list-disc pl-5">
            <li class="py-2 text-lg text-gray-500">{{ _trans('Using reusable cups instead of plastic and paper ones.') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('Using LED lights and energy-efficient computer equipment.') }}</li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('Reducing the use of paper at work when possible, for example, resorting to electronic documents instead of hard copies.') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('Encouraging employees to ride bicycles to work providing a bicycle parking and comfortable showers.') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('Collecting old accumulators and light bulbs for recycling.') }}</li>
        </ul>
        <h1 class="text-4xl font-medium pb-3">{{ _trans('Corporate Governance and Business Ethics') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('Ethical behavior is the core of our business strategy. We ensure the transparency in business operations and strongly stand for anti-fraud and anti-corruption, elimination of bribery and coercion. We believe that this approach is one of the keys to maintain trust among employees and with our customers and business partners.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3">
            {{ _trans('Promoting Sustainability Issues in Interaction with Customers and Business Partners') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('We communicate our sustainability policy directly to our business partners and customers and expect them to keep to the principles of environment protection and human rights observance. We engage our vendors and business partners to consider the environment impact their or our joint business may cause and take measures to prevent negative consequences.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3">{{ _trans('Sustainability Communication') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('We are open and consistent in our sustainability ideas and constantly promote them worldwide. We share our knowledge through marketing materials and corporate website to make IT business more sustainable.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3">{{ _trans('Handling Complaints by Individuals and Communities') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('Our goal is to maintain a transparent complaints procedure to identify sustainability problems as early as possible. It’s important to prevent conflicts and keep a positive business image. We seek to systematically handle concerns and complaints on a fairbasis and monitor if addressing complaints doesn’t cause additional issues.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3">{{ _trans('Sustainability Policy Reviews and Updates') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('We aim at continuous improvement and annually review our sustainability policy. We introduce corresponding updates to the policy and additionally monitor whether our sustainability aims and business goals are aligned.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">{{ _trans('For more details, please read our ') }}<a class="underline"
                href="">{{ _trans('corporate social responsibility report.') }}</a></p>
    </div>

@endsection

@section('js')

@endsection
