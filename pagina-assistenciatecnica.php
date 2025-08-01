<?php
//** Template Name: Página Assistência Técnica */

get_header();
?>

<main>

    <section id="dualinfor-page" class="dualinfor-site dualinfor-hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/header2.png'), url('<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/header.png');">
        <div class="dualinfor-hero-content">
            <h1 class="dualinfor-hero-title">Assistência Técnica Dualinfor:</h1>
            <h2 class="dualinfor-hero-subtitle">Rápida, eficiente e sempre disponível</h2>
            <p class="dualinfor-hero-description">
                Reduza tempos de inatividade e mantenha os seus equipamentos e sistemas a operar no máximo desempenho.
                Conte com suporte técnico especializado e soluções à medida das suas necessidades.
            </p>
            <div class="dualinfor-hero-buttons">
                <a href="#formulario" class="dualinfor-button dualinfor-button-primary">
                    Peça Assistência Técnica Agora
                    <span class="dualinfor-button-icon-wrapper">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </a>
                <a href="#formulario" class="dualinfor-button dualinfor-button-secondary">Contacte-nos Já</a>
            </div>
        </div>
    </section>


    <!-- Technical Support Section -->
    <section class="technical-support-section">
        <div class="container">
            <div class="support-content">
                <div class="support-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/assistencia.png" alt="Technical support hands">
                </div>
                <div class="support-text">
                    <h2>Apoio técnico que resolve e garante a continuidade operacional</h2>
                    <p>Na Dualinfor, reconhecemos que o tempo é um recurso valioso. Por isso, os nossos serviços de
                        assistência técnica são rápidos, eficazes e focados na redução de interrupções operacionais. Com
                        uma equipa técnica experiente e certificada, asseguramos a resolução de problemas com a máxima
                        eficiência.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="services-header">
                <h2>Como podemos ajudar?</h2>
                <p>Seja para prevenir problemas ou resolver falhas técnicas, disponibilizamos um conjunto completo de
                    serviços de assistência técnica.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
                            <rect y="58.8989" width="58.8989" height="58.8989" rx="29.4494" transform="rotate(-90 0 58.8989)" fill="url(#paint0_linear_628_3972)" />
                            <path d="M41.5012 37.4271V26.254C41.5012 24.284 40.4237 22.4481 38.69 21.4619C38.39 21.2897 38.0075 21.3918 37.8363 21.6869C37.6625 21.9796 37.765 22.3571 38.0637 22.5268C39.4137 23.2954 40.2512 24.723 40.2512 26.2553V37.3657H33.3763C33.21 37.3657 33.0513 37.4308 32.9338 37.5452L31.8663 38.5954H26.1338L25.0663 37.5452C24.9488 37.4296 24.79 37.3657 24.6238 37.3657H17.7512V26.2553C17.7512 24.723 18.59 23.2954 19.9387 22.5268C20.2375 22.3571 20.34 21.9808 20.1663 21.6869C19.9938 21.393 19.6125 21.2909 19.3125 21.4619C17.5775 22.4493 16.5 24.2853 16.5 26.254V37.4271C15.075 37.7124 14 38.9544 14 40.4387C14 42.1345 15.4025 43.513 17.125 43.513H40.875C42.5975 43.513 44 42.1345 44 40.4387C44 38.9532 42.9262 37.7124 41.5012 37.4271ZM40.8762 42.2832H17.1262C16.0925 42.2832 15.2513 41.4557 15.2513 40.4387C15.2513 39.4217 16.0925 38.5941 17.1262 38.5941H24.3675L25.435 39.6443C25.5525 39.7599 25.7113 39.8238 25.8775 39.8238H32.1275C32.2938 39.8238 32.4525 39.7587 32.57 39.6443L33.6375 38.5941H40.8787C41.9125 38.5941 42.7537 39.4217 42.7537 40.4387C42.7537 41.4557 41.9125 42.2832 40.8787 42.2832H40.8762ZM29.0013 25.0674C30.38 25.0674 31.5013 23.9643 31.5013 22.6079C31.5013 21.2516 30.38 20.1485 29.0013 20.1485C27.6225 20.1485 26.5013 21.2516 26.5013 22.6079C26.5013 23.9643 27.6225 25.0674 29.0013 25.0674ZM29.0013 21.3782C29.69 21.3782 30.2513 21.9291 30.2513 22.6079C30.2513 23.2867 29.69 23.8377 29.0013 23.8377C28.3125 23.8377 27.7513 23.2867 27.7513 22.6079C27.7513 21.9291 28.3125 21.3782 29.0013 21.3782ZM21.25 25.5494C21.1225 26.0265 21.1925 26.5221 21.4437 26.9476C21.6962 27.3743 22.1025 27.6768 22.5875 27.801C23.0725 27.9289 23.575 27.8588 24.0087 27.6104L24.81 27.1505C25.48 27.7518 26.2675 28.1982 27.1263 28.4626V29.3713C27.1263 30.3883 27.9675 31.2159 29.0013 31.2159C30.035 31.2159 30.8763 30.3883 30.8763 29.3713V28.4626C31.735 28.197 32.5212 27.7518 33.1925 27.1505L33.9938 27.6104C34.4275 27.8588 34.9312 27.9301 35.415 27.801C35.9 27.6756 36.305 27.3731 36.5575 26.9476C36.81 26.5221 36.8787 26.0265 36.7525 25.5494C36.625 25.0723 36.3162 24.6739 35.885 24.4255L35.0775 23.9606C35.195 23.4872 35.2525 23.042 35.2525 22.6079C35.2525 22.1739 35.195 21.7275 35.0775 21.254L35.885 20.7904C36.7775 20.2764 37.08 19.1439 36.5587 18.2671C36.0375 17.3878 34.8875 17.0903 33.995 17.6043L33.1938 18.0642C32.5225 17.4629 31.735 17.0165 30.8775 16.7521V15.8446C30.8775 14.8276 30.0363 14 29.0025 14C27.9688 14 27.1275 14.8276 27.1275 15.8446V16.7521C26.2688 17.0177 25.4812 17.4629 24.8113 18.0642L24.01 17.6043C23.115 17.0903 21.9662 17.3878 21.4462 18.2671C20.925 19.1439 21.2275 20.2764 22.12 20.7904L22.9275 21.254C22.81 21.7287 22.7525 22.1739 22.7525 22.6079C22.7525 23.042 22.81 23.4872 22.9275 23.9606L22.12 24.4255C21.6875 24.6739 21.3788 25.0723 21.2513 25.5494H21.25ZM22.4587 25.8617C22.5012 25.7031 22.6038 25.5703 22.7487 25.4867L23.9725 24.7833C24.2238 24.6394 24.34 24.3431 24.2537 24.0688C24.0813 23.5278 24 23.0629 24 22.6079C24 22.153 24.08 21.6881 24.2537 21.1471C24.3413 20.8728 24.225 20.5765 23.9725 20.4326L22.7487 19.7304C22.4513 19.5583 22.35 19.182 22.5237 18.8881C22.6975 18.5942 23.0813 18.497 23.3787 18.6667L24.5925 19.3627C24.8438 19.5066 25.1638 19.4611 25.3638 19.2521C26.05 18.5315 26.9238 18.0371 27.89 17.8207C28.175 17.7568 28.3763 17.5084 28.3763 17.2218V15.8446C28.3763 15.5064 28.6563 15.2297 29.0013 15.2297C29.3463 15.2297 29.6263 15.5064 29.6263 15.8446V17.2218C29.6263 17.5084 29.8288 17.758 30.1125 17.8207C31.0788 18.0371 31.9525 18.5315 32.6388 19.2521C32.8388 19.4624 33.1588 19.5066 33.41 19.3627L34.6237 18.6667C34.9212 18.4958 35.305 18.5942 35.4787 18.8881C35.6525 19.182 35.5513 19.5583 35.2537 19.7304L34.03 20.4326C33.7775 20.5765 33.6613 20.8728 33.7488 21.1471C33.9213 21.6869 34.0012 22.1517 34.0012 22.6079C34.0012 23.0642 33.9213 23.5278 33.7488 24.0688C33.6613 24.3431 33.7775 24.6394 34.03 24.7833L35.255 25.4867C35.3988 25.5691 35.5012 25.7031 35.5437 25.8617C35.5862 26.0204 35.5637 26.1864 35.4787 26.3278C35.395 26.4692 35.26 26.5701 35.0987 26.6119C34.9362 26.6512 34.7675 26.6303 34.625 26.5479L33.4113 25.8519C33.16 25.708 32.84 25.7535 32.64 25.9626C31.9538 26.6832 31.08 27.1775 30.1138 27.394C29.8288 27.4579 29.6275 27.7063 29.6275 27.9928V29.3713C29.6275 29.7095 29.3475 29.9862 29.0025 29.9862C28.6575 29.9862 28.3775 29.7095 28.3775 29.3713V27.9928C28.3775 27.7063 28.175 27.4567 27.8913 27.394C26.9263 27.1775 26.0525 26.6832 25.365 25.9626C25.2437 25.8347 25.0775 25.7683 24.9088 25.7683C24.8013 25.7683 24.6925 25.7953 24.5938 25.8519L23.38 26.5479C23.235 26.6291 23.0662 26.6512 22.9062 26.6119C22.745 26.5701 22.61 26.4692 22.525 26.3278C22.44 26.1864 22.4187 26.0204 22.46 25.8617H22.4587Z" fill="white" />
                            <defs>
                                <linearGradient id="paint0_linear_628_3972" x1="49.5001" y1="58.8989" x2="4.50482" y2="118.839" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#9A2686" />
                                    <stop offset="1" stop-color="#293992" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h3>Manutenção Preventiva</h3>
                    <p>Inspeções regulares para prevenir avarias inesperadas e garantir o desempenho ideal dos
                        equipamentos.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
                            <rect y="58.8989" width="58.8989" height="58.8989" rx="29.4494" transform="rotate(-90 0 58.8989)" fill="url(#paint0_linear_628_3968)" />
                            <path d="M39.1875 14H19.8125C16.6079 14 14 16.5907 14 19.7743V36.4555C14 39.6391 16.6079 42.2298 19.8125 42.2298H22.3958C22.7523 42.2298 23.0417 41.9424 23.0417 41.5882C23.0417 41.234 22.7523 40.9466 22.3958 40.9466H19.8125C17.3196 40.9466 15.2917 38.932 15.2917 36.4555V24.2654H43.7083V36.4555C43.7083 38.932 41.6804 40.9466 39.1875 40.9466H36.6042C36.2477 40.9466 35.9583 41.234 35.9583 41.5882C35.9583 41.9424 36.2477 42.2298 36.6042 42.2298H39.1875C42.3921 42.2298 45 39.6391 45 36.4555V19.7743C45 16.5907 42.3921 14 39.1875 14ZM15.2917 22.9822V19.7743C15.2917 17.2978 17.3196 15.2832 19.8125 15.2832H39.1875C41.6804 15.2832 43.7083 17.2978 43.7083 19.7743V22.9822H15.2917ZM20.4583 19.1327C20.4583 19.841 19.8797 20.4159 19.1667 20.4159C18.4537 20.4159 17.875 19.841 17.875 19.1327C17.875 18.4244 18.4537 17.8495 19.1667 17.8495C19.8797 17.8495 20.4583 18.4244 20.4583 19.1327ZM24.3333 19.1327C24.3333 19.841 23.7547 20.4159 23.0417 20.4159C22.3287 20.4159 21.75 19.841 21.75 19.1327C21.75 18.4244 22.3287 17.8495 23.0417 17.8495C23.7547 17.8495 24.3333 18.4244 24.3333 19.1327ZM28.2083 19.1327C28.2083 19.841 27.6297 20.4159 26.9167 20.4159C26.2037 20.4159 25.625 19.841 25.625 19.1327C25.625 18.4244 26.2037 17.8495 26.9167 17.8495C27.6297 17.8495 28.2083 18.4244 28.2083 19.1327ZM37.25 32.606C37.25 35.035 36.1288 37.2703 34.1758 38.7383C33.6669 39.1219 33.375 39.6853 33.375 40.2858V42.8714C33.375 43.2255 33.0857 43.513 32.7292 43.513C32.3727 43.513 32.0833 43.2255 32.0833 42.8714V40.2858C32.0833 39.2811 32.5612 38.3431 33.3957 37.7156C35.0245 36.4914 35.9583 34.6283 35.9583 32.606C35.9583 30.9995 35.3551 29.4635 34.2624 28.2779C34.0363 28.0341 33.7664 28.111 33.6889 28.1431C33.5946 28.179 33.3763 28.2971 33.3763 28.5999V30.4977C33.3763 32.5534 31.8482 34.3165 29.8991 34.5102C28.8025 34.6244 27.7123 34.2651 26.9025 33.535C26.0926 32.8075 25.6276 31.7655 25.6276 30.68V28.5986C25.6276 28.2958 25.4093 28.1778 25.315 28.1418C25.2362 28.1123 24.9675 28.0341 24.7415 28.2766C23.6475 29.4622 23.0442 30.9982 23.0442 32.6047C23.0442 34.627 23.9781 36.4902 25.6069 37.7143C26.4413 38.3418 26.9192 39.2798 26.9192 40.2845V42.8701C26.9192 43.2242 26.6299 43.5117 26.2734 43.5117C25.9169 43.5117 25.6276 43.2242 25.6276 42.8701V40.2845C25.6276 39.684 25.3357 39.1207 24.8267 38.737C22.8737 37.2678 21.7526 35.0325 21.7526 32.6047C21.7526 30.6761 22.4759 28.8322 23.7895 27.4091C24.301 26.8548 25.0825 26.6726 25.7839 26.9459C26.4736 27.2128 26.9192 27.8608 26.9192 28.5986V30.68C26.9192 31.4037 27.2292 32.0966 27.7692 32.5829C28.3181 33.0756 29.0285 33.3079 29.7712 33.2335C31.0694 33.1026 32.0859 31.9015 32.0859 30.4965V28.5986C32.0859 27.8608 32.5315 27.2128 33.2213 26.9459C33.9227 26.6739 34.7041 26.8561 35.2156 27.4091C36.5292 28.8309 37.2526 30.6761 37.2526 32.6047L37.25 32.606Z" fill="white" />
                            <defs>
                                <linearGradient id="paint0_linear_628_3968" x1="49.5001" y1="58.8989" x2="4.50482" y2="118.839" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#9A2686" />
                                    <stop offset="1" stop-color="#293992" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h3>Manutenção Corretiva</h3>
                    <p>Resolução de falhas técnicas em sistemas e equipamentos, garantindo operações rápidas e
                        eficientes.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                            <rect y="55" width="55" height="55" rx="27.5" transform="rotate(-90 0 55)" fill="url(#paint0_linear_628_3959)" />
                            <g clip-path="url(#clip0_628_3959)">
                                <path d="M39.0794 19.8919C38.3257 14.4623 33.8191 10.0703 28.3622 9.44501C24.9422 9.05182 21.6192 10.0471 19.0088 12.2438C16.4326 14.4118 14.8435 17.5764 14.6496 20.9267C14.6278 21.3036 14.9145 21.6271 15.2913 21.6476C15.6681 21.6776 15.9903 21.3827 16.0121 21.0059C16.1841 18.027 17.5972 15.2145 19.8881 13.2868C22.2076 11.3359 25.162 10.4498 28.2065 10.8021C33.0532 11.3564 37.0574 15.2582 37.7278 20.0789C37.9899 21.9725 37.7701 23.8907 37.0902 25.6259C36.4239 27.3298 34.6655 28.4752 32.7146 28.4752H29.2782C29.5117 28.0738 29.6455 27.6069 29.6455 27.11C29.6455 25.6041 28.4209 24.3795 26.915 24.3795C25.4091 24.3795 24.1845 25.6041 24.1845 27.11C24.1845 28.6158 25.4091 29.8405 26.915 29.8405H32.7146C35.2212 29.8405 37.4916 28.3469 38.3626 26.1242C39.1271 24.1692 39.3743 22.0149 39.0794 19.8919ZM25.5497 27.11C25.5497 26.3563 26.1627 25.7447 26.915 25.7447C27.6672 25.7447 28.2802 26.3563 28.2802 27.11C28.2802 27.8636 27.6672 28.4752 26.915 28.4752C26.1627 28.4752 25.5497 27.8636 25.5497 27.11ZM32.9972 24.7508C33.49 23.7856 33.7412 22.7425 33.7412 21.649C33.7412 17.885 30.679 14.8227 26.915 14.8227C23.151 14.8227 20.0888 17.885 20.0888 21.649C20.0888 23.2313 20.643 24.774 21.6492 25.9932C21.8895 26.284 21.8486 26.714 21.5578 26.9543C21.4308 27.0594 21.2765 27.11 21.1236 27.11C20.927 27.11 20.7318 27.0253 20.5966 26.8615C19.3897 25.3993 18.7235 23.548 18.7235 21.649C18.7235 17.1314 22.3974 13.4575 26.915 13.4575C31.4326 13.4575 35.1065 17.1314 35.1065 21.649C35.1065 22.961 34.8061 24.2143 34.2136 25.3734C34.0402 25.7092 33.6252 25.8403 33.2948 25.671C32.959 25.499 32.8252 25.0853 32.9972 24.7508ZM26.915 32.571C21.6479 32.571 17.0593 36.2435 16.0067 41.3058C15.9302 41.6758 16.1896 42.1277 16.6756 42.1277C16.9924 42.1277 17.2763 41.9065 17.3432 41.5843C17.8211 39.2825 19.1372 37.3097 20.9393 35.9445L22.7196 38.6135C23.3735 39.5952 24.9941 39.5952 25.6494 38.6135L26.8699 36.6462L28.1806 38.6135C28.5069 39.1037 29.0557 39.3972 29.6455 39.3972C30.2353 39.3972 30.7841 39.1037 31.1104 38.6135L32.8893 35.9445C34.6914 37.3097 36.0075 39.2825 36.4867 41.5843C36.5632 41.9543 36.9318 42.196 37.2936 42.114C37.6636 42.0376 37.8998 41.6772 37.8233 41.3072C36.7707 36.2448 32.1835 32.5723 26.9164 32.5723L26.915 32.571ZM29.9745 37.8558C29.8694 38.0142 29.7097 38.0319 29.6455 38.0319C29.5813 38.0319 29.4216 38.0142 29.3165 37.8558L28.0045 35.8871C27.5184 35.1595 26.3129 35.1581 25.8255 35.8871L24.5135 37.8545C24.407 38.0128 24.2487 38.0306 24.1845 38.0306C24.1203 38.0306 23.962 38.0128 23.8555 37.8545L22.082 35.195C23.5196 34.3908 25.1743 33.9348 26.915 33.9348C28.6557 33.9348 30.3104 34.3908 31.7466 35.195L29.9745 37.8558Z" fill="white" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_628_3959" x1="46.2234" y1="55" x2="4.20662" y2="110.973" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#9A2686" />
                                    <stop offset="1" stop-color="#293992" />
                                </linearGradient>
                                <clipPath id="clip0_628_3959">
                                    <rect width="32.766" height="32.766" fill="white" transform="translate(10.5322 9.36169)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h3>Suporte Remoto</h3>
                    <p>Diagnóstico e resolução de problemas à distância, com tempos de resposta mínimos.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
                            <rect y="58.8989" width="58.8989" height="58.8989" rx="29.4494" transform="rotate(-90 0 58.8989)" fill="url(#paint0_linear_628_3976)" />
                            <path d="M44.9985 31.9665C44.9985 28.2992 43.4896 26.4022 41.4152 25.4385C41.3687 14.6209 37.4988 10 28.4993 10C19.6212 10 15.6328 14.7635 15.5833 25.4385C13.5089 26.4022 12 28.2992 12 31.9665C12 38.594 16.9243 39.4424 21.2156 39.4424C21.5396 39.4424 21.8261 39.2422 21.928 38.9483C23.4805 34.4455 23.4805 29.4876 21.928 24.9848C21.8261 24.6909 21.5396 24.4907 21.2156 24.4907C19.8446 24.4907 18.4092 24.5771 17.0908 24.9128C17.3008 13.0926 22.687 11.4404 28.5007 11.4404C34.3145 11.4404 39.7007 13.0926 39.9107 24.9128C38.5923 24.5786 37.1569 24.4907 35.7859 24.4907C35.4619 24.4907 35.1754 24.6909 35.0735 24.9848C33.6245 29.1851 33.53 33.7858 34.784 38.0408C32.6991 38.1071 30.7116 38.0696 28.8637 37.927C28.4423 37.8997 28.0898 38.1906 28.0553 38.5868C28.0223 38.9829 28.3298 39.3315 28.7422 39.3617C30.0412 39.4625 31.4031 39.513 32.8191 39.513C33.7865 39.513 34.778 39.4899 35.7889 39.4409C40.0772 39.4409 45 38.5896 45 31.9651L44.9985 31.9665ZM20.6681 37.9962C15.5203 37.8853 13.4999 36.164 13.4999 31.9651C13.4999 27.7663 15.5203 26.0478 20.6681 25.9355C21.8995 29.8434 21.8995 34.0883 20.6681 37.9962ZM36.3319 37.9962C35.1005 34.0869 35.1005 29.8448 36.3319 25.9369C41.4797 26.0478 43.5001 27.7677 43.5001 31.9665C43.5001 36.1654 41.4797 37.8853 36.3334 37.9976L36.3319 37.9962Z" fill="white" />
                            <defs>
                                <linearGradient id="paint0_linear_628_3976" x1="49.5001" y1="58.8989" x2="4.50482" y2="118.839" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#9A2686" />
                                    <stop offset="1" stop-color="#293992" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h3>Assistência On-Site</h3>
                    <p>Visitas técnicas ao local para resolver questões mais complexas, incluindo instalação e
                        configuração de equipamentos.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
                            <rect y="58.8989" width="58.8989" height="58.8989" rx="29.4494" transform="rotate(-90 0 58.8989)" fill="url(#paint0_linear_628_3980)" />
                            <path d="M43.2011 30.8114C43.3358 30.9462 43.5118 31.0136 43.6878 31.0136C43.8625 31.0136 44.0385 30.9476 44.1732 30.8128C44.4427 30.5447 44.4441 30.1102 44.176 29.8407L28.9767 14.5658C28.7086 14.2963 28.2741 14.2936 28.0046 14.5631C27.7351 14.8312 27.7337 15.2657 28.0018 15.5352L28.3456 15.8803C27.5522 16.5032 26.4027 17.4533 25.0758 18.6881L22.9776 16.5788C22.7095 16.3093 22.275 16.3079 22.0055 16.5761C21.736 16.8442 21.7346 17.2787 22.0027 17.5482L24.0817 19.6368C23.9071 19.8087 23.7297 19.9833 23.551 20.1634C18.9928 24.7449 16.4436 28.8947 16.3377 29.0693C16.2181 29.2673 16.2043 29.5107 16.302 29.7197C16.379 29.8847 18.2366 33.7924 21.637 37.2093C25.0305 40.6193 28.9258 42.4934 29.0895 42.5718C29.183 42.6158 29.2847 42.6378 29.3851 42.6378C29.5116 42.6378 29.6367 42.6034 29.7467 42.5347C29.9213 42.4261 34.0862 39.8287 38.6058 35.2857C40.568 33.3139 42.0186 31.5608 42.8642 30.4732L43.2011 30.8114ZM37.631 34.3149C33.935 38.0302 30.4026 40.4598 29.3425 41.1583C28.3401 40.6344 25.278 38.9198 22.6105 36.2386C19.9388 33.5532 18.2297 30.4691 17.7127 29.4667C18.3975 28.4121 20.7955 24.8824 24.5258 21.1328C24.7032 20.9541 24.8778 20.7808 25.0525 20.6117L31.6016 27.1938C31.7363 27.3286 31.9123 27.3959 32.0883 27.3959C32.263 27.3959 32.439 27.3299 32.5737 27.1952C32.8432 26.9271 32.8446 26.4926 32.5765 26.2231L26.048 19.6616C27.3996 18.4062 28.5573 17.4574 29.3232 16.8607L41.888 29.4873C41.085 30.5282 39.6316 32.3019 37.6323 34.3122L37.631 34.3149Z" fill="white" />
                            <path d="M44.4253 34.5499C44.1929 34.3932 43.8876 34.3932 43.6553 34.5499C43.5714 34.6077 41.5928 35.9634 41.5928 37.8541C41.5928 39.2071 42.69 40.3084 44.0389 40.3084C45.3878 40.3084 46.485 39.2071 46.485 37.8541C46.485 35.9634 44.5091 34.6063 44.4253 34.5499ZM44.0403 38.9334C43.449 38.9334 42.9691 38.4494 42.9691 37.8541C42.9691 37.1281 43.57 36.4199 44.0389 35.9978C44.4706 36.3842 45.1114 37.0868 45.1114 37.8541C45.1114 38.4494 44.6301 38.9334 44.0403 38.9334Z" fill="white" />
                            <defs>
                                <linearGradient id="paint0_linear_628_3980" x1="49.5001" y1="58.8989" x2="4.50482" y2="118.839" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#9A2686" />
                                    <stop offset="1" stop-color="#293992" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h3>Gestão de Consumíveis</h3>
                    <p>Monitorização e reposição de consumíveis, como toner e cartuchos, garantindo a continuidade das
                        operações.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57" fill="none">
                            <rect y="57" width="57" height="57" rx="28.5" transform="rotate(-90 0 57)" fill="url(#paint0_linear_628_3963)" />
                            <g clip-path="url(#clip0_628_3963)">
                                <path d="M44.5159 42.4748L36.1069 34.0658C38.2023 31.7513 39.4918 28.6936 39.4918 25.3334C39.4905 18.1436 33.6411 12.2942 26.4513 12.2942C19.2615 12.2942 13.4121 18.1436 13.4121 25.3334C13.4121 32.5232 19.2615 38.3726 26.4513 38.3726C29.8115 38.3726 32.8692 37.083 35.1837 34.9876L43.5927 43.3966C44.182 44.0043 45.1222 43.0641 44.5159 42.4748ZM26.4513 37.0687C19.98 37.0687 14.716 31.8048 14.716 25.3334C14.716 18.862 19.98 13.5981 26.4513 13.5981C32.9227 13.5981 38.1866 18.8633 38.1866 25.3334C38.1866 31.8035 32.9227 37.0687 26.4513 37.0687ZM34.2762 23.4766C32.8953 21.6472 30.4192 19.4658 26.4513 19.4658C22.4835 19.4658 20.0073 21.6459 18.6265 23.4766C17.8024 24.5693 17.8024 26.0975 18.6265 27.1915C20.0073 29.0209 22.4861 31.201 26.4513 31.201C30.4165 31.201 32.8953 29.0209 34.2762 27.1902C35.1002 26.0975 35.1002 24.5693 34.2762 23.4753V23.4766ZM33.2343 26.4065C32.0334 27.9999 29.8819 29.8984 26.4513 29.8984C23.0207 29.8984 20.8705 27.9999 19.6683 26.4078C19.1924 25.7767 19.1924 24.894 19.6683 24.2629C20.8692 22.6695 23.0207 20.771 26.4513 20.771C29.8819 20.771 32.0334 22.6695 33.2343 24.2616C33.7103 24.8927 33.7103 25.7754 33.2343 26.4065ZM26.4513 22.7269C25.0131 22.7269 23.8435 23.8965 23.8435 25.3347C23.8435 26.7729 25.0131 27.9425 26.4513 27.9425C27.8895 27.9425 29.0592 26.7729 29.0592 25.3347C29.0592 23.8965 27.8895 22.7269 26.4513 22.7269ZM26.4513 26.6386C25.7316 26.6386 25.1474 26.0532 25.1474 25.3347C25.1474 24.6162 25.7316 24.0308 26.4513 24.0308C27.1711 24.0308 27.7552 24.6162 27.7552 25.3347C27.7552 26.0532 27.1711 26.6386 26.4513 26.6386Z" fill="white" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_628_3963" x1="47.9042" y1="57" x2="4.35959" y2="115.008" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#9A2686" />
                                    <stop offset="1" stop-color="#293992" />
                                </linearGradient>
                                <clipPath id="clip0_628_3963">
                                    <rect width="31.2941" height="31.2941" fill="white" transform="translate(13.4121 12.2942)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h3>Monitorização Proativa</h3>
                    <p>Deteção antecipada de problemas críticos, com notificações automáticas e intervenções
                        preventivas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="why-choose-content">
                <div class="why-choose-text">
                    <h2>Por que escolher a Dualinfor?</h2>
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <h3>Resposta Rápida e Eficiente</h3>
                            <p>Intervenções imediatas para minimizar o impacto nas operações.</p>
                        </div>
                        <div class="benefit-item">
                            <h3>Equipas Certificadas</h3>
                            <p>Técnicos especializados e certificados pelas principais marcas tecnológicas.</p>
                        </div>
                        <div class="benefit-item">
                            <h3>Cobertura Abrangente</h3>
                            <p>Assistência técnica para impressoras, redes, servidores, sistemas POS e outros
                                equipamentos.</p>
                        </div>
                        <div class="benefit-item">
                            <h3>Soluções Personalizadas</h3>
                            <p>Serviços ajustados às exigências específicas de cada cliente.</p>
                        </div>
                        <div class="benefit-item">
                            <h3>Transparência e Confiança</h3>
                            <p>Relatórios completos após cada intervenção, assegurando total transparência e confiança.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="why-choose-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/whychoose.png" alt="Support team">
                </div>
            </div>
        </div>
    </section>

    <!-- formulario Section -->
    <?php
    get_template_part('template-parts/formulario-section', null, array(
        'title' => 'Peça assistência técnica agora',
        'paragraphs' => array(
            'Precisa de suporte para os seus equipamentos ou sistemas? Preencha o formulário abaixo e a nossa equipa entrará em contacto consigo o mais rápido possível.',
            '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
        ),
        'fields_overrides' => array(
            'area' => array(
                'label' => 'Tipo de Equipamento ou Serviço',
                'placeholder' => 'Ex: assistência tecnica, impressoras.',
                'type' => 'text'
            )
        )
    ));
    ?>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <div class="process-header">
                <h2>O nosso processo de assistência técnica</h2>
                <p>Garantimos um serviço rápido e eficiente, desde o primeiro contacto até à resolução completa do problema.</p>
            </div>
            <div class="process-steps">
                <div class="process-step">
                    <h3>Receção do Pedido</h3>
                    <p>Recolha de informações essenciais e avaliação da urgência do problema.</p>
                </div>
                <div class="process-step">
                    <h3>Diagnóstico Técnico</h3>
                    <p>Análise remota ou presencial para detetar e identificar a causa do problema.</p>
                </div>
                <div class="process-step">
                    <h3>Resolução</h3>
                    <p>Intervenção técnica para corrigir falhas e restabelecer o funcionamento normal.</p>
                </div>
                <div class="process-step">
                    <h3>Acompanhamento Pós-Intervenção</h3>
                    <p>Verificação dos resultados e fornecimento de um relatório completo.</p>
                </div>
            </div>
        </div>
    </section>

    </body>

    </html>

    <!-- Equipment Support Section -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-content">
                <div class="equipment-text">
                    <h2>Assistência técnica para todos os seus equipamentos</h2>
                    <p>Os nossos serviços de assistência cobrem toda a linha de produtos e soluções disponibilizados pela Dualinfor.</p>
                </div>

                <!-- This wrapper is for positioning the arrows relative to the carousel -->
                <div class="carousel-wrapper">
                    <div class="equipment-carousel" id="equipmentCarousel">

                        <!-- Card 1 -->
                        <div class="equipment-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/impressoras.png" alt="Impressoras e Multifunções">
                            <h3>Impressoras e Multifunções</h3>
                            <a href="/pagina-impressoras-e-multifuncoes/" class="equipment-link">Saber Mais ›</a>
                        </div>

                        <!-- Card 2 -->
                        <div class="equipment-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/redes.png" alt="Redes e Equipamentos">
                            <h3>Redes Estruturadas e Equipamentos de TI.</h3>
                            <a href="/pagina-redes-e-computing/" class="equipment-link">Saber Mais ›</a>
                        </div>

                        <!-- Card 3 -->
                        <div class="equipment-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/sistemasdefaturacao.png" alt="Sistemas de Faturação e POS">
                            <h3>Sistemas de Faturação e POS</h3>
                            <a href="/pagina-faturacao/" class="equipment-link">Saber Mais ›</a>
                        </div>

                        <!-- Card 4 -->
                        <div class="equipment-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/equipamentos.png" alt="Equipamentos de Videovigilância">
                            <h3>Equipamentos de Videovigilância</h3>
                            <a href="/pagina-videvigilancia/" class="equipment-link">Saber Mais ›</a>
                        </div>

                        <!-- Card 5 -->
                        <div class="equipment-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/software.png" alt="Software de Bilhética">
                            <h3>Software de Bilhética</h3>
                            <a href="/pagina-bilhetica/" class="equipment-link">Saber Mais ›</a>
                        </div>

                        <!-- Card 6 -->
                        <div class="equipment-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/solucoesciberseguranca.png" alt="Soluções de Cibersegurança">
                            <h3>Soluções de Cibersegurança</h3>
                            <a href="/pagina-ciberseguranca/" class="equipment-link">Saber Mais ›</a>
                        </div>

                    </div>
                </div>
            </div>
    </section>

    <!-- Partnerships Section -->
    <section class="partnerships-section-support">
        <div class="container">
            <div class="partnerships-content-support">
                <div class="partnerships-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/estrategias.png" alt="Business handshake">
                </div>
                <div class="partnerships-text">
                    <h2>Parcerias estratégicas para soluções de excelência</h2>
                    <p>Colaboramos com marcas líderes mundiais, como <strong>Epson</strong>, <strong>Lexmark</strong>,
                        <strong>Sharp</strong> e muitas outras, garantindo que os nossos clientes têm sempre acesso à
                        tecnologia mais avançada e fiável.
                    </p>
                    <div class="partner-logos-support">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/espson.png" alt="Epson logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/lexmark.png" alt="Lexmark logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/sharp.png" alt="Sharp logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta-section">
        <div class="container">
            <div class="final-cta-content">
                <div class="final-cta-text">
                    <h2>Dualinfor: Assistência técnica que resolve e garante a sua tranquilidade</h2>
                    <p>Na Dualinfor, sabemos que a continuidade do seu negócio exige soluções rápidas e fiáveis. Por
                        isso, estamos sempre disponíveis para intervir, remotamente ou no local, assegurando que os seus
                        sistemas permaneçam operacionais.</p>
                    <div class="final-cta-buttons">
                        <a href="#formulario" class="btn-primary-support">Peça Assistência Técnica Agora
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/iconebutton.svg" alt="">
                        </a>
                        <a href="#formulario" class="btn-secondary-outline">Contacte-nos para Mais Informações</a>
                    </div>
                </div>
                <div class="final-cta-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-assistenciatecnica/portatil.png" alt="Technical support workspace">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>