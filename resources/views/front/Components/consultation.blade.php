<div class="md:px-16 px-6 w-full">
    <p class="py-5">{{ _trans('Drop us a line! We are here to answer your questions 24/7.') }}</p>
    <div class="flex">
        <form method="POST" class="w-full" action="{{ route('consultation') }}">
            @csrf
            <div class="flex flex-col mr-3">
              <div class="flex justify-between flex-row flex-wrap">
                <input type="text" name="fullname" placeholder="Full Name"
                  class="border-2 border-gray-500 outline-none my-3 mr-3 p-4 w-full sm:w-72 md:w-1/5 rounded" />
                <input type="text" name="company" placeholder="Company"
                  class="border-2 border-gray-500 outline-none  py-4 px-3 my-3 mr-3 w-full sm:w-72 md:w-1/5 rounded" />
                <input type="email" name="email" placeholder="Work Email"
                  class="border-2 border-gray-500 outline-none  py-4 px-3 my-3 mr-3 w-full sm:w-72 md:w-1/5 rounded">
                <input type="text" name="phone_number" placeholder="Work Phone"
                  class="border-2 border-gray-500 outline-none my-3 mr-3 py-4 px-3 w-full sm:w-72 md:w-1/5 rounded">
              </div>
              <textarea placeholder="How can we help you?" name="description" cols="3" rows="6"
                class="border-2 rounded border-gray-500 outline-none my-3 -mr-3 py-4 px-3" style="margin-right: 0.75rem;"></textarea>
               <div class="flex justify-center items-center mb-3">
                  <button type="submit" class="rounded text-center uppercase bg-blue-700 hover:bg-blue-900 text-white w-52 h-12">Discuss my needs</button>
               </div>
            </div>
          </form>
        <div class="px-5 md:block hidden">
            <div>
                <h1 class="font-bold text-xl pb-2">{{ _trans('Our contact details') }}</h1>
                <a class="text-blue-400 flex items-center" href="#">
                    <i class="fas fa-phone-alt pr-3"></i>
                    <p>{{ _trans('+998 94 123 45 67') }}</p>
                </a>
                <a class="text-blue-400 flex items-center" href="#">
                    <i class="fas fa-envelope pr-3"></i>
                    <p>{{ _trans('teamprodev@gmail.com') }}</p>
                </a>
            </div>
            <div>
                <h1 class="font-bold text-xl pb-2 mt-4">{{ _trans('Press inquires') }}</h1>
                <a class="text-blue-400 flex items-center text-xs" href="#">
                    <p class="uppercase">{{ _trans('Get in touch with us') }}</p>
                    <i class="fas fa-arrow-right pl-3"></i>
                </a>
            </div>
            <div>
                <h1 class="font-bold text-xl pb-2 mt-4">{{ _trans('Join our team') }}</h1>
                <a class="text-blue-400 flex items-center text-xs" href="#">
                    <p class="uppercase">{{ _trans('Check our open vacancies') }}</p>
                    <i class="fas fa-arrow-right pl-3"></i>
                </a>

            </div>
            <div>
            </div>
        </div>
    </div>
 </div>
