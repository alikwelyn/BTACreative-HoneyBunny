<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'bta-x1';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	for($n=12;$n<=100;$n+=1) { 
		$font_sizes[$n.'px'] = $n.'px'; 
	} 
	
	$section_text = array(
		1 => array(
		  'imagem_curso'		=> '//placeimg.com/280/130/tech',
		  'nome_curso'		=> 'Lorem Ipsum',
		  'texto_curto'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		  'valor_curso'			=> 'GRATUITO',
		  'link_curso'			=> '#',
		),
		2 => array(
		  'imagem_curso'		=> '//placeimg.com/280/130/tech',
		  'nome_curso'		=> 'Lorem Ipsum',
		  'texto_curto'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		  'valor_curso'			=> 'GRATUITO',
		  'link_curso'			=> '#',
		),
		3 => array(
		  'imagem_curso'		=> '//placeimg.com/280/130/tech',
		  'nome_curso'		=> 'Lorem Ipsum',
		  'texto_curto'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		  'valor_curso'			=> 'GRATUITO',
		  'link_curso'			=> '#',
		),
		4 => array(
		  'imagem_curso'		=> '//placeimg.com/280/130/tech',
		  'nome_curso'		=> 'Lorem Ipsum',
		  'texto_curto'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		  'valor_curso'			=> 'GRATUITO',
		  'link_curso'			=> '#',
		),
		5 => array(
		  'imagem_curso'		=> '//placeimg.com/280/130/tech',
		  'nome_curso'		=> 'Lorem Ipsum',
		  'texto_curto'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		  'valor_curso'			=> 'GRATUITO',
		  'link_curso'			=> '#',
		),
		6 => array(
		  'imagem_curso'		=> '//placeimg.com/280/130/tech',
		  'nome_curso'		=> 'Lorem Ipsum',
		  'texto_curto'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		  'valor_curso'			=> 'GRATUITO',
		  'link_curso'			=> '#',
		),
		7 => array(
		  'imagem_curso'		=> '//placeimg.com/280/130/tech',
		  'nome_curso'		=> 'Lorem Ipsum',
		  'texto_curto'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		  'valor_curso'			=> 'GRATUITO',
		  'link_curso'			=> '#',
		),
		8 => array(
		  'imagem_curso'		=> '//placeimg.com/280/130/tech',
		  'nome_curso'		=> 'Lorem Ipsum',
		  'texto_curto'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		  'valor_curso'			=> 'GRATUITO',
		  'link_curso'			=> '#',
		),
		9 => array(
		  'imagem_curso'		=> '//placeimg.com/280/130/tech',
		  'nome_curso'		=> 'Lorem Ipsum',
		  'texto_curto'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		  'valor_curso'			=> 'GRATUITO',
		  'link_curso'			=> '#',
		),
		10 => array(
		  'imagem_curso'		=> '//placeimg.com/280/130/tech',
		  'nome_curso'		=> 'Lorem Ipsum',
		  'texto_curto'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		  'valor_curso'			=> 'GRATUITO',
		  'link_curso'			=> '#',
		),
		11 => array(
		  'imagem_curso'		=> '//placeimg.com/280/130/tech',
		  'nome_curso'		=> 'Lorem Ipsum',
		  'texto_curto'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		  'valor_curso'			=> 'GRATUITO',
		  'link_curso'			=> '#',
		),
		12 => array(
		  'imagem_curso'		=> '//placeimg.com/280/130/tech',
		  'nome_curso'		=> 'Lorem Ipsum',
		  'texto_curto'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		  'valor_curso'			=> 'GRATUITO',
		  'link_curso'			=> '#',
		)
		);

		$section_text2 = array(
			1 => array(
			  'imagem_aluno'		    => 'https://placeimg.com/280/130/people',
			  'nome_aluno'		      => 'Lorem Ipsum',
			  'profissao_aluno'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et.',
			  'texto_curto2'			    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et. Integer nec neque egestas lectus porttitor varius quis vitae purus. Vestibulum consequat dolor risus, at lacinia nunc tincidunt non. Curabitur vel lobortis quam.',
			  'link_depo'			      => '#',
			  'thumbnaildepo'		    => 'https://placeimg.com/280/130/people',
			),
			2 => array(
			  'imagem_aluno'		    => 'https://placeimg.com/280/130/people',
			  'nome_aluno'		      => 'Lorem Ipsum',
			  'profissao_aluno'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et.',
			  'texto_curto2'			    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et. Integer nec neque egestas lectus porttitor varius quis vitae purus. Vestibulum consequat dolor risus, at lacinia nunc tincidunt non. Curabitur vel lobortis quam.',
			  'link_depo'			      => '#',
			  'thumbnaildepo'		    => 'https://placeimg.com/280/130/people',
			),
			3 => array(
			  'imagem_aluno'		    => 'https://placeimg.com/280/130/people',
			  'nome_aluno'		      => 'Lorem Ipsum',
			  'profissao_aluno'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et.',
			  'texto_curto2'			    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et. Integer nec neque egestas lectus porttitor varius quis vitae purus. Vestibulum consequat dolor risus, at lacinia nunc tincidunt non. Curabitur vel lobortis quam.',
			  'link_depo'			      => '#',
			  'thumbnaildepo'		    => 'https://placeimg.com/280/130/people',
			),
			4 => array(
			  'imagem_aluno'		    => 'https://placeimg.com/280/130/people',
			  'nome_aluno'		      => 'Lorem Ipsum',
			  'profissao_aluno'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et.',
			  'texto_curto2'			    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et. Integer nec neque egestas lectus porttitor varius quis vitae purus. Vestibulum consequat dolor risus, at lacinia nunc tincidunt non. Curabitur vel lobortis quam.',
			  'link_depo'			      => '#',
			  'thumbnaildepo'		    => 'https://placeimg.com/280/130/people',
			),
			5 => array(
			  'imagem_aluno'		    => 'https://placeimg.com/280/130/people',
			  'nome_aluno'		      => 'Lorem Ipsum',
			  'profissao_aluno'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et.',
			  'texto_curto2'			    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et. Integer nec neque egestas lectus porttitor varius quis vitae purus. Vestibulum consequat dolor risus, at lacinia nunc tincidunt non. Curabitur vel lobortis quam.',
			  'link_depo'			      => '#',
			  'thumbnaildepo'		    => 'https://placeimg.com/280/130/people',
			),
			6 => array(
			  'imagem_aluno'		    => 'https://placeimg.com/280/130/people',
			  'nome_aluno'		      => 'Lorem Ipsum',
			  'profissao_aluno'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et.',
			  'texto_curto2'			    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et. Integer nec neque egestas lectus porttitor varius quis vitae purus. Vestibulum consequat dolor risus, at lacinia nunc tincidunt non. Curabitur vel lobortis quam.',
			  'link_depo'			      => '#',
			  'thumbnaildepo'		    => 'https://placeimg.com/280/130/people',
			),
			7 => array(
			  'imagem_aluno'		    => 'https://placeimg.com/280/130/people',
			  'nome_aluno'		      => 'Lorem Ipsum',
			  'profissao_aluno'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et.',
			  'texto_curto2'			    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et. Integer nec neque egestas lectus porttitor varius quis vitae purus. Vestibulum consequat dolor risus, at lacinia nunc tincidunt non. Curabitur vel lobortis quam.',
			  'link_depo'			      => '#',
			  'thumbnaildepo'		    => 'https://placeimg.com/280/130/people',
			),
			8 => array(
			  'imagem_aluno'		    => 'https://placeimg.com/280/130/people',
			  'nome_aluno'		      => 'Lorem Ipsum',
			  'profissao_aluno'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et.',
			  'texto_curto2'			    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et. Integer nec neque egestas lectus porttitor varius quis vitae purus. Vestibulum consequat dolor risus, at lacinia nunc tincidunt non. Curabitur vel lobortis quam.',
			  'link_depo'			      => '#',
			  'thumbnaildepo'		    => 'https://placeimg.com/280/130/people',
			),
			9 => array(
			  'imagem_aluno'		    => 'https://placeimg.com/280/130/people',
			  'nome_aluno'		      => 'Lorem Ipsum',
			  'profissao_aluno'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et.',
			  'texto_curto2'			    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et. Integer nec neque egestas lectus porttitor varius quis vitae purus. Vestibulum consequat dolor risus, at lacinia nunc tincidunt non. Curabitur vel lobortis quam.',
			  'link_depo'			      => '#',
			  'thumbnaildepo'		    => 'https://placeimg.com/280/130/people',
			),
			10 => array(
			  'imagem_aluno'		    => 'https://placeimg.com/280/130/people',
			  'nome_aluno'		      => 'Lorem Ipsum',
			  'profissao_aluno'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et.',
			  'texto_curto2'			    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et. Integer nec neque egestas lectus porttitor varius quis vitae purus. Vestibulum consequat dolor risus, at lacinia nunc tincidunt non. Curabitur vel lobortis quam.',
			  'link_depo'			      => '#',
			  'thumbnaildepo'		    => 'https://placeimg.com/280/130/people',
			),
			11 => array(
			  'imagem_aluno'		    => 'https://placeimg.com/280/130/people',
			  'nome_aluno'		      => 'Lorem Ipsum',
			  'profissao_aluno'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et.',
			  'texto_curto2'			    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et. Integer nec neque egestas lectus porttitor varius quis vitae purus. Vestibulum consequat dolor risus, at lacinia nunc tincidunt non. Curabitur vel lobortis quam.',
			  'link_depo'			      => '#',
			  'thumbnaildepo'		    => 'https://placeimg.com/280/130/people',
			),
			12 => array(
			  'imagem_aluno'		    => 'https://placeimg.com/280/130/people',
			  'nome_aluno'		      => 'Lorem Ipsum',
			  'profissao_aluno'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et.',
			  'texto_curto2'			    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim nibh purus, ut fringilla risus faucibus et. Integer nec neque egestas lectus porttitor varius quis vitae purus. Vestibulum consequat dolor risus, at lacinia nunc tincidunt non. Curabitur vel lobortis quam.',
			  'link_depo'			      => '#',
			  'thumbnaildepo'		    => 'https://placeimg.com/280/130/people',
			)
			);

		

		$options = array();
		$wp_editor_settings = array(
			'wpautop' => true, // Default
			'textarea_rows' => 15,
			'tabindex' => '',
			'editor_css' => '',
			'editor_class' => '',
			'teeny' => true,
			'dfw' => true,
			'quicktags' => true,
			'tinymce' => array( 
				'plugins' => 'fullscreen, wordpress, wplink, textcolor'
			));

		// Pull all the pages into an array
		$options_pages = array();
		$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
		$options_pages[''] = 'Select a page:';
		foreach ($options_pages_obj as $page) {
			$options_pages[$page->ID] = $page->post_title;
		}



    // 1

    $options[] = array("name" => "1. SERVIÇOS", "type" => "heading");

	$options[] = array(
		'name' => __( 'Texto Creche', 'theme-textdomain' ),
		'id' => 'texto_creche',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	$options[] = array( 
		'name' => __('Link Creche', 'theme-textdomain'),  
		'id' => 'link_creche', 
		'std' => '',
		'type' => 'text'
	); 

	/*$options[] = array(
		'name' => __( 'Selecione a Página', 'theme-textdomain' ),
		'id' => 'página_creche',
		'type' => 'select',
		'options' => $options_pages
	);*/

	$options[] = array(
		'name' => __( 'Texto Hotel', 'theme-textdomain' ),
		'id' => 'texto_hotel',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	$options[] = array( 
		'name' => __('Link Hotel', 'theme-textdomain'),  
		'id' => 'link_hotel', 
		'std' => '',
		'type' => 'text'
	); 

	$options[] = array(
		'name' => __( 'Texto Banho e Tosa', 'theme-textdomain' ),
		'id' => 'texto_bet',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	$options[] = array( 
		'name' => __('Link Banho e Tosa', 'theme-textdomain'),  
		'id' => 'link_bet', 
		'std' => '',
		'type' => 'text'
	); 

	$options[] = array(
		'name' => __( 'Texto Consultório', 'theme-textdomain' ),
		'id' => 'texto_consultorio',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	$options[] = array( 
		'name' => __('Link Consultório', 'theme-textdomain'),  
		'id' => 'link_consultorio', 
		'std' => '',
		'type' => 'text'
	); 

    // 2

    $options[] = array("name" => "2. QUEM SOMOS", "type" => "heading");

	$options[] = array(
		'name' => __( 'Texto Quem Somos', 'theme-textdomain' ),
		'id' => 'texto_qs',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

    // 3

    $options[] = array("name" => "3. AVISOS", "type" => "heading");

	$options[] = array(
		'name' => __( 'Texto Aviso 1', 'theme-textdomain' ),
		'id' => 'texto_av1',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	$options[] = array(
		'name' => __( 'Texto Aviso 2', 'theme-textdomain' ),
		'id' => 'texto_av2',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	// 2

	$options[] = array("name" => "3. NOSSOS CURSOS", "type" => "heading");

	$options[] = array( 
	  'name' => __('Número de Cursos', 'theme-textdomain'),  
	  'desc' => __('', 'theme-textdomain'),  
	  'id' => 'numero_cursos',  
	  'type' => 'select',  
	  'std' => '3',  
	  'options' => array_combine(range(1, 12), range(1, 12)) ); 
  
	$numsecs = of_get_option( 'numero_cursos', 12 ); 
	
	for( $n=1; $n<=$numsecs; $n++) { 

		$options[] = array( 
			'desc' => sprintf("<h3>Curso ".$n."</h3>", 'theme-textdomain'),  
			'class' => 'toggle_title2',  
			'type' => 'info');     

		$options[] = array( 
			'name' => __('Imagem do Curso', 'theme-textdomain'),  
			'id' => 'imagemcurso'.$n,  
			'std' => ( ( isset($section_text[$n]['imagem_curso']) ) ? $section_text[$n]['imagem_curso'] : '' ),  
			'type' => 'upload'); 

		$options[] = array( 
			'name' => __('Nome do Curso', 'theme-textdomain'),  
			'id' => 'nomecurso'.$n,  
			'std' => ( ( isset($section_text[$n]['nome_curso']) ) ? $section_text[$n]['nome_curso'] : '' ),  
			'type' => 'text'); 

		$options[] = array( 
			'name' => __('Texto Curto', 'theme-textdomain'),  
			'id' => 'textocurto'.$n,  
			'std' => ( ( isset($section_text[$n]['texto_curto']) ) ? $section_text[$n]['texto_curto'] : '' ),  
			'type' => 'text'); 
	
		$options[] = array( 
			'name' => __('Valor do Curso', 'theme-textdomain'),  
			'id' => 'valorcurso'.$n,  
			'std' => ( ( isset($section_text[$n]['valor_curso']) ) ? $section_text[$n]['valor_curso'] : '' ),  
			'type' => 'text'); 

			$options[] = array( 
			'name' => __('Link do Curso', 'theme-textdomain'),  
			'id' => 'linkcurso'.$n,  
			'std' => ( ( isset($section_text[$n]['link_curso']) ) ? $section_text[$n]['link_curso'] : '' ),  
			'type' => 'text'); 
	} 

    // 4

    $options[] = array("name" => "4. DESAFIOS", "type" => "heading");

    $options[] = array(
		'name' => __( 'Imagem Desafios', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'img_desafios',
		'type' => 'upload'
	);
	
	$options[] = array(
		'name' => __( 'Texto Sobre', 'theme-textdomain' ),
		'id' => 'texto_desafios',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	$options[] = array( 
		'name' => __('Cursos Avaliados', 'theme-textdomain'),  
		'id' => 'cursos_avaliados', 
		'std' => '50+',
		'type' => 'text'
	); 

	$options[] = array( 
		'name' => __('Horas de Conteúdos', 'theme-textdomain'),  
		'id' => 'horas_conteudos', 
		'std' => '15+',
		'type' => 'text'
	); 

	$options[] = array( 
		'name' => __('Anos de Experiência', 'theme-textdomain'),  
		'id' => 'anos_exp', 
		'std' => '10+',
		'type' => 'text'
	); 


	// 5

	$options[] = array("name" => "5. NOSSOS ALUNOS", "type" => "heading");

	$options[] = array( 
	  'name' => __('Nossos Alunos', 'theme-textdomain'),  
	  'desc' => __('', 'theme-textdomain'),  
	  'id' => 'numero_alunos',  
	  'type' => 'select',  
	  'std' => '3',  
	  'options' => array_combine(range(1, 12), range(1, 12)) ); 
  
	$numsecs = of_get_option( 'numero_alunos', 12 ); 
	
	for( $n=1; $n<=$numsecs; $n++) { 

		$options[] = array( 
			'desc' => sprintf("<h3>Alunos ".$n."</h3>", 'theme-textdomain'),  
			'class' => 'toggle_title2',  
			'type' => 'info');     

		$options[] = array( 
			'name' => __('Imagem do Aluno', 'theme-textdomain'),  
			'id' => 'imagemaluno'.$n,  
			'std' => ( ( isset($section_text2[$n]['imagem_aluno']) ) ? $section_text2[$n]['imagem_aluno'] : '' ),  
			'type' => 'upload'); 

		$options[] = array( 
			'name' => __('Nome do Aluno', 'theme-textdomain'),  
			'id' => 'nomealuno'.$n,  
			'std' => ( ( isset($section_text2[$n]['nome_aluno']) ) ? $section_text2[$n]['nome_aluno'] : '' ),  
			'type' => 'text'); 

		$options[] = array( 
			'name' => __('Profissão do Aluno', 'theme-textdomain'),  
			'id' => 'profissaoaluno'.$n,  
			'std' => ( ( isset($section_text2[$n]['profissao_aluno']) ) ? $section_text2[$n]['profissao_aluno'] : '' ),  
			'type' => 'text'); 
	
		$options[] = array( 
			'name' => __('Texto Curto', 'theme-textdomain'),  
			'id' => 'textocurto2'.$n,  
			'std' => ( ( isset($section_text2[$n]['texto_curto2']) ) ? $section_text2[$n]['texto_curto2'] : '' ),  
			'type' => 'text'); 

			$options[] = array( 
			'name' => __('Link do Depoimento', 'theme-textdomain'),  
			'id' => 'linkdepo'.$n,  
			'std' => ( ( isset($section_text2[$n]['link_depo']) ) ? $section_text2[$n]['link_depo'] : '' ),  
			'type' => 'text'); 

		$options[] = array( 
			'name' => __('Thumbnail do Vídeo de Depoimentos', 'theme-textdomain'),  
			'id' => 'thumbnaildepo'.$n,  
			'std' => ( ( isset($section_text2[$n]['thumbnaildepo']) ) ? $section_text2[$n]['thumbnaildepo'] : '' ),  
			'type' => 'upload'); 
	} 

	// 5

    $options[] = array("name" => "5. MÉTODO", "type" => "heading");

	$options[] = array( 
		'name' => __('Seu Objetivo', 'theme-textdomain'),  
		'id' => 'seu_objetivo', 
		'std' => 'Descubra como você vai financiar seus estudos.',
		'type' => 'text'
	); 

	$options[] = array( 
		'name' => __('Plano Financeiro', 'theme-textdomain'),  
		'id' => 'plano_financeiro', 
		'std' => 'Quais são suas qualidades e limitações?',
		'type' => 'text'
	); 

	$options[] = array( 
		'name' => __('Self-Assentment', 'theme-textdomain'),  
		'id' => 'self_assentment', 
		'std' => 'Em que área você gostaria de trabalhar nos EUA?',
		'type' => 'text'
	); 

	$options[] = array( 
		'name' => __('Plano de Sucesso', 'theme-textdomain'),  
		'id' => 'plano_sucesso', 
		'std' => 'Como você vai se tornar um forte candidato.',
		'type' => 'text'
	); 

	$options[] = array( 
		'name' => __('Execução', 'theme-textdomain'),  
		'id' => 'execucao', 
		'std' => 'Colocar em prática os planejamentos.',
		'type' => 'text'
	); 

	// 5

    $options[] = array("name" => "5. UNIDADES", "type" => "heading");

	$options[] = array(
		'name' => __( 'Unidade Moema: Funcionamento', 'theme-textdomain' ),
		'id' => 'unmo_fnc',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Unidade Moema: Telefone', 'theme-textdomain' ),
		'id' => 'unmo_tel',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Unidade Moema: Rua', 'theme-textdomain' ),
		'id' => 'unmo_end',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Unidade Moema: Estado', 'theme-textdomain' ),
		'id' => 'unmo_es',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Unidade Moema: CEP', 'theme-textdomain' ),
		'id' => 'unmo_cep',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Unidade Jd Marajoara: Funcionamento', 'theme-textdomain' ),
		'id' => 'unjm_fnc',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Unidade Jd Marajoara: Telefone', 'theme-textdomain' ),
		'id' => 'unjm_tel',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Unidade Jd Marajoara: Rua', 'theme-textdomain' ),
		'id' => 'unjm_end',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Unidade Moema: Estado', 'theme-textdomain' ),
		'id' => 'unjm_es',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Unidade Moema: CEP', 'theme-textdomain' ),
		'id' => 'unjm_cep',
		'std' => '',
		'type' => 'text'
	);


            
    // 6

    $options[] = array("name" => "6. INFORMAÇÕES DE CONTATO", "type" => "heading");

	$options[] = array(
		'name' => __( 'Link facebook', 'theme-textdomain' ),
		'id' => 'link_facebook',
		'std' => 'https://facebook.com',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Link instagram', 'theme-textdomain' ),
		'id' => 'link_instagram',
		'std' => 'https://instagram.com',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Whatsapp', 'theme-textdomain' ),
		'id' => 'whatsapp',
		'std' => '11012345678',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Email', 'theme-textdomain' ),
		'id' => 'email',
		'std' => 'contato@dominio.com.br',
		'type' => 'text'
	);

	return $options;

}