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

        </ul>
      </div>
    </div>

    <!-- drawer -->

    <!-- main grid -->
    <div class="grid grid-rows-4 grid-cols-9 gap-4 mt-3">
      <div class="bg-gradient-to-r from-purple-300 to-pink-300 col-start-1 col-span-9 sm:col-start-1 sm:col-span-9 md:col-start-2 md:col-span-7 lg:col-start-2 lg:col-span-7 xl:col-start-3 xl:col-span-5 xxl:col-start-3 xxl:col-span-5 ">
        <!-- queen card -->
        <div class="card card-compact  bg-base-100 shadow-xl m-4 p-4">
          <div class="text-3xl text-center mb-3"><i class="fa-solid fa-crown"></i>Top Voted Selections<i class="fa-solid fa-crown"></i></div>
          <hr>
          <div class="card-body">
            <div class="flex justify-between">
              <h2 class="card-title">Latest Results</h2>
              <div class="text-center font-semibold text-base underline"><a href="leaderboard2.html">View King Selections</a></div>
            </div>
            <!-- flex for top three selections -->
            <div class="flex  justify-center">
              <!-- second ranked selection -->
              <div class="flex-auto w-32 text-center self-center">
                <!-- top selected avator -->
                <div class="avatar">
                  <div class="sm:w-24 md:w-32 lg:w-32 xl:32 xxl:32 rounded-full ring ring-teal-500 ring-offset-base-100 ring-offset-2">
                    <img src="images/IMG_5536.jpg" />
                  </div>
                </div><br>
                Myat Phoo Yoon
              </div>
              <div class="flex-auto w-32 text-center self-center">
                <!-- top selected avator -->
                <div class="avatar">
                  <div class="sm:w-28 md:w-44 lg:w-44 xl:w-44 xxl:w-44 rounded-full ring ring-amber-400 ring-offset-base-100 ring-offset-2">
                    <img src="images/IMG_2728.jpg" />
                  </div>
                </div><br>
                Su Paing Thae
              </div>
              <!-- third ranked selection -->
              <div class="flex-auto w-32 text-center self-center">
                <!-- top selected avator -->
                <div class="avatar">
                  <div class="sm:w-24 md:w-32 lg:w-32 xl:32 xxl:32  rounded-full ring ring-pink-400 ring-offset-base-100 ring-offset-2">
                    <img src="images/IMG_5537.JPG" />
                  </div>
                </div><br>
                Yoon Yoon
              </div>
            </div>

            <!-- grid for ranking -->
            <!-- parent div for grid for ranking -->
            <div class=" h-96 overflow-auto">
              <div class="grid grid-cols-7 gap-y-3 mt-5">
                <!-- Use loop here for selections list and ranks -->

                <!-- column 1 of grid -->
                <div class="col-span-1 mb-6 flex justify-center items-center">
                  <div class="text-2xl  font-serif mt-3 ">1</div>
                </div>

                <!-- column 2 of grid -->
                <div class="col-span-4">
                  <!-- flex for avator and name -->
                  <div class="flex flex-row justify-start">
                    <!-- flex item 1 -->
                    <div class="basis-1/4">
                      <div class="avatar">
                        <div class="sm:w-14 md:w-16 lg:w-16 xl:w-16 xxl:w-16 rounded-full">
                          <a href="selectionPreview.html"><img src="images/IMG_2728.jpg" class=""/></a>
                        </div>
                      </div>
                    </div>
                    <!-- flex item 2 -->
                    <div class="sm:text-lg md:text-xl lg:text-xl font-serif  self-center"><div class="tooltip" data-tip="Click here to vote"><a href="selectionPreview.html">Su Paing Thae</a></div></div>
                  </div>

                </div>

                <!-- column 3 of grid -->
                <div class="col-span-2 mb-6 flex justify-center items-center">
                  <div class="text-2xl mt-3 font-serif">227</div>
                </div>

                <!-- delete these later start -->
                <!-- column 1 of grid -->
                <div class="col-span-1 mb-6 flex justify-center items-center">
                  <div class="text-2xl  font-serif mt-3 ">2</div>
                </div>

                <!-- column 2 of grid -->
                <div class="col-span-4">
                  <!-- flex for avator and name -->
                  <div class="flex flex-row justify-start">
                    <!-- flex item 1 -->
                    <div class="basis-1/4">
                      <div class="avatar">
                        <div class="sm:w-14 md:w-16 lg:w-16 xl:w-16 xxl:w-16 rounded-full">
                          <a href="selectionPreview.html"><img src="images/IMG_5536.jpg" class=""/></a>
                        </div>
                      </div>
                    </div>
                    <!-- flex item 2 -->
                    <div class="sm:text-lg md:text-xl lg:text-xl font-serif  self-center"><div class="tooltip" data-tip="Click here to vote"><a href="selectionPreview.html">Myat Phoo Yoon</a></div></div>
                  </div>

                </div>

                <!-- column 3 of grid -->
                <div class="col-span-2 mb-6 flex justify-center items-center">
                  <div class="text-2xl mt-3 font-serif">225</div>
                </div>
                <!-- column 1 of grid -->
                <div class="col-span-1 mb-6 flex justify-center items-center">
                  <div class="text-2xl  font-serif mt-3 ">3</div>
                </div>

                <!-- column 2 of grid -->
                <div class="col-span-4">
                  <!-- flex for avator and name -->
                  <div class="flex flex-row justify-start">
                    <!-- flex item 1 -->
                    <div class="basis-1/4">
                      <div class="avatar">
                        <div class="sm:w-14 md:w-16 lg:w-16 xl:w-16 xxl:w-16 rounded-full">
                          <a href="selectionPreview.html"><img src="images/IMG_5537.JPG" class=""/></a>
                        </div>
                      </div>
                    </div>
                    <!-- flex item 2 -->
                    <div class="sm:text-lg md:text-xl lg:text-xl font-serif  self-center"><div class="tooltip" data-tip="Click here to vote"><a href="selectionPreview.html">Yoon Yoon</a></div></div>
                  </div>

                </div>

                <!-- column 3 of grid -->
                <div class="col-span-2 mb-6 flex justify-center items-center">
                  <div class="text-2xl mt-3 font-serif">200</div>
                </div>
                <!-- column 1 of grid -->
                <div class="col-span-1 mb-6 flex justify-center items-center">
                  <div class="text-2xl  font-serif mt-3 ">4</div>
                </div>

                <!-- column 2 of grid -->
                <div class="col-span-4">
                  <!-- flex for avator and name -->
                  <div class="flex flex-row justify-start">
                    <!-- flex item 1 -->
                    <div class="basis-1/4">
                      <div class="avatar">
                        <div class="sm:w-14 md:w-16 lg:w-16 xl:w-16 xxl:w-16 rounded-full">
                          <a href="selectionPreview.html"><img src="images/IMG_5547.jpg" class=""/></a>
                        </div>
                      </div>
                    </div>
                    <!-- flex item 2 -->
                    <div class="sm:text-lg md:text-xl lg:text-xl font-serif  self-center"><div class="tooltip" data-tip="Click here to vote"><a href="selectionPreview.html">Su Su</a></div></div>
                  </div>

                </div>

                <!-- column 3 of grid -->
                <div class="col-span-2 mb-6 flex justify-center items-center">
                  <div class="text-2xl mt-3 font-serif">152</div>
                </div>
                <!-- column 1 of grid -->
                <div class="col-span-1 mb-6 flex justify-center items-center">
                  <div class="text-2xl  font-serif mt-3 ">5</div>
                </div>

                <!-- column 2 of grid -->
                <div class="col-span-4">
                  <!-- flex for avator and name -->
                  <div class="flex flex-row justify-start">
                    <!-- flex item 1 -->
                    <div class="basis-1/4">
                      <div class="avatar">
                        <div class="sm:w-14 md:w-16 lg:w-16 xl:w-16 xxl:w-16 rounded-full">
                          <a href="selectionPreview.html"><img src="images/tsp1.jpg" class=""/></a>
                        </div>
                      </div>
                    </div>
                    <!-- flex item 2 -->
                    <div class="sm:text-lg md:text-xl lg:text-xl font-serif  self-center"><div class="tooltip" data-tip="Click here to vote"><a href="selectionPreview.html">Thae Su Paing</a></div></div>
                  </div>

                </div>

                <!-- column 3 of grid -->
                <div class="col-span-2 mb-6 flex justify-center items-center">
                  <div class="text-2xl mt-3 font-serif">122</div>
                </div>
                <!-- column 1 of grid -->
                <div class="col-span-1 mb-6 flex justify-center items-center">
                  <div class="text-2xl  font-serif mt-3 ">1</div>
                </div>

                <!-- column 2 of grid -->
                <div class="col-span-4">
                  <!-- flex for avator and name -->
                  <div class="flex flex-row justify-start">
                    <!-- flex item 1 -->
                    <div class="basis-1/4">
                      <div class="avatar">
                        <div class="sm:w-14 md:w-16 lg:w-16 xl:w-16 xxl:w-16 rounded-full">
                          <a href="selectionPreview.html"><img src="images/tsp1.jpg" class=""/></a>
                        </div>
                      </div>
                    </div>
                    <!-- flex item 2 -->
                    <div class="sm:text-lg md:text-xl lg:text-xl font-serif  self-center"><div class="tooltip" data-tip="Click here to vote"><a href="selectionPreview.html">Thae Su Paing</a></div></div>
                  </div>

                </div>

                <!-- column 3 of grid -->
                <div class="col-span-2 mb-6 flex justify-center items-center">
                  <div class="text-2xl mt-3 font-serif">122</div>
                </div>
                <!-- column 1 of grid -->
                <div class="col-span-1 mb-6 flex justify-center items-center">
                  <div class="text-2xl  font-serif mt-3 ">1</div>
                </div>

                <!-- column 2 of grid -->
                <div class="col-span-4">
                  <!-- flex for avator and name -->
                  <div class="flex flex-row justify-start">
                    <!-- flex item 1 -->
                    <div class="basis-1/4">
                      <div class="avatar">
                        <div class="sm:w-14 md:w-16 lg:w-16 xl:w-16 xxl:w-16 rounded-full">
                          <a href="selectionPreview.html"><img src="images/tsp1.jpg" class=""/></a>
                        </div>
                      </div>
                    </div>
                    <!-- flex item 2 -->
                    <div class="sm:text-lg md:text-xl lg:text-xl font-serif  self-center"><div class="tooltip" data-tip="Click here to vote"><a href="selectionPreview.html">Thae Su Paing</a></div></div>
                  </div>

                </div>

                <!-- column 3 of grid -->
                <div class="col-span-2 mb-6 flex justify-center items-center">
                  <div class="text-2xl mt-3 font-serif">122</div>
                </div>
                <!-- column 1 of grid -->
                <div class="col-span-1 mb-6 flex justify-center items-center">
                  <div class="text-2xl  font-serif mt-3 ">1</div>
                </div>

                <!-- column 2 of grid -->
                <div class="col-span-4">
                  <!-- flex for avator and name -->
                  <div class="flex flex-row justify-start">
                    <!-- flex item 1 -->
                    <div class="basis-1/4">
                      <div class="avatar">
                        <div class="sm:w-14 md:w-16 lg:w-16 xl:w-16 xxl:w-16 rounded-full">
                          <a href="selectionPreview.html"><img src="images/tsp1.jpg" class=""/></a>
                        </div>
                      </div>
                    </div>
                    <!-- flex item 2 -->
                    <div class="sm:text-lg md:text-xl lg:text-xl font-serif  self-center"><div class="tooltip" data-tip="Click here to vote"><a href="selectionPreview.html">Thae Su Paing</a></div></div>
                  </div>

                </div>

                <!-- column 3 of grid -->
                <div class="col-span-2 mb-6 flex justify-center items-center">
                  <div class="text-2xl mt-3 font-serif">122</div>
                </div>

                <!-- column 1 of grid -->
                <div class="col-span-1 mb-6 flex justify-center items-center">
                  <div class="text-2xl  font-serif mt-3 ">1</div>
                </div>

                <!-- column 2 of grid -->
                <div class="col-span-4">
                  <!-- flex for avator and name -->
                  <div class="flex flex-row justify-start">
                    <!-- flex item 1 -->
                    <div class="basis-1/4">
                      <div class="avatar">
                        <div class="sm:w-14 md:w-16 lg:w-16 xl:w-16 xxl:w-16 rounded-full">
                          <a href="selectionPreview.html"><img src="images/tsp1.jpg" class=""/></a>
                        </div>
                      </div>
                    </div>
                    <!-- flex item 2 -->
                    <div class="sm:text-lg md:text-xl lg:text-xl font-serif  self-center"><div class="tooltip" data-tip="Click here to vote"><a href="selectionPreview.html">Thae Su Paing</a></div></div>
                  </div>

                </div>

                <!-- column 3 of grid -->
                <div class="col-span-2 mb-6 flex justify-center items-center">
                  <div class="text-2xl mt-3 font-serif">122</div>
                </div>

                <!-- column 1 of grid -->
                <div class="col-span-1 mb-6 flex justify-center items-center">
                  <div class="text-2xl  font-serif mt-3 ">1</div>
                </div>

                <!-- column 2 of grid -->
                <div class="col-span-4">
                  <!-- flex for avator and name -->
                  <div class="flex flex-row justify-start">
                    <!-- flex item 1 -->
                    <div class="basis-1/4">
                      <div class="avatar">
                        <div class="sm:w-14 md:w-16 lg:w-16 xl:w-16 xxl:w-16 rounded-full">
                          <a href="selectionPreview.html"><img src="images/tsp1.jpg" class=""/></a>
                        </div>
                      </div>
                    </div>
                    <!-- flex item 2 -->
                    <div class="sm:text-lg md:text-xl lg:text-xl font-serif  self-center"><div class="tooltip" data-tip="Click here to vote"><a href="selectionPreview.html">Thae Su Paing</a></div></div>
                  </div>

                </div>

                <!-- column 3 of grid -->
                <div class="col-span-2 mb-6 flex justify-center items-center">
                  <div class="text-2xl mt-3 font-serif">122</div>
                </div>
                <!-- delete these later end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



</body>
</html>
