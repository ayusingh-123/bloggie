<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts  "https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" -->
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        
        
        <link href="E:\FrontEnd Projects\Blog\bloggie\resources\css\app.css" rel="stylesheet">


     
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <h1 style="margin-top:-40rem; font-size:25px; color:whitesmoke">BLoggie<h1>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-3 lg:px-2">
            <div class="ag-format-container" style="width: 1142px; margin: 0 auto;">
  <style>
    body {
      background-color: #000;
    }
  </style>
  <div class="ag-courses_box" style="display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-align: start; -ms-flex-align: start; align-items: flex-start; -ms-flex-wrap: wrap; flex-wrap: wrap; padding: 50px 0;">
    <div class="ag-courses_item" style="-ms-flex-preferred-size: calc(33.33333% - 30px); flex-basis: calc(33.33333% - 30px); margin: 0 15px 30px; overflow: hidden; border-radius: 28px;">
      <a href="#" class="ag-courses-item_link" style="display: block; padding: 30px 20px; background-color: #121212; overflow: hidden; position: relative;">
        <div class="ag-courses-item_bg" style="height: 128px; width: 128px; background-color: #f9b234; z-index: 1; position: absolute; top: -75px; right: -75px; border-radius: 50%;">
          <style>
            .ag-courses-item_link:hover, .ag-courses-item_link:hover .ag-courses-item_date {
              text-decoration: none;
              color: #FFF;
            }

            .ag-courses-item_link:hover .ag-courses-item_bg {
              -webkit-transform: scale(10);
              -ms-transform: scale(10);
              transform: scale(10);
            }
          </style>
        </div>
        
        <div class="ag-courses-item_title" style="min-height: 87px; margin: 0 0 25px; overflow: hidden; font-weight: bold; font-size: 30px; color: #FFF; z-index: 2; position: relative;">Blog Title</div>
        <div class="ag-courses-item_date-box" style="font-size: 18px; color: #FFF; z-index: 2; position: relative;">Remark: <span class="ag-courses-item_date" style="font-weight: bold; color: #f9b234;">After logging in, you will be able to see the related blogs..</span></div>
      </a>
      
    </div>
    <div style="margin-left:2rem; margin-top:3.5rem; font-size:3rem; color:wheat;">Blog or Hunch you need to see</div>
  </div>
  <style>
    .ag-courses_item:nth-child(2n) .ag-courses-item_bg {
      background-color: #3ecd5e;
    }

    .ag-courses_item:nth-child(3n) .ag-courses-item_bg {
      background-color: #e44002;
    }

    .ag-courses_item:nth-child(4n) .ag-courses-item_bg {
      background-color: #952aff;
    }

    .ag-courses_item:nth-child(5n) .ag-courses-item_bg {
      background-color: #cd3e94;
    }

    .ag-courses_item:nth-child(6n) .ag-courses-item_bg {
      background-color: #4c49ea;
    }
  </style>
</div>
<style>
  @media only screen and (max-width: 979px) {
    .ag-courses_item {
      -ms-flex-preferred-size: calc(50% - 30px);
      flex-basis: calc(50% - 30px);
    }

    .ag-courses-item_title {
      font-size: 24px;
    }
  }

  @media only screen and (max-width: 767px) {
    .ag-format-container {
      width: 96%;
    }
  }

  @media only screen and (max-width: 639px) {
    .ag-courses_item {
      -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
    }

    .ag-courses-item_title {
      min-height: 72px;
      line-height: 1;
      font-size: 24px;
    }

    .ag-courses-item_link {
      padding: 22px 40px;
    }

    .ag-courses-item_date-box {
      font-size: 16px;
    }
  }
</style>


                
            </div>
        </div>
    </body>
</html>
