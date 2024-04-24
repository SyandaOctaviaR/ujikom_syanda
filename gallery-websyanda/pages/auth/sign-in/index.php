<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
  </head>
  <body>

  <form action="../../../config/login.php" method="POST">
  <main class="font-lora">
    <div class="flex items-center justify-center min-h-screen bg-[rgb(54,52,52)]">
      <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
        <!-- bagian kiri -->
        <div class="flex flex-col justify-center p-8 md:p-14">
          <span class="mb-3 text-4xl text-center font-bold">LOGIN</span>
          <span class="font-light text-center text-gray-400 mb-8">
            Sensasi horor yang lebih mengerikan
          </span>
          <div class="py-4">
            <span class="mb-2 text-md">Email</span>
            <input type="text" name="email" id="email" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" />
          </div>
          <div class="py-4">
            <span class="mb-2 text-md">Password</span>
            <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"/>
          </div>
          
          <button name="submit" type="submit" class="w-full bg-[rgb(113,43,43)] text-white p-2 rounded-lg mb-6 hover:bg-[rgb(0,0,0)] hover:font-extrabold hover:text-white">Login
          </button>
            <div class="text-center text-gray-400">Dont'have an account?
              <span class="font-bold text-black"><a href="../sign-up/" class="link-danger">Sign-Up</a>
              </div></div>
          </form>    
          <div class="relative">
            <img src="https://i.pinimg.com/564x/d6/50/a1/d650a129bb752823fad3c03ebb8f4a30.jpg" alt="img" class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover"/>
            </div>
          </div>
      </div>
    </div>
  </body>
</html>