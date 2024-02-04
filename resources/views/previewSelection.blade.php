<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @vite('resources/css/app.css')
</head>
<body>
    <!-- navigation bar -->
    <div class="navbar bg-gradient-to-r from-purple-300 to-pink-300">
      <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">Queen/King Selections</a>
      </div>
      <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
          <li><a href="leaderboard.html">Latest Results</a></li>
          <li>
            <details>
              <summary>
                View Selections
              </summary>
              <ul class="p-2 bg-base-100">
                <li><a href="preview.html">Queen Selections</a></li>
                <li><a>King Selections</a></li>
              </ul>
            </details>
          </li>
        </ul>
      </div>
    </div>

    <!-- main grid -->
    <div class="grid grid-rows-4 grid-cols-9 gap-4 mt-3">
        <div class="bg-gradient-to-r from-purple-300 to-pink-300 col-start-3 col-span-5 rounded-l-3xl">
            <div class="carousel rounded-box">
                <div id="slide1" class="carousel-item relative w-full">
                    <div class="grid grid-cols-2 ">
                        <div class="1">
                            <div class="carousel-item" id="item2">
                                <div class="bg-white border rounded-sm max-w-md">
                                <img src="{{asset($idData['image'])}}" class="rounded-l-3xl bg-clip-border"/>
                                @if(session('message'))
                                <div role="alert" id="alertMessage" class="alert alert-error">
                                  <svg xmlns="http://www.w3.org/2000/svg"  onclick="closeAlert()" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                  <span>{{session('message')}}</span>
                                </div>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="2">
                            <div class="border m-6 p-5 rounded-md ">
                                <div class=" font-semibold font-serif text-xl my-2">Selection No. {{$idData['id']}}</div>
                                <div class=" font-semibold font-serif text-3xl my-2">{{$idData['name']}}</div>
                            </div>
                            <form method="POST" action="{{route('voted',['id'=>$idData['id']])}}">
                              @csrf
                                <div class="grid grid-cols-4">
                                
                                    <button type="submit" class="col-span-2 col-start-2 text-white bg-gradient-to-r from-purple-300 to-pink-300 ring-2 ring-purple-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold tracking-wide rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">VOTE</button>
                                
                                </div>
                              </form>
                                <div class="text-center font-normal mt-3"><small>Not sure yet? <a href="leaderboard.html" class="font-bold underline text-purple-500">Selections List</a></small></div>

                            </div>
                    </div>
                    
                </div>
                
              </div>
        </div>
        </div>
    </div>

    <script>
      function closeAlert(){
        document.getElementById('alertMessage').style.display = 'none';
      }
    </script>
</body>
</html>
