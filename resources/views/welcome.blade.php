<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .writing-area{
                max-width:50%;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    writerBox
                </div>

              <div class="writing-area">
              <p>
              {{ $data2 }}
              I just pitched a business reality show. I went to LA, pitched to nine networks. It went well.

The first business reality TV show I watched in my life was Shark Tank. I’ve watched every episode. I force my kids to watch it. I’ve studied every aspect of the show.

I’ve had many of the Sharks on my podcast: Mark Cuban, Kevin O’Leary, Barbara Corcoran, Daymond John, Robert Herjavec, and Kevin Harrington (a first season Shark).

I’ve also coached several entrepreneurs who have gone on Shark Tank, were terrified beforehand, I coached them, and they got their deals.

One time I was up all night with an entrepreneur, throwing potential difficult questions at her and working her through her responses. Mark Cuban ended up writing the check.
</p>
<br>
<p>

On Shark Tank: five investors sit on a stage, keeping them slightly higher than the supplicants who come in asking for money.

Then, one by one, aspiring entrepreneurs are led into the “Shark Tank” where they pitch their products. And the Sharks, right then and there, decide whether or not to give them money.

The entrepreneurs are often humiliated, laughed at, insulted, ask the stupidest questions I’ve ever heard, but occasionally get some good advice and even better, walk away with a check if one or more of the “Sharks” think their business is a good idea.

“The Sharks” as the show describes them, “are filthy rich” and invest their own money.
</p>
<textarea name="write-here" id="first-box" cols="90" rows="40"></textarea>
<br>
<button type="submit">Submit</button>
<button>clear</button>
              </div>


            </div>
        </div>
    </body>
</html>
