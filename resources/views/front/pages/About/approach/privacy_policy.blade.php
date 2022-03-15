@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="my-10">
        <h1 class="text-5xl font-semibold pb-10 text-gray-800">{{ t('Privacy Policy') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ t('This privacy statement explains what personal data Smart Softwarecollects from you and how we use that data.') }}
        </p>
        <p class="py-4 text-lg text-gray-500">{{ t('Last updated on 5/17/2018.') }}</p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ t('WHO WE ARE') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ t('We are TeamPRO, a US-headquartered provider of custom software development and IT consulting services with 550 IT professionals located internationally. As you read this document, you are currently visiting our website, which is a digital face of our company. We are strongly committed to deliver you great experience while you are surfing our website, to share the materials you might be interested in, to promptly clarify any questions that might pop up and to ensure uninterrupted functioning of the website so that you don’t feel annoyed. This won’t be possible without your kind assistance, which you render by sharing your personal data with us. At the same time, we understand that personal data is an extremely sensitive matter and we take your privacy very seriously. To avoid making you feel uneasy in this regard, we’ve developed this privacy policy, which dwells on every little detail that refers to our work with your personal data.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ t('WHAT PERSONAL DATA WE COLLECT') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ t('Smart Softwarecollects data to provide you with direct feedback in respect of our services. You provide some of this data directly, such as when you fill in the Contact us form, Contact form, Office 365 migration calculator, QLEAN download and Ask author forms to contact us for support or comment on our articles. We get some data using technologies like cookies, and receiving error reports or usage data from software running on your device.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ t('We also obtain data from third parties. We protect data obtained from third parties according to the practices described in this statement, plus any additional restrictions imposed by the source of the data. These third-party sources may vary over time, but currently include:') }}
        </p>
        <ul style="list-style:square" class=" pl-5 text-blue-700 ">
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('Service providers that help us determine a location based on your IP address in order to customize certain products to your location.') }}
                </p>
            </li>
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('Partners with which we offer co-branded services or engage in joint marketing activities.') }}
                </p>
            </li>
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('Publicly-available sources such as open government databases or other data in the public domain.') }}
                </p>
            </li>
        </ul>
        <p class="py-3 text-lg ">
        <p class="text-gray-500 text-lg">
            {{ t('You have choices about the data we collect. When you are asked to provide personal data, you may decline. But if you choose not to provide data that is necessary to deliver a service or a feature or give feedback, you may not be able to use this service or feature or receive feedback.') }}
        </p>
        </p>
        <p class="py-3 text-lg text-gray-500">{{ t('The data we collect can include the following:') }}</p>
        <p class="py-3 text-lg text-gray-500">
            <strong>{{ t('Name and contact data.') }}</strong>{{ t(' We collect your first and last name, work email address, phone number, company name and other similar contact data.') }}
        </p>
        <p class="py-3 text-lg text-gray-500">
            <strong>{{ t(' Demographic data.') }}</strong>{{ t(' We collect data about you such as your country and preferred language.') }}
        </p>
        <p class="py-3 text-lg text-gray-500">
            <strong>{{ t(' Website data.') }}</strong>{{ t(' We collect data about how you interact within Smart Softwarewebsite. For example, we collect:') }}
        </p>
        <ul style="list-style:square" class="text-blue-700 pl-5">
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('Details of visitor behaviour patterns, i.e. data about the website sections you visit and how much time you spend there.') }}
                </p>
            </li>
            <li class="py-2 text-lg">
                <p class="text-gray-500">
                    {{ t('Configuration data. We collect data about the network you use to connect to our website. It includes your IP address.') }}
                </p>
            </li>
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('Error reports and performance data. We collect data about problems you experience with our services. This data helps us to diagnose problems and to provide solutions. Depending on your browsing environment and settings, error reports can include such data as the type or the severity of the problem, details of the software or the hardware related to the error, the contents of the files you were using when the error occurred, as well as the data about other software on your device.') }}
                </p>
            </li>
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('Troubleshooting and Help Data. In case Smart Softwareis engaged in troubleshooting and help, we collect data about you and your hardware, software, and other details related to the incident. Such data includes the contact data, the content of your chats and other communications with TeamPRO, the data about the condition of the machine and the application when the fault occurred and during diagnostics, and the system and registry data about software installations and hardware configurations.') }}
                </p>
            </li>
        </ul>
        <p class="py-3 text-lg text-gray-500">
            <b>{{ t('Please, be aware you may communicate personal data we do NOT require, including your payment data, in the description section of a CONTACT-US form. We will not use this information in any way, besides storing it at our backup server. Please, do not share with us any personal data not requested from you directly.') }}</b>
        </p>
        <p class="py-3 text-lg text-gray-500">
            {{ t("Our website is not intended for children and for private individuals and we do not knowingly collect data relating to them. Parents can revoke the consent choices previously made, and review, edit or request the deletion of their children's personal data.") }}
        </p>
        <p class="py-3 text-lg text-gray-500">
            {{ t('We may also collect personal data from third parties who have your consent to pass your details to us, or from publicly available sources.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ t('WHY WE COLLECT PERSONAL DATA') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-3 text-lg text-gray-500">
            {{ t('Smart Softwarecollects the data for the following purposes: sending communications, including promotional communications; advertising; analyzing website visitor statistics; technical website troubleshooting; improving website user experience.') }}
        </p>
        <p class="py-3 text-lg text-gray-500">
            {{ t("In carrying out these purposes, we intend to tell you about issues you’ve asked us to tell you about; to contact you if we need to obtain or provide additional information; to make sure our records are right and to check every now and then that you’re happy and satisfied. We don't rent or trade email lists with other organisations and businesses.") }}
        </p>
        <p class="py-3 text-lg text-gray-500">
            {{ t('However, to enhance privacy, we have built in technological and procedural safeguards designed to prevent data leaks. For example, we store data we collect from you indirectly or directly, such as your name, email address or phone number, company name, in a secure database.') }}
        </p>
        <p class="py-3 text-lg text-gray-500">
            {{ t('Additionally, you can sign up for email subscriptions and choose whether you wish to receive promotional communications from Smart Softwareby email, SMS, physical mail, and telephone.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ t('WHY WE SHARE PERSONAL DATA') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-3 text-lg text-gray-500">
            {{ t('We share personal data with our Development Center, a TeamPRO-controlled affiliate, located at 2 Biady str., Minsk, Belarus. Our Development Center must abide by our data privacy and security requirements and is not allowed to use personal data it receives from us for any purposes other than specified above. To ensure an adequate level of protection of personal data you share, all obligations of the Development Center are established in an agreement between Smart Softwareand the Development Center.') }}
        </p>
        <p class="py-3 text-lg text-gray-500">
            {{ t('We will access, transfer, disclose, and preserve personal data, when we have a good faith belief that doing so is necessary to:') }}
        </p>
        <ul style="list-style:decimal" class="text-gray-500 pl-5">
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('Comply with the applicable law or respond to a valid legal process, including in response to a request from law enforcement or other government agencies.') }}
                </p>
            </li>
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('Protect our customers, for example, to prevent spam or attempts to defraud users of our services, or to help prevent the loss of life or serious injury of anyone.') }}
                </p>
            </li>
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('Protect the rights of TeamPRO, including enforcing the terms governing the use of the services.') }}
                </p>
            </li>
        </ul>
        <p class="py-3 text-lg text-gray-500">
            {{ t('If third-party agents process personal data on our behalf in a manner inconsistent with the principles contained herein, we remain liable unless we prove we are not responsible for the event giving rise to the damage.') }}
        </p>
        <p class="py-3 text-lg text-gray-500">
            {{ t('Please, note that some of our website pages include links to products of third parties whose privacy practices may differ from those of TeamPRO. If you provide personal data to any of those parties, your data is governed by their privacy statements.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ t('WHAT RIGHTS YOU HAVE') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-3 text-lg text-gray-500">
            {{ t('You are entitled to view, amend, or delete the personal information that we hold:') }}</p>
        <ul style="list-style:square" class=" pl-5 text-blue-700">
            <li class="py-2 ">
                <p class="text-gray-500">
                    {{ t('You may ask what personal data about you we hold and who the recipients of your personal data are, at any time.') }}
                </p>
            </li>
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('You may ask us to update and correct any out-of-date or incorrect/incomplete personal data that we hold about you free of charge.') }}
                </p>
            </li>
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('You may opt out of any marketing communications that we may send you. This choice does not apply to mandatory service communications.') }}
                </p>
            </li>
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('You may recall your consent for the processing of your information at any time.') }}</p>
            </li>
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('You may request erasing or updating your personal information here.') }}</p>
            </li>
        </ul>
        <p class="py-3 text-lg text-gray-500">
            {{ t('Email your request to our data protection officer Dmitry Kurskov at data-protection-officer@scnsoft.com. We will respond to requests to access or delete your personal data within 30 days.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ t('COOKIES & SIMILAR TECHNOLOGIES') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-3 text-lg text-gray-500">
            {{ t('Smart Softwareuses cookies (small text files placed on your device) and similar technologies to provide our online services and to help collect data. The text in a cookie often consists of a string of numbers and letters that uniquely identifies your computer, but it can contain other information as well.') }}
        </p>
        <p class="py-3 text-lg text-gray-500">
            {{ t('We use cookies and similar technologies for several purposes, including:') }}</p>
        <ul style="list-style:square" class=" pl-5 text-blue-700">
            <li class="py-2 text-lg">
                <p class="text-gray-500">
                    <b>{{ t('Security') }}</b>{{ t(' We use cookies to detect fraud and abuse of our website and services.') }}
                </p>
            </li>
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    <b>{{ t('Storing information you provide on a website.') }}</b>{{ t(' When you provide information, we store the data in a cookie to remember the information you have added.') }}
                </p>
            </li>
        </ul>
        <p class="py-3 text-lg text-gray-500">
            {{ t('The main reason we typically set cookies is to gather website statistics.') }}</p>
        <h1 class="text-3xl font-medium pb-3 text-gray-800">{{ t('How to Control Cookies') }}</h1>
        <p class="py-3 text-lg text-gray-500">{{ t('You may usually switch off cookies in your browser.') }}</p>
        <h1 class="text-3xl font-medium pb-3 text-gray-800">{{ t('Other Similar Technologies') }}</h1>
        <p class="py-3 text-lg text-gray-500">
            {{ t("In addition to standard cookies, we can use other similar technologies to store and read data files on your computer. This is typically done to improve speed and performance by storing certain files locally. Similar to standard cookies, these technologies can also be used to store a unique identifier for your computer, which can then be used to track behavior. These technologies include Local Shared Objects or 'Flash cookies'.") }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ t('NOTICE TO END USERS') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-3 text-lg text-gray-500">
            {{ t("Smart Softwareis intended to deliver its services  to organizations. Your use of ScienceSoft’s website may be subject to your organization's policies, if any. If your organization is administering your use of ScienceSoft’s website, please direct your privacy inquiries to your administrator. Smart Softwareis not responsible for the privacy or security practices of our customers, which may differ from those set forth in this privacy statement.") }}
        </p>
        <p class="py-3 text-lg text-gray-500">
            {{ t('If you use an email address provided by an organization you are affiliated with, such as an employer or school, the owner of the domain (e.g., your employer) associated with your email address may access and process your data, including the contents of your communications and files.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ t('HOW WE SECURE YOUR DATA') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-3 text-lg text-gray-500">
            {{ t('We use a variety of security technologies and procedures to help protect your personal data from unauthorized access, use or disclosure. For example, we store the personal data you provide on computer systems that have limited access and are in controlled facilities.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ t('FOR HOW LONG THE DATA WILL BE STORED') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-3 text-lg text-gray-500">
            {{ t('Smart Softwareretains personal data for as long as necessary to provide the services and the feedback you have requested, or for other essential purposes, such as complying with our legal obligations, enforcing our agreements. Because these needs can vary for different data types, actual retention periods may vary. The criteria used to determine the retention periods include:') }}
        </p>
        <ul style="list-style:square" class=" pl-5 text-blue-700">
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('Is the personal data of a sensitive type? If so, a shortened retention time would generally be appropriate, which amounts to up to five years.') }}
                </p>
            </li>
            <li class="py-2 text-lg ">
                <p class="text-gray-500">
                    {{ t('Is Smart Softwaresubject to a legal, contractual, or similar obligation to retain the data? Examples can include mandatory data retention laws in the applicable jurisdiction, government orders to preserve data relevant to an investigation, or data that must be retained for the purposes of litigation.') }}
                </p>
            </li>
        </ul>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ t('HOW WE CHANGE THIS PRIVACY POLICY') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-3 text-lg text-gray-500">
            {{ t("We will update this privacy statement when necessary to amend its terms or reflect customer feedback. When we post changes to this statement, we will revise the 'last updated' date at the top of the statement. If there are material changes to the statement, we will notify you either by prominently posting a notice of such changes before they take effect or by directly sending you a notification.") }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ t('HOW TO CONTACT US') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-3 text-lg text-gray-500">
            {{ t('If you have a privacy concern, complaint, or question to Data Protection Officer, please email us at data-protection-officer@scnsoft.com. We will respond within 30 days.') }}
        </p>
    </div>

@endsection

@section('js')

@endsection
