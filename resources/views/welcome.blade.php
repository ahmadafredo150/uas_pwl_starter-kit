<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Be+Vietnam+Pro:wght@400;500;700;900&amp;family=Noto+Sans:wght@400;500;700;900"
    />
    <title>Welcome to Portal.com</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-gradient-to-b from-blue-50 to-white group/design-root overflow-x-hidden" style='font-family: "Be Vietnam Pro", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <div class="flex flex-1 justify-center items-center py-10">
          <div class="layout-content-container flex flex-col w-full max-w-lg py-5 bg-white rounded-lg shadow-lg p-8">
            <div class="bg-center bg-no-repeat bg-cover h-64 rounded-lg mb-5" style='background-image: url("https://cdn.usegalileo.ai/sdxl10/d26b1aa9-5d4a-4ae4-8aed-183e876fa7dd.png");'></div>
            <h2 class="text-[#111718] tracking-tight text-3xl font-bold leading-tight text-center pb-3">Welcome to Portal.com</h2>
            <p class="text-[#111718] text-base font-normal leading-normal pb-3 text-center">
              Your gateway to unlimited news, insights, and information. No paywalls, no ads, just pure content.
            </p>
            <div class="flex flex-col space-y-3">
  @guest
    <a href="{{ route('login') }}"
      class="flex items-center justify-center rounded-xl h-12 px-5 bg-[#00BFFF] text-white text-base font-bold leading-normal tracking-[0.015em] transition duration-300 hover:bg-[#009ACD]">
      <span class="truncate">Login</span>
    </a>
    <a href="{{ route('register') }}"
      class="flex items-center justify-center rounded-xl h-12 px-5 bg-[#f0f4f4] text-[#111718] text-base font-bold leading-normal tracking-[0.015em] transition duration-300 hover:bg-[#e0e7e7]">
      <span class="truncate">Register</span>
    </a>
  @else
    <a href="{{ route('dashboard') }}"
      class="flex items-center justify-center rounded-xl h-12 px-5 bg-[#00BFFF] text-white text-base font-bold leading-normal tracking-[0.015em] transition duration-300 hover:bg-[#009ACD]">
      <span class="truncate">Dashboard</span>
    </a>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit"
        class="flex items-center justify-center rounded-xl h-12 px-5 bg-[#f0f4f4] text-[#111718] text-base font-bold leading-normal tracking-[0.015em] transition duration-300 hover:bg-[#e0e7e7]">
        <span class="truncate">Logout</span>
      </button>
    </form>
  @endguest
</div>
            <p class="text-[#638688] text-sm font-normal leading-normal pt-3 text-center underline">
              By continuing, you agree to our Privacy Policy and Terms of Service.
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
