<div class="md:px-16 px-6 w-full">
    <p class="py-5">{{ t('Drop us') }}</p>
    <div class="flex">
        <form method="POST" class="w-full" action="{{ route('consultation') }}">
            @csrf
            <div class="flex flex-col mr-3">
              <div class="flex justify-between flex-row flex-wrap">
                <input type="text" name="fullname" placeholder="{{ t("Full name") }}"
                  class="border-2 border-gray-500 outline-none my-3 mr-3 p-4 w-full sm:w-72 md:w-1/5 rounded" />
                <input type="text" name="company" placeholder="{{ t("Company") }}"
                  class="border-2 border-gray-500 outline-none  py-4 px-3 my-3 mr-3 w-full sm:w-72 md:w-1/5 rounded" />
                <input type="email" name="email" placeholder="{{ t("Work email") }}"
                  class="border-2 border-gray-500 outline-none  py-4 px-3 my-3 mr-3 w-full sm:w-72 md:w-1/5 rounded">
                <input type="text" name="phone_number" placeholder="{{ t("Work phone") }}"
                  class="border-2 border-gray-500 outline-none my-3 mr-3 py-4 px-3 w-full sm:w-72 md:w-1/5 rounded">
              </div>
              <textarea placeholder="{{ t("How can help") }}" name="description" cols="3" rows="6"
                class="border-2 rounded border-gray-500 outline-none my-3 -mr-3 py-4 px-3" style="margin-right: 0.75rem;"></textarea>
               <div class="flex justify-center items-center mb-3">
                  <button type="submit" class="rounded text-center uppercase bg-blue-700 hover:bg-blue-900 text-white w-52 h-12">{{ t("My needs") }}</button>
               </div>
            </div>
          </form>
        <div class="px-5 md:block hidden">
            <div>
                <h1 class="font-bold text-xl pb-2">{{ t('Our contact details') }}</h1>
                <a class="text-blue-400 flex items-center" href="#">
                    <i class="fas fa-phone-alt pr-3"></i>
                    <p>{{ __('+998 94 123 45 67') }}</p>
                </a>
                <a class="text-blue-400 flex items-center" href="#">
                    <i class="fas fa-envelope pr-3"></i>
                    <p>{{ __('teamprodev@gmail.com') }}</p>
                </a>
            </div>
            <div>
                <h1 class="font-bold text-xl pb-2 mt-4">{{ t('Press inquires') }}</h1>
                <a class="text-blue-400 flex items-center text-xs" href="#">
                    <p class="uppercase">{{ t('Get in touch') }}</p>
                    <i class="fas fa-arrow-right pl-3"></i>
                </a>
            </div>
            <div>
                <h1 class="font-bold text-xl pb-2 mt-4">{{ t('Join our team') }}</h1>
                <a class="text-blue-400 flex items-center text-xs" href="#">
                    <p class="uppercase">{{ t('Check our open vacancies') }}</p>
                    <i class="fas fa-arrow-right pl-3"></i>
                </a>
            </div>
        </div>
    </div>
 </div>
