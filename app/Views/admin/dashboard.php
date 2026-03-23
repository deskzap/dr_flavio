<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-medical { background-color: #16697A; }
        .text-medical { color: #16697A; }
    </style>
</head>
<body class="bg-gray-100 flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-medical text-white flex flex-col">
        <div class="p-6">
            <h2 class="text-2xl font-bold">Painel Dr. Flávio</h2>
        </div>
        <nav class="flex-1 px-4 space-y-2">
            <a href="<?= base_url('admin') ?>" class="block py-2.5 px-4 rounded transition duration-200 bg-white bg-opacity-10">Dashboard</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:bg-opacity-10">Currículo e Bio</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:bg-opacity-10">Tratamentos e Exames</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-white hover:bg-opacity-10">Configurações</a>
        </nav>
        <div class="p-4 border-t border-blue-900 border-opacity-50">
            <a href="<?= base_url('admin/logout') ?>" class="block py-2 px-4 text-center rounded bg-red-600 hover:bg-red-700 transition">Sair</a>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-y-auto">
        <header class="bg-white shadow h-16 flex items-center justify-between px-6">
            <h1 class="text-xl font-semibold text-gray-800">Dashboard</h1>
            <div class="flex items-center">
                <span class="text-gray-600">Olá, <?= esc($user['name']) ?></span>
            </div>
        </header>
        
        <main class="flex-1 p-6">
            <div class="bg-white p-6 rounded shadow-sm border-l-4 border-blue-500 mb-6">
                <h3 class="text-lg font-bold text-gray-800">Seja bem-vindo ao seu novo painel!</h3>
                <p class="mt-2 text-gray-600">Utilize o menu lateral para gerenciar os conteúdos principais do seu site.</p>
            </div>
            
            <?php if(session()->getFlashdata('success')): ?>
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 shadow-sm rounded" role="alert">
                    <p><i class="ph-fill ph-check-circle mr-2"></i><?= esc(session()->getFlashdata('success')) ?></p>
                </div>
            <?php endif; ?>
            
            <?php if(session()->getFlashdata('error')): ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 shadow-sm rounded" role="alert">
                    <p><i class="ph-fill ph-warning-circle mr-2"></i><?= esc(session()->getFlashdata('error')) ?></p>
                </div>
            <?php endif; ?>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <div class="p-6 bg-white rounded shadow-sm flex flex-col justify-between border border-gray-100">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="p-4 bg-blue-100 text-blue-600 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Acessos Rápidos</p>
                            <p class="font-bold text-gray-700">Editar Perfil</p>
                        </div>
                    </div>
                </div>
                
                <div class="p-6 bg-white rounded shadow-sm flex flex-col justify-between border border-gray-100">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="p-4 bg-yellow-100 text-yellow-600 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Banco de Dados</p>
                            <p class="font-bold text-gray-700">Atualizar BD (Migrate)</p>
                        </div>
                    </div>
                    <a href="<?= base_url('admin/migrate') ?>" onclick="return confirm('Deseja realmente rodar a migração do banco de dados agora?');" class="block w-full text-center bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded transition duration-200">
                        Rodar Migração
                    </a>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
