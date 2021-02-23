@extends('front.layout')

@section('css')

@endsection

@section('main')


    <div class="my-10">
        <h1 class="text-5xl font-semibold pb-10 text-gray-800">{{ _trans('Terms of Use') }}</h1>
        <!-- <hr class="divide-blue-800 w-10 h-3"> -->
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">{{ _trans('Last updated: September 11, 2020') }}</p>
        <p class="py-5 text-lg text-gray-500">{{ _trans("Please read these Terms of Use ('Terms', 'Terms of Use')") }}
            carefully before using the https://www.scnsoft.com/ (the "Site") }} operated by TeamPRO USA Corporation ("The
            Company", "us", "we", or "our") }}.") }}</p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('This Site provides online access to information about Company and our products, services and opportunities') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('Your access to and use of the Site is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Site.') }}
        </p>
        <h3 class="text-lg font-medium pb-3 text-gray-800">
            {{ _trans('BY ACCESSING OR USING THE SITE YOU AGREE TO BE BOUND BY THESE TERMS. IF YOU DO NOT ACCEPT, DO NOT USE THE SITE.') }}
        </h3>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ _trans('PURCHASES') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans("If you wish to purchase any our product or service ('Purchase')") }}, you may send the request in
            one of the following ways:") }}</p>
        <ul class="list-disc pl-5">
            <li class="py-2 text-lg text-gray-500">{{ _trans('send the request via contact form,') }}</li>
            <li class="py-2 text-lg text-gray-500">{{ _trans('send the request via live chat,') }}</li>
            <li class="py-2 text-lg text-gray-500">{{ _trans('send the request to ') }}<a class="underline"
                    href="#">contact@scnsoft.com</a>{{ _trans(' or ') }}<a class="underline"
                    href="#">eu@scnsoft.com</a>{{ _trans(' or ') }}<a class="underline" href="#">gulf@scnsoft.com</a> ,
            </li>
            <li class="py-2 text-lg text-gray-500">{{ _trans('call by phone') }} +1 214 306 68 37.</li>
        </ul>

        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ _trans('TERMINATION') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('We may terminate or suspend access to our Site immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ _trans('CONTENT, COPYRIGHTS AND TRADEMARKS') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans("All text, material, data, and information, data files, description of our services or/and our products, graphics, images, user interfaces, visual interfaces, photographs, trademarks, logos and computer code etc. ('Content')") }},
            contained on the Site is owned, controlled or licensed by or to Company, and is protected by applicable
            intellectual property and other laws, including trademark and copyright laws. Company owns and retains all
            copyrights in the Content.") }}</p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('You acknowledge that Company does not make any representations or warranties about the Content which you may have access to. Under no circumstances is Company liable in any way for any Content, including, but not limited to: any infringing Content, any errors or omissions in Content, or for any loss or damage of any kind incurred as a result of the use of any Content posted, transmitted, linked from, or otherwise accessible through or made available via the Site.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('You agree that you are solely responsible for your reuse of Content made available through the Site, including providing proper attribution. You should review the terms of the applicable license before you use the Content so that you know what you can and cannot do.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans("Except as expressly provided in these Terms, no part of the Site and no Content may be copied, reproduced, modified, published, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted or distributed in any way (including 'mirroring')") }}
            to any other computer, server, Web site or other medium for publication or distribution or for any commercial
            enterprise, without Company’s express prior written consent. You also agree not to modify, rent, lease, loan,
            sell, distribute, transmit, broadcast, or create derivative works based on the Content or the Site, in whole or
            in part, by any means.") }}</p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('Company’s logos and trademarks are trademarks and the property of Company. The appearance, layout, color scheme, and design of the Site are protected trade dress. You do not receive any right or license to use the foregoing. We may use and incorporate into the Site any suggestions or other feedback you provide, without payment or condition.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('You may use the Site or/and Content solely for your non-commercial, personal purposes and/or to learn about Company’s products and services, and solely in compliance with these Terms; provided that you not remove any proprietary notice language in Content or part of Content, do not copy or post such Content or part of Content on any networked computer or broadcast it in any media, make no modifications to any such Content or part of Content and not make any additional representations or warranties relating to Site, such Content or part of Content or/and Company’s products or/and services.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ _trans('PROHIBITED USE OF THE SITE') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">{{ _trans('By accessing the Site, you agree that you will not:') }}</p>
        <ul class="list-disc pl-5">
            <li class="py-2 text-lg text-gray-500">{{ _trans('Use the Site in violation of these Terms;') }}</li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('Copy, modify, create a derivative work from, reverse engineer or reverse assemble the Site, or otherwise attempt to discover any source code, or allow any third party to do so;') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('Sell, assign, sublicense, distribute, commercially exploit, grant a security interest in or otherwise transfer any right in, or make available to a third party, the Content or Site in any way;') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans("Use or launch any automated system, including without limitation 'deep-link', 'page-scrape', 'robots,' 'spiders,' or 'offline readers' or other automatic device, program, algorithm or methodology, or any similar or equivalent manual process, to access, acquire, copy or monitor any portion of the Site or any Content, or in any way reproduce or circumvent the navigational structure or presentation of the Site or any Content;") }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans("Use the Site in any manner that damages, disables, overburdens, or impairs Site or interferes with any other party's use and enjoyment of the Site;") }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('Mirror or frame the Site or any part of it on any other web site or web page;') }}</li>
            <li class="py-2 text-lg text-gray-500">{{ _trans('Attempt to gain unauthorized access to the Site;') }}</li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('Probe, scan or test the vulnerability of the Site or any network connected to the Site, nor breach the security or authentication measures on the Site or any network connected to the Site;') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('Take any action that imposes an unreasonable or disproportionately large load on the infrastructure of the Site or any systems or networks connected to the Site;') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('Use any device, software or routine to interfere or attempt to interfere with the proper working of the Site.') }}
            </li>
        </ul>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ _trans('PRIVACY POLICY') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('By using Site you accept the terms of Privacy Policy which is an integral part of these Terms.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">{{ _trans('Please check our Privacy Policy to learn more ') }}<a
                href="https://www.scnsoft.com/about/privacy-policy">https://www.scnsoft.com/about/privacy-policy</a>.</p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ _trans('LINKS') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('Our Site may contain links to third-party web sites or services that are not owned or controlled by Company. Links on the Site to third party web sites or information are provided solely as a convenience to you.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('Such links do not constitute or imply an endorsement, sponsorship, or recommendation by Company of the third party, the third-party web site, or the information there.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services or for the availability of any such web sites. You further acknowledge and agree that Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('Company reserves the right at any time and in its sole discretion to request that you remove all links or any particular link to Site. You agree to immediately remove all links to Site upon such our request.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('No link(s) to our Site may appear on any page on your website or within any context containing content or materials that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ _trans('CHANGES') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('We reserve the right, at our sole discretion, to modify or replace these Terms at any time without giving you prior notice. Your use of the Site following any such modification constitutes your acceptance to follow and be bound by these Terms as modified. The last date these Terms were revised is set forth above.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ _trans('DISCLAIMER; LIMITATIONS OF LIABILITY') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('To the maximum extent permitted by applicable law, Company disclaims any and all representations, warranties and conditions relating to Site and the use of Site (including, without limitation, any warranties implied by law in respect of satisfactory quality, fitness for purpose and/or the use of reasonable care and skill).') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('To the extent that the Site and Content are provided free of charge, Company will not be liable for any loss or damage of any nature.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans("COMPANY MAKES NO REPRESENTATIONS ABOUT THE SUITABILITY, RELIABILITY, AVAILABILITY, TIMELINESS, SECURITY OR ACCURACY OF THE SITE OR THE CONTENT FOR ANY PURPOSE. THE SITE AND ITS CONTENT ARE DELIVERED ON AN 'AS-IS' AND 'AS-AVAILABLE' BASIS. THE CONTENT MAY INCLUDE INACCURACIES OR TYPOGRAPHICAL ERRORS OR OTHER ERRORS OR INACCURACIES AND MAY NOT BE COMPLETE OR CURRENT.") }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans("COMPANY MAKES NO REPRESENTATIONS ABOUT THE SUITABILITY, RELIABILITY, AVAILABILITY, TIMELINESS, SECURITY OR ACCURACY OF THE SITE OR THE CONTENT FOR ANY PURPOSE. THE SITE AND ITS CONTENT ARE DELIVERED ON AN 'AS-IS' AND 'AS-AVAILABLE' BASIS. THE CONTENT MAY INCLUDE INACCURACIES OR TYPOGRAPHICAL ERRORS OR OTHER ERRORS OR INACCURACIES AND MAY NOT BE COMPLETE OR CURRENT.") }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('IN NO EVENT SHALL COMPANY BE LIABLE OR RESPONSIBLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, CONSEQUENTIAL, SPECIAL OR EXEMPLARY DAMAGES OF ANY KIND, INCLUDING WITHOUT LIMITATION, LOST PROFITS OR LOST OPPORTUNITIES, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGES IN ADVANCE AND REGARDLESS OF THE CAUSE OF ACTION UPON WHICH ANY SUCH CLAIM IS BASED.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('YOUR SOLE REMEDY AGAINST COMPANY FOR DISSATISFACTION WITH THE SITE OR ANY CONTENT IS TO STOP USING THE SITE OR ANY SUCH CONTENT.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('If, notwithstanding the other provisions of these Terms, Company is found to be liable to you for any damage or loss that arises out of or is in any way connected with your use of the Site or any Content, Company’s liability shall in no event exceed two hundred US dollars.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('The above disclaimer applies to any damages, liability or injuries caused by any failure of performance, error, omission, interruption, deletion, defect, delay in operation or transmission, computer virus, communication line failure, theft or destruction of or unauthorized access to, alteration of, or use, whether for breach of contract, tort, negligence or any other cause of action.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ _trans('INDEMNIFICATIO') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans("You understand and agree that you are personally responsible for your behavior on the Site. You agree to indemnify, defend and hold harmless Company, its affiliated companies, employees, agents, and any third-party information providers from and against all claims, losses, expenses, damages and costs (including, but not limited to, direct, incidental, consequential, exemplary and indirect damages), and reasonable attorneys' fees, resulting from or arising out of your use, misuse, or inability to use the Site or the Content, or any violation by you of these Terms.") }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ _trans('MISCELLANEOU') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('These Terms constitute the entire agreement between the parties with respect to the subject matter hereof. A Company’s failure to insist upon or enforce strict performance of any term or provision of these Terms shall not be construed as a waiver of any term, provision or right.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('If any part of these Terms is determined in arbitration or by a court of competent jurisdiction to be invalid or unenforceable, that part shall be limited or eliminated to the minimum extent necessary so that the remainder of these Terms is fully enforceable and legally binding.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('The rights and obligations stipulated in these Terms will be governed and controlled by the laws of the State of Texas without reference to the applicable choice of law provisions. You agree to the sole and exclusive jurisdiction and venue of the arbitration occurred in Collin County, Texas USA in the event of any dispute of any kind arising from or relating to these Terms, Privacy Policy, your use of the Site or the Content.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('You are responsible for complying with the laws of the jurisdiction from which you are accessing Site and you agree that you will not access or use the information on Site in violation of such laws.') }}
        </p>
        <h1 class="text-4xl font-medium pb-3 text-gray-800">{{ _trans('CONTACT US') }}</h1>
        <div class="w-10 h-0.5 bg-yellow-600"></div>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('If you have any questions about these Terms, please contact us by email ') }}<a href="#"
                class="underline">contact@scnsoft.com</a>{{ _trans('  or by phone ') }}+1 214 306 68 37.</p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('Copyright 2015-2020 TeamPRO USA Corporation. All rights reserved') }}</p>
    </div>

@endsection


@section('js')

@endsection
