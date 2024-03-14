<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-gray-200">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 ">

            <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
                <h2 class="mt-10 text-left text-2xl font-bold leading-9 tracking-tight text-gray-900">Register</h2>
              </div>

                  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                       <form class="space-y-6" action="#" method="POST">

                          <div class="flex flex-wrap -mx-2">
                              <div class="w-full md:w-1/2 px-3 mb-2">
                                  <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                                  <div class="">
                                      <input id="first_name" name="first_name" type="text" autocomplete="given-name" required
                                          class="block w-full rounded-md border border-b-gray-600 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                  </div>
                              </div>
                              <div class="w-full md:w-1/2 px-3 mb-2">
                                  <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                                  <div class="">
                                      <input id="last_name" name="last_name" type="text" autocomplete="family-name" required
                                          class="block w-full rounded-md border border-b-gray-600 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                  </div>
                              </div>
                          </div>

                          <div>
                              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                              <div class="">
                                  <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border border-b-gray-600 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                          </div>

                          <div>
                              <div class="flex items-center justify-between">
                                  <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                              </div>
                              <div class="">
                                  <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border border-b-gray-600 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                          </div>

                          <div>
                              <div class="flex items-center justify-between">
                                  <label for="confirm_password" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                                  </div>
                                  <div class="">
                                  <input id="confirm_password" name="confirm_password" type="confirm_password" autocomplete="current-confirm_password" required class="block w-full rounded-md border border-b-gray-600 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                          </div>

                          <div class="flex justify-between">
                              <button type="submit" class="flex-grow mr-2 rounded-md bg-gray-100 border border-b-4 border-b-gray-600 px-3 py-2 text-sm font-semibold leading-6 text-violet-800 shadow-sm hover:bg-gray-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</button>

                              <button type="submit" class="flex-grow ml-2 rounded-md bg-green-500 border border-b-4 border-b-green-800 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                          </div>
                      </form>

                  </div>
    </div>

</body>
</html>
