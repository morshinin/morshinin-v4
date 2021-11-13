<?php 
if (!empty($_GET)) {
	if ($_GET['lang'] === 'en') {
	  $data = array(
	  	'head'						=>		array(
	  		'title'					=>		'HTML coding - Mikhail Morshinin'
	  	),
	  	'killer' => array(
	  		'title'					=> 		'HTML coding',
	  		'description'		=>		'Responsive. Valid. In time.'
	  	),
	  	'section-headers'	=>	array(
	  		'portfolio'			=>		'My Portfolio',
	  		'tech'					=>		'Technologies',
				'about'					=>		'About Me'
	  	),
			'section-descriptions'	=>	array(
				'portfolio'			=>		'Don\'t really know what to say in here. But something to say need. So I\'ll say this.',
			'about'					=>		'Self taught HTML coder. Some day I will be real web-developer. And maybe even... a programmer.'
			),
			'tech'						=>	array(
				'stack'					=>		array(
					'title'				=>		'Main stack',
					'list'				=>		array('HTML', 'CSS', 'JavaScript')
				),
				'additional'		=>		array(
					'title'				=>		'Additional',
					'list'				=>		array('PHP', 'MySQL', 'Node.js', 'MongoDB')
				),
				'other'		=>		array(
					'title'				=>		'Other skills',
					'list'				=>		array('Adobe Photoshop', 'Git', 'UX/UI')
				)
			),
			'contact'					=>		array(
				'name'					=>		'Mikhail Morshinin',
				'occupation'		=>		'HTML coder',
				'email'					=>		'inbox@morshinin.ru',
				'phone'					=>		'+7 926 540 5446',
				'phone_link'		=>		'79265405446',
				'avatarUrl'			=>		'img/mikhail-morshinin.jpg',
				'avatarAlt'			=>		'Михаил Моршинин'
			),
			'buttons'					=>		array(
				'load more'			=>		'Load more'
			),
			'footer'					=>		array(
				'copyright'			=>		'Copyright &copy; Mikhail Morshinin'
			),
			'projects'				=>		array(
				'natours'				=>		array(
					'title'				=>		'Natours',
					'desc'				=>		'Landing page',
					'img'					=>		'img/natours-1x.png',
					'alt'					=>		'Screenshot of Natours',
					'siteUrl'			=>		'http://morshinin.ru/natours/index.html',
					'gitUrl'			=>		'https://github.com/morshinin/natours',
					'siteTitle'		=>		'Check out the site',
					'gitTitle'		=>		'Natours on Github'
				),
				'elinker'				=>		array(
					'title'				=>		'E-linker',
					'desc'				=>		'Corporate website',
					'img'					=>		'img/e-linker-1x.png',
					'alt'					=>		'Screenshot of E-linker',
					'siteUrl'			=>		'http://e-linker.ru',
					'siteTitle'		=>		'Check out the site'
				),
				'izzhogi'				=>		array(
					'title'				=>		'Izjogi.net',
					'desc'				=>		'Info website',
					'img'					=>		'img/izzhoga-1x.png',
					'alt'					=>		'Izjogi.net',
					'siteUrl'			=>		'http://morshinin.ru/izzhoga/index.html',
					'siteTitle'		=>		'Check out the site'
				),
				'kraski'				=>		array(
					'title'				=>		'Kraski',
					'desc'				=>		'E-commerce',
					'img'					=>		'img/kraski-1x.png',
					'alt'					=>		'Kraski',
					'siteUrl'			=>		'http://morshinin.ru/kraski/index.html',
					'siteTitle'		=>		'Check out the site'
				),
				'referathelp'				=>		array(
					'title'				=>		'Referathelp',
					'desc'				=>		'Landing page',
					'img'					=>		'img/referathelp-1x.png',
					'alt'					=>		'Referathelp',
					'siteUrl'			=>		'http://a0018013.xsph.ru/',
					'siteTitle'		=>		'Check out the site'
				),
				'mosantiklop'				=>		array(
					'title'				=>		'Mosantiklop',
					'desc'				=>		'Corporate website',
					'img'					=>		'img/mosantiklop-1x.png',
					'alt'					=>		'Mosantiklop',
					'siteUrl'			=>		'http://mosantiklop.ru',
					'siteTitle'		=>		'Check out the site'
				),
				'nikesportwatch'				=>		array(
					'title'				=>		'Nikesportwatch',
					'desc'				=>		'Landing page',
					'img'					=>		'img/nikesportwatch-1x.png',
					'alt'					=>		'Screenshot of Nikesportwatch',
					'siteUrl'			=>		'http://morshinin.ru/nikesportwatch/index.html',
					'siteTitle'		=>		'Check out the site Nikesportwatch',
					'gitUrl'			=>		'https://github.com/morshinin/nikesportwatch',
					'gitTitle'		=>		'Check out Nikesportwatch on Github'
				),
				'autoboks'				=>		array(
					'title'				=>		'Autoboks',
					'desc'				=>		'Corporate website',
					'img'					=>		'img/autoboks-1x.png',
					'alt'					=>		'Autoboks',
					'siteUrl'			=>		'http://autoboks.ru',
					'siteTitle'		=>		'Check out the site'
				),
				'klimatik'				=>		array(
					'title'				=>		'Air conditioner repair',
					'desc'				=>		'Landing page',
					'img'					=>		'img/klimatik-servis-1x.png',
					'alt'					=>		'Air conditioner repair',
					'siteUrl'			=>		'http://morshinin.ru/klimatik-servis/',
					'siteTitle'		=>		'Check out the site',
					'gitUrl'			=>		'https://github.com/morshinin/klimatik-servis',
					'gitTitle'		=>		'Check out on Github'
				),
				'microphone'				=>		array(
					'title'				=>		'Karaoke-microphone',
					'desc'				=>		'Landing page',
					'img'					=>		'img/microphone-1x.png',
					'alt'					=>		'Karaoke-microphone',
					'siteUrl'			=>		'http://morshinin.ru/microphone',
					'siteTitle'		=>		'Check out the site',
					'gitUrl'			=>		'https://github.com/morshinin/microphone',
					'gitTitle'		=>		'Check on Github'
				),
				'dmsto'				=>		array(
					'title'				=>		'СТО',
					'desc'				=>		'Corporate website',
					'img'					=>		'img/dmsto-1x.png',
					'alt'					=>		'СТО',
					'siteUrl'			=>		'http://dmsto.ru',
					'siteTitle'		=>		'Check out the site'
				),
				'stroitelstvo'				=>		array(
					'title'				=>		'House construction',
					'desc'				=>		'Corporate website',
					'img'					=>		'img/stroitelstvo-domov-1x.jpg',
					'alt'					=>		'House construction',
					'siteUrl'			=>		'http://stroitelstvo-domov78.ru',
					'siteTitle'		=>		'Check out the site'
				)
			)
	  ); 
	}
} else {
	$data = array(
		'head'						=>		array(
			'title'					=>		'Вёрстка сайтов - Михаил Моршинин'
		),
		'killer' => array(
			'title'					=> 		'Вёрстка сайтов',
			'description'		=>		'Адаптивно. Валидно. В срок.'
		),
		'section-headers'	=>	array(
			'portfolio'			=>		'Портфолио',
			'tech'					=>		'Технологии',
			'about'					=>		'Обо мне'
		),
		'section-descriptions'	=>	array(
			'portfolio'			=>		'Несколько примеров сверстанных мной сайтов на русском и английском языках.',
			'about'					=>		'Меня зовут Михаил Моршинин, мне 36 лет, живу в Москве. Люблю и умею верстать: валидно, кроссбраузерно и адаптивно. Я ответственно подхожу к работе и для меня очень важно соблюдать сроки её выполнения.'
		),
		'tech'						=>	array(
			'stack'					=>		array(
				'title'				=>		'Основной стек',
				'list'				=>		array('HTML', 'CSS', 'JavaScript')
			),
			'additional'		=>		array(
				'title'				=>		'Дополнительно',
				'list'				=>		array('PHP', 'MySQL', 'Node.js', 'MongoDB')
			),
			'other'		=>		array(
				'title'				=>		'Прочие навыки',
				'list'				=>		array('Adobe Photoshop', 'Git', 'UX/UI')
			)
		),
		'contact'					=>		array(
			'name'					=>		'Михаил Моршинин',
			'occupation'		=>		'HTML верстальщик',
			'email'					=>		'inbox@morshinin.ru',
			'phone'					=>		'+7 926 540 5446',
			'phone_link'		=>		'79265405446',
			'avatarUrl'			=>		'img/mikhail-morshinin.jpg',
			'avatarAlt'			=>		'Михаил Моршинин'
		),
		'buttons'					=>		array(
			'load more'			=>		'Загрузить ещё'
		),
		'footer'					=>		array(
			'copyright'			=>		'Copyright &copy; Михаил Моршинин'
		),
		'projects'				=>		array(
			'natours'				=>		array(
				'title'				=>		'Natours',
				'desc'				=>		'Landing page',
				'img'					=>		'img/natours-1x.png',
				'alt'					=>		'Скриншот Natours',
				'siteUrl'			=>		'http://morshinin.ru/natours/index.html',
				'siteTitle'		=>		'Посмотреть сайт',
				'gitUrl'			=>		'https://github.com/morshinin/natours',
				'gitTitle'		=>		'Посмотреть Natours на Github'
			),
			'elinker'				=>		array(
				'title'				=>		'E-linker',
				'desc'				=>		'Корпоративный сайт',
				'img'					=>		'img/e-linker-1x.png',
				'alt'					=>		'Скриншот E-linker',
				'siteUrl'			=>		'http://e-linker.ru',
				'siteTitle'		=>		'Посмотреть сайт'
			),
			'izzhogi'				=>		array(
				'title'				=>		'Изжоги.нет',
				'desc'				=>		'Информационный сайт',
				'img'					=>		'img/izzhoga-1x.png',
				'alt'					=>		'Изжоги.нет',
				'siteUrl'			=>		'http://morshinin.ru/izzhoga/index.html',
				'siteTitle'		=>		'Посмотреть сайт'
			),
			'kraski'				=>		array(
				'title'				=>		'Kraski',
				'desc'				=>		'Интернет-магазин',
				'img'					=>		'img/kraski-1x.png',
				'alt'					=>		'Kraski',
				'siteUrl'			=>		'http://morshinin.ru/kraski/index.html',
				'siteTitle'		=>		'Посмотреть сайт'
			),
			'referathelp'				=>		array(
				'title'				=>		'Referathelp',
				'desc'				=>		'Landing page',
				'img'					=>		'img/referathelp-1x.png',
				'alt'					=>		'Referathelp',
				'siteUrl'			=>		'http://a0018013.xsph.ru/',
				'siteTitle'		=>		'Посмотреть сайт'
			),
			'mosantiklop'				=>		array(
				'title'				=>		'Mosantiklop',
				'desc'				=>		'Корпоративный сайт',
				'img'					=>		'img/mosantiklop-1x.png',
				'alt'					=>		'Mosantiklop',
				'siteUrl'			=>		'http://mosantiklop.ru',
				'siteTitle'		=>		'Посмотреть сайт'
			),
			'nikesportwatch'				=>		array(
				'title'				=>		'Nikesportwatch',
				'desc'				=>		'Landing page',
				'img'					=>		'img/nikesportwatch-1x.png',
				'alt'					=>		'Скриншот Nikesportwatch',
				'siteUrl'			=>		'http://morshinin.ru/nikesportwatch/index.html',
				'siteTitle'		=>		'Посмотреть сайт Nikesportwatch',
				'gitUrl'			=>		'https://github.com/morshinin/nikesportwatch',
				'gitTitle'		=>		'Посмотреть Nikesportwatch на Github'
			),
			'autoboks'				=>		array(
				'title'				=>		'Autoboks',
				'desc'				=>		'Корпоративный сайт',
				'img'					=>		'img/autoboks-1x.png',
				'alt'					=>		'Autoboks',
				'siteUrl'			=>		'http://autoboks.ru',
				'siteTitle'		=>		'Посмотреть сайт'
			),
			'klimatik'				=>		array(
				'title'				=>		'Ремонт кондиционера',
				'desc'				=>		'Landing page',
				'img'					=>		'img/klimatik-servis-1x.png',
				'alt'					=>		'Ремонт кондиционера',
				'siteUrl'			=>		'http://morshinin.ru/klimatik-servis/',
				'siteTitle'		=>		'Посмотреть сайт',
				'gitUrl'			=>		'https://github.com/morshinin/klimatik-servis',
				'gitTitle'		=>		'Посмотреть на Github'
			),
			'microphone'				=>		array(
				'title'				=>		'Караоке-микрофон',
				'desc'				=>		'Landing page',
				'img'					=>		'img/microphone-1x.png',
				'alt'					=>		'Караоке-микрофон',
				'siteUrl'			=>		'http://morshinin.ru/microphone',
				'siteTitle'		=>		'Посмотреть сайт',
				'gitUrl'			=>		'https://github.com/morshinin/microphone',
				'gitTitle'		=>		'Посмотреть на Github'
			),
			'dmsto'				=>		array(
				'title'				=>		'СТО',
				'desc'				=>		'Корпоративный сайт',
				'img'					=>		'img/dmsto-1x.png',
				'alt'					=>		'СТО',
				'siteUrl'			=>		'http://dmsto.ru',
				'siteTitle'		=>		'Посмотреть сайт'
			),
			'stroitelstvo'				=>		array(
				'title'				=>		'Строительство домов',
				'desc'				=>		'Корпоративный сайт',
				'img'					=>		'img/stroitelstvo-domov-1x.jpg',
				'alt'					=>		'Строительство домов',
				'siteUrl'			=>		'http://stroitelstvo-domov78.ru',
				'siteTitle'		=>		'Посмотреть сайт'
			)
		)
	); 
}