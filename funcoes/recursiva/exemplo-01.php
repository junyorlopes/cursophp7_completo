<?php

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//Inicio: diretor comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Inicio: gerente de vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					//Termino: gerente de vendas
				)
			),
			//Termino: gerente comercial
			//Inicio: diretor financeiro
			array(
				'nome_cargo'=>'Diretor Fianceiro',
				'subordinados'=>array(
					//Inicio: gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							//Inicio: supervisor de pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
							//Termino: supervisor de pagamentos
						)
					),
					//Termino: gerente de contas a pagar
					//Inicio: gerente de compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//Inicio: supervisor de suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=>array(
									array(
										'nome_cargo'=>'Auxiliar de Suprimentos'
									)
								)
							)
							//Termino: supervisor de suprimentos
						)
					)
					//Termino: gerente de compras
				)
			)
			//Termino: diretor financeiro
		)

	)
);

function exibe($cargos){

	$html = '<ul>';
	// o '.=' é para acumular dados a variável $html

	foreach ($cargos as $key => $cargo) {
		
		$html .= "<li>";
		
		$html .= $cargo['nome_cargo']; 
		
		if (isset($cargo['subordinados']) && count($cargo['subordinados'])){

			$html .= exibe($cargo['subordinados']);

		}

		$html .= "</li>";
	}

	$html .= '</ul>';

	return $html;
}

echo exibe($hierarquia);

?>