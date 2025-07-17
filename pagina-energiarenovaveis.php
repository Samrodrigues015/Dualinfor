<?php
/**
 * Template Name: Página Energias Renováveis
 * Description: Página personalizada para as soluções de energias renováveis da Dualinfor.
 */

get_header();
?>
 
<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Energias renováveis Dualinfor: Sustentabilidade e eficiência ao serviço da sua empresa',
  'description' => 'Reduza custos, aumente a eficiência energética e contribua para um futuro mais sustentável. Descubra como as nossas soluções em energias renováveis podem transformar o seu negócio.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/energiarenovaveis.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/lampada.png',
  'cta_primary' => [
    'url' => '#',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#',
    'label' => 'Fale com um Especialista Agora',
  ],
  'reverse' => false,
  'content_heading' => 'Transforme o Consumo Energético da Sua Empresa com Soluções Sustentáveis',
  'content_text' => 'As soluções em energias renováveis da Dualinfor foram desenhadas para empresas que procuram reduzir custos operacionais e a sua pegada de carbono. Com tecnologia avançada e consultoria especializada, ajudamos o seu negócio a ser mais eficiente e sustentável.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/energiasolar.png',
));

?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê Escolher as Soluções Dualinfor em Energias Renováveis?',
  'subtitle' => 'Investir em energias renováveis não é apenas uma decisão financeira inteligente, é também um compromisso com o futuro do planeta. Conheça os benefícios de trabalhar com a Dualinfor.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone1.svg',
      'title' => 'Redução de Custos Energéticos',
      'items' => array(
        'Diminuição significativa da fatura de energia ao aproveitar fontes renováveis.',
        'Rápido retorno do investimento com redução de custos operacionais.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone2.svg',
      'title' => 'Sustentabilidade Empresarial',
      'items' => array(
        'Reduza a pegada de carbono e alinhe-se com as práticas globais de responsabilidade ambiental.',
        'Cumprimento de metas de sustentabilidade exigidas por grandes mercados.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone3.svg',
      'title' => 'Tecnologia de Ponta',
      'items' => array(
        'Instalação de sistemas de painéis solares fotovoltaicos eficientes e de longa durabilidade.',
        'Integração com sistemas de armazenamento de energia para maximizar o aproveitamento.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone4.svg',
      'title' => 'Conformidade e Incentivos Fiscais',
      'items' => array(
        'Apoio no acesso a incentivos fiscais e financiamentos para projetos de energias renováveis.',
        'Cumprimento de regulamentos nacionais e internacionais de eficiência energética.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone5.svg',
      'title' => 'Monitorização e Gestão em Tempo Real',
      'items' => array(
        'Sistemas inteligentes que permitem monitorizar a produção e consumo de energia.',
        'Relatórios detalhados para otimização contínua.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone6.svg',
      'title' => 'Soluções Adaptadas ao Seu Negócio',
      'items' => 'Personalização para diferentes setores, desde indústrias a pequenas empresas e instituições públicas.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone7.svg',
      'title' => 'Assistência Especializada Dualinfor',
      'items' => 'Consultoria, instalação e manutenção asseguradas por uma equipa técnica qualificada.'
    )
  ),
  'cta' => array(
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => '<svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" transform="rotate(-90 12 12)"/></svg>'
  )
));
?>

<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Tecnologia inovadora para um futuro sustentável',
  'description' => 'As nossas soluções em energias renováveis combinam tecnologia de ponta e eficiência para garantir um impacto positivo.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Painéis Solares Fotovoltaicos',
    'Armazenamento de Energia',
    'Monitorização Inteligente',
    'Eficiência Energética',
    'Variedade de Estilos',
    'Soluções Modulares'
  ],
  'col2_items' => [
    'Alta eficiência na captação e conversão de energia solar.',
    'Sistemas de baterias para aproveitar energia excedente.',
    'Plataforma com relatórios em tempo real.',
    'Soluções para reduzir perdas energéticas.',
    'Estilo adaptado ao ambiente empresarial.',
    'Componentes facilmente escaláveis.'
  ]
));
?>



<?php get_footer(); ?>
