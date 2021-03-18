@extends('front.layout')

@section('css')

@endsection

@section('main')
<div class="block p-0">
    <div class="w-full mb-9">
        <img src="{{asset('images/products/RestoOne/image1.jfif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9">
        <img src="{{asset('images/products/RestoOne/image2.jfif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9">
        <img src="{{asset('images/products/RestoOne/image3.jfif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9">
        <img src="{{asset('images/products/RestoOne/image4.jfif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9">
        <img src="{{asset('images/products/RestoOne/image5.jfif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9">
        <img src="{{asset('images/products/RestoOne/image6.jfif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9">
        <img src="{{asset('images/products/RestoOne/image7.jfif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9">
        <img src="{{asset('images/products/RestoOne/image8.jfif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9">
        <img src="{{asset('images/products/RestoOne/image9.jfif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9">
        <img src="{{asset('images/products/RestoOne/image10.jfif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9">
        <img src="{{asset('images/products/RestoOne/image11.jfif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9">
        <img src="{{asset('images/products/RestoOne/image12.jfif')}}" alt="" class="mx-auto">
    </div>
    <h1 class="mb-4 uppercase font-bold text-2xl">{{ t('CONSIDERING PURCHASING OUR ITEM?') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <p class="text-lg mt-5 text-gray-800">{{ t('Please view our support section for important notes and questions. ')}}</p>
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image13.jfif')}}" alt="" class="mx-auto">
    </div>
    <h1 class="mb-4 uppercase font-bold text-2xl">{{ t('Multi Restaurants Food Delivery App + Admin Panel') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <p class="text-lg mt-5 text-gray-800">
    {{ t('Launch your own multi-restaurants food delivery app with a complete dashboard. This is a complete end-to-end solution for launching your own food delivery app. It includes an end user app from which the end users can place an order for food and it includes an admin panel for restaurant owners to accept or manage orders and improve their
    restaurant business. This solution is ideal for anyone who wants to start a food delivery app business.')}}
    </p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('Items Included') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <p class="text-lg mt-5 text-gray-800">{{ t('Following items are included in this solution:')}}</p>
    <ul>
        <li class="text-lg mt-5 text-gray-800">{{ t('* Food Delivery Customer Mobile App Source Code (based on Flutter Framework)')}}</li>
        <li class="text-lg mt-5 text-gray-800">{{ t('* Backend Admin Panel Source Code (based on PHP Laravel Framework)')}}</li>
    </ul>
    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('About the Technologies') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('DART – FLUTTER') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('Flutter is an open source framework that is created by Google for mobile application development. Using this framework, apps can be developed for both Android and iOS Devices.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('PHP – LARAVEL') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('Laravel is a PHP framework with an expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('Installation Guide') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <p class="text-lg mt-5 text-gray-800">{{ t('The product comes with an Installation Wizard to help you setup the entire product suite in your servers in just a few steps.')}}</p>
    <p class="text-lg mt-5 text-gray-800">{{ t('It is really easy to set up the app and the admin panel in a few easy steps.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('Product Features') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('MULTIPLE RESTAURANTS DIRECTORY') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('The product includes support for multiple restaurants where the end-user can choose from a directory of restaurants and order food from them. Each restaurant has a different menu of food items to order from.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('GEOLOCATION & GOOGLE MAPS SUPPORT') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('All restaurants can be viewed on a Google Maps so the end-users can browse restaurants on a map and get directions to navigate to them. Based on the customer’s location, they will see all the nearby restaurants delivering to their location and all the food items that are available for ordering.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('LIGHT OR DARK THEME SUPPORT') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('You can choose from a light or dark theme for your end-user application. It is really easy to switch the theme.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('EASY TO BRAND & CUSTOMIZE') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('It is extremely easy and convenient to rebrand the app and customize the theme of the app as per your needs. You can launch an app with your own branding. You can easily change the app color theme, logos and the icons with minimal effort.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('PAYMENTS GATEWAY INTEGRATIONS') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('The app supports integrations with all major payment gateways such as Stripe, Razorpay, PayPal. The app also supports Cash On Delivery (COD) Payments upon order pickups.')}}</p>
    <p class="text-lg mt-5 text-gray-800">{{ t('Push Notifications FCM (Firebase Cloud Messaging) App Push Notifications have been integrated in different areas of the app.')}}</p>
    <ul>
        <li class="text-lg mt-5 text-gray-800">{{ t('*The customer is notified via push notification upon any change in order status by the restaurant owner or manager')}}</li>
        <li class="text-lg mt-5 text-gray-800">{{ t('*The delivery boy gets a notification when the restaurant manager assigns an order to him.')}}</li>
        <li class="text-lg mt-5 text-gray-800">{{ t('*Restaurant owner/manager gets a desktop/mobile notification when the customer places an order with the restaurant.')}}</li>
    </ul>
    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('CONFIGURE EMAIL SERVERS') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <p class="text-lg mt-5 text-gray-800">{{ t('You can connect the product suite with an email server – SMTP, Mailgun or Sparkpost and accordingly send emails about order and delivery notifications.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('MULTI-CURRENCY SUPPORT') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('The product supports multiple currencies. You can create your own currency and then the entire product suite will be changed as per the currency selected.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('DISCOUNTS & COUPONS') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('The restaurant manager/owner can add coupon codes, run promotional offers on their food items. Two types of discount coupons are supported- fixed and percent. An expiry date can also be added to the coupon codes.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('EASY LOGIN & AUTHENTICATION') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('There are easy login and authentication options included in the product.')}}</p>
    <ul>
        <li class="text-lg mt-5 text-gray-800">{{ t('*Customer Login: Customers can create an account using a mobile app or using a web admin panel. All customers can upgrade to the restaurant owner role by just requesting on the admin panel (Admin needs to verify the request).')}}</li>
        <li class="text-lg mt-5 text-gray-800">{{ t('*Manager Login: Manager can sign in to their account on the admin panel or mobile app (Mobile app is not included in this item).')}}</li>
        <li class="text-lg mt-5 text-gray-800">{{ t('*Admin Login: Admin can login to the admin panel')}}</li>
        <li class="text-lg mt-5 text-gray-800">{{ t('*Driver/Delivery Boy Login: Driver can create an account using mobile app and login on the admin panel or mobile app (not included in this item).')}}</li>
    </ul>
    <p class="text-lg mt-5 text-gray-800">{{ t('All these roles can use social authentication (available only on admin panel) or email and password, they can reset their password by providing the email address to get the reset link')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('INTUITIVE & USER FRIENDLY ANIMATIONS') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('The app has intuitive and user friendly animations built-in within it. These animations intend to provide a smooth app usage experience to the end clients. The animations include – Hero Animations, Parallax Animations, Sliding & Swiping animations.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('HELP & SUPPORT') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('The admin and the manager can add frequently asked questions and their answers to help customers to use the app correctly. FAQs can be added as FAQ Category and then FAQs.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('FAVORITES FOODS') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('Each end-user can add any food to his wishlist to fast access to this meal in the future. This is a useful feature to allow customers to favorite their frequently ordered food items and order them without searching.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('TRACKING ORDERS') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('After the customer places an order, they can track the status of the order on a timeline, also he can cancel the order if the order is not prepared.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('REPORTING DASHBOARDS') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('Restaurant Managers/Admins can view a reporting dashboard with a summary of orders, earnings, restaurants and more.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('CUSTOM FIELDS ') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('All entities such as users, foods, restaurants, categories, etc. in the application can be easily extended by adding custom fields to the entity. For example, a second mobile number can be added to the user entity/table.        ')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('FOOD REVIEW & RATING') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('Customers can write a review about the food and rate them. Admins/restaurant managers can view the customer reviews & ratings, edit them or delete them.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('EXPORT/PRINT FEATURE') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('Export and Print Features are available on all sections related to Food, Customer List, Order List, Restaurant List, Cuisines, FAQs, etc.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('MEDIA & FILE MANAGER') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('The admin and restaurant manager can easily manage their files and images uploaded on the admin panel. Media files can be uploaded in different categories such as Avatar, App Logo, Image & more. You can upload single or multiple media files using our drag and drop upload feature.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('MOBILE APP CONFIGURATION') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('Admin can easily configure the theme, language, default distance unit, Google Maps Key from the admin panel. Under themes, you can configure the theme for both dark and light themes.        ')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-xl">{{ t('DRIVER MANAGEMENT') }}</h1>
    <p class="text-lg mt-5 text-gray-800">{{ t('Driver Management Module allows managing all drivers in a single view. You can track the earnings, delivery fee %, number of orders for each driver. The profile of the driver can also be managed from the admin panel.')}}</p>
    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('Admin Panel') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image14.jpg')}}" alt="" class="mx-auto">
    </div>
    <pre style="box-sizing: border-box; font: 400 16px/19px Monaco, &quot;Courier New&quot;, &quot;DejaVu Sans Mono&quot;, &quot;Bitstream Vera Sans Mono&quot;, monospace; margin: 0px 0px 20px; color: rgb(51, 51, 51); white-space: pre-wrap; overflow-wrap: break-word; background-color: whitesmoke; background-image: linear-gradient(rgb(245, 245, 245) 50%, rgb(230, 230, 230) 50%); background-size: 38px 38px; border: 1px solid rgb(212, 212, 212); display: block; overflow: visible hidden; padding: 0px 0px 0px 4px; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
        Admin
        User or email: admin@demo.com
        Password: 123456

        Restaurant Manager
        User or email: manager@demo.com
        Password: 123456

        Client
        User or email: client@demo.com
        Password: 123456
    </pre>
        <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('Customer Mobile App Demo') }}</h1>
        <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image15.jpg')}}" alt="" class="mx-auto">
    </div>
    <pre style="box-sizing: border-box; font: 400 16px/19px Monaco, &quot;Courier New&quot;, &quot;DejaVu Sans Mono&quot;, &quot;Bitstream Vera Sans Mono&quot;, monospace; margin: 0px 0px 20px; color: rgb(51, 51, 51); white-space: pre-wrap; overflow-wrap: break-word; background-color: whitesmoke; background-image: linear-gradient(rgb(245, 245, 245) 50%, rgb(230, 230, 230) 50%); background-size: 38px 38px; border: 1px solid rgb(212, 212, 212); display: block; overflow: visible hidden; padding: 0px 0px 0px 4px; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
        Customer 1
        User or email: client@demo.com
        Password: 123456

        Customer 2
        User or email: client@demo.com
        Password: 123456
    </pre>
    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('Manager / Owner Mobile App (NOT INCLUDED IN THIS ITEM)') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image16.jpg')}}" alt="" class="mx-auto">
    </div>
    <pre style="box-sizing: border-box; font: 400 16px/19px Monaco, &quot;Courier New&quot;, &quot;DejaVu Sans Mono&quot;, &quot;Bitstream Vera Sans Mono&quot;, monospace; margin: 0px 0px 20px; color: rgb(51, 51, 51); white-space: pre-wrap; overflow-wrap: break-word; background-color: whitesmoke; background-image: linear-gradient(rgb(245, 245, 245) 50%, rgb(230, 230, 230) 50%); background-size: 38px 38px; border: 1px solid rgb(212, 212, 212); display: block; overflow: visible hidden; padding: 0px 0px 0px 4px; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
        Manager / Owner / Vendor account
        User or email: manager@demo.com
        Password: 123456
    </pre>
    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('Delivery Boy Mobile App Demo (NOT INCLUDED IN THIS ITEM)') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image17.jpg')}}" alt="" class="mx-auto">
    </div>
    <pre style="box-sizing: border-box; font: 400 16px/19px Monaco, &quot;Courier New&quot;, &quot;DejaVu Sans Mono&quot;, &quot;Bitstream Vera Sans Mono&quot;, monospace; margin: 0px 0px 20px; color: rgb(51, 51, 51); white-space: pre-wrap; overflow-wrap: break-word; background-color: whitesmoke; background-image: linear-gradient(rgb(245, 245, 245) 50%, rgb(230, 230, 230) 50%); background-size: 38px 38px; border: 1px solid rgb(212, 212, 212); display: block; overflow: visible hidden; padding: 0px 0px 0px 4px; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
        Driver / Delivery Boy
        User or email: driver@demo.com
        Password: 123456
    </pre>
    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('Documentation') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <p class="text-lg mt-5 text-gray-800">{{ t('This is online documentation, this link can help you how to getting started with flutter and how to use Multi Restaurants App')}}</p>
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image18.jpg')}}" alt="" class="mx-auto">
    </div>
    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('What they say about our Apps ?') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image19.jpg')}}" alt="" class="mx-auto">
    </div>
    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('Bright App Screenshots') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image20.jpg')}}" alt="" class="mx-auto">
    </div>
    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('Dark App Screenshots') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image21.jpg')}}" alt="" class="mx-auto">
    </div>

    <h1 class="mb-4 mt-4 uppercase font-bold text-2xl">{{ t('Cool Animations') }}</h1>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image25.gif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image22.gif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image23.gif')}}" alt="" class="mx-auto">
    </div>
    <div class="w-full mb-9 mt-4">
        <img src="{{asset('images/products/RestoOne/image24.jpg')}}" alt="" class="mx-auto">
    </div>
</div>
@endsection


@section('js')

@endsection

