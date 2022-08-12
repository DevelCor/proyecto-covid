<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
{{--    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">--}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="flex py-5 bg-indigo-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2xl font-bold"> Alcaldia SC </p>
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            @if(auth()->check())
                <a>
                    <i class="fa-solid fa-bell"></i>
                </a>
                <li class="mx-6">
                    <p>Hola, {{ auth()->user()->first_name  }} </p>
                </li>
                <li class="mx-6">
                    <a href="{{ route('login.destroy')  }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700"> Cerrar Sesion </a>
                </li>
            @else
                <li class="mx-6">
                    <a href="{{ route('login.index')  }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700"> Iniciar Sesion </a>
                </li>
                <li>
                    <a href="{{ route('register.index')  }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700"> Registrarse </a>
                </li>
            @endif
        </ul>
    </nav>
    @yield('content')
</body>
</html>