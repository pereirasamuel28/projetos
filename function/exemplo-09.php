<?php 

$hierarquia = array(
	'nome_cargo'=>'CEO',
	'subordinados'=>array(
		//Inicio Diretor Comercial
		array(
			'nome_cargo' => 'Diretor Comercial',
			'subordinados'=>array(
				array(
					//Inicio Gerente de Vendas
					'nome_cargo' => 'Gerente de Vendas'
					//Termino Gerente de Vendas
				)
			)
		),	
		//Termino Diretor Comercial
		//Inicio Diretor Financeiro
		array(
			'nome_cargo' => 'Diretor Financeiro',
			'subordinados' => array(
				array(
					//Inicio Gerente de Contas a pagar
					'nome_cargo' => 'Gerente de Contas a pagar',
					'subordinados' => array(
					array(	
						//Inicio Supervisor de Pagamentos
						'nome_cargo' => 'Supervisor de Pagamentos'
						//Termino Supervisor de Pagamentos
					)
				)		
				),
				//Termino Gerente de Contas a pagar
				//Inicio Gerente de Contas de Compras
				array(
					'nome_cargo' => 'Gerente de Compras',
					'subordinados' => array(
						array(
							//Inicio do supervisor de compras
							'nome_cargo' => 'Supervisor de Compras'
							//Termino do supervisor de compras
						)
					)
				)	
				//Termino Gerente  de Compras
			)
			
		)
		//Termino do Diretor Financeiro	
	)

);


function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		
		$html .= '<li>';

		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ){

			$html .= exibe($cargo['subordinados']);
		};

		$html .= '</li>';

	};

	$html .= '</ul>';

	return $html;

};

echo exibe($hierarquia);

?>