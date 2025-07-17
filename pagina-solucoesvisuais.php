<?php
/**
 * Template Name: Página Soluções Visuais
 * Description: Página personalizada para Página soluções visuais da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Soluções visuais da Dualinfor: comunicação dinâmica que capta a atenção',
  'description' => 'Transforme a forma como comunica com os seus clientes. Descubra como os nossos monitores profissionais, videowalls e sistemas de digital signage tornam a comunicação mais envolvente e eficaz.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/solucoesvisuais1.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/solucoesvisuais2.png',
  'cta_primary' => [
    'url' => '#',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#',
    'label' => 'Fale com um Especialista',
  ],
  'reverse' => true,
  'content_heading' => 'Comunicação visual inovadora para negócios modernos',
  'content_text' => 'Na era da informação, captar a atenção do cliente é essencial. As Soluções Visuais da Dualinfor permitem transformar a comunicação do seu negócio com tecnologia avançada, garantindo impacto visual, eficiência e resultados tangíveis.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/solucoesvisuais3.png',
));

?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher as soluções visuais da Dualinfor?',
  'subtitle' => 'Desenvolvemos soluções que combinam qualidade de imagem superior, flexibilidade e inovação tecnológica para ajudar o seu negócio a destacar-se.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/icone1.svg',
      'title' => 'Imagens de Alta Qualidade',
      'items' => array(
        'Resolução até 4K Ultra HD, garantindo cores vibrantes e nitidez em qualquer ambiente.',
        'Ideal para atrair clientes e comunicar mensagens claras e impactantes.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/icone2.svg',
      'title' => 'Versatilidade',
      'items' => array(
        'Equipamentos adaptáveis a diferentes espaços, desde pequenas lojas até grandes áreas comerciais ou salas de conferências.',
        'Soluções personalizadas para qualquer setor: retalho, saúde, educação ou hotelaria.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/icone3.svg',
      'title' => 'Gestão Remota',
      'items' => 'Ferramentas de gestão centralizada permitem actualizar conteúdos de forma simples e rápida, de qualquer lugar.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/icone4.svg',
      'title' => 'Soluções de Digital Signage',
      'items' => 'Sistemas de sinalética digital que permitem criar experiências dinâmicas e personalizadas para os seus clientes.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/icone5.svg',
      'title' => 'Eficiência Energética',
      'items' => 'Equipamentos com consumo reduzido de energia e certificações que promovem a sustentabilidade.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/icone6.svg',
      'title' => 'Apoio Técnico Dualinfor',
      'items' => array(
        'Consultoria e instalação por uma equipa especializada.',
        'Suporte contínuo para garantir que as suas soluções estão sempre a funcionar no seu melhor.'
      )
    )
  )
));
?>


<?php get_footer(); ?>
