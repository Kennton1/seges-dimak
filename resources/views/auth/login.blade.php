<x-guest-layout>
    <div class="bg-[#0e1628]/90 backdrop-blur-xl border border-slate-800 rounded-3xl p-8 sm:p-10 shadow-2xl text-center space-y-7">
        <!-- Logo Dimak -->
        <div class="flex flex-col items-center justify-center space-y-3">
            <div class="p-3 bg-white rounded-2xl shadow-md border border-slate-200/20 inline-block">
                <img src="/images/dimak-logo.png" alt="Dimak" class="w-48 max-w-[200px] h-auto object-contain mx-auto" />
            </div>
            <div class="pt-2 space-y-1">
                <h1 class="text-sm font-extrabold tracking-widest uppercase text-white">
                    Secretaría y Gerencia
                </h1>
                <p class="text-xs text-slate-400 font-medium">
                    Sistema de Auditoría & Flota Corporativa
                </p>
            </div>
        </div>

        <!-- Formulario de acceso directo público -->
        <form method="POST" action="{{ route('login') }}" class="pt-2">
            @csrf

            <button type="submit" 
                class="w-full inline-flex items-center justify-center gap-3 px-6 py-4 bg-[#0066b2] hover:bg-[#0077d1] active:bg-[#005596] text-white font-bold text-base tracking-wide rounded-2xl shadow-lg shadow-blue-600/30 hover:shadow-blue-600/50 hover:scale-[1.02] active:scale-[0.98] transition-all duration-200 cursor-pointer border border-blue-400/30 group">
                <span>Ingresar</span>
                <svg class="w-5 h-5 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </button>
        </form>

        <!-- Badge demostrativo -->
        <div class="pt-3 border-t border-slate-800/80 flex items-center justify-center">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                Acceso Público · Permisos de Administrador
            </span>
        </div>
    </div>
</x-guest-layout>
