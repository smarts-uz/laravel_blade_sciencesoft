@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="wrapper">
      <!-- Contact Us -->
      <div class="flex">
        <div class="container mx-auto justify-between max-w-7xl">
          <h2 class="pl-2 py-5 text-7xl">{{ _trans("Contact Us")  }}</h2>
          <div class="w-10 mb-5 pl-4 mx-3 bg-yellow-500"></div>
          <div class="md:flex-row w-full bg-gray-200 justify-between flex flex-row flex-col">
            <div class="md:w-4/12 w-full bg-white">
              <h2 class="font-bold text-center text-2xl pt-5">{{ _trans("TeamPRO in brief")  }}</h2><br>
              <div class="flex">
                <i class="text-2xl fas fa-check text-green-600 pl-6 pr-3 py-3"></i>
                <p class="text-lg py-3"><span class="font-semibold">{{ _trans("31 years")  }}</span>{{ _trans(" in IT.")  }}</p>
              </div>
              <!-- -------------------------------------------- -->
              <div class="flex">
                <i class="text-2xl fas fa-check text-green-600 pl-6 pr-3 py-3"></i>
                <p class="text-lg py-3">{{ _trans("Over")  }}<span class="font-semibold">{{ _trans("700 specialists")  }}</span>{{ _trans("on board.")  }}</p>
              </div>
              <!-- -------------------------------------------- -->
              <div class="flex">
                <i class="text-2xl fas fa-check text-green-600 pl-6 pr-3 py-3"></i>
                <p class="text-lg py-3">{{ _trans("700-employee business")  }}<span class="font-semibold">{{ _trans("partner network.")  }}</span></p>
              </div>
              <!-- -------------------------------------------- -->
              <div class="flex mb-10">
                <i class="text-2xl fas fa-check text-green-600 pl-6 pr-3 py-3"></i>
                <p class="text-lg py-3"><span class="font-semibold">2,695</span>success stories (including projects
                  for Walmart, eBay, NASA JPL, Baxter, IBM).</p>
              </div>
              <!-- -------------------------------------------- -->


              <div class="owl-carousel owl-theme  w-20   flex items-center justify-center">
                <div class="item w-64 mx-auto my-auto flex items-center justufy-center">
                  <img class="my-auto" src="https://www.scnsoft.com/partners/sw-development/microsoft-gold-partner.svg"
                    alt="">
                </div>
                <div class="item  w-64 mx-auto">
                  <img
                    src="https://www.scnsoft.com/partners/sw-development/aws-select-consulting-partner-horizontal-placement.svg"
                    alt="">
                </div>
                <div class="item w-64 mx-auto my-auto flex items-center justufy-center">
                  <img src="https://www.scnsoft.com/partners/sw-development/oracle-silver-partner.svg" alt="">
                </div>
                <div class="item w-64 mx-auto">
                  <img src="https://www.scnsoft.com/partners/sw-development/ibm-silver-business-partner.svg" alt="">
                </div>
                <div class="item w-64 mx-auto">
                  <img src="https://www.scnsoft.com/partners/servicenow/servicenow-premier-partner-horizontal-placement.svg"
                    alt="">
                </div>
                <div class="item w-64 mx-auto">
                  <img
                    src="https://www.scnsoft.com/partners/sw-development/clutch-top-it-services-firms-horizontal-placement.svg"
                    alt="">
                </div>
              </div>
            </div>
            <div class="md:w-8/12 w-full min-h-96">
              <p class="text-center text-lg pt-5 text-gray-400">{{ _trans("Drop us a line, and our rep will contact you
              within 30 minutes to arrange an initial discussion.")  }}</p>
            <form method="POST" action="{{ route('postFile') }}" class="w-full flex-col">
                <div class="m-3 flex justify-around pb-5">
                  <input class="p-3 w-2/4 mx-2 border-solid border-2 border-black" type="text" id="" name="fullname"
                    placeholder="{{ _trans("Full Name")  }}">
                  <input class="p-3 w-2/4 mx-2 border-solid border-2 border-black" type="text" id="" name="company"
                    placeholder="{{ _trans("Company")  }}">
                </div>
                <div class="m-3 flex justify-around">
                  <input class="p-3 w-2/4 mx-2 border-solid border-2 border-black" type="text" id="" name="email"
                    placeholder="{{ _trans("Work Email")  }}">
                  <input class="p-3 w-2/4 mx-2 border-solid border-2 border-black" type="text" id="" name="phone_number"
                    placeholder="{{ _trans("Work Phone")  }}">
                </div>

                <div class="m-3 flex items-center ">
                  <textarea class="flex  p-3 w-full  mx-2 border-solid border-2 border-black" name="description" id="" cols="30" rows="4"
                    placeholder="{{ _trans("Comments")  }}"></textarea>
                </div>

                <div class="text-center">
                  <input id="upload" class="hidden" type="file">
                  <span><label class="cursor-pointer" for="upload"><i class="fas fa-paperclip"></i></label>
                  {{ _trans(" Drag & Drop file here or")  }}</span>
                  <label class="text-blue-700 cursor-pointer" for="upload">{{ _trans("browse a file")  }}</label>
                  <span>(Up to 5 files of 20MB overall)</span>
                </div>
                <div class="w-full flex items-center justify-center py-5">
                  <button type="submit" class="flex items-center border-2 border-blue-700 py-2 px-3 text-white bg-blue-700">
                  {{ _trans(" Discuss my needs")  }}</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- @yield('js') -->


@endsection


@section('js')
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
@endsection

