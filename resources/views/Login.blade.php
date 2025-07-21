<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Lakshan Dananjana  | Advance Login System</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="w-screen h-screen flex items-center justify-center bg-gradient-to-br from-yellow-300 to-red-600">
    <form action="" method="post" class=" w-[85%] sm:w-[60%] md:w-[40%] min-h-[55%] flex flex-col items-center p-[10px] border-[2px] rounded-xl border-white text-white bg-white/20 backdrop-blur-sm gap-[35px] ">
      <h1 class="text-4xl font-bold">Login</h1>
      <div class="w-[90%]">
        <input type="text" name="" id="" class="w-[100%] h-[35px] bg-white backdrop-blur-md rounded-xl text-black placeholder:text-black pl-[10px]" placeholder="Enter Your Email">
      </div>
      <div class="w-[90%]">
        <input type="password" name="" id="" class="w-[100%] h-[35px] bg-white backdrop-blur-md rounded-xl text-black placeholder:text-black pl-[10px]" placeholder="Enter Your Password">
      </div>
      <div class="w-[90%] pl-[12px]">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember Me</label>
      </div>
      <button type="submit" class="w-[100px] h-[35px] bg-blue-600 rounded-xl hover:bg-blue-400 transistion">Login</button>
      <div class="w-[90%] flex justify-center text-center">
        <p>Do you haven't an account? <a href="/register" class="text-yellow-200 hover:text-red-500 transistion">Sign Up</a></p>
      </div>
      <div class="flex flex-row gap-[20px]">
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook fill-blue-500" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg>
        </a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook fill-blue-500" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg>
        </a>
      </div>
      <div class="w-[90%] flex justify-center text-center">
        <a href="/Ensure Email" class="text-yellow-200 hover:text-red-500 transistion">Forgot Password?</a>
      </div>
    </form>
  </div>
</body>
</html>