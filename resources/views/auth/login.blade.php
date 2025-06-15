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
    <title>Login - Portal.com</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-gradient-to-b from-blue-50 to-white group/design-root overflow-x-hidden" style='font-family: "Be Vietnam Pro", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <div class="flex flex-1 justify-center items-center py-10">
          <div class="layout-content-container flex flex-col w-full max-w-md py-5 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-[#111718] tracking-tight text-3xl font-bold leading-tight text-center pb-3">Login to Portal.com</h2>
            <p class="text-[#111718] text-base font-normal leading-normal pb-3 text-center">
              Welcome back! Please enter your credentials to access your account.
            </p>
            <form method="POST" action="{{ route('login') }}" class="flex flex-col space-y-4">
  @csrf
  @if (session('status'))
    <div class="text-blue-600 text-center mb-2 font-semibold">{{ session('status') }}</div>
  @endif
  <div>
    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
    <input type="email" id="email" name="email" required autofocus
      class="mt-1 block w-full h-12 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
      placeholder="you@example.com" value="{{ old('email') }}" />
    @error('email')
      <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div>
    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
    <input type="password" id="password" name="password" required
      class="mt-1 block w-full h-12 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
      placeholder="********" />
    @error('password')
      <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="flex items-center">
    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" {{ old('remember') ? 'checked' : '' }} />
    <label for="remember" class="ml-2 block text-sm text-gray-700">Remember Me</label>
  </div>
  <button
    type="submit"
    class="flex items-center justify-center rounded-xl h-12 px-5 bg-[#00BFFF] text-white text-base font-bold leading-normal tracking-[0.015em] transition duration-300 hover:bg-[#009ACD]"
  >
    <span class="truncate">Login</span>
  </button>
</form>
            <p class="text-[#638688] text-sm font-normal leading-normal pt-3 text-center">
  Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 underline">Register here</a>.
</p>
<p class="text-[#638688] text-sm font-normal leading-normal pt-1 text-center">
  <a href="{{ route('password.request') }}" class="text-blue-500 underline">Forgot your password?</a>
</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
