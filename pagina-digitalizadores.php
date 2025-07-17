<?php
/**
 * Template Name: Página Digitalizadores
 * Description: Página personalizada para a página Digitalizadores da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Digitalizadores Dualinfor: Eficiência na estão de documentos ao alcance da sua empresa',
  'description' => 'Transforme documentos físicos em arquivos digitais organizados, seguros e fáceis de aceder. Com a Dualinfor, leve a digitalização ao próximo nível.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-digitalizadores/digitalizadoresimage2.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-digitalizadores/digitalizadoresimage1.png',
  'cta_primary' => [
    'url' => '#',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#',
    'label' => 'Fale com um Especialista Agora',
  ],
  'reverse' => true,
  'content_heading' => 'Digitalize, organize e proteja documentos com tecnologia avançada',
  'content_text' => 'Os digitalizadores Dualinfor foram criados para resolver os desafios de gestão documental das empresas modernas. Seja para digitalizar contratos, registos médicos ou materiais académicos, oferecemos soluções rápidas, eficientes e adaptáveis a todas as necessidades.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-digitalizadores/digitalizadoresimage3.png',
));

?>


<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher os digitalizadores da Dualinfor?',
  'subtitle' => 'As nossas soluções de digitalização são projetadas para oferecer benefícios tangíveis à sua empresa, permitindo que poupe tempo, reduza custos e proteja informações sensíveis.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone1.svg',
      'title' => 'Velocidade de Digitalização Superior',
      'items' => array(
        'Digitalize até 60 páginas por minuto, ideal para grandes volumes de trabalho.',
        'Minimize o tempo gasto em tarefas manuais.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone2.svg',
      'title' => 'Qualidade de Imagem Excepcional',
      'items' => array(
        'Resolução de até 1200 dpi para capturar todos os detalhes dos seus documentos.',
        'Ideal para arquivos legais, técnicos e gráficos.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone3.svg',
      'title' => 'Soluções de Organização Automática',
      'items' => array(
        'Ferramentas integradas para classificar, renomear e arquivar documentos digitalizados.',
        'Opções para digitalizar diretamente para PDF pesquisável.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone4.svg',
      'title' => 'Conformidade e Segurança',
      'items' => array(
        'Garantia de conformidade com o RGPD, protegendo dados sensíveis durante o processo de digitalização.',
        'Funções de autenticação para controlar acessos.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone5.svg',
      'title' => 'Integração Total',
      'items' => 'Compatível com sistemas de gestão documental (DMS), cloud (Google Drive, OneDrive) e redes empresariais.'
    ),
     array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone6.svg',
      'title' => 'Design Compacto e Versátil',
      'items' => array(
        'Modelos adaptáveis a escritórios pequenos ou grandes centros corporativos.',
        'Digitalização de vários tipos de documentos: papel A4/A3, cartões, recibos e documentos encadernados.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone7.svg',
      'title' => 'Eficiência Energética',
      'items' => 'Consumo reduzido com tecnologia de baixo impacto ambiental.'
    )
  ),
  'cta' => array(
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => '<svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" transform="rotate(-90 12 12)"/></svg>'
  )
));
?>

<?php get_footer(); ?>
