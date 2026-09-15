<x-guest-layout>
    <div class="text-center py-6 space-y-6">
        <!-- Logo Dimak -->
        <div class="flex flex-col items-center justify-center space-y-2">
            <x-application-logo class="w-52 h-auto mx-auto drop-shadow-md" />
            <h2 class="text-xs font-bold text-gray-500 dark:text-gray-400 tracking-widest uppercase mt-2">
                Secretaría y Gerencia
            </h2>
        </div>

        <!-- Formulario de acceso directo público -->
        <form method="POST" action="{{ route('login') }}" class="pt-2">
            @csrf

            <button type="submit" 
                class="w-full inline-flex items-center justify-center gap-3 px-8 py-4 bg-[#0066b2] hover:bg-[#005596] active:bg-[#004780] text-white font-extrabold text-lg tracking-wider rounded-xl shadow-lg shadow-blue-500/20 hover:shadow-blue-500/40 hover:-translate-y-0.5 transition-all duration-200 cursor-pointer">
                <span>Ingresar</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </button>
        </form>

        <p class="text-[11px] text-gray-500 dark:text-gray-400 leading-tight">
            Acceso público demostrativo · Permisos de Administrador habilitados
        </p>
    </div>
</x-guest-layout>
