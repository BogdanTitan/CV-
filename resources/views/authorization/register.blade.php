@extends('layouts.main')
@section('auth')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
{{--                <img class="w-8 h-8 mr-2" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAbFBMVEX///8AAADg4ODz8/N0dHSenp7V1dUXFxc/Pz+8vLzu7u739/f7+/vn5+fExMQyMjLNzc1RUVG2traWlpaPj49nZ2fd3d1sbGyDg4NMTEwNDQ1iYmLPz88vLy8fHx9VVVWrq6t6enooKCijo6OaOk+PAAAEHElEQVR4nO3d6XaqMBSGYRBHoFSttQ7Hatv7v8dTS0AcAtmanbDxe391KZo8SyoWKgQBQgghZFrU61pRlffyFXaxfq8AvvmeCluLHNj3PQ/Gvo7Age9ZsHb4fYvxPQfmko6/hMcXceZ7Csy9B+qHVRJ1q2SVwz4LYS/oWj0lg1BuEMoPQvlBKD8I5edBGGWr/GP+bJVFzYs/mnNhtg+rbTPuAR0LJ9/hZd/MRqfCeH3lO7ZmXVddCqc3fcf+MY7qUDjXAsNwwjesO2EdkJPoTFhdRddv2bI3zN6qv5ZDroFdCZOT5bSTPeh9lLduUqaRXQm3hWR3PsKy3Hz0mUZ2JCzX0f3VXeWqyrSeOhKOtcCg3FM74xnajfCfevbPW3emG3XvkmVsN8LiDeX2iliswl8sYzsRpurJ3zX3Fx/GOcZ2IyxWUt1qOG24/6GcCNVxrW/tAuo38cAxuBNhv+n3TG0tVxyDOxHOml4i9SJvOQZ3IlRbQ/2na/WpnGWL6ET4mj+3/o/5LF/glWNwBmESXxTt8ueeX95Rpl7DXXT10BYKp6PQZp/TtgmHVn02ZmRbuNVN9O4+WiYc6yZ6d2MIIYTwPuE8SE+dtvjp7U5b/OqN81YLzz+g3feZZgKhWRBSe1LhzlC4O7tRklDt9NUfQ1M7ctZnN0oSqi8B1DwsX2BwdpskYf4i1h3N/ltNL/7EFyUMJotBXPu4eLC4eowo4T1BaBiE1CAkBKFhEFKDkBCEhkFIDUJCEBoGITUICUFoGITUICQEoWEQUoOQEISGQUgNQkIQGgYhNQgJQWgYhNQgJAShYRBSg5AQhIZBSA1CQhAaBiE1CAlBaBiE1CAkBKFhEFKDkBCEhkFI7WmE8zR5tLTd3+W2GIQQQkjN/vlpdCfq8yW0f46hR0/6af08UdmnVV/7zhP1m/aMXvf0+HRw5QD5QSg/COUHofwglN8TC6f7keT20yah2tEluEmDcKN7oJg29cLY17wsFtcKU93DBJXWr6XyL0Per19Lg+Dd18wsVe7A0m8P46HkTrs/nniL35kglB+E8oNQfhDKD0L5QSg/COUHofwglF8pVDu56y5gIDN1dZBN+S93H/1uVVyodxwswm63CJa+p8DcUv5O7vqO1xhM7V58sl2N/t50olff82Brnag31oHvmTB1qGw8hoeB3dQYC4NFi3dzyzM48FyUvkzN2uQ/YYvjzrwTsl1xLPnFYNkXtWzKPiubQVgNwnYGYTUI2xmE1SBsZxBWg7CdQVgNwnYGYTUI2xmE1SBsZxBWg9BLUVPFfuxl0rhoUhzBjBsXdcVL/X1zqO/mdbZ/sh3z1i6AmUdgGD58UheDfrwKfxwI/X6P1sYp7xrzedx/5AIYxGtvwJmrDUbc85OFcyshhBBCt/oPYeBqCuPPSLEAAAAASUVORK5CYII=" alt="logo">--}}
{{--                OnlineShop--}}
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create and account
                    </h1>
                    <form class="space-y-4 md:space-y-6" onsubmit ="return validateForm()" method="POST" action="{{route('register')}}">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name" required="">
                            <span id = "blankMsg" style="color:red"> </span>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                            <span id = "blankEmail" style="color:red"> </span>
                        </div>
                            <div>
                                <script>
                                    function validateForm() {

                                        var pw1 = document.getElementById("pswd1").value;
                                        var pw2 = document.getElementById("pswd2").value;
                                        var name = document.getElementById("name").value;
                                        var email = document.getElementById("email").value;



                                        if(name == "") {
                                            document.getElementById("blankMsg").innerHTML = "**Fill your name";
                                            return false;
                                        }


                                        if(name.length < 2) {
                                            document.getElementById("blankMsg").innerHTML = "**Not enough characters";
                                            return false;
                                        }


                                        if(!isNaN(name)){
                                            document.getElementById("blankMsg").innerHTML = "**Only characters are allowed";
                                            return false;
                                        }


                                        if(pw1 == "") {
                                            document.getElementById("message1").innerHTML = "**Fill the password please!";
                                            return false;
                                        }

                                        if(pw1.length < 8) {
                                            document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
                                            return false;
                                        }

                                        if(pw1 != pw2) {
                                            document.getElementById("message2").innerHTML = "**Passwords are not same";
                                            return false;
                                        }
                                    }
                                </script>
                                <div>
                                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                    <input type="password" name="pswd1" id="pswd1" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                    <span id = "message1" style="color:red"> </span>
                                </div>
                                <div>
                                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                                    <input type="password" name="pswd2" id="pswd2" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                    <span id = "message2" style="color:red"> </span>
                                </div>

                            </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit" style="background: #313131; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;" class="submit">Create an account</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="{{route('login')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
