<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TreatmentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // CIRURGIAS
            [
                'title'       => 'Cirurgia Refrativa a Laser para correção de miopia, astigmatismo e hipermetropia',
                'description' => 'Correção de grau com técnica a laser em aparelhos ultra-modernos alemães.',
                'category'    => 'cirurgia',
                'order_index' => 1
            ],
            [
                'title'       => 'Cirurgia de Vitrectomia posterior',
                'description' => 'Correção de Descolamentos de retina, maculopatias, retinopatia diabética e hemorragias vítreas.',
                'category'    => 'cirurgia',
                'order_index' => 2
            ],
            [
                'title'       => 'Cirurgia de catarata',
                'description' => 'Facoemulsificação tradicional, técnicas a laser e implante de lentes premium.',
                'category'    => 'cirurgia',
                'order_index' => 3
            ],
            [
                'title'       => 'Tratamento de condições de córnea',
                'description' => 'Crosslinking para ceratocone e PTK para leucomas corneanos.',
                'category'    => 'cirurgia',
                'order_index' => 4
            ],
            [
                'title'       => 'Remoção de pterígio',
                'description' => 'Procedimento com técnica de enxerto sem pontos (com cola).',
                'category'    => 'cirurgia',
                'order_index' => 5
            ],
            [
                'title'       => 'Capsulotomia Yag Laser',
                'description' => 'Tratamentos a laser: Capsulotomia anterior e posterior.',
                'category'    => 'cirurgia',
                'order_index' => 6
            ],
            [
                'title'       => 'Iridotomia a laser',
                'description' => 'Procedimento profilático ou de tratamento para alguns tipos de glaucoma.',
                'category'    => 'cirurgia',
                'order_index' => 7
            ],
            [
                'title'       => 'Fotocoagulação sublimiar laser',
                'description' => 'Tratamento a laser para maculopatias da retina.',
                'category'    => 'cirurgia',
                'order_index' => 8
            ],
            [
                'title'       => 'Tratamento completo de Retinopatia diabética',
                'description' => 'Acompanhamento e intervenções em pacientes diabéticos.',
                'category'    => 'cirurgia',
                'order_index' => 9
            ],
            [
                'title'       => 'Injeções intravítreas de medicações',
                'description' => 'Aplicação de Avastin, Eylia, Triancinolona acetonida, Ozurdex, Faricimab.',
                'category'    => 'cirurgia',
                'order_index' => 10
            ],
            [
                'title'       => 'Blefaroplastia',
                'description' => 'Cirurgia plástica das pálpebras, remoção de bolsas e excesso de pele.',
                'category'    => 'cirurgia',
                'order_index' => 11
            ],
            [
                'title'       => 'Laser para tratamento de doenças da retina',
                'description' => 'Fotocoagulação tradicional para diversas condições retinianas.',
                'category'    => 'cirurgia',
                'order_index' => 12
            ],
            // EXAMES
            [
                'title'       => 'Consulta Oftalmológica Completa',
                'description' => 'Avaliação geral da saúde dos seus olhos.',
                'category'    => 'exame',
                'order_index' => 1
            ],
            [
                'title'       => 'Aferição de grau de forma moderna',
                'description' => 'Avaliação de refração com e sem cicloplegia.',
                'category'    => 'exame',
                'order_index' => 2
            ],
            [
                'title'       => 'Laudos médicos detalhados com CID',
                'description' => 'Emissão de documentos e laudos precisos.',
                'category'    => 'exame',
                'order_index' => 3
            ],
            [
                'title'       => 'Mapeamento de Retina',
                'description' => 'Exame detalhado do fundo do olho.',
                'category'    => 'exame',
                'order_index' => 4
            ],
            [
                'title'       => 'Tonometria',
                'description' => 'Aferição da pressão intraocular.',
                'category'    => 'exame',
                'order_index' => 5
            ],
            [
                'title'       => 'Topografia de Córnea',
                'description' => 'Mapeamento topográfico computadorizado da superfície corneana.',
                'category'    => 'exame',
                'order_index' => 6
            ],
            [
                'title'       => 'Retinografia',
                'description' => 'Fotografia de alta resolução do fundo do olho.',
                'category'    => 'exame',
                'order_index' => 7
            ],
            [
                'title'       => 'Paquimetria de Córnea',
                'description' => 'Medição da espessura da córnea.',
                'category'    => 'exame',
                'order_index' => 8
            ],
            [
                'title'       => 'Biometria para Lentes Intraoculares',
                'description' => 'Cálculo essencial para precisão cirúrgica.',
                'category'    => 'exame',
                'order_index' => 9
            ],
            [
                'title'       => 'Gonioscopia',
                'description' => 'Exame do ângulo da câmara anterior do olho.',
                'category'    => 'exame',
                'order_index' => 10
            ],
            [
                'title'       => 'Teste de Visão de Cores (Ishihara)',
                'description' => 'Avaliação do daltonismo.',
                'category'    => 'exame',
                'order_index' => 11
            ],
            [
                'title'       => 'Pré operatórios para cirurgias refrativas',
                'description' => 'Conjunto de exames de altíssima precisão.',
                'category'    => 'exame',
                'order_index' => 12
            ],
            [
                'title'       => 'Teste do Olhinho',
                'description' => 'Avaliação obrigatória e preventiva em recém-nascidos.',
                'category'    => 'exame',
                'order_index' => 13
            ],
            [
                'title'       => 'Prescrição de óculos em crianças e adultos',
                'description' => 'Oftalmopediatria, incluindo pacientes não verbais.',
                'category'    => 'exame',
                'order_index' => 14
            ],
            [
                'title'       => 'Teste de dominância ocular',
                'description' => 'Exame importante em monovisão e esportes.',
                'category'    => 'exame',
                'order_index' => 15
            ]
        ];

        $this->db->table('treatments')->truncate();
        
        foreach ($data as $t) {
            $t['created_at'] = date('Y-m-d H:i:s');
            $t['updated_at'] = date('Y-m-d H:i:s');
            $this->db->table('treatments')->insert($t);
        }
    }
}
