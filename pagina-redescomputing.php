<?php
/**
 * Template Name: Página Redes e Computing
 * Description: Página personalizada para página Redes e Computing da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Redes estruturadas e soluções de computing: A conectividade e eficiência que a sua empresa precisa',
  'description' => 'Desde a conceção até à implementação, oferecemos soluções robustas e escaláveis que garantem a continuidade operacional e a segurança das infraestruturas de TI.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-redes/redesimage1.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-redes/redesimage2.png',
  'cta_primary' => [
    'url' => '#',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#',
    'label' => 'Fale com um Especialista',
  ],
  'reverse' => false,
  'content_heading' => 'Conectividade e segurança para empresas modernas',
  'content_text' => 'Na Dualinfor, compreendemos que uma infraestrutura de TI sólida é a base de qualquer negócio. As nossas soluções de Redes Estruturadas & Computing foram desenhadas para oferecer alta performance, escalabilidade e segurança, garantindo que a sua empresa esteja sempre preparada para crescer.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-redes/redesimage3.png',
));

?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher a Dualinfor para redes e computing?',
  'subtitle' => 'As nossas soluções são personalizadas para atender às necessidades específicas de empresas de diferentes tamanhos e setores. Trabalhamos lado a lado consigo para garantir que a sua infraestrutura está sempre à altura dos desafios do mercado.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-redes/icone1.svg',
      'title' => 'Alta Performance',
      'items' => array(
        'Redes com velocidades que suportam até 10 Gbps, garantindo um desempenho ideal para grandes volumes de dados.',
        'Conexões estáveis para evitar interrupções nas operações diárias.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-redes/icone2.svg',
      'title' => 'Escalabilidade Garantida',
      'items' => array(
        'Estruturas modulares que permitem crescimento sem necessidade de grandes atualizações.',
        'Preparado para suportar novas tecnologias como IoT e computação em cloud.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-redes/icone3.svg',
      'title' => 'Segurança Avançada',
      'items' => array(
        'Monitorização em tempo real para identificação de ameaças e resposta imediata.',
        'Soluções integradas com firewalls e encriptação de dados.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-redes/icone4.svg',
      'title' => 'Eficiência Energética',
      'items' => 'Equipamentos otimizados para consumo reduzido, ajudando a sua empresa a poupar energia e reduzir a pegada ambiental.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-redes/icone5.svg',
      'title' => 'Simplicidade na Gestão',
      'items' => array(
        'Centralização da gestão de redes, permitindo que a sua equipa de TI tenha controlo total a partir de uma interface única.',
        'Integrado com softwares empresariais e cloud.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-redes/icone6.svg',
      'title' => 'Suporte Especializado da Dualinfor',
      'items' => array(
        'Consultoria, instalação e manutenção por uma equipa altamente qualificada.',
        'Acompanhamento contínuo para garantir o máximo desempenho.'
      )
    )
  )
));
?>


<?php get_footer(); ?>
