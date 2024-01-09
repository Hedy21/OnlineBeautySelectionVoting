<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="output.css" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body>


    <!-- main grid -->
    <div class="grid grid-rows-4 grid-cols-9 gap-4 mt-3">
        <div class="bg-gradient-to-r from-purple-300 to-pink-300 col-start-1 col-span-9 sm:col-start-2 sm:col-span-7 md:col-start-3 md:col-span-5 lg:col-start-4 lg:col-span-3 xl:col-start-4 xl:col-span-3 xxl:col-start-4 xxl:col-span-3">
             <!-- register form -->
            <div class="h-fit m-5 bg-white border rounded">

                <form class="m-5 p-5" action="{{route('register#save')}}" method="post" >
                    @csrf
                    <div class="font-bold text-xl text-purple-500 text-center mb-5">Register Here!</div>
                    <div class="mb-6">
                    @error('email')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                    <label for="email" class="block mb-2 text-sm font-medium text-purple-500 dark:text-white">Your email</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg ring-1 ring-purple-500 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@ucstgi.edu.mm" required>
                    </div>
                    <div class="mb-6">
                    @error('password')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                    <label for="password" class="block mb-2 text-sm font-medium text-purple-500 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" onpaste="return false;" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg ring-1 ring-purple-500 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-6">
                    @error('c_password')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                        <label for="c_password" class="block mb-2 text-sm font-medium text-purple-500 dark:text-white">Confirmation password</label>
                        <input type="password" name="c_password" onpaste="return false;" id="c_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg ring-1 ring-purple-500 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="grid grid-cols-4">
                        <button type="submit" class="col-span-2 col-start-2 text-white bg-gradient-to-r from-purple-300 to-pink-300 ring-2 ring-purple-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold tracking-wide rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">REGISTER</button>
                    </div>
                    <div class="mt-3">
                        <div class="text-center font-normal"><small>Already registered? <a href="{{url('login')}}" class="font-bold underline text-purple-500">Sign in Here!</a></small></div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>
