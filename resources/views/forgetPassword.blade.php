<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password | Forget Password | Lakshan Dananjana  | Advance Login System</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-screen w-screen flex items-center justify-center bg-gradient-to-br from-yellow-300 to-red-600">
        <form action="" method="post" class="w-[85%] sm:w-[60%] md:w-[40%] min-h-[40%] flex flex-col items-center justify-center p-[10px] border-[2px] rounded-xl border-white text-white bg-white/20 backdrop-blur-sm gap-[35px]">
            <h1 class="text-3xl font-bold">Change Your Password</h1>
            <div class="w-[90%]">
                <input type="email" name="" id="" class="w-[100%] h-[35px] bg-white backdrop-blur-md rounded-xl text-black placeholder:text-black pl-[10px]" placeholder="Your Email">
            </div>
            <div class="w-[90%]">
                <input type="password" name="" id="" class="w-[100%] h-[35px] bg-white backdrop-blur-md rounded-xl text-black placeholder:text-black pl-[10px]" placeholder="Please Enter Your Password">
            </div>
            <div class="w-[90%]">
                <input type="password" name="" id="" class="w-[100%] h-[35px] bg-white backdrop-blur-md rounded-xl text-black placeholder:text-black pl-[10px]" placeholder="Please Enter Your Confirm Password">
            </div>
            <button type="submit" class="w-[100px] h-[35px] bg-blue-600 rounded-xl hover:bg-blue-400 transistion">Change</button>
        </form>
    </div>
</body>
</html>