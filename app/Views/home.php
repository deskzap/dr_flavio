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
                            light: '#1C2541', // Deep Blue (Cards)
                            DEFAULT: '#0B132B', // Dark Blue (Sections)
                            dark: '#060B19', // Very Dark Blue (Background)
                        },
                        accents: {
                            DEFAULT: '#48C9B0', // Cyan
                            light: '#A3E4D7'
                        }
                    },
                    borderRadius: {
                        '4xl': '2rem',
                        '5xl': '3rem',
                        '6xl': '4rem',
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
            max-height: 600px;
            opacity: 1;
            padding-bottom: 1.5rem;
        }
        .accordion-icon {
            transition: transform 0.3s ease-in-out;
        }
        .accordion-header.active .accordion-icon {
            transform: rotate(180deg);
        }

        /* Hero Background */
        .hero-bg {
            background-color: #060B19;
            background-image: linear-gradient(135deg, rgba(6,11,25,0.95) 0%, rgba(11,19,43,0.85) 100%), url('<?= base_url("uploads/hero_bg.png") ?>');
            background-size: cover;
            background-position: center;
        }

        /* Retina Banner */
        .retina-bg {
            background-image: linear-gradient(to right, rgba(11,19,43,0.95), rgba(6,11,25,0.7)), url('<?= base_url("uploads/retina_bg.png") ?>');
            background-size: cover;
            background-position: center;
        }
    </style>
    
    <!-- Particles.js para a animação orgânica -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</head>
<body class="font-sans text-gray-200 antialiased bg-medical-dark selection:bg-accents selection:text-medical-dark">

    <!-- Navbar -->
    <nav class="fixed w-full bg-medical bg-opacity-90 backdrop-blur-md z-50 border-b border-medical-light transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <img src="<?= base_url('assets/images/favicon.jpeg') ?>" alt="Logo" class="h-10 w-10 mr-3 rounded-full shadow-sm hover:scale-105 transition-transform grayscale">
                    <span class="font-bold text-xl text-white tracking-tight">Dr. Flávio Gusmão</span>
                </div>
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#inicio" class="text-sm font-medium text-gray-300 hover:text-white transition">Início</a>
                    <a href="#sobre" class="text-sm font-medium text-gray-300 hover:text-white transition">Dr. Flávio</a>
                    <a href="#especialidades" class="text-sm font-medium text-gray-300 hover:text-white transition">Especialidades</a>
                    <a href="#cirurgias" class="text-sm font-medium text-gray-300 hover:text-white transition">Cirurgias</a>
                    <a href="#exames" class="text-sm font-medium text-gray-300 hover:text-white transition">Exames</a>
                    <a href="<?= preg_match('/wa\.link/', $settings['whatsapp_number']) ? $settings['whatsapp_number'] : 'https://wa.me/55'.preg_replace('/[^0-9]/', '', $settings['whatsapp_number']) ?>" target="_blank" class="bg-accents text-medical-dark px-6 py-2.5 rounded-full text-sm font-bold hover:bg-white transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">Agendar Consulta</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section (Cantos Curvos) -->
    <section id="inicio" class="hero-bg relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden text-white rounded-b-5xl lg:rounded-b-6xl border-b border-medical-light shadow-2xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:w-2/3">
                <p class="text-accents font-semibold tracking-wide uppercase mb-3 text-sm flex items-center">
                    <i class="ph ph-eye mr-2 text-lg"></i> Excelência em Oftalmologia
                </p>
                <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-6 text-white">
                    Sua visão em mãos <span class="text-accents">especializadas</span>
                </h1>
                
                <p class="text-lg lg:text-xl text-gray-300 mb-6 max-w-2xl font-light">
                    Membro Titular da Associação Brasileira de Catarata e Cirurgia Refrativa (BRASCRS) e da Sociedade Brasileira de Retina e Vítreo (SBRV).
                </p>

                <div class="bg-medical bg-opacity-40 backdrop-blur-md border border-medical-light rounded-3xl p-6 mb-8 max-w-3xl shadow-xl">
                    <p class="text-gray-100 font-medium mb-2"><i class="ph-fill ph-check-circle text-accents mr-2"></i> Especialista em Cirurgia de Catarata</p>
                    <p class="text-gray-100 font-medium mb-2"><i class="ph-fill ph-check-circle text-accents mr-2"></i> Especialista em Cirurgia Refrativa a Laser</p>
                    <p class="text-gray-100 font-medium"><i class="ph-fill ph-check-circle text-accents mr-2"></i> Especialista em Retina e Vítreo</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#sobre" class="bg-transparent border-2 border-accents text-accents hover:bg-accents hover:text-medical-dark px-8 py-3.5 rounded-full font-semibold text-center transition-all inline-flex items-center justify-center">
                        Conheça o Dr. Flávio <i class="ph ph-arrow-down ml-2 text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Apresentação Clínica / Tratamento Premium -->
    <section class="py-20 bg-medical-dark relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="rounded-4xl overflow-hidden border border-medical-light shadow-2xl relative group">
                    <div class="absolute inset-0 bg-medical-dark opacity-20 group-hover:opacity-0 transition duration-500"></div>
                    <img src="<?= base_url('uploads/cirurgias.png') ?>" alt="Laser Oftalmológico Premium" class="w-full h-auto object-cover transform group-hover:scale-105 transition duration-700">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-white mb-6">Tratamento Premium e Atualizado</h2>
                    <p class="text-lg md:text-xl text-gray-400 font-light leading-relaxed">
                        Com mais de 10 anos de experiência médica em Oftalmologia, Dr. Flávio Gusmão Trancoso é referência no Espírito Santo em cirurgias de Catarata, Refrativa a laser e Retina.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre / Currículo (Particles e Fundo Curvo) -->
    <section id="sobre" class="py-24 bg-medical text-white relative overflow-hidden rounded-t-5xl lg:rounded-t-6xl shadow-2xl border border-medical-light">
        <!-- Container das partículas orgânicas -->
        <div id="particles-sobre" class="absolute inset-0 z-0 opacity-40 mix-blend-screen pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pointer-events-none">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center pointer-events-auto">
                
                <div class="hidden lg:flex justify-center relative">
                    <div class="absolute inset-0 bg-accents transform translate-x-4 translate-y-4 rounded-4xl opacity-20 blur-sm"></div>
                    <?php if(!empty($profile['profile_image_path'])): ?>
                        <img src="<?= base_url('uploads/' . $profile['profile_image_path']) ?>" alt="Dr. Flávio Gusmão" class="rounded-4xl shadow-2xl relative z-10 w-full max-w-md object-cover border-2 border-medical-light">
                    <?php else: ?>
                        <div class="rounded-4xl shadow-2xl relative z-10 w-full max-w-md h-96 bg-medical-dark flex items-center justify-center border-2 border-medical-light text-medical-light">
                            <i class="ph-fill ph-user text-8xl opacity-50"></i>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="bg-medical-dark bg-opacity-80 p-8 rounded-4xl border border-medical-light backdrop-blur-md shadow-2xl">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-4 text-white">Dr. Flávio Gusmão Trancoso</h2>
                    <p class="text-accents mb-8 font-medium">CRM/ES 12345 | RQE 6789</p>
                    
                    <ul class="space-y-4 text-sm md:text-base font-light text-gray-200">
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0 text-xl"></i>
                            <span>Graduação em Medicina em 2016.</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0 text-xl"></i>
                            <span>Residência Médica em Oftalmologia no HEVV (credenciada por MEC e CBO) entre 2017 e 2020.</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0 text-xl"></i>
                            <span>Fellowship de Retina e Vítreo Clínica e Cirúrgica no CBV Hospital de Olhos, em Brasília-DF.</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0 text-xl"></i>
                            <span>Título de Especialista pelo Conselho Brasileiro de Oftalmologia (CBO).</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0 text-xl"></i>
                            <span>Título de Especialista pela Associação Médica Brasileira (AMB).</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0 text-xl"></i>
                            <span>Título de Especialista pelo Ministério da Educação e Cultura (MEC).</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0 text-xl"></i>
                            <span>Membro Titular da BRASCRS (Associação Brasileira de Catarata e Cirurgia Refrativa).</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0 text-xl"></i>
                            <span>Membro titular da SBRV (Sociedade Brasileira de Retina e Vitreo).</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-check-circle text-accents mt-1 mr-3 shrink-0 text-xl"></i>
                            <span>Especialização em Cirurgia Refrativa a laser.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Especialidades / Áreas de Foco -->
    <section id="especialidades" class="py-24 bg-medical-dark relative overflow-hidden rounded-b-5xl lg:rounded-b-6xl border-b border-medical-light shadow-2xl z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center flex-col-reverse md:flex-row">
                <div class="order-2 md:order-1">
                    <span class="text-accents font-semibold tracking-wider text-sm uppercase bg-medical-light bg-opacity-30 px-4 py-1.5 rounded-full border border-medical-light">Saúde Ocular</span>
                    <h2 class="text-3xl font-bold mt-6 text-white mb-8">Especialidades e Cuidados Oculares</h2>
                    
                    <ul class="space-y-4 text-sm md:text-base font-light text-gray-300">
                        <li class="bg-medical bg-opacity-30 border border-medical-light border-opacity-30 rounded-2xl p-5 flex items-center hover:bg-medical-light transition shadow-lg">
                            <div class="w-12 h-12 rounded-full bg-medical text-accents flex items-center justify-center shrink-0 mr-4 border border-medical-light">
                                <i class="ph-fill ph-eye px-1 text-2xl"></i>
                            </div>
                            <span class="font-medium text-white">Dermatocalaze e excesso de pele nas pálpebras</span>
                        </li>
                        <li class="bg-medical bg-opacity-30 border border-medical-light border-opacity-30 rounded-2xl p-5 flex items-center hover:bg-medical-light transition shadow-lg">
                            <div class="w-12 h-12 rounded-full bg-medical text-accents flex items-center justify-center shrink-0 mr-4 border border-medical-light">
                                <i class="ph-fill ph-target px-1 text-2xl"></i>
                            </div>
                            <span class="font-medium text-white">Correção de grau ocular com Cirurgia Refrativa a Laser</span>
                        </li>
                        <li class="bg-medical bg-opacity-30 border border-medical-light border-opacity-30 rounded-2xl p-5 flex items-center hover:bg-medical-light transition shadow-lg">
                            <div class="w-12 h-12 rounded-full bg-medical text-accents flex items-center justify-center shrink-0 mr-4 border border-medical-light">
                                <i class="ph-fill ph-sparkle px-1 text-2xl"></i>
                            </div>
                            <span class="font-medium text-white">Tratamentos avançados da Retina e Vítreo</span>
                        </li>
                        <li class="bg-medical bg-opacity-30 border border-medical-light border-opacity-30 rounded-2xl p-5 flex items-center hover:bg-medical-light transition shadow-lg">
                            <div class="w-12 h-12 rounded-full bg-medical text-accents flex items-center justify-center shrink-0 mr-4 border border-medical-light">
                                <i class="ph-fill ph-drop px-1 text-2xl"></i>
                            </div>
                            <span class="font-medium text-white">Cirurgia de Catarata Premium</span>
                        </li>
                    </ul>
                </div>
                <div class="order-1 md:order-2 rounded-4xl overflow-hidden border border-medical-light shadow-2xl relative group">
                    <img src="<?= base_url('uploads/doencas.png') ?>" alt="Especialidades Oftalmológicas" class="w-full h-auto object-cover transform group-hover:scale-110 transition duration-700">
                </div>
            </div>
        </div>
    </section>

    <!-- Cirurgias Realizadas (Retina BG com Accordions Curvos) -->
    <section id="cirurgias" class="py-24 bg-medical retina-bg relative shadow-2xl -mt-10 z-0">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
            <div class="text-center mb-16">
                <span class="text-accents font-semibold tracking-wider text-sm uppercase bg-medical-dark bg-opacity-80 px-4 py-1.5 rounded-full border border-medical-light">Procedimentos</span>
                <h2 class="text-3xl font-bold mt-6 text-white">Cirurgias Realizadas</h2>
            </div>

            <div class="space-y-4">
                <?php if(!empty($surgeries)): ?>
                    <?php foreach($surgeries as $s): ?>
                        <div class="bg-medical bg-opacity-95 backdrop-blur-md rounded-3xl border border-medical-light border-opacity-50 overflow-hidden cursor-pointer hover:bg-medical-light transition shadow-xl">
                            <div class="accordion-header p-6 flex justify-between items-center" onclick="toggleAccordion(this)">
                                <h3 class="font-semibold text-lg text-white"><?= esc($s['title']) ?></h3>
                                <div class="w-10 h-10 rounded-full bg-medical-dark text-accents flex items-center justify-center shrink-0 border border-medical-light border-opacity-50">
                                    <i class="ph ph-caret-down accordion-icon text-xl"></i>
                                </div>
                            </div>
                            <div class="accordion-content px-6 bg-medical-dark bg-opacity-50">
                                <p class="text-gray-300 font-light pt-4 pb-2 border-t border-medical-light border-opacity-30"><?= esc($s['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center text-gray-500">Nenhum procedimento cadastrado.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Exames Realizados -->
    <section id="exames" class="py-24 bg-medical-dark border-b border-medical-light rounded-b-5xl lg:rounded-b-6xl relative z-10 shadow-2xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <div class="lg:col-span-4 lg:sticky lg:top-32">
                    <span class="text-accents font-semibold tracking-wider text-sm uppercase bg-medical px-4 py-1.5 rounded-full border border-medical-light">Diagnóstico Avançado</span>
                    <h2 class="text-3xl font-bold mt-6 text-white mb-6">Exames Realizados</h2>
                    <p class="text-gray-400 font-light mb-10">Equipamentos de alta tecnologia que garantem a segurança e precisão em todos os diagnósticos dos nossos pacientes.</p>
                    
                    <div class="rounded-4xl overflow-hidden border border-medical-light shadow-2xl relative group hidden sm:block">
                        <img src="<?= base_url('uploads/exames.png') ?>" alt="Lentes Oftalmológicas" class="w-full h-auto object-cover transform group-hover:scale-105 transition duration-700">
                    </div>
                </div>

                <div class="lg:col-span-8 space-y-4">
                    <?php if(!empty($exams)): ?>
                        <?php foreach($exams as $e): ?>
                            <div class="bg-medical rounded-3xl border border-medical-light overflow-hidden cursor-pointer hover:bg-medical-light transition shadow-lg">
                                <div class="accordion-header p-5 flex justify-between items-center" onclick="toggleAccordion(this)">
                                    <h3 class="font-medium text-lg text-white"><?= esc($e['title']) ?></h3>
                                    <div class="w-8 h-8 rounded-full bg-medical-dark text-white flex items-center justify-center shrink-0 border border-medical-light">
                                        <i class="ph ph-plus accordion-icon text-lg" data-icon="plus"></i>
                                    </div>
                                </div>
                                <div class="accordion-content px-5 bg-medical-dark bg-opacity-30">
                                    <p class="text-gray-400 font-light pt-4 pb-2 border-t border-medical-light border-opacity-30"><?= esc($e['description']) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-center text-gray-500">Nenhum exame cadastrado.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer / Contato (Dark UI Arredondado) -->
    <footer id="contato" class="bg-medical-dark text-white pt-20 pb-8 rounded-t-5xl lg:rounded-t-6xl mt-4 mx-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12 border-b border-medical-light pb-12">
                
                <div>
                    <div class="flex items-center mb-6">
                        <img src="<?= base_url('assets/images/favicon.jpeg') ?>" alt="Logo" class="h-12 w-12 mr-3 rounded-full opacity-90 grayscale">
                        <span class="font-bold text-2xl tracking-tight text-white">Dr. Flávio Gusmão</span>
                    </div>
                    <p class="text-gray-400 font-light text-sm mb-6 leading-relaxed">
                        Compromisso com a excelência técnica e o cuidado humano, focado na segurança de seus procedimentos cirúrgicos e na satisfação plena dos pacientes.
                    </p>
                    <a href="<?= preg_match('/wa\.link/', $settings['whatsapp_number']) ? $settings['whatsapp_number'] : 'https://wa.me/55'.preg_replace('/[^0-9]/', '', $settings['whatsapp_number']) ?>" target="_blank" class="inline-flex items-center text-sm font-bold bg-[#25D366] text-white px-6 py-3 rounded-full hover:bg-green-500 transition shadow-lg">
                        <i class="ph-fill ph-whatsapp-logo text-2xl mr-2"></i> Agendar pelo WhatsApp
                    </a>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6 border-l-2 border-accents pl-3">Contatos</h4>
                    <ul class="space-y-4 text-gray-300 font-light">
                        <li class="flex items-center">
                            <i class="ph-fill ph-envelope-simple text-accents text-xl mr-3 bg-medical-light p-2 rounded-full"></i>
                            <a href="mailto:<?= esc($settings['email_contact'] ?? 'contato.clinicafgt@gmail.com') ?>" class="hover:text-accents transition"><?= esc($settings['email_contact'] ?? 'contato.clinicafgt@gmail.com') ?></a>
                        </li>
                        <li class="flex items-start">
                            <i class="ph-fill ph-map-pin text-accents text-xl mr-3 mt-1 shrink-0 bg-medical-light p-2 rounded-full"></i>
                            <div>
                                <span class="block text-white font-medium mb-1">Vitória - ES</span>
                                <?= esc($settings['address_vitoria'] ?? 'R. Aluysio Simões, 134 – Bento Ferreira, 29050-632') ?>
                            </div>
                        </li>
                        <li class="flex items-start mt-4">
                            <i class="ph-fill ph-map-pin text-accents text-xl mr-3 mt-1 shrink-0 bg-medical-light p-2 rounded-full"></i>
                            <div>
                                <span class="block text-white font-medium mb-1">Aracruz - ES</span>
                                <?= esc($settings['address_aracruz'] ?? 'Rua Fyori Terci, 174 – Vila Rica, 29194-176') ?>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6 border-l-2 border-accents pl-3">Links Rápidos</h4>
                    <ul class="space-y-3 text-gray-400 font-light text-sm">
                        <li><a href="#inicio" class="hover:text-accents transition flex items-center"><i class="ph ph-caret-right mr-2"></i> Início</a></li>
                        <li><a href="#sobre" class="hover:text-accents transition flex items-center"><i class="ph ph-caret-right mr-2"></i> O Doutor</a></li>
                        <li><a href="#especialidades" class="hover:text-accents transition flex items-center"><i class="ph ph-caret-right mr-2"></i> Especialidades</a></li>
                        <li><a href="#cirurgias" class="hover:text-accents transition flex items-center"><i class="ph ph-caret-right mr-2"></i> Cirurgias</a></li>
                        <li><a href="#exames" class="hover:text-accents transition flex items-center"><i class="ph ph-caret-right mr-2"></i> Exames</a></li>
                        <li><a href="<?= base_url('admin/login') ?>" class="hover:text-accents transition text-medical-light font-medium mt-6 inline-flex items-center"><i class="ph ph-lock mr-2 text-lg"></i> Área Restrita</a></li>
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
                            "value": 50,
                            "density": { "enable": true, "value_area": 800 }
                        },
                        "color": { "value": ["#ffffff", "#48C9B0", "#A3E4D7"] },
                        "shape": { "type": "circle" },
                        "opacity": { 
                            "value": 0.4, 
                            "random": true,
                            "anim": { "enable": true, "speed": 1, "opacity_min": 0.1, "sync": false }
                        },
                        "size": { 
                            "value": 3, 
                            "random": true,
                            "anim": { "enable": true, "speed": 2, "size_min": 0.5, "sync": false }
                        },
                        "line_linked": {
                            "enable": true,
                            "distance": 180,
                            "color": "#48C9B0",
                            "opacity": 0.25,
                            "width": 1.5
                        },
                        "move": {
                            "enable": true,
                            "speed": 1.2,
                            "direction": "none",
                            "random": true,
                            "straight": false,
                            "out_mode": "out",
                            "bounce": false,
                        }
                    },
                    "interactivity": {
                        "detect_on": "window", // Detecta na janela inteira
                        "events": {
                            "onhover": { "enable": true, "mode": "grab" },
                            "onclick": { "enable": true, "mode": "push" },
                            "resize": true
                        },
                        "modes": {
                            "grab": { "distance": 250, "line_linked": { "opacity": 0.8, "color": "#A3E4D7" } },
                            "push": { "particles_nb": 3 }
                        }
                    },
                    "retina_detect": true
                });
            }
        });
    </script>
</body>
</html>
