<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head> 
<body>
    

<form class="max-w-sm mx-auto mt-20" action="/dashboard/add" method="POST">
    <h1 class="text-2xl font-medium text-gray-900 dark:text-white">Add Artikel</h1>
  <div class="my-5">
    <label for="id_artikel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Artikel</label>
    <input type="text" id="id_artikel" name="id_artikel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
  </div>
  <div class="mb-5">
    <label for="judul_artikel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Artikel</label>
    <input type="text" id="judul_artikel" name="judul_artikel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
  </div>
 
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

</body>
</html>