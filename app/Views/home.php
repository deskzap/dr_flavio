<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($settings['site_title'] ?? 'Dr. Flávio Gusmão Trancoso - Oftalmologia') ?></title>
    
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/images/favicon.jpeg') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('assets/images/favicon.jpeg') ?>">

    <!-- Tipografia (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Icones Phosphor -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        medical: {
                            light: '#4B8FA3',
                            DEFAULT: '#16697A', // Azul petróleo
                            dark: '#0F4C5C',
                        },
                        accents: {
                            DEFAULT: '#48C9B0', // Verde-azulado sutil
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Accordion Animations */
        .accordion-content {
            transition: max-height 0.3s ease-in-out, padding 0.3s ease-in-out, opacity 0.3s ease-in-out;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
        }
        .accordion-content.active {
            max-height: 500px;
            opacity: 1;
            padding-bottom: 1.5rem;
        }
        .accordion-icon {
            transition: transform 0.3s ease-in-out;
        }
        .accordion-header.active .accordion-icon {
            transform: rotate(180deg);
        }

        /* Hero Background with nice overlay */
        .hero-bg {
            background-color: #16697A;
            background-image: linear-gradient(135deg, rgba(15,76,92,0.95) 0%, rgba(22,105,122,0.85) 100%), url('<?= base_url("assets/images/hero_placeholder.jpg") ?>');
            background-size: cover;
            background-position: center;
        }
    </style>
    
    <!-- Particles.js para a animação orgânica -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</head>
<body class="font-sans text-gray-800 antialiased bg-gray-50 selection:bg-medical selection:text-white">

    <!-- Navbar -->
    <nav class="fixed w-full bg-white bg-opacity-95 backdrop-blur-sm z-50 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <img src="<?= base_url('assets/images/favicon.jpeg') ?>" alt="Logo" class="h-10 w-10 mr-3 rounded-full shadow-sm hover:scale-105 transition-transform">
                    <span class="font-bold text-xl text-medical tracking-tight">Dr. Flávio Gusmão</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#inicio" class="text-sm font-medium text-gray-600 hover:text-medical transition">Início</a>
                    <a href="#sobre" class="text-sm font-medium text-gray-600 hover:text-medical transition">Sobre o Dr.</a>
                    <a href="#cirurgias" class="text-sm font-medium text-gray-600 hover:text-medical transition">Cirurgias</a>
                    <a href="#exames" class="text-sm font-medium text-gray-600 hover:text-medical transition">Exames</a>
                    <a href="<?= preg_match('/wa\.link/', $settings['whatsapp_number']) ? $settings['whatsapp_number'] : 'https://wa.me/55'.preg_replace('/[^0-9]/', '', $settings['whatsapp_number']) ?>" target="_blank" class="bg-medical text-white px-5 py-2.5 rounded-full text-sm font-medium hover:bg-medical-dark shadow-md transition-all hover:shadow-lg transform hover:-translate-y-0.5">Agendar Consulta</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="hero-bg relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:w-2/3">
                <p class="text-blue-200 font-semibold tracking-wide uppercase mb-3 text-sm flex items-center">
                    <i class="ph ph-eye mr-2 text-lg"></i> Excelência em Oftalmologia
                </p>
                <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-6">
                    Sua visão em mãos <span class="text-accents">especializadas</span>
                </h1>
                
                <p class="text-lg lg:text-xl text-gray-200 mb-6 max-w-2xl font-light">
                    Membro Titular da Associação Brasileira de Catarata e Cirurgia Refrativa (BRASCRS) e da Sociedade Brasileira de Retina e Vítreo (SBRV).
                </p>

                <div class="bg-white bg-opacity-10 backdrop-blur border border-white border-opacity-20 rounded-lg p-5 mb-8 max-w-3xl">
                    <p class="text-white font-medium mb-1"><i class="ph-fill ph-check-circle text-accents mr-1"></i> Especialista em Cirurgia de Catarata</p>
                    <p class="text-white font-medium mb-1"><i class="ph-fill ph-check-circle text-accents mr-1"></i> Especialista em Cirurgia Refrativa a Laser</p>
                    <p class="text-white font-medium"><i class="ph-fill ph-check-circle text-accents mr-1"></i> Especialista em Retina e Vítreo</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#sobre" class="bg-white text-medical px-8 py-3.5 rounded-full font-semibold text-center hover:bg-gray-100 transition shadow-lg inline-flex items-center justify-center">
                        Conheça o Dr. Flávio <i class="ph ph-arrow-right ml-2 text-xl"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 right-0 hidden lg:block opacity-20 pointer-events-none">
            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#ffffff" d="M38.8,-56.9C51.5,-45.5,64.1,-35.1,71.2,-21.3C78.3,-7.4,80,9.9,74.5,25C68.9,40.1,56.1,53.1,41.4,62.3C26.7,71.6,10.1,77.2,-5.7,76C-21.5,74.7,-36.5,66.6,-49.6,55.4C-62.7,44.2,-73.9,29.9,-78.3,13.7C-82.7,-2.4,-80.4,-20.4,-70.8,-33.5C-61.1,-46.6,-44.1,-55,-29.4,-59.5C-14.7,-64,-2.4,-64.7,10.6,-62.4C23.6,-60.1,36.5,-55,38.8,-56.9Z" transform="translate(100 100)" />
            </svg>
        </div>
    </section>

    <!-- Apresentação Rápida -->
    <section class="py-16 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Visão e Cuidado</h2>
                <p class="text-xl text-gray-600 font-light leading-relaxed">
                    Com mais de 10 anos de experiência médica em Oftalmologia, Dr. Flávio Gusmão Trancoso é referência no Espírito Santo em cirurgias de Catarata, Refrativa a laser e Retina.
                </p>
            </div>
        </div>
    </section>

    <!-- Cirurgias e Tratamentos (Sanfonas / Accordion) -->
    <section id="cirurgias" class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-medical font-semibold tracking-wider text-sm uppercase">Excelência Cirúrgica</span>
                <h2 class="text-3xl font-bold mt-2 text-gray-900">Tratamentos e Cirurgias Realizadas</h2>
                <div class="w-16 h-1 bg-accents mx-auto mt-4 rounded"></div>
            </div>

            <div class="space-y-4">
                <?php if(!empty($surgeries)): ?>
                    <?php foreach($surgeries as $s): ?>
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden cursor-pointer hover:shadow-md transition">
                            <div class="accordion-header p-5 flex justify-between items-center bg-white" onclick="toggleAccordion(this)">
                                <h3 class="font-semibold text-lg text-gray-800"><?= esc($s['title']) ?></h3>
                                <div class="w-8 h-8 rounded-full bg-blue-50 text-medical flex items-center justify-center shrink-0">
                                    <i class="ph ph-caret-down accordion-icon text-lg"></i>
                                </div>
                            </div>
                            <div class="accordion-content px-5">
                                <p class="text-gray-600 font-light pt-2 pb-1 border-t border-gray-50"><?= esc($s['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center text-gray-500">Nenhum procedimento cadastrado.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Exames Realizados (Sanfonas / Accordion) -->
    <section id="exames" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-medical font-semibold tracking-wider text-sm uppercase">Diagnóstico Preciso</span>
                <h2 class="text-3xl font-bold mt-2 text-gray-900">Exames Realizados</h2>
                <div class="w-16 h-1 bg-accents mx-auto mt-4 rounded"></div>
            </div>

            <div class="space-y-4">
                <?php if(!empty($exams)): ?>
                    <?php foreach($exams as $e): ?>
                        <div class="bg-gray-50 rounded-xl border border-gray-100 overflow-hidden cursor-pointer hover:bg-blue-50 transition">
                            <div class="accordion-header p-5 flex justify-between items-center" onclick="toggleAccordion(this)">
                                <h3 class="font-semibold text-lg text-medical-dark"><?= esc($e['title']) ?></h3>
                                <div class="w-8 h-8 rounded-full bg-white text-medical shadow-sm flex items-center justify-center shrink-0">
                                    <i class="ph ph-plus accordion-icon text-lg" data-icon="plus"></i>
                                </div>
                            </div>
                            <div class="accordion-content px-5">
                                <p class="text-gray-600 font-light pt-2 pb-1"><?= esc($e['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center text-gray-500">Nenhum exame cadastrado.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Sobre / Currículo -->
    <section id="sobre" class="py-20 bg-medical text-white relative overflow-hidden">
        <!-- Container das partículas orgânicas -->
        <div id="particles-sobre" class="absolute inset-0 z-0 opacity-50 mix-blend-screen pointer-events-none"></div>

        <!-- SVG Decorativo Original -->
        <div class="absolute top-0 right-0 opacity-10 pointer-events-none z-0">
            <svg width="600" height="600" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#ffffff" d="M47.7,-64.1C60.2,-55.8,67.6,-38.7,71.5,-21.5C75.3,-4.2,75.7,13.2,69.5,28.6C63.2,44,50.3,57.4,34.8,65.3C19.3,73.1,1.3,75.3,-14.8,71.4C-30.8,67.6,-44.9,57.7,-55.3,44.7C-65.7,31.7,-72.4,15.8,-73.4,-0.6C-74.4,-16.9,-69.6,-33.9,-58.5,-46.8C-47.4,-59.7,-30,-68.6,-13.1,-70.7C3.9,-72.8,24.8,-68.2,35.3,-72.4Z" transform="translate(100 100)" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pointer-events-none">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center pointer-events-auto">
                <!-- Foto do Doutor (Mockup / Espaço reservado, usa if para pegar do banco ou fallback vazio bonito) -->
                <div class="hidden lg:flex justify-center relative">
                    <div class="absolute inset-0 bg-accents transform translate-x-4 translate-y-4 rounded-2xl opacity-50"></div>
                    <?php if(!empty($profile['profile_image_path'])): ?>
                        <img src="<?= base_url('uploads/' . $profile['profile_image_path']) ?>" alt="Dr. Flávio Gusmão" class="rounded-2xl shadow-2xl relative z-10 w-full max-w-md object-cover">
                    <?php else: ?>
                        <!-- Fallback se não subir foto: um espaco elegante texturizado -->
                        <div class="rounded-2xl shadow-2xl relative z-10 w-full max-w-md h-96 bg-medical-dark flex items-center justify-center border-2 border-white border-opacity-20 text-blue-200">
                            <i class="ph-fill ph-user text-8xl opacity-50"></i>
                        </div>
                    <?php endif; ?>
                </div>

                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6">Dr. Flávio Gusmão Trancoso</h2>
                    <p class="text-blue-100 mb-8 italic">"No Centro Brasileiro da Visão, em Brasília, o Dr. Flávio realizou fellow. Realizou milhares de procedimentos, cirurgias oftalmológicas, exames e atendimentos."</p>
                    
                    <ul class="space-y-4 text-sm md:text-base font-light font-sans text-gray-100 list-none p-0">
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0"></i>
                            <span>Graduação em Medicina em 2016</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0"></i>
                            <span>Realizou Residência Médica em Oftalmologia no HEVV (credenciada por MEC e CBO) entre 2017 e 2020</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0"></i>
                            <span>Fellowship de Retina e Vítreo Clínica e Cirúrgica no CBV Hospital de Olhos, em Brasília-DF.</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0"></i>
                            <span>Título de Especialista pelo CBO, AMB e Ministério da Educação e Cultura (MEC).</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0"></i>
                            <span>Membro Titular da BRASCRS e da SBRV.</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0"></i>
                            <span>Especialização em Cirurgia Refrativa a laser.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer / Contato -->
    <footer id="contato" class="bg-gray-900 text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12 border-b border-gray-800 pb-12">
                
                <div>
                    <div class="flex items-center mb-6">
                        <img src="<?= base_url('assets/images/favicon.jpeg') ?>" alt="Logo" class="h-12 w-12 mr-3 rounded-full opacity-90">
                        <span class="font-bold text-2xl tracking-tight text-white">Dr. Flávio Gusmão</span>
                    </div>
                    <p class="text-gray-400 font-light text-sm mb-6 leading-relaxed">
                        Compromisso com a excelência técnica e o cuidado humano, buscando sempre proporcionar o melhor em saúde ocular, focado na segurança de seus procedimentos cirúrgicos e na satisfação plena dos pacientes.
                    </p>
                    <a href="<?= preg_match('/wa\.link/', $settings['whatsapp_number']) ? $settings['whatsapp_number'] : 'https://wa.me/55'.preg_replace('/[^0-9]/', '', $settings['whatsapp_number']) ?>" target="_blank" class="inline-flex items-center text-sm font-semibold bg-[#25D366] text-white px-5 py-2.5 rounded hover:bg-green-600 transition shadow-lg">
                        <i class="ph-fill ph-whatsapp-logo text-xl mr-2"></i> Chamar no WhatsApp
                    </a>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6 border-l-2 border-accents pl-3">Contatos</h4>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-center">
                            <i class="ph-fill ph-envelope-simple text-accents text-xl mr-3"></i>
                            <?= esc($settings['email_contact'] ?? 'contato.clinicafgt@gmail.com') ?>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-map-pin text-accents text-xl mr-3 mt-1 shrink-0"></i>
                            <div>
                                <span class="block text-white font-medium mb-1">Vitória - ES</span>
                                <?= esc($settings['address_vitoria'] ?? 'R. Aluysio Simões, 134 – Bento Ferreira, 29050-632') ?>
                            </div>
                        </li>
                        <li class="flex items-start mt-4">
                            <i class="ph-fill ph-map-pin text-accents text-xl mr-3 mt-1 shrink-0"></i>
                            <div>
                                <span class="block text-white font-medium mb-1">Aracruz - ES</span>
                                <?= esc($settings['address_aracruz'] ?? 'Rua Fyori Terci, 174 – Vila Rica, 29194-176') ?>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6 border-l-2 border-accents pl-3">Mapa do Site</h4>
                    <ul class="space-y-2 text-gray-400 font-light text-sm">
                        <li><a href="#inicio" class="hover:text-white transition">Início</a></li>
                        <li><a href="#sobre" class="hover:text-white transition">Currículo e Apresentação</a></li>
                        <li><a href="#cirurgias" class="hover:text-white transition">Procedimentos e Cirurgias</a></li>
                        <li><a href="#exames" class="hover:text-white transition">Exames Realizados</a></li>
                        <li><a href="<?= base_url('admin/login') ?>" class="hover:text-white transition opacity-50 mt-4 inline-block">Área Restrita (Admin)</a></li>
                    </ul>
                </div>
            </div>

            <div class="text-center text-gray-500 text-sm font-light">
                <p>&copy; <?= date('Y') ?> Dr. Flávio Gusmão Trancoso. Todos os direitos reservados.</p>
                <p class="mt-1 opacity-75">Desenvolvido por AD Estúdio.</p>
            </div>
        </div>
    </footer>

    <!-- Script de Sanfona / Accordion e Particles -->
    <script>
        function toggleAccordion(element) {
            // Find content
            const content = element.nextElementSibling;
            
            // Toggle active classes
            element.classList.toggle('active');
            content.classList.toggle('active');

            // Find Plus/Minus Icon Option
            const icon = element.querySelector('.accordion-icon');
            if(icon && icon.hasAttribute('data-icon')) {
                if(element.classList.contains('active')) {
                    icon.classList.remove('ph-plus');
                    icon.classList.add('ph-minus');
                } else {
                    icon.classList.remove('ph-minus');
                    icon.classList.add('ph-plus');
                }
            }
        }

        // Inicialização do Particles.js (Animação Orgânica de Nós Interativos / Rede Neural da Visão)
        document.addEventListener('DOMContentLoaded', function() {
            if(document.getElementById('particles-sobre')) {
                particlesJS("particles-sobre", {
                    "particles": {
                        "number": {
                            "value": 60,
                            "density": { "enable": true, "value_area": 800 }
                        },
                        "color": { "value": ["#ffffff", "#48C9B0"] },
                        "shape": { "type": "circle" },
                        "opacity": { 
                            "value": 0.6, 
                            "random": true,
                            "anim": { "enable": true, "speed": 1, "opacity_min": 0.1, "sync": false }
                        },
                        "size": { 
                            "value": 4, 
                            "random": true,
                            "anim": { "enable": true, "speed": 2, "size_min": 0.5, "sync": false }
                        },
                        "line_linked": {
                            "enable": true,
                            "distance": 150,
                            "color": "#ffffff",
                            "opacity": 0.3,
                            "width": 1.2
                        },
                        "move": {
                            "enable": true,
                            "speed": 1.5,
                            "direction": "none",
                            "random": true,
                            "straight": false,
                            "out_mode": "out",
                            "bounce": false,
                        }
                    },
                    "interactivity": {
                        "detect_on": "window", // Detecta na janela inteira para não ser bloqueado por z-index
                        "events": {
                            "onhover": { "enable": true, "mode": "grab" },
                            "onclick": { "enable": true, "mode": "push" },
                            "resize": true
                        },
                        "modes": {
                            "grab": { "distance": 250, "line_linked": { "opacity": 0.8 } },
                            "push": { "particles_nb": 4 }
                        }
                    },
                    "retina_detect": true
                });
            }
        });
    </script>
</body>
</html>
