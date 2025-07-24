<?php

/**
 * Template Name: Página Soluções Documentais
 * Description: Página personalizada para a página Soluções Documentais da Dualinfor.
 */
 get_header();

 ?>

<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Soluções Documentais MPS: Gestão inteligente de impressão e documentos para empresas modernas',
  'subtitle' => 'Reduza custos, aumente a eficiência e simplifique a gestão documental com as nossas soluções personalizadas de Managed Print Services.',
  'image' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/herosolucoes.png',
  'btn_primary_text' => 'Solicite uma Reunião Personalizada',
  'btn_primary_link' => '#formulario',
  'btn_secondary_text' => 'Fale com um Especialista Agora',
  'btn_secondary_link' => '#contacto',
  'align_left' => true
));
?>

<?php
get_template_part('template-parts/hero-section-secondary', null, array(
  'title' => 'Simplifique e optimize a gestão de documentos e impressões',
  'paragraph' => 'As Soluções Documentais MPS da Dualinfor foram desenvolvidas para ajudar as empresas a gerir e otimizar o seu parque de impressão e documentos. Reduza custos, elimine desperdícios e garanta a segurança e a eficiência na gestão documental.',
  'image' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/herosecondary.png',
  'image_right' => true
));
?>


<?php get_footer(); ?>