<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="output.css" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body>
  <!-- navigation bar -->
 <div class="navbar bg-gradient-to-r from-purple-300 to-pink-300">
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl">Vote</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">

      <li>
        <details>
          <summary>
            Latest Results
          </summary>
          <ul class="p-2 bg-base-100 z-50">
            <li><a href="leaderboard.html">Queen Selections</a></li>
            <li><a href="leaderboard2.html">King Selections</a></li>
          </ul>
        </details>
      </li>
      <li>
        <details>
          <summary>
            View Selections
          </summary>
          <ul class="p-2 bg-base-100 z-50">
            <li><a href="previewQueens.html">Queen Selections</a></li>
            <li><a href="previewKings.html">King Selections</a></li>
          </ul>
        </details>
      </li>
    </ul>
  </div>
</div>

    <!-- main grid -->
    <div class="grid grid-rows-4 grid-cols-9 gap-4 mt-3">
        <div class="bg-gradient-to-r from-purple-300 to-pink-300 col-start-1 col-span-9 sm:col-start-2 sm:col-span-7 md:col-start-3 md:col-span-5 lg:col-start-4 lg:col-span-3 xl:col-start-4 xl:col-span-3 xxl:col-start-4 xxl:col-span-3">
             <!-- register form -->
            <div class="h-fit m-5 bg-white border rounded">

                <form class="m-5 p-5" action="{{route('selectionFormUpload2')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="font-bold text-xl text-purple-500 text-center mb-5">Upload King Selections</div>
                    <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-purple-500 dark:text-white">Name</label>
                    <input type="name" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg ring-1 ring-purple-500 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="mb-6">
                        <input type="file" name="image" class="file-input file-input-bordered file-input-md file-input- w-full max-w-xs" required/>
                    </div>

                    <div class="grid grid-cols-4">
                        <button type="submit" class="col-span-2 col-start-2 text-white bg-gradient-to-r from-purple-300 to-pink-300 ring-2 ring-purple-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold tracking-wide rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">UPLOAD</button>
                    </div>
                    <div class="mt-3">
                        <div class="text-center font-normal"><small>Go to <a href="queenSelectionsUploadForm.html" class="font-bold underline text-purple-500">Queen Selections Upload Page</a></small></div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>
